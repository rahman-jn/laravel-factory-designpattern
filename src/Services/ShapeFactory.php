<?php
namespace Rahman\Designpatterns\Services;
use Rahman\Designpatterns\Services\Interfaces\Shape;

/**
 * Implementing the Factory design pattern
 */
class ShapeFactory {

    /**
     * Choose and return the propper Shape object based on the given parameter
     * @param String $shape
     */
    public function getShape(String $shapeType) {
        switch($shapeType){

            case "circle" : 
                return new Circle();

            case "rectangle":
                return new Rectangle();

            case "triangle":
                return new Triangle();

            default:
                return null;
        }
    }
}