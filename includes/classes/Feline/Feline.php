<?php
//for all FELINES
namespace Feline;
use Animal; //getting the class name 

use Traits\Legs;
class Feline extends Animal{ //setting the name to the class
                use Legs;
                    /**
                     * @var string
                     */
                       //giving it a name
                    protected $name = 'Feline';
                    public function run(): string
                    {
                        
                        return "There are very capable runners";
                    }
                /**
                * 
                * A short msg to about what animal eat
                * @return string
                */   

    //---------xx------------xx-----------


                public function eat(): string
                {   //to show the eat string
                    //to import the method name from the main php file in includes
                    return $this->name . " family is carnivorous. Though some tigers are known to eat fish, most aminals of this family eat meat";
                }

                public function drink(): string
                {
                    //to show the drink string
                    //to import the method name from the main php file in includes
                    return "They drink water from streams and lakes.";
                }

                public function speak(): string
                {
                    //to show the speak string
                    //to import the method name from the main php file in includes
                    return "Feline animals have a growl. It can be said the pitch of the growl is lower as the cat species gets larger.";
                }
                
                
            }
            //note: create the functions like the reference video and return the text about the animals
            //make and edit multiple copies of this file and create the OOP structure

?>