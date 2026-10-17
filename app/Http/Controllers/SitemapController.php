<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $urls = [
            ['loc' => url('/'),               'priority' => '1.0'],
            ['loc' => url('/business-scope'), 'priority' => '0.8'],
            ['loc' => url('/about-us'),       'priority' => '0.8'],
            ['loc' => url('/products'),       'priority' => '0.9'],
            ['loc' => url('/contact-us'),     'priority' => '0.7'],
        ];

        return response()
            ->make('<?xml version="1.0" encoding="UTF-8"?>' . "\n" . view('sitemap', compact('urls'))->render())
            ->header('Content-Type', 'application/xml');
    }
}
