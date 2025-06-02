<?php
interface LoggerInterface{
    function log($level,$message,$context);
    function error($message,$context);
    function info($message,$context);
    function debug($message,$context);
    function warning($message,$context);
}

abstract class AbstractLogger implements LoggerInterface
{
     abstract function log($level,$message,$context);
     function info($message,$context){
        $this->log('info',$message,$context);
     }

     function error($message,$context){
        $this->log('info',$message,$context);
     }

     function warning($message,$context){
        $this->log('info',$message,$context);
     }

     function debug($message,$context){
        $this->log('info',$message,$context);
     }

}

class StdoutLogger extends AbstractLogger{
     function log($level,$message,$context){
        //log to stdout
    }
}

class FileLogger extends AbstractLogger{
    function log($level,$message,$context){
       //log to file
   }
}

interface LoggerFactoryInterface{
    function create();
    function name();
}

class StdoutFactory implements LoggerFactoryInterface
{
    function create(){
        return new StdoutLogger;
    }
    function name(){
        return 'stdout';
    }
}

class FileFactory implements LoggerFactoryInterface
{
    function create(){
        return new FileLogger;
    }
    function name(){
        return 'file';
    }
}

class MultiLogger extends AbstractLogger {
   public  $loggers=[];
   function __construct($loggers)
   {
        $this->loggers=$loggers;
   }
    function log($level,$message,$context){
        for ($i=0; $i <count($this->loggers) ; $i++) { 
            $this->loggers[$i]->log($level,$message,$context);
        }
    }
}

class LoggerFactory{
   private static $factories=[];

   static function register (LoggerFactoryInterface $factory)
   {
        self::$factories[$factory->name()] = $factory;
   }

   static function create ($names)
   {
    self::defaultRegister();
        $loggers =[];
        foreach ($names as $name) {
            if (self::$factories[$name]) {
                throw new Exception('logger not found');
            }

            $loggers[] = self::$factories[$name]->create(); 
        }
      return  count($loggers)===1 ? $loggers[0] : new MultiLogger($loggers) ;
   }

   private static function defaultRegister ()
   {
    self::$factories['stdout'] = new StdoutFactory;
    self::$factories['file'] = new FileFactory;
   }
}

//..............................................................


