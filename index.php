<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


//CLASS's:

class Train
{
    public $TrainCars = [];

    function set_TrainCars($car, $position)
    {
        if (sizeof($this->TrainCars) >= 3) { //CHANGE TO 30
            return false;
        } else {
            if ($position === "back") {
                array_push($this->TrainCars, $car);
            } elseif ($position === "front") {
                array_unshift($this->TrainCars, $car);
            }
        }
    }

    function remove_TrainCars($position)
    {
        if (sizeof($this->TrainCars) != 0) {
            if ($position === "front") {
                array_shift($this->TrainCars);
            } elseif ("back") {
                array_pop($this->TrainCars);
            }
        } else {
            return false;
        }
    }

    function get_Train_Carts_count()
    {
        return sizeof($this->TrainCars);
    }

    function get_Train_Carts()
    {
        return $this->TrainCars;
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
    public $weight; // PROPERTY WEIGHT
    public $type; // PROPERTY TYPE

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


//EXAMPLES:

// NEW TRAIN
$train = new Train();

$cars = [["1", "cargo", "front"], ["2", "passenger", "back"], ["3.5", "passenger", "back"]];

foreach ($cars as $car) {
    addCars($car, $train);
}

function addCars($car, $train)
{
    $newcar = new TrainCar();
    $newcar->set_weight($car[0]);
    $newcar->set_type($car[1]);

    if ($train->set_TrainCars($newcar, $car[2]) === false) {
        echo  "Limit of cars excited<br>";
    }
}

//REMOVE CAR with:  "back" OR "front"
if ($train->remove_TrainCars("back") === false) {
    echo  "No cars to remove from train<br>";
}

//NEW SINGLE CAR
$newcar = ["2.5", "cargo", "front"];
addCars($newcar, $train);


// GET NUMBER OF TRAIN CARTS
echo $train->get_Train_Carts_count() . " - Cars on train<br>";

// GET WEIGHT OF TRAIN
echo $train->get_Train_Weight() . " - tones is weight off train.<br>";

// GET WEIGHT OF PARTICULAR TRAIN CAR USING INDEX OF CAR ON TRAIN
echo  $train->get_Train_Carts()[1]->get_weight() . " - particular train car weight <br>";

print_r($train->get_Train_Carts()) . "<br></br>";


//EXAMPLE WITHOUT ARRAYS FOR SINGLE CAR 

// $car1 = new TrainCar();
// $car1->set_weight('3.5');
// $car1->set_type('passenger');

// if($train->set_TrainCars($car1, "back") === false){
//     echo  "Limit of cars excited<br>";
// }

// GET SINGLE CAR WEIGHT
//$car1->get_weight()



// print_r($train->set_TrainCars($car3, "back"));

// print_r($train->get_Train()) . "<br></br>";