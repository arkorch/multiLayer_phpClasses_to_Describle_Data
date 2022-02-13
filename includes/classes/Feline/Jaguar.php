<?php
//for all DOGS
namespace Feline;
use Animal;
use Traits\Legs; //getting the class name 
class Jaguar extends Feline{  //setting the name to the class
                    use Legs;
                        /**
                         * @var string
                         */
                        //giving it a name
                        protected $name = 'Jaguar';
                        public function run(): string
                        {
                            
                            return "Jaguars are not known for their speed. They climb trees.";
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
                        return $this->name . " feed on 80-85 species of animals. They are carnivorous.";
                    }

                    public function drink(): string
                    {
                        //to show the drink string
                        //to import the method name from the main php file in includes
                        return "The jaguars primarily drink water from a distant water source.";
                    }

                    public function speak(): string
                    {
                        //to show the speak string
                        //to import the method name from the main php file in includes
                        return "Unlike other big cats, they produce fewer sounds for communication.";
                    }
                    
                    
                }
                //note: create the functions like the reference video and return the text about the animals
                //make and edit multiple copies of this file and create the OOP structure

?>