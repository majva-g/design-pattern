var orderFacade = new OrderProcessorFacade();

string orderId = "ORD-12345";
string userEmail = "customer@example.com";

orderFacade.ProcessOrder(orderId,userEmail);