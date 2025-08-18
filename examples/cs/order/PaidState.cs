public class PaidState : IOrderState
{
    private Order _order;
    public PaidState(Order order)
    {
        _order = order;
    }

    public void Pay()
    {
        System.Console.WriteLine("already paid. Can not pay again");
    }
    public void Ship()
    {
        System.Console.WriteLine("Order shipped successfully");
        _order.SetState(_order.ShippedState);
    }
}