<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 08:05
 * Sub class for the Square widget
*/

class Circle extends Widget{

    protected $size = null;

    public function __construct($args)
    {
        //Add an extra argument to the list
        $this->addPermittedArgs('size');
        parent::__construct($args);

    }

}