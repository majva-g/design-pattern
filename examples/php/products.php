<?php
interface ProductComponent{
    public function getPrice():float;
}

class SimpleProduct implements ProductComponent{
    private string $name;
    private float $price;
    
    public function __construct(string $name,float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

class BundleProduct implements ProductComponent{
    private string $name;

    // @var ProductComponent[]
    private array $items = [];

    public function __construct(string $name)
    {
        $this->name= $name;
    }

    public function add(ProductComponent $component)
    {
        $this->items[] = $component; 
    }

    public function remove(ProductComponent $component)
    {
        $this->items = array_filter($this->items , fn($item)=>$item != $component);
    }

    public function getPrice(): float
    {
        $total =0;
        foreach ($this->items as $item) {
            $total += $item->getPrice(); 
        }

        return $total - 5000; // 5000 discount
    }
}

//////////////////////////////////////////////////////////////////

$mouse = new SimpleProduct("Mouse",25000);
$keyboard = new SimpleProduct("Keyboard",35000);
$accessoryProduct = new BundleProduct("Accessory Set");

$accessoryProduct->add($mouse);
$accessoryProduct->add($keyboard);
///////////////////////////////////////////

echo $mouse->getPrice();
echo PHP_EOL;
echo $keyboard->getPrice();
echo PHP_EOL;
echo $accessoryProduct->getPrice();