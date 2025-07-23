<?php

use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Team;
use App\Models\Post; // ini tidak terpakai 
use App\Models\User;

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

// buat class agar dapat di akses di luar function 
// class Blog
// {
//     // mengembalikan data semua array
//     public static function all()
//     {
//         return
//             [
//                 [
//                     'id' => 1,
//                     'uuid' => '87a6a641-44ee-4579-9fc4-ecc0deeda9e8',
//                     'topik' => 'Partrick Out',
//                     'dini' => '15 Maret 2020',
//                     'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta beatae, laborum
//                 libero voluptatum
//                 fugit voluptatem ullam quia nesciunt cupiditate hic neque, culpa, unde dolores eos tempore temporibus
//                 aspernatur possimus!',
//                 ],
//                 [
//                     'id' => 2,
//                     'uuid' => '62966d02-a5d7-4281-9b1e-9af801f0c04d',
//                     'topik' => 'STY Back',
//                     'dini' => '30 Maret 2022',
//                     'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur optio officiis facere
//             perspiciatis asperiores aperiam eveniet. Quod illum magni provident neque odio repudiandae nesciunt,
//             aspernatur voluptatibus porro, quis iure nam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
//             Commodi numquam dolore veniam, repellendus explicabo deleniti ad accusamus, eveniet repudiandae error
//             adipisci, labore nisi recusandae culpa perferendis qui laudantium dolores neque.',
//                 ],
//             ];
//     }
// }

Route::get('/about', function () {
    // return view('about');
    return view('about', [
        'title' => 'About Me',
        'nama' => 'Aqram Alhidayatullah',
        'umur' => 20,

    ]);
});

Route::get('/', function () {
    // return view('welcome');
    return view('home', [
        'title' => 'Beranda',
    ]);
    // return 'Hello, World!';
});
// Route::get('/cal', function () {
//     return view('cal', [
//         'title' => 'Schedule Page',
//     ]);
// });
Route::get('/cal/{month?}/{year?}', [CalendarController::class, 'show']);
// Route::get('/blog', function () {
//     return view('blog', [
//         'title' => 'Blog Page',
//     ]);
// });
Route::get('/pages', function () {
    return view('pages', [
        'title' => 'My Page',
        'pages' => Post::all(),
    ]);
});
// sekarang sudah mengggunaakn pemanggilan Model dari db
Route::get('/category/{kategori:list}', function (Kategori $kategori) {
    return view('page', [
        'title' => 'Article: #' . $kategori->list,
        'blogs' => $kategori->post,

    ]);
});
Route::get('/authors/{user:remember_token}', function (User $user) {
    return view('page', [
        'title' => '[' . count($user->post) . ']  Article by ' . $user->name,
        'blogs' => $user->post,

    ]);
});
// Route::get('/page/{post:uuid}', function (Post $post) {
//     return view('page', [
//         'title' => 'Single Page',
//         // sekarang data yang dikirim di ambil dari kelas Blog di atas
//         // 'blogs' => $post,
//         'blog' => $post,

//     ]);
// });
Route::get('/team', function () {
    return view('team', [
        'title' => 'Team Page',
        'team' => Team::all(),
    ]);
});
Route::get('/blog/{uuid}', function ($uuid) {
    // jadi variabel array $posts = sekarang data yang dikirim di ambil dari kelas Blog di atas
    // $post = Arr::first($posts, function ($post) use ($uuid) {
    //     return $post['uuid'] == $uuid;
    // });
    // karena tdk butuh variabel $post 
    // sekarang sumber data dari kelas Blog di atas
    // kode pencarian dibawah ini sudah di pindahin ke model karena beban ini seharusnya tidak di tulis dsiini
    // $post = Arr::first(Blog::all(), function ($post) use ($uuid) {
    //     return $post['uuid'] == $uuid;
    // });
    // panggil method yang sudah di simpan di Model Blog buatan untuk find data
    $post = Blog::find($uuid);

    // dd($post);
    return view('/blogs', [
        'title' => 'Blog Page',
        'blog' => $post
    ]);
});
Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog Page',
        // sekarang data yang dikirim di ambil dari kelas Blog di atas
        'posts' => Blog::all(),

    ]);
});
