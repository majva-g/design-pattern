class OrderRepository
{
    public void Save(string orderId){
        System.Console.WriteLine($"Order {orderId} saved to database");
    }
}