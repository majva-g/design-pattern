public class Order
{
    public IOrderState PendingState;
    public IOrderState PaidState;
    public IOrderState ShippedState;
    private IOrderState _state;


    public Order()
    {
        PendingState = new PendingState(this);
        PaidState = new PaidState(this);
        ShippedState = new ShippedState(this);

        _state = PendingState;
    }
    public void SetState(IOrderState state)
    {
        _state = state;
    }

    public void Pay()
    {
        _state.Pay();
    }

    public void Ship()
    {
        _state.Ship();
    }
}