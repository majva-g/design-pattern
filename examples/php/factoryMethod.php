<?php

interface Service{
   function checkFeasibility();
}

class OWA implements Service{
    function checkFeasibility(){
        //do something
    }
}
class FTTH implements Service{
    function checkFeasibility(){
        //do something
    }
}

class ADSL implements Service{
    function checkFeasibility(){
        //do something
    }
}

///////////////////////////////////////////////

$subscriberService='owa';
$service;

switch ($subscriberService) {
    case 'owa':
        $service =new OWA;
        break;
        case 'ftth':
            $service =new FTTH;
            break;
            case 'adsl':
                $service =new ADSL;
                break;
}
$service->checkFeasibility();
//........................................
class SimpleServiceFactory{

    static function createService( $subscriberService)
    {

    switch ($subscriberService) {
        case 'owa':
         return new OWA;
          break;
        case 'ftth':
            return new FTTH;
            break;
        case 'adsl':
                return new ADSL;
                break;
}
    }
}
////////////////////////////////////////////////////////
interface ServiceFactory{
    function create();
}
class OWAFactory implements ServiceFactory{
    function create(){
        new OWA();
    }
}

class FTTHFactory implements ServiceFactory{
    function create(){
        new FTTH();
    }
}

class ADSLFactory implements ServiceFactory{
    function create(){
        new ADSL();
    }
}

//..............................................
function clientCode(ServiceFactory $serviceFactory)
{
    $service= $serviceFactory->create();
    $service->checkFeasibility();
}

clientCode(new ADSLFactory);
//...................................................
