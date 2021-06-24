<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
class Train
{
    public $TrainCars = [];

    function set_TrainCars($car, $position)
    {
        if (sizeof($this->TrainCars) >= 3) {
            return false;
        } else {
            if ($position === "back") {
                array_push($this->TrainCars, $car);
            } elseif ($position === "front") {
                array_unshift($this->TrainCars, $car);
            }
        }
    }

    function get_Train()
    {
        return $this->TrainCars;
    }

    function get_Train_Carts()
    {
        return sizeof($this->TrainCars);
    }

    function get_Train_Weight()
    {
        $count = 0;
        foreach ($this->TrainCars as $car) {
            $count += $car->get_weight();
        }
        return $count;
    }
}


class TrainCar
{
    public $weight;
    public $type;

    function set_weight($weight)
    {
        $this->weight = $weight;
    }
    function get_weight()
    {
        return $this->weight;
    }

    function set_type($type)
    {
        $this->type = $type;
    }
    function get_type()
    {
        return $this->type;
    }
}

// NEW TRAIN
$train = new Train();

//NEW CARTS EXAMPLES:
$car1 = new TrainCar();
$car1->set_weight('1');
$car1->set_type('cargo');

$car2 = new TrainCar();
$car2->set_weight('2');
$car2->set_type('passenger');


$car3 = new TrainCar();
$car3->set_weight('3.5');
$car3->set_type('passenger');


$train->set_TrainCars($car1, "front");
$train->set_TrainCars($car2, "back");
$train->set_TrainCars($car3, "back");


// print_r($train->get_Train()) . "<br></br>";

// GET NUMBER OF TRAIN CARTS
echo $train->get_Train_Carts() . " Cars on train<br>";

// GET WEIGHT OF TRAIN
echo $train->get_Train_Weight() . " tones is weight off train.<br>";

// GET WEIGHT OF PARTICULAR TRAIN CAR
echo $car1->get_weight() . " car1 weight <br>";