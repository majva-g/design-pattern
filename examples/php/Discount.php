<?php
// class cart{
//     public function checkout($discountType)
//     {
//         if($discountType == 'percentage')
//         {
//             // percentage discount
//         }
//         elseif($discountType='fix')
//         {
//             // fix discount
//         }
//         elseif($discountType='noDiscount')
//         {
//             //no discount
//         }
//         //........................................
//     }
// }

interface DiscountStrategy{
    function calculate(int $price);
}

class PercentageDiscount implements DiscountStrategy{
    private int $percentage;

    public function __construct(int $percentage)
    {
        $this->percentage = $percentage;
    }

    public function calculate(int $price)
    {
        return $price - intval($price * $this->percentage/100);
    }
}

class FixedDiscount implements DiscountStrategy {
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function calculate(int $price)
    {
        return max(0, $price - $this->amount);
    }
}
class NoDiscount implements DiscountStrategy{
    public function calculate(int $price)
    {
        return $price;
    }
}

class Cart{
    private DiscountStrategy $strategy;

    public function __construct(DiscountStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(DiscountStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function checkout()
    {
       return $this->strategy->calculate(1000);
    }
}

$cart = new Cart(new PercentageDiscount(20));
echo $cart->checkout();
