namespace Session3
{
   public class NotificationFactory
   {
      //     public static INotification create (string channel)
      //     {

      // if(chanel == "sms")
      // {
      // new SMSNotification();
      // }
      // else if(chanel == "email")
      // {
      // new EmailNotification();
      // }
      //     else if(chanel == "slack")
      // {
      // new SlackNotification();
      // }
      //     }


      public INotification create(INotificationFactory factory)
      {
         return factory.create();
      }
   }
}