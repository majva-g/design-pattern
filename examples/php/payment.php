<?php
class CardValidator{
    public function validate($cardNumber,$expiry,$cvv):bool
    {
        //validation
        if (strlen($cardNumber) !==16) {
            throw new Exception("Invalid card number");
        }

        echo "Card validated\n";
        return true;
    }
}

class PaymentGateway{
    public function charge($cardNumber,$amount):bool
    {
        echo "Charging $amount to card $cardNumber via payment gateway\n";

        return true;
    }
}

class TransactionLogger{
    public function log($transactionId,$amount)
    {
        echo "Transaction $transactionId of amount $amount logged.\n";
    }
}

class ReceiptSender{
    public function sendReceipt($email,$transactionId)
    {
        echo "Receipt for transaction $transactionId sent to $email.\n";
    }
}
////////////////////////////////////////////////////////////////////

class PaymentFacade{
    private $validator;
    private $gateway;
    private $logger;
    private $receiptSender;

    public function __construct()
    {
        $this->validator = new CardValidator();
        $this->gateway = new PaymentGateway();
        $this->logger = new TransactionLogger();
        $this->receiptSender = new ReceiptSender();
    }

    public function processPayment($cardNumber,$expiry,$cvv,$amount,$email)
    {
        $this->validator->validate($cardNumber,$expiry,$cvv);
        $success = $this->gateway->charge($cardNumber,$amount);

        if (!$success) {
            throw new Exception("Payment failed");
        }

        $transactionId = uniqid("TXN_");
        $this->logger->log($transactionId,$amount);
        $this->receiptSender->sendReceipt($email,$transactionId);

        echo "Payment processed successfully";
    }
}

////////////////////////////////////////////////////////
$payment = new PaymentFacade();

try{
    $payment->processPayment("1234567812345678","12/26","1234",100.0,"customer@email.com");

}
catch(Exception $e)
{
    echo "Error: ".$e->getMessage();
}