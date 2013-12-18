<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 08:05
 * Sub class for the Square widget
*/

class Rectangle extends Widget{

    protected $width = 0; //Width of the widget in pixels int
    protected $height = 0; //Height of the widget in pixels int

    public function __construct($args)
    {
        $this->addPermittedArgs('width');
        $this->addPermittedArgs('height');
        parent::__construct($args);

    }

}