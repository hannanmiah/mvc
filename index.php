<?php
include 'app/config.php';

Route::get('index', 'Index@index');
Route::get('about-us', 'AboutUs@view');
Route::get('contact-us', function () {
    echo "<h2>This is contact us page!</h2>";
});
