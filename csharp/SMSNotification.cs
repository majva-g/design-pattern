namespace Session3
{

    public class SMSNotification : INotification
    {
        public void notify()
        { 
            System.Console.WriteLine("notify from sms chanel");
        }
    }
}