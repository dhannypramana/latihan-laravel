<?php

use Illuminate\Support\Facades\Route;
use function League\CommonMark\Reference\get;
use Illuminate\Http\Request;

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

// CRUD Lirary
Route::get('/', function () {
    return view('login');
});

Route::get('/home', 'HelloController@home')->name('back');
Route::get('/home/delete/{id}', 'HelloController@deleteData')->name('deleteData');

Route::get('/home/insert', 'HelloController@move_insert_page')->name('move_insert_page');
Route::get('/home/edit/{id}', 'HelloController@move_edit_page')->name('move_edit_page');

Route::post('/home/insert', 'HelloController@insertData')->name('insertData');
Route::post('/home/edit/{id}', 'HelloController@editData')->name('editData');
// CRUD Lirary

// Simple Blog
Route::get('/main', function () {
    return view('main', [
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Dhanny Adhi Pramana",
        'email' => "p.dhannypramana@gmail.com",
        'image' => "pp-trans.png"
    ]);
});

Route::get('/posts', function () {
    $blog_post = [
        [
            'title' => "Judul Post Pertama",
            'author' => "Dhanny Adhi Pramana",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe iste quis quia perferendis eaque eveniet, expedita excepturi repudiandae, magnam rerum, corporis quae. Veritatis architecto necessitatibus doloremque? A quidem nam, nulla facilis labore nemo. Esse ducimus aperiam ut minima ad quae dolor totam repellat. Tempora delectus magnam laboriosam quo, aspernatur architecto? Eveniet vel itaque recusandae omnis reiciendis. Fugiat, voluptatibus nobis maiores necessitatibus nisi eos voluptas ipsa, possimus consectetur amet facere eligendi aspernatur ea quibusdam, aut ex enim laudantium. Praesentium, quo ratione!"
        ],
        [
            'title' => "Judul Post Kedua",
            'author' => "Doddy Ferdiansyah",
            'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe iste quis quia perferendis eaque eveniet, expedita excepturi repudiandae, magnam rerum, corporis quae. Veritatis architecto necessitatibus doloremque? A quidem nam, nulla facilis labore nemo. Esse ducimus aperiam ut minima ad quae dolor totam repellat. Tempora delectus magnam laboriosam quo, aspernatur architecto? Eveniet vel itaque recusandae omnis reiciendis. Fugiat, voluptatibus nobis maiores necessitatibus nisi eos voluptas ipsa, possimus consectetur amet facere eligendi aspernatur ea quibusdam, aut ex enim laudantium. Praesentium, quo ratione!"
        ]
    ];

    return view('posts', [
        'title' => "Posts",
        'posts' => $blog_post
    ]);
});
// Simple Blog