<?php

abstract class Handler{
    protected ?Handler $nextHandler = null;

    public function setNext(Handler $handler):Handler{
        $this->nextHandler = $handler;
        return $handler;
    }

    public  function handle(int $request):string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return "Request rejected. Nobody can accept this value";
    }
}

////////////////////////////////////////////////////////////////////////////////

class TeamLead extends Handler{

    public function handle(int $request):string{
        if ($request<=5) {
            return "Team Lead accepted request {$request}";
        }
        return parent::handle($request);
    }
}

class Manager extends Handler{

    public function handle(int $request):string{
        if ($request<=10) {
            return "Manager accepted request {$request}";
        }
        return parent::handle($request);
    }
}

class Director extends Handler{

    public function handle(int $request):string{
        if ($request<=20) {
            return "Director accepted request {$request}";
        }
        return parent::handle($request);
    }
}

////////////////////////////////////////////////////////////////

$teamLead = new TeamLead();
$manager = new Manager();
$director = new Director();

$teamLead->setNext($manager)->setNext($director);

$days = [3,8,15,25];

foreach($days as $day)
{
    echo $teamLead->handle($day) . PHP_EOL;
}