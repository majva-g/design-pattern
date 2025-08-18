<?php
 interface TicketState{
    public function startProgress();
    public function resolve();
    public function close();
}

class OpenState implements TicketState{
    private $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }
    public function startProgress(){
        echo "Starting progress\n";
        $this->ticket->setState($this->ticket->getInProgressState());
    }
    public function resolve(){
        echo "Should progress first \n";
    }
    public function close(){
                echo "closed\n";
        $this->ticket->setState($this->ticket->getClosedState()); 
    }
}


class InProgressState implements TicketState{
    private $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }
    public function startProgress(){
        echo "Ticket is already in progress \n";
     
    }
    public function resolve(){
        echo "Ticket resolved successfully\n";
           $this->ticket->setState($this->ticket->getResolvedState());
    }
    public function close(){
        echo "closed\n";
        $this->ticket->setState($this->ticket->getClosedState()); 
    }
}

class ResolvedState implements TicketState{
    private $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }
    public function startProgress(){
         echo "already resolved\n";
     
    }
    public function resolve(){
         echo "already resolved\n";
    }
    public function close(){
          echo "closed\n";
        $this->ticket->setState($this->ticket->getClosedState()); 
    }
}

class ClosedState implements TicketState{
    private $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }
    public function startProgress(){
          echo "Ticket is closed and can not progress again\n";
     
    }
    public function resolve(){
          echo "Ticket is closed and can not resolved\n";
    }
    public function close(){
         echo "already closed\n";
        
    }
}

//////////////////////
class Ticket{
    private OpenState $openState;
    private $inProgressState;
    private $resolvedState;
    private $closedState;

    private $state;


    public function __construct()
    {
        $this->openState = new OpenState($this);
        $this->inProgressState = new InProgressState($this);
        $this->resolvedState = new ResolvedState($this);
        $this->closedState = new ClosedState($this);

        $this->state = $this->openState;
    }
    public function setState(TicketState $state)
    {
        $this->state=$state;
    }

    public function getOpenState(){
        return $this->openState;
    }

        public function getInProgressState(){
        return $this->inProgressState;
    }

        public function getResolvedState(){
        return $this->resolvedState;
    }

        public function getClosedState(){
        return $this->closedState;
    }

    public function startProgress(){
        $this->state->startProgress();
    }
    public function resolve(){

        $this->state->resolve();
    }
    public function close(){
        $this->state->close();
    }
}

////////////////////////////////////////////////

$ticket = new Ticket();

$ticket->resolve();
$ticket->startProgress();
$ticket->resolve();
$ticket->close();
$ticket->startProgress();
$ticket->setState(new OpenState($ticket));

