<?php

use Illuminate\Http\Request;

Route::group(['namespace'=> 'PouyaParsaei\Contact\Http\Controllers'],function(){
    Route::get('contact','ContactController@index')->name('contact.form');
    Route::post('contact','ContactController@send')->name('contact.send');
});
