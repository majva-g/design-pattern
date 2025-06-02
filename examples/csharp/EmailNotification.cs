namespace Session3
{

    public class EmailNotification : INotification
    {
        public void notify()
        { 
            System.Console.WriteLine("notify from email chanel");
        }
    }
}