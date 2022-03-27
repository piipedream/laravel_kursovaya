@extends('layouts.app')

@section('title-block')One book @endsection

@section('content')

<div class="books_img_bg">
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <p>Something short and leading about</p>
        <h1>Book Store Online</h1>
      </div>
    </div>
  </section>
</div>

<div class="container">
  <!-- <div class="nav_bar mb-5">
    <div class="nav_bar_block favorites">
      <a href="#">
        <span>
          <img src="/img/icons/heart.png" alt="heart">
          <br>
          Favorites
        </span>
      </a>
    </div>

    <div class="nav_bar_block shopping_bag">
      <a href="{{route('cart')}}">
        <span>
          <img src="/img/icons/bag.png" alt="shopping_bag">
          <br>
          Shopping Bag
        </span>
      </a>
    </div>

    <div class="nav_bar_block avatar">
      <a href="{{route('userpage')}}">
        <span>
          <img src="/img/icons/avatar.png" alt="avatar">
          <br>
          User page
        </span>
      </a>
    </div>
  </div> -->

  <div class="one_book mb-5">
    <div class="oneBook_img">
      <img src="/img/books/book1.jpeg" alt="book">
    </div>

    <div class="oneBook_info">
      <div class="name_book">
        <h1>Благословение небожителей. Том 1</h1>
        <p>Мосян Тунсю</p>
      </div>
      <p class="one_book_price">990 руб.</p>
      <div class="oneBook_btn">
        <a href="#">
          <button type="submit" class="btn btn-dark">В корзину</button>
        </a>
        <a href="#" class="btn_fav_heart">
          &#9825;
        </a>
      </div>

      <div class="book_description">
        <p>Аннотация</p>
        <p>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit
          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <div class="book_inf_footer">
          <span>Жанр: </span>
          <br>
          <span>Страна: </span>
          <br>
          <span>Количество страниц: </span>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
