public class PendingState : IOrderState
{
    private Order _order;

    public PendingState(Order order)
    {
        _order = order;
    }
    public void Pay()
    {
        System.Console.WriteLine("paid successfully");
        _order.SetState(_order.PaidState);
    }
    public void Ship()
    {
       System.Console.WriteLine("Can not shipping without payment"); 
    }
}