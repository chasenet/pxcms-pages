<?php

$namespace .= '\Module';

/** Route::get('PAGE_URL', ['as' => 'USABLE_NAME', 'uses' => $namespace.'\PagesController@getPAGE_URL']); **/
Route::get('about', ['as' => 'about', 'uses' => $namespace.'\PagesController@getAbout']);
Route::get('/', ['as' => 'home', 'uses' => $namespace.'\PagesController@getHome']);
