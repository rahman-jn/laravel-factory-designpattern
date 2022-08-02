<?php
namespace Rahman\Designpatterns\Services;
use Rahman\Designpatterns\Interfaces\Shape;

class Circle implements Shape {
    
    /**
     * Implement the interface methods
     * This method returns the name of the view file for rendering in the controller method
     * @return String
     */
    public function draw() : String{
        return 'circle';
    }
}