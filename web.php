<?php

use Gondr\Route;

Route::get("/", "StaticController@index");

if(!isset($_SESSION['user'])) {
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
}else {
    Route::get("/logout", "UserController@logout");
    Route::get("/post", "PostController@writePage");
    Route::post("/post", "PostController@writeProcess");
}
