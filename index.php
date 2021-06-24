<?php

class Train
{
    public $TrainCars = [];
}

class TrainCar
{
    public $weight;

    function set_weight($weight)
    {
        $this->weight = $weight;
    }
    function get_weight()
    {
        return $this->weight;
    }
}


$car1 = new TrainCar();
$car1->set_weight('1t');

$car2 = new TrainCar();
$car2->set_weight('2t');

echo $car1->get_weight()."<br>";
echo $car2->get_weight()."<br>";
