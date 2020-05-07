<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <span class="logo-lg"> <img src="/adminresource/assets/images/logo-dark.png" alt="" height="19"></span> 
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> {{__('Menu')}}
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">{{__('Home')}} </a></li>
          <li class="nav-item dropdown">


        <!-- Authentication Links -->
        @guest
            <li class="nav-item"><a href="/shop" class="nav-link"> {{__('shop')}} </a></li>
            <li class="nav-item"><a href="/blog" class="nav-link"> {{__('Blog')}} </a></li>
            <li class="nav-item"><a href="/contact" class="nav-link"> {{__('Contact')}} </a></li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else

          <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{__('Shop')}} </a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="/shop"> {{__('Shop')}} </a>
            <a class="dropdown-item" href="/cart"> {{__('Wishlist')}} </a>
          </div>

          <li class="nav-item cta cta-colored"><a href="/cart" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
          <li class="nav-item"><a href="/order" class="nav-link"> {{__('Order')}} </a></li>
          <li class="nav-item"><a href="/blog" class="nav-link"> {{__('Blog')}} </a></li>
          <li class="nav-item"><a href="/contact" class="nav-link"> {{__('Contact')}} </a></li>

          <li class="nav-item dropdown">

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href=""> {{ __('Account') }} </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        @endguest
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->