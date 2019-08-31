<?php
include 'app/config.php';

Route::get('index', 'Index@index');
Route::get('about-us', function () {
    AboutUs::createView();
});
Route::get('contact-us', function () {
    ContactUs::createView();
});
