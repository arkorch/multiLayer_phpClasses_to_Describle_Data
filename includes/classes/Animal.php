<?php


//---------xx------------xx----------- 


class Animal{

     /**
     * @var string
     */

        protected $name = 'Animal';

     /**
      * 
      * A short msg to about what animal eat
     * @return string
     */   


//---------xx------------xx-----------


    public function move(): string
    {
    return $this->name. " These animals use paws and hind legs to walk";
    }
     public function eat(): string
     {  //to show the eat string
        //to import the method name from the main php file in includes
         return $this->name . " These animals eat a variety of foods that are carnivorous. ";
     }
      public function drink(): string
    {
        //to show the drink string
        //to import the method name from the main php file in includes
        return "Primarily they drink only water.";
    }

    public function speak(): string
    {
        //to show the speak string
        //to import the method name from the main php file in includes
        return "these animals have distinct growls";
    }
    
}
//note: create the functions like the reference video and return the text about the animals
//make and edit multiple copies of this file and create the OOP structure
 
