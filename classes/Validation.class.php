<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 08:22
 */

class Validation extends Exception {

    static function arg_is_int($dirty=0,$arg='')
    {
        if ( !is_numeric($dirty))
        {
            throw new Exception("Error #001: the {$arg} argument must be an integer.");
            return false;
        }
        return true;
    }

    static function ary_be_drawn(array $widget_ary)
    {
        if (!is_array($widget_ary) && count($widget_ary)){
            throw new Exception("Error #002: Widgets are not able to be drawn.");
            return false;
        }

        return true;
    }

} 