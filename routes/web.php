<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "shofian",
        "email" => "shofian@gmail.com",
        "image" => "images.jpg"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title"  => "Judul Post Pertama",
            "slug"   => "judul-post-pertama",
            "author" => "Shofian",
            "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem hic distinctio reiciendis consequatur modi itaque incidunt deserunt officiis quas, voluptate placeat aliquam iste maxime doloremque aut eum. Cumque iste magnam impedit, quam nemo quia! Ducimus beatae assumenda molestiae quasi omnis explicabo dolorem ad dignissimos delectus hic, tenetur facilis porro neque nulla autem repudiandae, ut adipisci. Quaerat voluptatem, maiores qui odit incidunt enim, neque provident accusantium illo modi, similique temporibus. Dolore consequuntur sit ad laudantium fuga natus neque voluptates porro, in et quaerat perspiciatis adipisci quisquam nesciunt minus totam. Ipsum asperiores modi ad exercitationem nesciunt amet commodi autem doloremque quae sint."
        ],

        [
            "title"  => "Judul Post Kedua",
            "slug"   => "judul-post-kedua",
            "author" => "Shofian Katanya",
            "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem hic distinctio reiciendis consequatur modi itaque incidunt deserunt officiis quas, voluptate placeat aliquam iste maxime doloremque aut eum. Cumque iste magnam impedit, quam nemo quia! Ducimus beatae assumenda molestiae quasi omnis explicabo dolorem ad dignissimos delectus hic, tenetur facilis porro neque nulla autem repudiandae, ut adipisci. Quaerat voluptatem, maiores qui odit incidunt enim, neque provident accusantium illo modi, similique temporibus. Dolore consequuntur sit ad laudantium fuga natus neque voluptates porro, in et quaerat perspiciatis adipisci quisquam nesciunt minus totam. Ipsum asperiores modi ad exercitationem nesciunt amet commodi autem doloremque quae sint. Quaerat voluptatem, maiores qui odit incidunt enim, neque provident accusantium illo modi, similique temporibus. Dolore consequuntur sit ad laudantium fuga natus neque voluptates porro, in et quaerat perspiciatis adipisci quisquam nesciunt minus totam. Ipsum asperiores modi ad exercitationem nesciunt amet commodi autem doloremque quae sint."
        ],

    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


