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
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/best-sellers', function () {
    return view ('about',[
        "title" => "best-seller",
        "name" => "fatma nh",
        "email" => "fatmanurulhidayah347@gmail.com",
        "img" => "9.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Juudul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "fatma nh",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corporis animi. Facilis aliquam nesciunt laboriosam ea amet commodi, voluptas distinctio ex adipisci nobis rerum earum deserunt necessitatibus error similique officia! Dolor, est, labore fuga nemo necessitatibus atque velit porro, impedit ipsa consequuntur optio. Deserunt odio illo optio molestiae incidunt qui quia, amet dignissimos nemo saepe nisi quisquam. Molestiae, natus perferendis aspernatur distinctio corporis quidem, maiores necessitatibus praesentium obcaecati voluptates commodi recusandae suscipit hic enim aut, provident asperiores aliquid reprehenderit eveniet?"
        ],
        [
            "title" => "Juudul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ariq",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corporis animi. Facilis aliquam nesciunt laboriosam ea amet commodi, voluptas distinctio ex adipisci nobis rerum earum deserunt necessitatibus error similique officia! Dolor, est, labore fuga nemo necessitatibus atque velit porro, impedit ipsa consequuntur optio. Deserunt odio illo optio molestiae incidunt qui quia, amet dignissimos nemo saepe nisi quisquam. Molestiae, natus perferendis aspernatur distinctio corporis quidem, maiores necessitatibus praesentium obcaecati voluptates commodi recusandae suscipit hic enim aut, provident asperiores aliquid reprehenderit eveniet?"
            ],
        ];
    return view ('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Single post
Route::get('posts/{slug}',function($slug) {
    $blog_posts = [
        [
        "title" => "Juudul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "fatma nh",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corporis animi. Facilis aliquam nesciunt laboriosam ea amet commodi, voluptas distinctio ex adipisci nobis rerum earum deserunt necessitatibus error similique officia! Dolor, est, labore fuga nemo necessitatibus atque velit porro, impedit ipsa consequuntur optio. Deserunt odio illo optio molestiae incidunt qui quia, amet dignissimos nemo saepe nisi quisquam. Molestiae, natus perferendis aspernatur distinctio corporis quidem, maiores necessitatibus praesentium obcaecati voluptates commodi recusandae suscipit hic enim aut, provident asperiores aliquid reprehenderit eveniet?"
        ],
        [
            "title" => "Juudul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ariq",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corporis animi. Facilis aliquam nesciunt laboriosam ea amet commodi, voluptas distinctio ex adipisci nobis rerum earum deserunt necessitatibus error similique officia! Dolor, est, labore fuga nemo necessitatibus atque velit porro, impedit ipsa consequuntur optio. Deserunt odio illo optio molestiae incidunt qui quia, amet dignissimos nemo saepe nisi quisquam. Molestiae, natus perferendis aspernatur distinctio corporis quidem, maiores necessitatibus praesentium obcaecati voluptates commodi recusandae suscipit hic enim aut, provident asperiores aliquid reprehenderit eveniet?"
            ],
        ];
        
        $new_post=[];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
            $new_post = $post;
            }
        }
    return view('post',[
        "title" => "Single post",
        "post" => $new_post
        ]);
});
