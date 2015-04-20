<?php
/**
 * Created by PhpStorm.
 * User: feroj21
 * Date: 4/20/2015
 * Time: 12:26 PM
 */

class CarFactory {
    public static function createCar($type){
        $baseClass = 'Car';
        $currentClass = ucfirst($type).$baseClass;

        if(class_exists($currentClass) && is_subclass_of($currentClass,$baseClass)) {
            return new $currentClass;
        }else {
            throw new exception("The Car type '$type' is not recognized.");
        }
    }

}