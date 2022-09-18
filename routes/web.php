<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request;

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

// Example
// Route::view('/show', 'posts.show');
// Route::view('form', 'formpelayanan.formkk');

// Public
Route::get('/', 'adminController@index');
Route::get('/posts/allposts', 'adminController@allPost');
Route::get('/galleries', 'adminController@gallery');
Route::get('posts/{post:slug}', 'PostController@show')->name('showpost');

//ktp
Route::view('formktp', 'formpelayanan.formktp');
Route::post('formktp/store', 'PermohonanController@ktpstore');
//kk
Route::view('formkk', 'formpelayanan.formkk');
Route::post('formkk/store', 'PermohonanController@kkstore');
//aktakelahiran
Route::view('formaktakelahiran', 'formpelayanan.formaktakelahiran');
Route::post('formaktakelahiran/store', 'PermohonanController@aktakelahiranstore');

Route::view('formaktakematian', 'formpelayanan.formaktakematian');
Route::post('formaktakematian/store', 'PermohonanController@aktakematianstore');


Route::view('pelaporankematian', 'formpelayanan.pelaporankematian');
Route::view('persyaratan', 'formpelayanan.persyaratan');
Route::view('suratpernyataan', 'formpelayanan.suratpernyataan');

// Error
Route::get(
    '/logout',
    function () {
        return abort(404);
    }
);
Route::get(
    '/store',
    function () {
        return abort(404);
    }
);

// Admin
Route::middleware('auth')->group(function () {

    // Throw Admin
    Route::get('admin', 'adminController@throwAdmin');
    //post
    Route::get('admin/posts', 'PostController@index')->name('admin.posts');
    Route::get('admin/posts/create', 'PostController@create')->name('create.post');
    Route::post('admin/posts/store', 'PostController@store');
    //update post
    Route::get('admin/posts/{post:slug}/edit', 'PostController@edit')->name('edit.post');
    Route::patch('admin/posts/{post:slug}/edit', 'PostController@update');
    //delete post
    Route::delete('admin/posts/{post:slug}/delete', 'PostController@destroy');


    //slider
    Route::get('admin/sliders', 'sliderController@index');
    Route::get('admin/sliders/create', 'sliderController@create')->name('create.slider');
    Route::post('admin/sliders/store', 'sliderController@store');
    //update slider
    Route::get('admin/sliders/{slider:id}/edit', 'sliderController@edit');
    Route::patch('admin/sliders/{slider:id}/update', 'sliderController@update');
    //delete slider
    Route::delete('admin/sliders/{slider:id}/delete', 'sliderController@destroy');

    // statistic
    Route::get('admin/statistics', 'statisticController@index');
    // Edit Statistic
    Route::get('admin/statistics/{statistic:id}/edit', 'statisticController@edit')->name('edit.statistic');
    Route::patch('admin/statistics/{statistic:id}/update', 'statisticController@update');

    //slider
    Route::get('admin/galleries', 'GalleryController@index');
    Route::get('admin/galleries/create', 'GalleryController@create')->name('create.gallery');
    Route::post('admin/galleries/store', 'GalleryController@store');
    //delete slider
    Route::delete('admin/galleries/{gallery:id}/delete', 'GalleryController@destroy');

    //perangkat desa
    Route::get('admin/perangkatdesa', 'PerangkatDesaController@index')->name('admin.perangkatdesa');
    Route::get('admin/perangkatdesa/create', 'PerangkatDesaController@create')->name('create.perangkatdesa');
    Route::post('admin/perangkatdesa/store', 'PerangkatDesaController@store');
    //update perangkat desa
    Route::get('admin/perangkatdesa/{perangkatdesa:id}/edit', 'PerangkatDesaController@edit')->name('edit.perangkatdesa');
    Route::patch('admin/perangkatdesa/{perangkatdesa:id}/edit', 'PerangkatDesaController@update');
    //delete perangkat desa
    Route::delete('admin/perangkatdesa/{perangkatdesa:id}/delete', 'PerangkatDesaController@destroy');

    //formpelayanan
    //ktp
    Route::get('admin/ktp', 'PermohonanController@ktpindex');
    Route::get('admin/ktp/{ktp:id}', 'PermohonanController@ktptopdf')->name('ktp.pdf');
    Route::delete('admin/ktp/{ktp:id}/delete', 'PermohonanController@ktpdestroy')->name('ktp.destroy');
    //kk
    Route::get('admin/kk', 'PermohonanController@kkindex');
    Route::get('admin/kk/{kk:id}', 'PermohonanController@kktopdf')->name('kk.pdf');
    Route::delete('admin/kk/{kk:id}/delete', 'PermohonanController@kkdestroy')->name('kk.destroy');
    //aktakelahiran
    Route::get('admin/aktakelahiran', 'PermohonanController@aktakelahiranindex');
    Route::get('admin/aktakelahiran/{aktakelahiran:id}', 'PermohonanController@aktakelahirantopdf')->name('aktakelahiran.pdf');
    Route::delete('admin/aktakelahiran/{aktakelahiran:id}/delete', 'PermohonanController@aktakelahirandestroy')->name('aktakelahiran.destroy');
    //aktakematian
    Route::get('admin/aktakematian', 'PermohonanController@aktakematianindex');
    Route::get('admin/aktakematian/{aktakematian:id}', 'PermohonanController@aktakematiantopdf')->name('aktakematian.pdf');
    Route::delete('admin/aktakematian/{aktakematian:id}/delete', 'PermohonanController@aktakematiandestroy')->name('aktakematian.destroy');

});


// Disable Register
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
