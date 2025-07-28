interface IMessageSender{
    sendMessage(content:string):void;
}

class EmailSender implements IMessageSender {

    sendMessage(content: string): void {
        console.log(`Sending email: ${content}`);
    }
}

class SMSSender implements IMessageSender {

    sendMessage(content: string): void {
        console.log(`Sending SMS: ${content}`);
    }
}

class PushSender implements IMessageSender {

    sendMessage(content: string): void {
        console.log(`Sending Push Notification: ${content}`);
    }
}



//////////////////////////////////////////////////////////////
abstract class AbstractNotification {
    protected sender:IMessageSender;

    constructor(sender:IMessageSender){
        this.sender = sender
    }

    abstract notify(message:string):void;
}

class SimpleNotification extends AbstractNotification{

    notify(message: string): void {
        this.sender.sendMessage(`Simple: ${message}`)
    }
}

class UrgentNotification extends AbstractNotification{

    notify(message: string): void {
        this.sender.sendMessage(`URGENT: ${message}`);
        //alert("You have an urgent message!");
    }
}

class TimedNotification extends AbstractNotification{

    notify(message: string): void {
        this.sender.sendMessage(`Timed: ${message}`);
        
        setTimeout(()=>{
            console.log("Notification Expired.");
            
    },5000);
    }
}
//////////////////////////////////////////////

const email = new EmailSender();
const sms = new SMSSender();


const notif1 = new SimpleNotification(email);
notif1.notify("Welcome to our website!");

const notif2 = new UrgentNotification(sms);
notif2.notify("Server Down!");

const notif3 = new TimedNotification(new PushSender());
notif3.notify("Your session will expire in 5 min.")