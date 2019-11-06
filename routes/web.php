<?php

// app()->bind('example',function(){
//   return new App\studentdatabase;
// });

// app()->singleton('example',function(){
//     return new App\studentdatabase;
//   });


Route::get('/', function () {
    return view('welcome');
});
Route::resource('/student','BasicController');
Route::patch('/tasks/{task}','studenttaskscontroller@update');