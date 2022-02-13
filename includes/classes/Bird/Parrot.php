<?php
//for all birds 
namespace Bird;
use Animal; //getting the class name 
class Parrot extends Bird{ //setting the name to the class
 
                /**
                 * @var string
                 */

                protected $name = 'Parrot';
                public function fly(): string
                {
                    //to show the last one
                    //to import the method name from the main php file in includes
                    return "They Can Fly";
                }
            /**
            * 
            * A message about how animals eats
            * @return string
            */   

            public function eat(): string
            {
                //to show the eat string
                //to import the method name from the main php file in includes

                return $this->name . " eats a diet that contains nuts, flowers, fruit, buds, seeds and insects. ";
            }

            public function drink(): string
            {
            //to show the drink string
                //to import the method name from the main php file in includes
                return "Juice are extremely beneficial for the health and life of a parrot. ";
            }

            public function speak(): string
            {
            //to show the speak string
                //to import the method name from the main php file in includes
                return "When parrots feel happy they chirp, whistle, purr and click their tongues.";
            }
            
        }

        //note: create the functions like the reference video and return the text about the animals
        //make and edit multiple copies of this file and create the OOP structure
?>