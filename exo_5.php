<?php
declare(strict_types=1);

class beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

    public function modify($name, $color, $price, $temperature)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function __construct($name, $color, $price, $temperature)
    {
        $this-> name = $name;
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }
    public function getInfo(){
        echo "Mmmh, {$this->name},"."This beverage is {$this->temperature} and {$this->color}.";
    }
    public function howMutch(){
        echo "{$this->name} cost {$this->price} €.";
    }
    public function modifyDrink($name, $color, $price, $temperature)
    {
        $this->modify($name, $color, $price, $temperature);
    }
}
$drink1 = new beverage("Cola", "Black", 2,"Cold");
$drink1->getInfo();
echo "<br>";
$drink1->modifyDrink("Cola", "Black", 3.50, "Cold");
$drink1->howMutch();
?>