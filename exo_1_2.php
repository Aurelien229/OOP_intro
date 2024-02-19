<?php
declare(strict_types=1);
//exo 1 and 2.
class beverage
{
    public string $name;
    public string $color;
    public float $price;
    public string $temperature;

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
}
class beer extends beverage
{

    public float $alcoholPercentage; 

    public function __construct($name, $color, $price, $temperature, $alcoholPercentage)
    {
        parent::__construct($name,$color,$price,$temperature);
        
        $this-> alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage(){
        echo "{$this->name}"." content {$this->alcoholPercentage}"."% alcohol.";
    }
} 
$drink1 = new beverage("Cola", "Black", 2,"Cold");
$beer1 = new beer("Duvel", "Blond", 3.50, "Cold", 8.5 );
$drink1->getInfo();
echo "<br>";
$beer1->getInfo();
echo "<br>";
$beer1->getAlcoholPercentage();
?>
