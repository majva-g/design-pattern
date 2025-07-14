public interface IPaymentProcessor
{
    void Pay(string customerId, decimal amount);
}