<?php

interface ExchangeRateService{
    public function getDollarRate():float;
}

class RealExchangeRateService implements ExchangeRateService
{
    public function getDollarRate():float{
        echo "fetching rate from real API ... \n";
        return 85000 * rand(1,100);
    }
}

class ProxyExchangeRateService implements ExchangeRateService{
    private RealExchangeRateService $realService;
    private ?float $cacheRate = null;
    private ?int $lastFetchedAt = null;
    private int $cacheTTL= 10; // seconds

    public function __construct()
    {
        $this->realService = new RealExchangeRateService();
    }
    public function getDollarRate():float{
        $now = time();
        if($this->cacheRate === null || ($now - $this->lastFetchedAt) > $this->cacheTTL)
        {
            echo "Cache expired or empty. Fetching fresh data ...\n";
            $this->cacheRate = $this->realService->getDollarRate();
            $this->lastFetchedAt = $now;
        }
        else{
            echo "Using Cached value ... \n";
        }
        return $this->cacheRate;
    }
}

//////////////////////////////
function testCache(){
    $service = new ProxyExchangeRateService();

    echo "First request \n";
    echo "Dollar rate :" . $service->getDollarRate(). "\n";


    sleep(2);
    echo "Second request (should use cache) \n";
    echo "Dollar rate :" . $service->getDollarRate(). "\n";

    sleep(11);
    echo "Third request (cache expired) \n";
    echo "Dollar rate :" . $service->getDollarRate(). "\n";
}
///////////////////
testCache();