@extends('layouts.app')

@section('title-block')Заказы @endsection

@section('content')
<div class="container">

  <div class="nav_bar mt-5 mb-5">
    <div class="nav_bar_block shopping_bag">
      <a href="{{route('orders')}}">
        <span>
          <button class="tablinks"  id="defaultOpen">
            <img src="/img/icons/bag.png" alt="shopping_bag">
            <br>
            Заказы
          </button>
        </span>
      </a>
    </div>

    <div class="nav_bar_block favorites">
      <a href="{{route('favorites')}}">
        <span>
          <button class="tablinks" >
            <img src="/img/icons/heart.png" alt="heart">
            <br>
            Фавориты
          </button>
        </span>
      </a>
    </div>

    @can('admin')
    <div class="nav_bar_block favorites">
      <a href="{{route('add_book')}}">
        <span>
          <button class="tablinks" >
            <img src="/img/icons/book.png" alt="heart">
            <br>
            Добавить книгу
          </button>
        </span>
      </a>
    </div>
    @endcan
  </div>


  <!-- <div class="container " id="Orders">
    <div class="album mt-4 mb-4">
      <div class="container">
        <div class="container">
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">№</th>
                      <th scope="col">Имя</th>
                      <th scope="col">Login</th>
                      <th scope="col">Email</th>
                      <th scope="col">Адрес</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                  </tbody>
                </table>


                <div class="row mb-4 d-flex justify-content-between align-items-center">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="/img/books/book1.jpeg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-muted">Shirt</h6>
                    <h6 class="text-black mb-0">Cotton T-shirt</h6>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-black mb-0">1</h6>
                      </div>

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0">€ 44.00</h6>
                  </div>
                  @can('admin')
                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted">&#10006;</a>
                  </div>
                  @endcan
                </div>

                <hr class="my-4">

                <p>Доставка: </p>
                <p>Цена: </p>
                <div class="d-flex justify-content-between align-items-center">
                  @can('admin')
                  <div class="btn-group">
                    <a href="" class="btn btn-sm btn-outline-secondary text-decoration-none">Редактировать</a>
                    <a href="" class="btn btn-sm btn-outline-secondary text-decoration-none">Удалить</a>
                  </div>
                  @endcan
                  <small class="text-muted">date</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->





  <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
            Заказ #1
          </a>
        </div>
        <div id="collapseOne" class="collapse " data-bs-parent="#accordion">
          <div class="card-body">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">№</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Login</th>
                  <th scope="col">Email</th>
                  <th scope="col">Адрес</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
              </tbody>
            </table>


            <div class="row mb-4 d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="/img/books/book1.jpeg" class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <h6 class="text-muted">Shirt</h6>
                <h6 class="text-black mb-0">Cotton T-shirt</h6>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-black mb-0">1</h6>
                  </div>

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h6 class="mb-0">€ 44.00</h6>
              </div>
              @can('admin')
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-muted">&#10006;</a>
              </div>
              @endcan
            </div>

            <hr class="my-4">

            <p>Доставка: </p>
            <p>Цена: </p>
            <div class="d-flex justify-content-between align-items-center">
              @can('admin')
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary text-decoration-none">Редактировать</a>
                <a href="" class="btn btn-sm btn-outline-secondary text-decoration-none">Удалить</a>
              </div>
              @endcan
              <small class="text-muted">date</small>
            </div>

          </div>
        </div>
      </div>


      <!-- <div class="card">
        <div class="card-header">
          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
          Collapsible Group Item #2
        </a>
        </div>
        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
            Collapsible Group Item #3
          </a>
        </div>
        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div> -->
    </div>






</div>
@endsection
