<?php
namespace Rahman\Designpatterns\Controllers;

use App\Http\Controllers\Controller;
use Rahman\Designpatterns\Services\Interfaces\Shape;
use Rahman\Designpatterns\Services\ShapeFactory;

class FactoryController extends Controller
{
    /** this method just display the links for choosing the desired shapes
     * The links goes to the drawer method and return the proper shape
     */
    public function index(){
        return view("design_patterns::factory.index");
    }

    /**
     * This method gets the shape paremeter and draw the desired shape through the factory design pattern
     * @param String $shape
     */
    public function drawer($shape)
    {
        //New instance of ShapeFactory
        $shapeFactory = new ShapeFactory();

        //Pass the given parameter to the factory method to have the proper shape object
        $shapeObj = $shapeFactory->getShape($shape);

        //Get the view file name and pass it to the return line to show the proper shape
        $viewFile = $shapeObj->draw();
        return view("design_patterns::factory.$viewFile");
    }

}