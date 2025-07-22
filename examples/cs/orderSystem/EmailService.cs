class EmailService{
    public void SendConfirmation(string email,string orderId)
    {
        System.Console.WriteLine($"Confirmation email sent to {email} for order {orderId}.");
    }
}