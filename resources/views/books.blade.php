@extends('layouts.app')

@section('title-block')books @endsection

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

  <div class="books_bestsellers">
    <div class="card" style="width: 18rem;">
      <a href="{{route('one_book')}}">
        <img src="/img/books/book1.jpeg" alt="book">
      </a>
      <div class="card-body card_description">
        <div class="card_bookname">
          <a href="{{route('one_book')}}">
            <h5 class="card-title">Благословение небожителей. Том 1</h5>
          </a>
          <a href="{{route('one_book')}}">
            <p class="card-text">Мосян Тунсю</p>
          </a>
        </div>
        <div class="price">
          <a href="{{route('one_book')}}" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>990 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book2.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Лисья нора</h5>
          <p class="card-text">Нора Сакавич</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>360 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book3.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Похитители снов</h5>
          <p class="card-text">Мэгги Стивотер</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>586 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book4.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Мечтатель Стрэндж</h5>
          <p class="card-text">Лэйни Тейлор</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">В корзину</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book4.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Мечтатель Стрэндж</h5>
          <p class="card-text">Лэйни Тейлор</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">В корзину</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book4.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Мечтатель Стрэндж</h5>
          <p class="card-text">Лэйни Тейлор</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">В корзину</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book4.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Мечтатель Стрэндж</h5>
          <p class="card-text">Лэйни Тейлор</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">В корзину</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/books/book4.jpeg" alt="book">
      <div class="card-body">
        <div class="card_bookname">
          <h5 class="card-title">Мечтатель Стрэндж</h5>
          <p class="card-text">Лэйни Тейлор</p>
        </div>
        <div class="price">
          <a href="#" class="">
            <button type="button" class="btn btn-outline-dark btn_addcart">В корзину</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>
  </div>




</div>

@endsection
