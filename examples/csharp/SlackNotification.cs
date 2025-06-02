namespace Session3
{

    public class SlackNotification : INotification
    {
        public void notify()
        { 
            System.Console.WriteLine("notify from slack chanel");
        }
    }
}