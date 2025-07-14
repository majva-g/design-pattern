// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
// string selectedBank;
// if (selectedBank == "sina")
// {
//     DLLOfBankSina bank = new DLLOfBankSina();
//     bank.MakeTransaction(12, 10000, "this is description");
// }

// else
// {
//     IPaymentProcessor pp = new BankMelli();
//     pp.pay(12,10000);
// }

IPaymentProcessor ps = new BankSinaAdapter();
IPaymentProcessor pme = new BankMelli();
IPaymentProcessor pma = new BankMaskan();
ps.Pay("12",10000);