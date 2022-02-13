<?php

//enumerate all the classes here
use Bird\Bird;
use Canine\Canine;
use Feline\Feline;

//---------xx------------xx-----------

// This class will return top 3 animal in term of power on each category
class Top3 
{    
                /**
                 * @var Canine
                 */
                protected $canine;
                /**
                 * @var Feline
                 */
                protected $feline;
                /**
                 * @var Bird
                 */
                protected $bird;
                /**
                 * @param Bird $bird
                 * @param Canine $canine
                 * @param Feline $feline
                 */

                public function __construct(Canine $canine, Feline $feline, Bird $bird)
                { 
                    $this->canine = $canine;
                    $this->feline = $feline;
                    $this->bird = $bird;
                }
            }

            //---------xx------------xx-----------


            
            //note: create the functions like the reference video and return the text about the animals
            //make and edit multiple copies of this file and create the OOP structure
?> 