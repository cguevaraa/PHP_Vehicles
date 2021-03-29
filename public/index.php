<?php

//Import the classes
require_once "../src/Bycicle.php";
require_once "../src/Car.php";
require_once "../src/Truck.php";
require_once "../src/Speedometer.php";

//Use the namespace
use Vehicles\Vehicle;

//Instantiate some vehicles
$bike1 = new Bycicle('yellow', 1);
$car1 = new Car('black', 2, 'diesel');
$truck1 = new Truck('red', 3, 'fuel', 100);

// //A basic general test function
// function testVehicle(Vehicle $vehicle, int $velocity)
// {
//     echo 'Let\'s start the ' .$vehicle->getColor() . " " .get_class($vehicle) ."\n";
//     echo 'The current speed of our vehicle is: ' .$vehicle->getCurrentSpeed()."\n\n";
//     echo "Now we accelerate this engine...\n";
//     echo $vehicle->forward($velocity) ."\n";
//     echo 'The current speed of our vehicle is: ' .$vehicle->getCurrentSpeed()."\n\n";
//     echo "WATCH OUT!!!\n\n";
//     echo $vehicle->brake() ."\n";
//     echo 'The current speed of our vehicle is: ' .$vehicle->getCurrentSpeed()."\n\n";
// }

// //Perform the basic test
// echo PHP_EOL . "PERFORMING BASIC TEST... " . PHP_EOL;
// testVehicle($bike1, 5);
// testVehicle($car1, 15);
// testVehicle($truck1, 10);

// //Test the __toString function from each class
// echo PHP_EOL . "STATS: " . PHP_EOL;
// echo $bike1 . PHP_EOL;
// echo $car1 . PHP_EOL;
// echo $truck1 . PHP_EOL;

// //Let's test the Truck
// echo PHP_EOL . "LET'S TEST THE TRUCK... " . PHP_EOL;
// echo "The truck is: " .$truck1->isFull() . PHP_EOL;
// $truck1->setCurrentCharge(60);
// echo "Current charge: " .$truck1->getCurrentCharge() . PHP_EOL;
// $truck1->setCurrentCharge(100);
// echo "Current charge: " .$truck1->getCurrentCharge() . PHP_EOL;
// echo "The truck is: " .$truck1->isFull() . PHP_EOL;

//**TEST EXCPETION CATCHING**
// try {
//     $car1->start(false);
// } catch (Exception $e) {
//     echo "\nDeactivating park brake...\n";
//     $car1->setParkBrake(false);
// } finally {
//     echo "\nMy car rolls like a donut!\n";
// }

echo Speedometer::convertKmtoMiles(10);
