<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 09:11
 */

class Drawing{

    public function __construct($widgets){

        echo "\r\n";

        Validation::ary_be_drawn($widgets);

        foreach ($widgets as $widget)
        {
           echo get_class($widget) . "(" . $widget->getX() . "," . $widget->getY() . ") " . $widget->exportArgs() ."\r\n";
        }

        echo "\r\nTykkaatko mun kuva??\r\n";

    }
} 