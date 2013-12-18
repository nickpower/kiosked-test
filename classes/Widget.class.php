<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 07:42
 * Widget class provides the fundamentals for a Widget to be made and given properties such as 2d dimensions
 */

class Widget {

    //The following Properties are required by subclasses

    private $x = 0; // x position of the widget int
    private $y = 0; // y position of the widget int

    //private $width, $height, $size, $diameterV, $diameterH, $text;

    private $permittedArgs = array('x','y');//The permitted arguments for this widget
    /*
     * Widget instance method
     */
    public function __construct($args="")
    {
        //Wanted to provide the args as a text string, that way I can copy and paste from the PDF
        $args = explode(',',$args);

        //Args into key=value pairs.
        foreach( $args as $val ){
            $tmp = explode( '=', $val );
            $finalArray[ $tmp[0] ] = $tmp[1];
        }
        $args = $finalArray;

        foreach($args as $key => $val)
        {
            if ( in_array($key,$this->permittedArgs) ){

                $this->{$key} = $val;
            }else{
                throw new Exception("Invalid argument for :" . get_class($this) . " '{$key}'");
            }

        }

    }

    /**
     * @param array $permittedArgs
     */
    public function setPermittedArgs($permittedArgs)
    {
        $this->permittedArgs = $permittedArgs;
    }

    /**
     * @param string $permittedArgs
     */
    public function addPermittedArgs($permittedArgs)
    {
        $this->permittedArgs[] = $permittedArgs;
    }

    /**
     * @return array
     */
    public function getPermittedArgs()
    {
        return $this->permittedArgs;
    }

    public function exportArgs()
    {
        $exportArgs = $this->permittedArgs;

        unset($exportArgs['x']); //Not needed
        unset($exportArgs['y']); //Not needed

        $exportString = '';

        foreach ( $exportArgs as $key)
        {
            $exportString .= $key . '=' . $this->{$key} . ", ";
        }

        return $exportString;
    }

    /**
     * @param int $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }



} 