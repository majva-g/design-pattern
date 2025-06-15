// public class PaymentProcess
// {
//     public void pay(int amount, string type)
//     {
//         if (type == "bitcoin")
//         {
//             System.Console.WriteLine(" pay by bitcoin");
//         }
//         else if (type == "wallet")
//         {
//             System.Console.WriteLine(" pay by wallet");
//         }
//         else if (type == "cart")
//         {
//             System.Console.WriteLine(" pay by cart");
//         }
//     }
// }
public interface IPayment
{
    public void pay(int amount);
}
class BitcoinPayment : IPayment
{
    public void pay(int amount)
    {
        System.Console.WriteLine(" pay by bitcoin");
    }
}

class WalletPayment : IPayment
{
    public void pay(int amount)
    {
        System.Console.WriteLine(" pay by wallet");
    }
}

class CartPayment : IPayment
{
    public void pay(int amount)
    {
        System.Console.WriteLine(" pay by cart");
    }
}

class PaymentProcess
{
    private IPayment paymentStrategy;

    public PaymentProcess(IPayment strategy)
    {
        this.paymentStrategy = strategy;
    }

    public setPaymentStrategy(IPayment strategy)
    {
        this.paymentStrategy = strategy;
    }

    public void pay(int amount)
    {
        this.paymentStrategy.pay(amount);
    }
}
/////////////////////////////////
/// 
public class Program
{
    public void main()
    {
        string strategy = "cart";
        IPayment iPay = null;
        if (strategy == "cart")
        {
            iPay = new CartPayment();
        }
        else if (strategy == "bitcoin")
        {
            iPay = new BitcoinPayment();
        }
        //....................

        PaymentProcess paymentProcess = new PaymentProcess(iPay);
        paymentProcess.pay(10000);
    }
}
