<header id="header">
    <div id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-top-left">
                        <ul id="top-links" class="clearfix">
                            <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                            <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                            <li><a href="cart.html" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                            <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                        </ul>
                    </div><!-- End .header-top-left -->
                    <div class="header-top-right">
                        <div class="header-top-dropdowns pull-right">
                            <div class="btn-group dropdown-money">
                                <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                    <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">&euro;</span></a></li>
                                    <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">&pound;</span></a></li>
                                </ul>
                            </div><!-- End .btn-group -->
                            <div class="btn-group dropdown-language">
                                <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                    <span class="flag-container"><img src="{{ asset('user/img/england-flag.png') }}" alt="flag of england"></span>
                                    <span class="hide-for-xs">English</span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#"><span class="flag-container"><img src="{{ asset('user/img/italy-flag.png') }}" alt="flag of england"></span><span class="hide-for-xs">Italian</span></a></li>
                                    <li><a href="#"><span class="flag-container"><img src="{{ asset('user/img/spain-flag.png') }}" alt="flag of italy"></span><span class="hide-for-xs">Spanish</span></a></li>
                                    <li><a href="#"><span class="flag-container"><img src="{{ asset('user/img/france-flag.png') }}" alt="flag of france"></span><span class="hide-for-xs">French</span></a></li>
                                    <li><a href="#"><span class="sm-separator"><img src="{{ asset('user/img/germany-flag.png') }}" alt="flag of germany"></span><span class="hide-for-xs">German</span></a></li>
                                </ul>
                            </div><!-- End .btn-group -->
                        </div><!-- End .header-top-dropdowns -->
                        <div class="header-text-container pull-right">
                            <!-- Authentication Links -->
                            <p class="header-text">Welcome to Venedor!@if(isset(Auth::user()->name)) {{ Auth::user()->name }}@endif</p>
                            @if (Route::has('login'))
                                    @auth
                                        @if(Auth::user()->isDisabled())
                                            <strong><a href="{{ route('index') }}" class="nav-link">Главная</a></strong>
                                        @elseif(Auth::user()->isUser())
                                            <strong><a href="{{ url('/user/index') }}" class="nav-link">Кабинет</a></strong>
                                            <strong><a href="{{ route('index') }}" class="nav-link">Главная</a></strong>
                                        @elseif(Auth::user()->isVisitor())
                                            <strong><a href="{{ route('index') }}" class="nav-link">Главная</a></strong>
                                        @elseif(Auth::user()->isAdministrator())
                                            <strong><a href="{{ url('/admin/index') }}" class="nav-link">Панель Администратора</a></strong>
                                            <strong><a href="{{ route('index') }}" class="nav-link">Главная</a></strong>
                                        @endif
                                        <strong>
                                            <a class="dropdown-item" href="{{ route('logout') }}" class="nav-link"
                                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Выйти
                                            </a>
                                        </strong>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                            @csrf
                                        </form>
                                    @else
                                        <strong>
                                            <a href="{{ route('login') }}" class="nav-link">Войти</a>
                                        </strong>
                                        @if(Route::has('register'))
                                            <strong>
                                                <a href="{{ route('register') }}" class="nav-link">Регистрация</a>
                                            </strong>
                                        @endif
                                    @endauth
                            @endif
                        </div><!-- End .pull-right -->
                    </div><!-- End .header-top-right -->
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End #header-top -->
    <div id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                    <h1 class="logo clearfix">
                        <span>Responsive eCommerce Template</span>
                        <a href="{{ route('index') }}" title="Venedor eCommerce Template"><img src="{{ asset('user/img/logo.png') }}" alt="Venedor Commerce Template" width="238" height="76"></a>
                    </h1>
                </div><!-- End .col-md-5 -->
                <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
                    <div class="header-box contact-infos pull-right">
                        <ul>
                            <li><span class="header-box-icon header-box-icon-skype"></span>venedor_support</li>
                            <li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:venedor@gmail.com">venedor@gmail.com</a></li>
                        </ul>
                    </div><!-- End .contact-infos -->
                    <div class="header-box contact-phones pull-right clearfix">
                        <span class="header-box-icon header-box-icon-earphones"></span>
                        <ul class="pull-left">
                            <li>+(404) 158 14 25 78</li>
                            <li>+(404) 851 21 48 15</li>
                        </ul>
                    </div><!-- End .contact-phones -->
                </div><!-- End .col-md-7 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        <div id="main-nav-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 clearfix">
                        <nav id="main-nav">
                            <div id="responsive-nav">
                                <div id="responsive-nav-button">
                                    Menu <span id="responsive-nav-button-icon"></span>
                                </div><!-- responsive-nav-button -->
                            </div>
                            <ul class="menu clearfix">
                                <li>
                                    <a class="active" href="{{ route('index') }}">HOME</a>
                                </li>
                                @foreach($header_cat as $h_cat)
                                <li class="mega-menu-container"><a href="#">{{ $h_cat->title }}</a>
                                    <div class="mega-menu clearfix">
                                        @foreach($category as $cat)
                                        <div class="col-5">
                                            @if($h_cat->id == $cat->parent_id)
                                                <a href="{{ route('product', $cat->id) }}" class="mega-menu-title">{{ $cat->title }}</a><!-- End .mega-menu-title -->
                                                @foreach($category as $cat1)
                                                    @if($cat->id == $cat1->parent_id)
                                                    <ul class="mega-menu-list clearfix">
                                                        <li><a href="{{ route('product', $cat1->id) }}">{{ $cat1->title }}</a></li>
                                                    </ul>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div><!-- End .col-5 -->
                                        @endforeach
                                    </div><!-- End .mega-menu -->
                                </li>
                                @endforeach
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div id="quick-access">
                            <div class="dropdown-cart-menu-container pull-right">
                                <div class="btn-group dropdown-cart">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="cart-menu-icon"></span>
                                        0 item(s) <span class="drop-price">- $0.00</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                        <p class="dropdown-cart-description">Recently added item(s).</p>
                                        <ul class="dropdown-cart-product-list">
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img src="{{ asset('user/img/products/thumbnails/item12.jpg') }}" alt="phone 4"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Cam Optia AF Webcam </a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499</span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img src="{{ asset('user/img/products/thumbnails/item13.jpg') }}" alt="phone 2"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Iphone Case Cover Original</a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499<span class="sub-price">.99</span></span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                        </ul>
                                        <ul class="dropdown-cart-total">
                                            <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                            <li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li>
                                        </ul><!-- .dropdown-cart-total -->
                                        <div class="dropdown-cart-action">
                                            <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                            <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                        </div><!-- End .dropdown-cart-action -->
                                    </div><!-- End .dropdown-cart -->
                                </div><!-- End .btn-group -->
                            </div><!-- End .dropdown-cart-menu-container -->
                            <form class="form-inline quick-search-form" role="form" action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search here">
                                </div><!-- End .form-inline -->
                                <button type="submit" id="quick-search" class="btn btn-custom"></button>
                            </form>
                        </div><!-- End #quick-access -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #nav -->
    </div><!-- End #inner-header -->
</header><!-- End #header -->
