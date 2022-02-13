<?php
//for all birds 
namespace Bird;
use Animal; //getting the class name 
class Bird extends Animal{ //setting the name to the class
            /**
             * @var string
             */
            //giving it a name
             protected $name = 'Bird';
 
            /**
            * 
            * A message about how animals eats
            * @return string
            */   

 //---------xx------------xx-----------


            public function eat(): string
            {
                //to show the eat string
                //to import the method name from the main php file in includes
            
                return $this->name . " eat a variety of foods";// now show casing what birds eat 
            }

            public function drink(): string
            {
                //to show the drink string
                //to import the method name from the main php file in includes
                return "All birds drink water from natural sources";
            }

            public function speak(): string
            {
                //to show the speak string
                //to import the method name from the main php file in includes
                return "Birds are known to chirp.";
            }
            public function fly(): string
            {
                //to show the last one
                //to import the method name from the main php file in includes
                return "Birds soar high in the sky";
            }
        }
        //note: create the functions like the reference video and return the text about the animals
        //make and edit multiple copies of this file and create the OOP structure
?>