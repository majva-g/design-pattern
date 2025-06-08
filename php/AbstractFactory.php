<?php

use MessageFormatter as GlobalMessageFormatter;

interface Notification {
    function notify();
}

class SMSNotifier implements Notification{
    function notify()
    {
        echo 'send sms';
    }
}
class SlackNotifier implements Notification{
    function notify()
    {
        echo 'send slack message';
    }
}

class EmailNotifier implements Notification{
    function notify()
    {
        echo 'send email message';
    }
}

interface MessageFormatter {
    function format(string $message):string;
}

class SMSFormatter implements MessageFormatter{
    function format(string $message):string{
        return $message . '\n phone :90000';
    }
}
class EmailFormatter implements MessageFormatter{
    function format(string $message):string{
        return $message . '\n best regards :90000';
    }
}

interface NotificationFactory{
    function creteNotifier():Notification;
    function creteFormatter():MessageFormatter;
}

class SmsNotificationFactory implements NotificationFactory{

    function creteNotifier() : Notification
    {
        return new SMSNotifier;
    }
    function creteFormatter() : MessageFormatter{
        return new SMSFormatter;
    }

}

class EmailNotificationFactory implements NotificationFactory{

    function creteNotifier() : Notification
    {
        return new EmailNotifier;
    }
    function creteFormatter() : MessageFormatter{
        return new EmailFormatter;
    }

}