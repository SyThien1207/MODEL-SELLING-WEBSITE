<style>
  .header-search-container {
    display: flex;
    align-items: center;
    width: 150%;
    /* Chiếm toàn bộ chiều rộng */
  }
</style>
<header>



  <div class="header-main">

    <div class="container">

      <a href="#" class="header-logo">
        <img src="{{asset("images/banner/1719504528.jpg") }}" width="100" height="70" alt="Anon's logo" width="120" height="36">
      </a>
      <form action="{{ route('product.search') }}" method="GET" class="form-inline">
        <div class="header-search-container">
          <input type="search" name="key" class="form-control search-field" placeholder="Enter your product name..." value="{{ request()->input('key') }}">
          <button type="submit" class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>
      </form>
      <div class="header-user-actions">


        @if(Auth::check())
        <form id="logout-form" action="{{ route('website.logout') }}" method="post" style="display: none;">
          @csrf
        </form>

        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <button class="action-btn">
            <ion-icon name="log-out-outline"></ion-icon>
          </button>
        </a>
        @if(Auth::user()->roles === 'admin')
        <a href="{{ route('admin.dashoard.index') }}">
          <button class="action-btn">

            <ion-icon name="settings-outline"></ion-icon>
          </button>

        </a>
        @endif
        @else
        <a href="{{ route('website.getlogin') }}">
          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>
        </a>
        @endif

        <a href="{{route('like.index')}}">

        <button class="action-btn">
    <ion-icon name="heart-outline"></ion-icon>
    <span class="count">{{ count(session('likes', [])) }}</span>
</button>

        </a>
        <a href="{{route('cart.index')}}">
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            @php
            $count=count(session('carts',[]));
            @endphp
            <span class="count">({{$count}})</span>
          </button>
        </a>
      </div>



    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <a href="{{route('cart.index')}}">
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            @php
            $count=count(session('carts',[]));
            @endphp
            <span class="count">({{$count}})</span>
          </button>
        </a>
<a href="/">
      <button class="action-btn" >
        <ion-icon name="home-outline"></ion-icon>
      </button>
</a>
<a href="{{route('like.index')}}">

<button class="action-btn">
<ion-icon name="heart-outline"></ion-icon>
<span class="count">{{ count(session('likes', [])) }}</span>
</button>

</a>    
      <button class="action-btn" data-mobile-menu-open-btn>

        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>


    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      
      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="/" class="menu-title">TRang chủ</a>
        </li>

        <li class="menu-category">
          <a href="/tat-ca-bai-viet" class="menu-title">Bài viết</a>
        </li>
        <li class="menu-category">
          <a href="/lien-he" class="menu-title">TRang chủ</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Hoang dã</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="/san-pham/san-moi" class="submenu-title">Săn mồi</a>
            </li>

            <li class="submenu-category">
              <a href="/san-pham/hoang-da" class="submenu-title">Hoang dã</a>
            </li>

           
          </ul>

        </li>

       

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>







    </div>

  </div>
  <x-main-menu />



</header>