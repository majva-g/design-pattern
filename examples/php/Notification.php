<?php

class User{
    public string $sendNotificationVia;
    public string $email;
    public string $phone;
    //.....................
}

// class SendNotification{

//     public function notify(User $user, string $message)
//     {
//         if ($user->sendNotificationVia == 'email') {
//             echo 'send {$message} to {$user->email}';
//         }
//         else if ($user->sendNotificationVia == 'sms') {
//             echo 'send {$message} to {$user->phone}';
//         }

//         else if ($user->sendNotificationVia == 'notify_in_app') {
//             echo 'send {$message} to {$user}';
//         }
//     }
// }

interface sendMessageStrategy{
    public function notify(User $user, string $message):void;
}

class EmailNotification implements sendMessageStrategy{
    public function notify(User $user, string $message):void
    {
        echo "send {$message} to {$user->email}";
    }
}
class SMSNotification implements sendMessageStrategy{
    public function notify(User $user, string $message):void
    {
        echo "send {$message} to {$user->phone}";
    }
}

class InAPPNotification implements sendMessageStrategy{
    public function notify(User $user, string $message):void
    {
        echo "send {$message} to {$user}";
    }
}

class DefaultNotification implements sendMessageStrategy
{
    public function notify(User $user, string $message): void
    {
        echo "default notifier";
    }
}


class SendNotification{
    private sendMessageStrategy $messageStrategy;

    public function __construct(sendMessageStrategy $strategy)
    {
        $this->messageStrategy = $strategy;
    }

    public function setMessageStrategy(sendMessageStrategy $strategy)
    {
        $this->messageStrategy = $strategy;
    }

    public function notify(User $user,string $message){
        $this->messageStrategy->notify($user,$message);
    }
}

/////////////////////////////////////////////////
 function setMessageStrategy(User $user) : sendMessageStrategy
{
    switch($user->sendNotificationVia)
    {
        case "email" : 
            return new EmailNotification;
            break;
        case "sms" : 
             return new SMSNotification;
             break;

        case "in_app" : 
            return new InAPPNotification;
            break;
            default: return new DefaultNotification;
    }
}

new SendNotification(setMessageStrategy($user));

