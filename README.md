# liveshopper-train-exercise.appdiz-informatika.hr

## Developer Pre-Screener

## Train Exercise:

The purpose of this exercise is to give us a sense for your level of familiarity with PHP and Object Oriented Programming. Please submit code that meets the following requirements:

A train is made up of a series of train cars. Write two PHP classes; "Train" and "TrainCar".
Must be able to:

● Set the weight of a TrainCar.

● Get the weight of a TrainCar.

● Add TrainCars to the Train, either at the front or back, with a limit of 30 cars.

● Remove a TrainCar from either end, reporting a problem if there are none left to remove.

● Ask the Train how many cars are currently in the Train.

● Get the total weight of the Train.

After writing the classes show an example of how to use them.

Bonus: Show best way to have different types of TrainCars (i.e. cargo, passenger, engine, etc).


# USAGE EXAMPLES:

GET NUMBER OF TRAIN CARTS

```$train->get_Train_Carts_count()```

GET WEIGHT OF TRAIN

```$train->get_Train_Weight()```

 GET WEIGHT OF PARTICULAR TRAIN CAR USING INDEX OF CAR ON TRAIN

```$train->get_Train_Carts()[2]->get_weight()```


NEW SINGLE CAR

```$newcar = ["2.5", "cargo", "back"];```    
```addCars($newcar, $train);```