<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/business-scope', function () {
    return view('pages.business');
});

Route::get('/products', function () {
    return view('pages.product');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/sitemap.xml', 'App\Http\Controllers\SitemapController');
