<?php
interface BankService{
    public function transfer(string $from,string $to,float $amount):void;
}

class RealBankService implements BankService{
    public function transfer(string $from , string $to , float $amount):void
    {
        echo "Transferring {$amount} from {$from} to {$to}";
        // فرض کن اینجا عملیات واقعی بانکی انجام میشود
    }
}

class LoggingBankServiceProxy implements BankService{
    private RealBankService $realService;

    public function __construct()
    {
        $this->realService = new RealBankService();
    }

    public function transfer(string $from , string $to , float $amount):void
    {
        $this->log("Transfer request from {$from} to {$to}, amount : {$amount}");
        $this->realService->transfer($from,$to,$amount);
    }

    private function log(string $message)
    {
        //log to DB or File or Sentry or ....
        echo "[LOG] " . date('Y-m-d H:i:s') . "- {$message} \n";
    }
}
////////////////////////////////////////

$service = new LoggingBankServiceProxy();
$service->transfer("Mostafa","Saleh",1000);
