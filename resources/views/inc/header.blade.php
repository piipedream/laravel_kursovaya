<header>
  <div class="navbar navbar-light">
    <div class="container">
      <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
        <img src="/img/logo.png" alt="logo" class="mr-5 width="30" height="30"">
        <strong style="margin-left: 5px;">bookStore</strong>
      </a>
      <nav class="nav_header">
        <a class="me-3 py-2 text-black text-decoration-none" href="{{route('home')}}">home</a>
        <a class="me-3 py-2 text-black text-decoration-none" href="{{route('books')}}">books</a>
        @can('admin')
          <a class="me-3 py-2 text-black text-decoration-none" href="">заявки</a>
        @endcan
      </nav>

      @if (Auth::check())
      <div class="">
          <a href="{{route('userpage')}}">
            <span>{{ Auth::user()->login }}</span>
          </a>
          <a href="{{route('cart')}}" class="mr-5 img_cart">
            <img src="/img/icons/bag.png" alt="cart">
            Shopping bag
          </a>
          <a href="{{ route('user.logout') }}" class="btn btn-outline-dark me-2">Logout</a>
      </div>
      @else
      <div class="registr_btn">
          <a href="{{route('user.login')}}" class="btn btn_1 me-2">log in</a>
          <a href="{{route('user.signup')}}"  class="btn btn_2 me-2">sign up</a>
      </div>
      @endif
    </div>
  </div>
</header>
