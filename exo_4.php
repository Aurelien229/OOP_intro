<?php
declare(strict_types=1);

class beverage
{
    protected string $name;
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct($name, $color, $price, $temperature)
    {
        $this-> name = $name;
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = $temperature;
    }
    // public function getName(){
    //     return $this->name;
    // }
    // public function getColor(){
    //     return $this->color;
    // }
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

    protected float $alcoholPercentage; 

    public function __construct($name, $color, $price, $temperature, $alcoholPercentage)
    {
        parent::__construct($name,$color,$price,$temperature);
        
        $this-> alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage(){
        
        echo "{$this->name}"." content {$this->alcoholPercentage}"."% alcohol.";
    }
    private function beerInfo(){
        parent::getInfo(); 
        echo "<br>Hi i'm {$this->name} and have an alcochol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
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
