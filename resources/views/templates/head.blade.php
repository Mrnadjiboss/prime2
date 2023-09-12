

<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->
                            <div class="aa-language">

                            </div>
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>#NumeroTelephone</p>
                            </div>
                            <!-- / cellphone -->

                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <li><a href="/account">S'INSCRIRE</a></li>
                                <li><a href="/account">MON COMPTE</a></li>
                                <!-- <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li> -->
                                <li class="hidden-xs"><a href="/cart">MON PANIER</a></li>
                                <li class="hidden-xs"><a href="checkout.html"></a></li>
                                <li><a href="" data-toggle="modal" data-target="#login-modal">SE
                                        CONNECTER</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="index.html">
                                <!-- <span class="fa fa-shopping-cart"></span> -->
                                <p style="font-family: 'Edu SA Beginner', cursive;">Exotic<strong>Oil</strong>
                                    <span>Les Huiles essentiels Et Exotic</span>
                                </p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="/cart">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">SHOPPING CART</span>
                                <span class="aa-cart-notify"></span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    @foreach ($cartItems as $cartItem)
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img
                                                    src="{{ $cartItem->product->img }}"
                                                    style="height: 100px; width : 100px" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">{{ $cartItem->product->name }}</a></h4>
                                                <p> {{ $cartItem->quantity }} x $ {{ $cartItem->product->price }} $
                                                </p>
                                            </div>
                                            {{-- <a class="aa-remove-product" href="#"></a> --}}
                                            <form
                                                action="{{ route('cart.remove', ['product' => $cartItem->product->id]) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="aa-remove-product"><span
                                                        class="fa fa-times"></span></button>

                                            </form>
                                        </li>
                                    @endforeach
                                    <li>
                                        <span class="aa-cartbox-total-title">
                                            Total
                                        </span>
                                        <span class="aa-cartbox-total-price">
                                            {{ $cartTotal }} $
                                        </span>
                                    </li>
                                </ul>
                                <style>
                                    .aa-cartbox-checkout:hover{
                                        box-shadow: black 13px;
                                        transform: scale(1.1, 1.1);
                                        transition: 0.5s

                                    }
                                </style>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                                <form action="{{ route('cart.clear') }}" method="post">
                                    @csrf
                                    <button type="submit" class=" aa-cartbox-checkout aa-primary-btn">Clear
                                        Cart</button>
                                </form>
                            </div>
                        </div>
                        <!-- / cart box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- END SCROLL TOP BUTTON -->
<!-- --------------------------------------------- -->


<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">ACCEUIL</a></li>
                        <li><a href="#">PRODUITS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">#typed'huiles</a></li>
                                <li><a href="#">#typed'huiles</a></li>
                                <li><a href="#">#typed'huiles</a></li>
                                <li><a href="#">#typed'huiles</a></li>
                                <li><a href="#">#typed'huiles</a></li>
                                <li><a href="#">#typed'huiles</a></li>
                            </ul>
                        </li>
                        <li><a href="#">PROMOTIONS</a></li>
                        <!-- <li><a href="#">DIGITAL <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Camera</a></li>
              <li><a href="#">Mobile</a></li>
              <li><a href="#">Tablet</a></li>
              <li><a href="#">Laptop</a></li>
              <li><a href="#">Accesories</a></li>
            </ul>
          </li>          -->
                        <li><a href="blog-archive.html">BLOG<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-archive.html">Blog 1</a></li>
                                <li><a href="blog-archive-2.html">Blog 2</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="contact.html">A PROPOS</a></li>
                        <!-- <li><a href="#">Pages <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="product.html">Shop Page</a></li>
              <li><a href="product-detail.html">Shop Single</a></li>
              <li><a href="404.html">404 Page</a></li>
            </ul>
          </li> -->
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
