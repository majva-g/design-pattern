public class DLLOfBankSina
{
    public void MakeTransaction(string account, float money, string description)
    {
        System.Console.WriteLine($"Transferring {money} to account {account} with description {description}");
    }

    public void BeDardNakhor()
    {
        System.Console.WriteLine("ye kari anjam mide ke baghie banka anjam nemidan");
    }
}