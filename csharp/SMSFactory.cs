namespace Session3
{

    public class SMSFactory : INotificationFactory
    {
        public INotification create()
        { 
            return new SMSNotification();
        }
    }
}