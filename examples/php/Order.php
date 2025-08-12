<?php
abstract class OrderHandler{
    protected ?OrderHandler $nextHandler = null;

    public function setNext(OrderHandler $handler):OrderHandler{
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(float $orderAmount):string{
        if($this->nextHandler){
            return $this->nextHandler->handle($orderAmount);
        }
        return "Order rejected.";
    }
}

class SmallOrderHandler extends OrderHandler{

    public function handle(float $orderAmount):string{
        if($orderAmount<=100){
            return "Small order handler proceed {$orderAmount}";
        }
       return parent::handle($orderAmount);
    }
}

class MediumOrderHandler extends OrderHandler{

    public function handle(float $orderAmount):string{
        if($orderAmount>100 && $orderAmount<=500){
            return "Medium order handler proceed {$orderAmount}";
        }
       return parent::handle($orderAmount);
    }
}

class LargeOrderHandler extends OrderHandler{

    public function handle(float $orderAmount):string{
        if($orderAmount>500 ){
            return "Large order handler proceed {$orderAmount}";
        }
       return parent::handle($orderAmount);
    }
}


////////////////////////////////////////////////
$small = new SmallOrderHandler();
$medium = new MediumOrderHandler();
$large = new LargeOrderHandler();

$small->setNext($medium)->setNext($large);

$orders = [50,150,600,1000];

foreach ($orders as $order) {
    echo $small->handle($order).PHP_EOL;
}