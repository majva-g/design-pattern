class InventoryService{
    public void ReserveItem(string orderId)
    {
        System.Console.WriteLine($"Items for order {orderId} reserved in inventory.");
    }
}