<?php
declare(strict_types=1);

class beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct($name, $color, $price, $temperature)
    {
        $this-> name = $name;
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
    public function getInfo(){
        echo "Mmmh, {$this->name},"."This beverage is {$this->temperature} and {$this->color}.";
    }
    public function modify($name, $color, $price, $temperature)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
}
class beer extends beverage
{

    private float $alcoholPercentage; 

    public function __construct($name, $color, $price, $temperature, $alcoholPercentage)
    {
        parent::__construct($name,$color,$price,$temperature);
        
        $this-> alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage(){
        
        echo "{$this->getName()}"." content {$this->alcoholPercentage}"."% alcohol.";
    }
    private function beerInfo(){
        parent::getInfo(); 
        echo "<br>Hi i'm {$this->getName()} and have an alcochol percentage of {$this->alcoholPercentage} and I have a {$this->getColor()} color.";
    } 
    public function showBeer(){
        return $this->beerInfo();
    }
    public function modifyBeer($name, $color, $price, $temperature, $alcoholPercentage)
    {
        parent::modify($name, $color, $price, $temperature);
    }
} 

$beer1 = new beer("Duvel", "Blond", 3.50, "Cold", 8.5);
$beer1->getInfo();
echo "<br>";
$beer1->getAlcoholPercentage();
echo "<br>";
$beer1->showBeer();
$beer1->modifyBeer("Duvel", "Light", 3.50, "Cold", 8.5);
echo "<br>";
$beer1->getInfo();
?>
