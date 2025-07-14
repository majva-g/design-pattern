public class BankMelli : IPaymentProcessor
{
    public void Pay(string customerId, decimal amount)
    {
        System.Console.WriteLine($" pay {amount} by {customerId} within melli bank");
    }
}