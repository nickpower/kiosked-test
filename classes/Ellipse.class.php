<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 08:05
 * Sub class for the Square widget
*/

class Ellipse extends Widget{

    private $horizontal_diameter = null;
    private $vertical_diameter = null;

    public function __construct($args)
    {
        //Add an extra argument to the list
        $this->addPermittedArgs('diameterH');
        $this->addPermittedArgs('diameterV');
        parent::__construct($args);

    }

}