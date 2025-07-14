public class BankSinaAdapter : IPaymentProcessor
{
    DLLOfBankSina bankSina;

    public BankSinaAdapter()
    {
        bankSina = new DLLOfBankSina();
    }

    public void Pay(string customerId, decimal amount)
    {
        bankSina.MakeTransaction(customerId, (float)amount, "this transaction submitted by bank program");
    }
}