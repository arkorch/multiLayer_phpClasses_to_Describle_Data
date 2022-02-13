<?php
//for all DOGS
namespace Canine;
use Animal;
use Traits\Legs; //getting the class name 
class Dog extends Canine{ //setting the name to the class
                        /**
                         * @var string
                         */
                        use Legs;
                        //giving it a name
                     public function run(): string
                    {
                        
                        return "They run very super super fast";
                    }
                    protected $name = 'Canine';

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
            
                        return $this->name . " are carnivores and the primary component of their diet is prey.";
                    }

                    public function drink(): string
                    {
                        //to show the drink string
                        //to import the method name from the main php file in includes
                        return "Dogs drink milk from their mothers for approximately the first six to seven weeks of their lives.";
                    }

                    public function speak(): string
                    {
                        //to show the speak string
                        //to import the method name from the main php file in includes
                        return "A bark is a sound most commonly produced by dogs. Other animals that make this noise include wolves, coyotes, foxes, seals and barking owls.";
                    }
                    
                   
                }
                //note: create the functions like the reference video and return the text about the animals
                //make and edit multiple copies of this file and create the OOP structure
?>
