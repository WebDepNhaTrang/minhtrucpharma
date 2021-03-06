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

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
// Trang Chủ
Route::get('/', function () {
    return view('theme-default.pages.home');
})->name('frontend.pages.home');

// Giới Thiệu
Route::get('/gioi-thieu.html', function (){
    return view('theme-default.pages.about');
})->name('frontend.pages.about');

// Liên Hệ
Route::get('/lien-he.html', function (){
    return view('theme-default.pages.contact');
})->name('frontend.pages.contact');

// Sản Phẩm
// Route::get('/san-pham.html', function (){
//     return view('theme-default.pages.product');
// })->name('frontend.pages.product');

// Hoạt Động Nổi Bật
Route::get('/hoat-dong-noi-bat.html', function (){
    return view('theme-default.pages.news');
})->name('frontend.pages.news');
// Chi Tiết Hoạt Động Nổi Bật
Route::get('/{slug}_{id}.html', 'FrontendController@newsDetail')
    ->name('frontend.pages.news-detail');

// Chi Tiết Sản Phẩm
Route::get('/san-pham/{slug}_{id}.html', 'FrontendController@productDetail')
->name('frontend.pages.product-detail');

// Tuyển Dụng
Route::get('/tuyen-dung.html', [
    'uses'  => 'FrontendController@recruitment',
    'as'    => 'frontend.pages.recruitment'
]);