public class ShippedState : IOrderState
{
    private Order _order;
    public ShippedState(Order order)
    {
        _order = order;
    }

    public void Pay()
    {
        System.Console.WriteLine("Can not pay again. order has been Shipped");
    }

    public void Ship()
    { 
        System.Console.WriteLine("Order already shipped");
    }
}