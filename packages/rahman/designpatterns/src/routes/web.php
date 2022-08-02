<?php

Route::get('designpatterns/factory', 
  'Rahman\Designpatterns\Controllers\FactoryController@index');

Route::get('designpatterns/factory/drawer/{shape}', 
  'Rahman\Designpatterns\Controllers\FactoryController@drawer');