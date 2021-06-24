<?php

class Train
{
    public $TrainCars = [];

    function set_TrainCars($car, $position)
    {
        if ($position === "back") {
            array_push($this->TrainCars, $car);
        } elseif ($position === "front") {
            array_unshift($this->TrainCars, $car);
        }
    }

    function get_Train()
    {
        return $this;
    }
}

$train = new Train();

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

// echo $car1->get_weight() . "<br>";
// echo $car2->get_weight() . "<br>";

$train->set_TrainCars($car1, "front");
$train->set_TrainCars($car2, "back");

// echo $train->get_Train() . "<br>";
print_r($train->get_Train());