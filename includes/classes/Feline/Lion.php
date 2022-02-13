<?php
//for all DOGS
namespace Feline;
use Animal;
use Traits\Legs;  //getting the class name 
class Lion extends Feline{  //setting the name to the class
                    use Legs;
                        /**
                         * @var string
                         */
                        //giving it a name
                        protected $name = 'Lion';
                        public function run(): string
                        {
                            
                            return "Lions can run fast and climb trees.";
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
                        return $this->name . " is at the top of the food chain. It consumes only meat.";
                    }

                    public function drink(): string
                    {
                        //to show the drink string
                        //to import the method name from the main php file in includes
                        return "Lions can go up to four days without drinking water.";
                    }

                    public function speak(): string
                    {
                        //to show the speak string
                        //to import the method name from the main php file in includes
                        return "A lions are known to roar. Their sound is easily identifiable.";
                    }
                    
                   
                }
                //note: create the functions like the reference video and return the text about the animals
                //make and edit multiple copies of this file and create the OOP structure

?>