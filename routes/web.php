<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $phpVariable = 'PHP VARIABLE';

    // matches our VueX State, preventing jank when Vue Mounts
    $initial_state = [
        'vueVariable' => 'SET FROM PHP LOL',
        'list' => ['this', 'loaded', 'in', 'php'],
        'childItems' => collect([
            ['name' => 'unr', 'admin' => true],
            ['name' => 'jon', 'admin' => false],
            ['name' => 'ryan', 'admin' => false],
        ]),
        'count' => 420,
    ];

    return view('welcome')
        ->with('initial_state', $initial_state)
        ->with('phpVariable', $phpVariable);
});
