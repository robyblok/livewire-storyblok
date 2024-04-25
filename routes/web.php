<?php

use Illuminate\Support\Facades\Route;
use Storyblok\Client;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {

    $client = new Client(config('storyblok.api_key'));
    $data = $client->editMode(config('storyblok.draft'))->getStoryBySlug('home')
        ->getBody();

    return view('home', ['story' => $data['story']]);
});
