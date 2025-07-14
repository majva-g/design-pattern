<?php
class LegacyLogger{
    public function writeLog($severity,$text)
    {
        echo "[[$severity]] $text\n";
    }
}

/////////////////////////////////////////////////////
interface LoggerInterface{
    public function log(string $level,string $message);
}

//////////////////////////////////////////////////////

class LoggerAdapter implements LoggerInterface{
    private $legacyLogger;

    public function __construct(LegacyLogger $legacyLogger)
    {
        $this->legacyLogger = $legacyLogger;
    }

    public function log(string $level, string $message)
    {
        $this->legacyLogger->writeLog(strtoupper($level),$message);
    }
}
////////////////////////////////////////

function process(LoggerInterface $logger){
    $logger->log("info","processing started");
    $logger->log("warning","something might be wrong");
    $logger->log("error","something went wrong");
}

$legacy = new LegacyLogger;
$adapter = new LoggerAdapter($legacy);
process($adapter);