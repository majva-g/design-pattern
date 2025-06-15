<?php
class Sample {

    public function method(){
        if (true) {
            // do this
        }
        elseif(true){
            //do this
        }
        elseif(true){
            //do this
        }
        elseif(true){
            //do this
        }
        elseif(true){
            //do this
        }
    }
}

interface Algorithm{
    function doSomething();
}
class Strategy{
    private Algorithm $algorithm;

    public function __construct(Algorithm $algorithm)
    {
        $this->algorithm = $algorithm;
    }

    public function setAlgorithm(Algorithm $algorithm)
    {
        $this->algorithm = $algorithm;
    }

    public function method(){
        $this->algorithm->doSomething();
    }
    
}