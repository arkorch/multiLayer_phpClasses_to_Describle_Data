<?php
//for just cardinals
namespace Bird;
use Animal; //getting the class name 
class Cardinal extends Bird{ //setting the name to the class
 
                    /**
                     * @var string
                     */
                     //giving it a name
                    public function fly(): string
                    {
    
                        return "Cardinals can fly high";
                    }
                 protected $name = 'Cardinal';

                /**
                * 
                * A short msg to about what animal eat
                * @return string
                */   

//---------xx------------xx-----------

                 //to show the eat string
                //to import the method name from the main php file in includes

                public function eat(): string
                {
                    
                    return $this->name . " have a wide range of foods";// now show casing what birds eat 
                }

                public function drink(): string
                {
                    //to show the drink string
                    //to import the method name from the main php file in includes
                    return "Cardinals drink and bathe in water.";
                }

                public function speak(): string
                {        //to show the speak string
                        //to import the method name from the main php file in includes
                
                    return "Cardinals can sing very well.";
                }
              
            }
         //note: create the functions like the reference video and return the text about the animals
        //make and edit multiple copies of this file and create the OOP structure

?>