<?php
/**
 * Created by PhpStorm.
 * User: feroj21
 * Date: 4/20/2015
 * Time: 12:34 PM
 */

include 'Cars.php';
include 'CarFactory.php';

$buttons = array('red','black');
foreach($buttons as $b) {
    echo CarFactory::createCar($b)->getHtml();
}