@extends('layouts.app')

@section('title-block')home @endsection

@section('content')

<div class="home_img_bg">
  <section class="py-5 container">
    <div class="row py-lg-5">
      <div class="col-lg-8 col-md-8 mb-5 home_head">
        <p class="lead ">Book Store Online</p>
        <h1 class="mb-5">Something short and leading about the collection</h1>
        <a href="{{route('books')}}">
          <button type="submit" class="btn btn_home btn-dark">Buy Now</button>
        </a>
      </div>
    </div>
  </section>
</div>

<div class="container">
  <div class="text-center mb-4">
    <h1>Bestsellers</h1>
  </div>

  <div class="books_bestsellers">
    <div class="card" style="width: 18rem;">
      <img src="/img/books/book1.jpeg" alt="book">
      <div class="card-body card_description">
        <div class="card_bookname">
          <h5 class="card-title">Благословение небожителей. Том 1</h5>
          <p class="card-text">Мосян Тунсю</p>
        </div>
        <div class="price">
          <a href="#" class="">
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
            <button type="button" class="btn btn-outline-dark btn_addcart">Купить сейчас</button>
          </a>
          <p>400 р.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script type="text/javascript">

</script> -->
@endsection
