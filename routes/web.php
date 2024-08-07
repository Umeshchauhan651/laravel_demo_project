<?php

use Illuminate\Support\Facades\Route;



// Route::view('/post', 'post'); // first route name next view name

// Route::get('/post/{id}', function (string $id) {
//     return "<h1> Post ID : " . $id . "</h1>";
// })->whereNumber('id');

/*~~~~~ optional para route ~~~~~~*/

// Route::get('/post/{id?}', function (string $id = null) {
//     if ($id) {
//         return "<h1> Post ID : " . $id . "</h1>";
//     } else {
//         return "<h1>Id not found</h1>";
//     }
// });
//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    $name = "Umesh Chauhan";
    // return view('post', ['user' => $name, 'city' => 'Botad']);
    return view('post')->with('user', $name)->with('city', 'Botad');
});

Route::prefix('page')->group(function () {
    Route::get('post/firstpost', function () {
        return "<h1>First post page</h1>";
        //view('post');
    });

    Route::get('gallery', function () {
        return "<h1>Gallery page</h1>";
        //view('post');
    });

    Route::get('about', function () {
        return "<h1>About page</h1>";
        //view('about');
    });

    Route::get('/post', function () {
        $name = "Umesh Chauhan";
        return view('post', ['user' => $name, 'city' => 'Botad']);
    });
});


Route::fallback(function () {
    return "<h1>Page not found</h1>";
});
