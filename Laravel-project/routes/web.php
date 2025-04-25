<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
function getusers() {
    return [
        ['name' => 'Bindu', 'email' => 'bindu@example.com', 'city' => 'Mohali'],
        ['name' => 'Aman', 'email' => 'aman@example.com', 'city' => 'Chandigarh'],
        ['name' => 'Ravi', 'email' => 'ravi@example.com', 'city' => 'Delhi'],
    ];
}


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/test', function () {
    return 'hello test';
});

//Route::view('/post','post');

// Route::get('/post/{id}',function(string $id){
//     return 'hello para passing ::'.$id ;
// });

// Route::get('/post/{id?}',function(string $value = null){
//     if($value){
//         return 'hello para passing ::'.$value ;
//     }
//     else{
//         return 'no id found' ;
//     }

// })->whereNumber($value);

Route::get('/post/{id?}/{slug?}/{type?}/{uuid?}', function (?int $id = null, ?string $slug = null, ?string $type = null, ?string $uuid = null) {
    return response()->json([
        'id' => $id ?? 'no id found',
        'slug' => $slug ?? 'no slug found',
        'type' => $type ?? 'no type found',
        'uuid' => $uuid ?? 'no uuid found',
    ]);
})
    ->whereNumber('id')
    ->whereAlpha('slug')
    ->whereIn('type', ['news', 'blog']);
//->whereUuid('uuid');

Route::get('/first', function () {
    return view('first');
})->name('first');

Route::get('/second', function () {
    return view('second');
})->name('second');

Route::get('/third', function () {
    return view('third');
})->name('third');

Route::redirect('/second', '/third');

Route::fallback(function () {
    return '<h3>page not found</h3>';
});

Route::prefix('post')->group(function () {
    Route::get('/create', function () {
        return 'Create Post Page';
    });

    Route::get('/edit', function () {
        return 'Edit Post Page';
    });

    Route::get('/{id}', function ($id) {
        return "Post ID: $id";
    });
});
Route::get('/blade', function () {
    return view('blade_main_directives_second');
})->name('blade');



Route::get('/pages/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/javascript_uses', function () {
    return view('layout.javascript_uses');
})->name('javascript_uses');


Route::get('/users', function () {
 $username = "bindu";
 $allusers = getusers();
 return view('pass-data-to-route.users',
 [
    'username' => $username, 
    'city' => 'mohali',
    'allusers' =>  $allusers
    
]);

// return view('pass-data-to-route.user')
// ->with('username' , $username,)
// ->with('city' , 'mohali');


// $city = 'mohali';

// return view('pass-data-to-route.user', compact('username', 'city'));

})->name('users');


Route::get('/user/{id}', function ($id) {

    $allusers = getusers();
  $userid = $allusers[$id];

  abort_if(!isset($allusers[$id]), 404);
   // return "<h2>User ID: {$id}</h2>";

    return view('pass-data-to-route.user', 
    [
        'id' => $userid,
        ]
);

})->name('user');
