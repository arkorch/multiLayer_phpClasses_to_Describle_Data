<?php
//for all WOLVES
namespace Canine;
use Animal;
use Traits\Legs; //getting the class name 
class Wolf extends Canine{ //setting the name to the class
   
                    /**
                     * @var string
                     */
                    use Legs;    //giving it a name
                 protected $name = 'Canine';
                 public function run(): string
                 {
                     
                     return "Wolves run in packs";
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
                    return $this->name . " eats meat. It hunts its prey in the jungle.";
                }

                public function drink(): string
                {
                     //to show the drink string
                    //to import the method name from the main php file in includes
                    return "Wolf drinks water from the river.";
                }

                public function speak(): string
                {
                    //to show the speak string
                    //to import the method name from the main php file in includes
                    return "Wolf has four different vocalizations, the predominant being howling.";
                }
                
               
            }
        //note: create the functions like the reference video and return the text about the animals
        //make and edit multiple copies of this file and create the OOP structure
?>