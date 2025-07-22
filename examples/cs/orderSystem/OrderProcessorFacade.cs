class OrderProcessorFacade{
    private  OrderRepository _orderRepo = new OrderRepository();
    private  EmailService _emailService = new EmailService();
    private  InventoryService _inventoryService = new InventoryService();
    private Logger _logger = new Logger();

    public void ProcessOrder(string orderId , string email)
    {
        System.Console.WriteLine("*** Starting Order Processing ***");

        _orderRepo.Save(orderId);
        _inventoryService.ReserveItem(orderId);
        _emailService.SendConfirmation(email,orderId);
        _logger.Log($"Order {orderId} processed successfully.");

        System.Console.WriteLine("*** Order Processing Completed ***");
    }
}