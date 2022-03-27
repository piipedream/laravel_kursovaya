<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/books/one_book', function () {
    return view('one_book');
})->name('one_book');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// ---------------------

Route::get('/cart/checkout', function () {
    return view('checkout');
})->middleware('auth')->name('checkout');

Route::get('/userpage', function () {
    return view('userpage');
})->middleware('auth')->name('userpage');

Route::get('/userpage/addBook',
'App\Http\Controllers\AddBookController@AddBook'
)->middleware('auth')->name('addBook');


Route::name('user.')->group(function(){

  Route::get('/login', function () {
      if(Auth::check()){
        return redirect(route('user.userpage'));
      }
      return view('login');
  })->name('login');

  Route::post('/login', 'App\Http\Controllers\LoginController@login');

  Route::get('/logout', function(){
      Auth::logout();
      return redirect(route('home'));
  })->name('logout');

  Route::get('/signup', function () {
      if(Auth::check()){
          return redirect(route('user.userpage'));
      }
      return view('signup');
  })->name('signup');

  Route::post('/signup', 'App\Http\Controllers\RegisterController@save');

});
