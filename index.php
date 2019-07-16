<?php
include 'app/config.php';

Route::set('index', function () {
    Index::createView();
});
Route::set('about-us', function () {
    AboutUs::createView();
});
Route::set('contact-us', function () {
    ContactUs::createView();
});
