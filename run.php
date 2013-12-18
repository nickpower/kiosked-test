<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 18/12/2013
 * Time: 07:39
 * Autoloader / Starting up code
 */

//Code from Php.net
function autoLoaderNPTest($class) {
    include 'classes/' . $class . '.class.php';
}

spl_autoload_register('autoLoaderNPTest');

// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

// The Procedure
$widgets = array();

$widgets[] = new Rectangle('x=10,y=10,width=30,height=40');
$widgets[] = new Square('x=15,y=30,size=35');
$widgets[] = new Ellipse('x=100,y=150,diameterH=300,diameterV=200');
$widgets[] = new Circle('x=1,y=1,size=300');
$widgets[] = new Textbox('x=5,y=5,width=200,height=100,text=sample text');

$drawing = new Drawing($widgets); //Constructor will echo out the widgets to make the drawing

?>