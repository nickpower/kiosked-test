<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 08:05
 * Sub class for the Square widget
*/

class Textbox extends Widget{

    protected $width = 0; //Width of the widget in pixels int
    protected $height = 0; //Height of the widget in pixels int

    protected $textbox = 'New Textbox text';

    public function __construct($args)
    {
        //Add an extra argument to the list
        $this->addPermittedArgs('width');
        $this->addPermittedArgs('height');
        $this->addPermittedArgs('text');

        parent::__construct($args);

    }

}