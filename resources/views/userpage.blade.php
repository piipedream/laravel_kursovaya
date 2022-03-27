@extends('layouts.app')

@section('title-block')One book @endsection

@section('content')
<div class="container">
  <div class="nav_bar mt-5 mb-5">
    <div class="nav_bar_block shopping_bag">
      <a href="#">
        <span>
          <button class="tablinks" onclick="openTV(event, 'Orders')" id="defaultOpen">
            <img src="/img/icons/bag.png" alt="shopping_bag">
            <br>
            Заказы
          </button>
        </span>
      </a>
    </div>

    <div class="nav_bar_block favorites">
      <a href="#">
        <span>
          <button class="tablinks" onclick="openTV(event, 'Favorites')">
            <img src="/img/icons/heart.png" alt="heart">
            <br>
            Фавориты
          </button>
        </span>
      </a>
    </div>

    <div class="nav_bar_block favorites">
      <a href="#">
        <span>
          <button class="tablinks" onclick="openTV(event, 'add_book')">
            <img src="/img/icons/heart.png" alt="heart">
            <br>
            Добавить книгу
          </button>
        </span>
      </a>
    </div>
  </div>


<!-- block 1 -->
	<div class="container tabcontent" id="Orders">
    <div class="album mt-4 mb-4">
      <div class="container">
        <div class="container">
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <p>Номер заказа: </p>
                <p>Имя: </p>
                <p>Login: </p>
                <p>Email: </p>
                <p>Адрес: </p>
                <!-- <p class="card-text">adwwwwwwwawdqwdq</p> -->

                <div class="row mb-4 d-flex justify-content-between align-items-center">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                      src="/img/books/book1.jpeg"
                      class="img-fluid rounded-3" alt="Cotton T-shirt">
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
	</div>
<!-- block 1 end -->

<!-- block 2 -->
	<div class="container2 tabcontent" id="Favorites">
    <hr class="my-4">

    <div class="row mb-4 d-flex justify-content-between align-items-center">
      <div class="col-md-2 col-lg-2 col-xl-2">
        <img
          src="/img/books/book1.jpeg"
          class="img-fluid rounded-3" alt="Cotton T-shirt">
      </div>
      <div class="col-md-3 col-lg-3 col-xl-3">
        <h6 class="text-muted">Shirt</h6>
        <h6 class="text-black mb-0">Благословение небожителей. Том 1</h6>
      </div>
      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
        <button class="btn btn-link px-2"
          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
          <i class="fas fa-minus"></i>
        </button>

        <input id="form1" min="0" name="quantity" value="1" type="number"
          class="form-control form-control-sm" />

        <button class="btn btn-link px-2"
          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
          <i class="fas fa-plus"></i>
        </button>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
        <h6 class="mb-0">€ 44.00</h6>
      </div>
      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
        <a href="#!" class="btn-outline-fav">
          <button type="button" name="button" class="btn btn-dark">Добавить</button>
        </a>
      </div>
    </div>

    <hr class="my-4">
	</div>
<!-- block 2 end -->
<!-- block 3 -->
	<div class="container3 tabcontent" id="add_book">
    <div class="parent_form_book container">
    <div class="form_login_book">
    <form action="" method="post">

        <div class="form-group mt-3">
            <label for="title" class="mb-2">Название книги <span class="required">*</span></label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="author" class="mb-2">Автор <span class="required">*</span></label>
            <input type="text" name="author" id="author" class="form-control">
        </div>

        <div class="mt-3 form-group">
          <label for="description" class="mb-2">Описание</label>
          <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="row">
          <div class="form-group mt-3 col-md-4 mb-3">
              <label for="genre" class="mb-2">Жанр <span class="required">*</span></label>
              <input type="text" name="genre" id="genre" class="form-control">
          </div>
          <div class="form-group mt-3 col-md-4 mb-3">
              <label for="country" class="mb-2">Страна <span class="required">*</span></label>
              <input type="text" name="country" id="country" class="form-control">
          </div>
          <div class="form-group mt-3 col-md-4 mb-3">
              <label for="pages" class="mb-2">Количество страниц <span class="required">*</span></label>
              <input type="text" name="pages" id="pages" class="form-control">
          </div>
        </div>

        <div class="form-group mt-2 col-md-2 mb-3">
            <label for="price" class="mb-2">Цена <span class="required">*</span></label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="form-group mt-4 mb-4">
          <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="btn_login d-flex align-items-center mb--20 mt-3">
          <div class="form__group mr--30">
            <button type="AddBook" class="btn btn_log btn-dark">Добавить книгу</button>
          </div>
        </div>
    </form>
    </div>
    </div>
	</div>
<!-- block 3 end -->
</div>

<script type="text/javascript">
  function openTV(evt, blockName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(blockName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  document.getElementById("defaultOpen").click();


  var modal = document.getElementById('id01');

  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
</script>
@endsection
