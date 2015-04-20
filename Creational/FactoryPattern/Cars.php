<?php
/**
 * Created by PhpStorm.
 * User: feroj21
 * Date: 4/20/2015
 * Time: 12:26 PM
 */

abstract class Car {
    protected $_html;

    public function getHtml(){
        return $this->_html;
    }

}

class RedCar extends Car{
    protected $_html = "Red Car Created";
}
class GreenCar extends Car{
    protected $_html = "Green Car Created";
}
class BlueCar extends Car{
    protected $_html = "Blue Car Created";
}
class BlackCar extends Car{
    protected $_html = "Black Car Created";
}