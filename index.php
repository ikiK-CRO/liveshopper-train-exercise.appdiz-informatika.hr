<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


//CLASS's:

class Train
{
    public $TrainCars;
    const carTypes = ["cargo", "passenger", "engine"];
    const carPositions = ["back", "front"];

    public function __construct()
    {
        $this->TrainCars = [];
    }

    public function addCars($car)
    {

        if (sizeof($car) === 3 && is_numeric($car[0]) &&  in_array($car[1], self::carTypes) &&  in_array($car[2], self::carPositions)) {
            $newcar = new TrainCar();
            $newcar->set_weight($car[0]);
            $newcar->set_type($car[1]);

            if ($this->set_TrainCars($newcar, $car[2]) === false) {
                return  "Limit of cars excited<br>";
            }
        } else {
            return  "Invalid car entry value/s<br>";
        }
    }


    function set_TrainCars($car, $position) // TAKES TrainCar OBJECT AND POSITION ON TRAN AS ARGUMENTS
    {
        if (sizeof($this->TrainCars) >= 3) { //CHANGE TO 30, 3 IS FOR TESTING 
            return false;
        } else {
            if ($position === "back") {
                array_push($this->TrainCars, $car);
            } elseif ($position === "front") {
                array_unshift($this->TrainCars, $car);
            }
        }
    }

    function remove_TrainCars($position) // TAKES POSITION OF CAR AS ARGUMENT
    {
        if (in_array($position, self::carPositions)) {
            if (sizeof($this->TrainCars) != 0) {
                if ($position === "front") {
                    array_shift($this->TrainCars);
                } elseif ("back") {
                    array_pop($this->TrainCars);
                }
            } else {
                return "No cars to remove from train<br>";
            }
        } else {
            return "Position can be only front or back<br>";
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
    public $weight; // TrainCar WEIGHT
    public $type; // TrainCar TYPE

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


//EXAMPLES:

//ARRAY ADDING USING FUNCTION
$cars = [[1, "cargo", "front"], [2.4, "passenger", "back"], [3.6, "cargo", "front"]];

foreach ($cars as $car) {
    print_r($train->addCars($car));
}


//NEW SINGLE CAR USING FUNCTION
$newcar = ["2.5", "cargo", "front"];
print_r($train->addCars($newcar));

//REMOVE CAR with:  "back" OR "front"
print_r($train->remove_TrainCars("front"));



// GET NUMBER OF TRAIN CARTS
echo $train->get_Train_Carts_count() . " - Cars on train<br>";

// GET WEIGHT OF TRAIN
echo $train->get_Train_Weight() . " - tones is weight off train.<br>";

// GET WEIGHT OF PARTICULAR TRAIN CAR USING INDEX OF CAR ON TRAIN
echo  $train->get_Train_Carts()[0]->get_weight() . " - particular train car weight <br>";

// GET TYPE OF PARTICULAR TRAIN CAR USING INDEX OF CAR ON TRAIN
echo  $train->get_Train_Carts()[0]->get_type() . " - particular train car type <br>";
