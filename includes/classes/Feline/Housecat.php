<?php
//for all DOGS
namespace Feline;
use Animal;
use Traits\Legs; //getting the class name 
class Housecat extends Feline{ //setting the name to the class
                    use Legs;
                        /**
                         * @var string
                         */
                         //giving it a name
                        protected $name = 'House Cat';

                    /**
                    * 
                    * A short msg to about what animal eat
                    * @return string 
                    */   

                    

     //---------xx------------xx-----------
                    public function run(): string
                    {
                        //to show the eat string
                        //to import the method name from the main php file in includes
                        return "Housecat is silent and moves very fast.";
                    }
                    public function eat(): string
                    {
                        //to show the drink string
                        //to import the method name from the main php file in includes
                        return $this->name . " major part of the cat's diet is fish. Fish are the most nutrient rich cat foods out there.";
                    }

                    public function drink(): string
                    {
                        //to show the speak string
                        //to import the method name from the main php file in includes
                        return "House cats love drinking milk. It is their favourite drink.";
                    }

                    public function speak(): string
                    {
                        
                        return "Next to birds, cats poses the widest range of vocalizations of any domestic pet.";
                    }
                    
                
                }
                //note: create the functions like the reference video and return the text about the animals
                //make and edit multiple copies of this file and create the OOP structure

?>