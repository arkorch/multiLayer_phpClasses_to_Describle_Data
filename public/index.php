<?php
// This part is to import the names
// Using Traits legs because Canine and Feline have similar legs in common
use Traits\legs;

//using the child elements for all animals
use Canine\Canine;
use Canine\Dog;
use Canine\Wolf; 
use Feline\Feline;
use Feline\Housecat;
use Feline\Jaguar;
use Feline\Lion;
use Feline\Tiger;
use Bird\Bird;
use Bird\Cardinal;
use Bird\Parrot;

//------------xx--------------xx--------------

//spl_autoload_register() also allows you to register multiple autoload functions to speed up autoloading and make it even easier.
// the autoload implementation
// to autoload ALL CLASSES 
spl_autoload_register(function ($class)
{
$replaced = str_replace("\\","/",$class);
//replace the string and add the / for folder navigation
require_once '../includes/classes/' . $class . '.php';
});

// MAKE CALLS TO CLASSES 
//these are for all child elements and primary classes
//these calls enable the var_dump below

//var_dump($animal);
//use the same autoload function
$animal = new Animal();
$canine = new Canine();
$dog = new Dog();
$wolf = new Wolf();
$feline = new Feline();
$housecat = new Housecat();
$jaguar = new Jaguar();
$lion = new Lion();
$tiger = new Tiger();
$bird = new Bird();
$cardinal = new Cardinal();
$parrot = new Parrot();

//------------xx--------------xx--------------

//the idea is to now create all the vardumps for
//each animal and the corrosponding child elements
//write all the vardumps here 1-12

//// 1 var dump animal
var_dump($animal);
var_dump($animal->move());
var_dump($animal->eat());
var_dump($animal->drink());
var_dump($animal->speak());

//// 2 var dump canine
var_dump($canine->run());
var_dump($canine->legs());
var_dump($canine->eat());
var_dump($canine->drink());
var_dump($canine->speak());


//// 3 var dump dog
var_dump($dog->run()); 
var_dump($dog->legs());
var_dump($dog->eat());
var_dump($dog->drink());
var_dump($dog->speak());


//// 4 var dump wolf
var_dump($wolf->run()); 
var_dump($wolf->legs());
var_dump($wolf->eat());
var_dump($wolf->drink());
var_dump($wolf->speak());


//// 5 var dump feline
var_dump($feline->run());
var_dump($feline->legs());
var_dump($feline->eat());
var_dump($feline->drink());
var_dump($feline->speak());

//// 6 var dump housecat
var_dump($housecat->run());
var_dump($housecat->legs());
var_dump($housecat->eat());
var_dump($housecat->drink());
var_dump($housecat->speak());

//// 7 var dump jaguar
var_dump($jaguar->run()); 
var_dump($jaguar->legs());
var_dump($jaguar->eat());
var_dump($jaguar->drink());
var_dump($jaguar->speak());

//// 8 var dump lion
var_dump($lion->run()); 
var_dump($lion->legs());
var_dump($lion->eat());
var_dump($lion->drink());
var_dump($lion->speak());

//// 9 var dump tiger
var_dump($tiger->run()); 
var_dump($tiger->legs());
var_dump($tiger->eat());
var_dump($tiger->drink());
var_dump($tiger->speak());


//// 10 var dump bird
var_dump($bird->fly()); 
var_dump($bird->eat());
var_dump($bird->drink());
var_dump($bird->speak());


//// 11 var dump cardinal
var_dump($cardinal->fly());
var_dump($cardinal->eat());
var_dump($cardinal->drink());
var_dump($cardinal->speak());


//// 12 var dump parrot
var_dump($parrot->fly());
var_dump($parrot->eat());
var_dump($parrot->drink());
var_dump($parrot->speak());

//------------xx--------------xx--------------


//Create the functions like the reference video and return the text about the animals
//This will return top 3 animal in term of power on each category
$top3 = new Top3($wolf,$lion,$cardinal);
var_dump($top3);
?> 