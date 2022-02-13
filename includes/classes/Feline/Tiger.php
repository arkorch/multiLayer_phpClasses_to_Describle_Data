<?php
//for all DOGS
namespace Feline;
use Animal;
use Traits\Legs; //getting the class name 
class Tiger extends Feline{ //setting the name to the class
                    use Legs;
                        /**
                         * @var string
                         */

                        protected $name = 'Tiger';

                        //giving it a name

                    /**
                    * 
                    * A short msg to about what animal eat 
                    * @return string
                    */   

        //---------xx------------xx-----------


                    public function run(): string
                    {
                        
                        return "Tigers are fast and silent runners.";
                    }
                    public function eat(): string
                    {
                        //to show the eat string
                        //to import the method name from the main php file in includes
                        return "Tigers eats a variety of prey, ranging in size from termites to elephant calves.";
                    }

                    public function drink(): string
                    {
                        //to show the drink string
                        //to import the method name from the main php file in includes
                        return "Tigers are generally found around watering holes, since they are mammals they nurse their young ones.";
                    }

                    public function speak(): string
                    {
                        //to show the speak string
                        //to import the method name from the main php file in includes
                        return "Tiger's roar sounds more like a growl.";
                    }
                    
                   
                }
                //note: create the functions like the reference video and return the text about the animals
                //make and edit multiple copies of this file and create the OOP structure

?>