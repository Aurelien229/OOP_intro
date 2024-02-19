<?php
declare(strict_types=1);
//exo 1 and 2.
class beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;
    const barname = 'Het Vervolg';
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
    public function printBarname(){
        echo self::barname;
    }
}
class beer extends beverage
{

    public float $alcoholPercentage; 
    const barname = 'Het Vervolg';
    public function __construct($name, $color, $price, $temperature, $alcoholPercentage)
    {
        parent::__construct($name,$color,$price,$temperature);
        
        $this-> alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage(){
        echo "{$this->name}"." content {$this->alcoholPercentage}"."% alcohol.";
    }
    public function printBarname(){
        echo self::barname;
    }
} 
$drink1 = new beverage("Cola", "Black", 2,"Cold");
$drink1->printBarname();
$beer1 = new beer("Duvel", "Blond", 3.50, "Cold", 8.5);
echo "<br>";
$beer1->printBarname();
?>
