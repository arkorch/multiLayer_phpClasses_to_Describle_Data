<?php
//for all CANINE
namespace Canine;
use Animal;
use Traits\Legs; //getting the class name 
class Canine extends Animal{ //setting the name to the class
    use Legs;
                /**
                 * @var string
                 */
                 //giving it a name
                protected $name = 'Canine';
                public function run(): string
                {
                    
                    return "These animals run very fast";
                }
                /**
                *  
                * A short msg to about what animal eat
                * @return string
                */   

    //---------xx------------xx-----------
                public function eat(): string
                {
                    //to show the eat string
                    //to import the method name from the main php file in includes
                    return $this->name . " canines are omnivorous animals";
                }

                public function drink(): string
                {
                    //to show the drink string
                    //to import the method name from the main php file in includes
                    return "Dogs drink a lot of water";
                }

                public function speak(): string
                {
                    //to show the speak string
                    //to import the method name from the main php file in includes
                    return "A bark is a sound most commonly produced by dogs.";
                }
                
               
            }
            //note: create the functions like the reference video and return the text about the animals
            //make and edit multiple copies of this file and create the OOP structure

?>