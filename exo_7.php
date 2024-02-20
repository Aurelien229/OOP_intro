<?php
declare(strict_types=1);

class Beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;
    const barname = 'Het Vervolg';
    private static string $address = 'Melkmarkt 9, 2000 Antwerpen'; 

    public function __construct($name, $color, $price, $temperature)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        echo "Mmmh, {$this->name}," . "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function printBarName()
    {
        echo self::barname;
    }

    //Méthode statique pour obtenir l'adresse
    public static function getAddress()
    {
        return self::$address;
    }
}

class Beer extends Beverage
{
    public float $alcoholPercentage;
    const barname = 'Het Vervolg';

    public function __construct($name, $color, $price, $temperature, $alcoholPercentage)
    {
        parent::__construct($name, $color, $price, $temperature);

        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        echo "{$this->name}" . " content {$this->alcoholPercentage}" . "% alcohol.";
    }

    public function printBarName()
    {
        echo self::barname;
    }
}

$drink1 = new Beverage("Cola", "Black", 2, "Cold");
echo Beverage::getAddress() . "<br>";
$beer1 = new Beer("Duvel", "Blond", 3.50, "Cold", 8.5);
echo Beer::getAddress();
?>
