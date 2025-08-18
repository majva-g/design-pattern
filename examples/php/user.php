<?php

interface AccountState{
    public function login();
}

class ActiveState implements AccountState{

    public function login()
    {
        echo "Welcome\n";
    }
}

class SuspendedState implements AccountState{
    public function login()
    {
        echo "Your account has been suspended, Please call support\n";
    }
}

class closedState implements AccountState{

    public function login()
    {
        echo "Your account is closed. can not login\n";
    }
}

class Account{
    private $activeState;
    private $suspendedState;
    private $closedState;

    private $state;

    public function __construct()
    {
        $this->activeState = new ActiveState();
        $this->suspendedState = new SuspendedState();
        $this->closedState = new closedState();

        $this->state = $this->activeState;
    }

    public function setState(AccountState $state)
    {
        $this->state = $state;
    }

    public function getActiveState()
    {
        return $this->activeState;
    }

        public function getSuspendedState()
    {
        return $this->suspendedState;
    }

        public function getClosedState()
    {
        return $this->closedState;
    }

    public function login()
    {
        $this->state->login();
    }
}


/////////////////////////////////////////

$account = new Account();

$account->login();

$account->setState($account->getSuspendedState());
$account->login();

$account->setState($account->getClosedState());
$account->login();

$account->setState($account->getActiveState());
$account->login();