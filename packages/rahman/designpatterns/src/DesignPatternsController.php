<?php
namespace Rahman\Designpatterns;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DesignPatternsController extends Controller
{

    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }

}