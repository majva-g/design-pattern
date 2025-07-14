public class BankMaskan : IPaymentProcessor
{
    public void Pay(string customerId, decimal amount)
    {
        System.Console.WriteLine($" pay {amount} by {customerId} within maskan bank");
    }
}