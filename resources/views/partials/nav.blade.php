<header>
    <div id="header">
        <header class="header-row">
            <div class="container">
                <div class="table-container">

                    <nav class="htop col-md-9 pull-right flip inner" id="top">

                        <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                        <div id="top-links" class="nav pull-right flip">
                            <ul>
                                @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                        <div class="pull-right flip left-top">
                            <div class="links">
                                <ul>
                                    <li><a href="" target="_self"> Custom Links</a></li>
                                    <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                                        <div class="custom_block" style="display: none;">
                                            <ul>
                                                <li>
                                                    <table style="width:275px; height: 250px;">
                                                        <tbody>
                                                        <tr>
                                                            <td><h3>Custom Block</h3></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('img/sb.jpg')}}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><p>This is a CMS block edited from theme admin panel.
                                                                    You can insert any content (HTML, Text, Images)
                                                                    Here. Lorem Ipsum is simply dummy text of the
                                                                    printing and typesetting industry. </p>
                                                                <p><a target="" href="">Read More</a><br></p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=""
                                           id="wishlist-total">Wish List (0)</a></li>
                                </ul>
                            </div>

                            <form action="" method="post" enctype="multipart/form-data" id="language">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span>
                <img src="{{ asset('img/gb.png') }}" alt="English" title="English">English                    <i
                                                    class="fa fa-caret-down"></i></span></button>
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li><a href="en"><img src="{{ asset('img/gb.png') }}" alt="English" title="English">
                                                English</a></li>
                                        <li><a href="ar"><img src="{{ asset('img/ar.png') }}" alt="Arabic" title="Arabic">
                                                Arabic</a></li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="">
                                <input type="hidden" name="redirect"
                                       value="">
                            </form>

                            <form action="" method="post" enctype="multipart/form-data" id="currency">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span>
                                $ USD            <i class="fa fa-caret-down"></i></span></button>
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                    name="EUR">€ Euro
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                    name="GBP">£ Pound Sterling
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                    name="USD">$ US Dollar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="">
                                <input type="hidden" name="redirect"
                                       value="">
                            </form>
                        </div>


                    </nav>

                    <div class="col-table-cel col-md-3 col-sm-4 col-xs-12 inner">
                        <div id="logo"><a
                                    href="{{ route('home.index') }}"><img
                                        class="img-responsive"
                                        src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/catalog/logo.png"
                                        title="Bigshop" alt="Bigshop"></a></div>
                    </div>
                    <div class="col-md-4 col-md-push-5 col-sm-8 col-xs-12 inner">
                        <div class="links_contact pull-right flip">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+91 98989898</li>
                                <li class="email"><a href="mailto:support@bigshop.com"><i class="fa fa-envelope"></i>support@bigshop.com</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                    <div class="col-md-5 col-md-pull-4 col-sm-8 col-xs-12 inner2">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="Search"
                                   class="form-control input-lg ac_input" autocomplete="off" disabled>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <div class="col-md-9 pull-right col-sm-4 col-xs-12 inner">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                    class="heading dropdown-toggle">
                                <div class="pull-left flip">
                                    <h4></h4>
                                </div>
                                @php
                                    $cart_data = getCartCalculation()
                                @endphp
                                <span id="cart-total">{{ Cart::count() }} item(s) - ${{ $cart_data['total'] }}</span> <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        @foreach (Cart::content() as $item)
                                        <tr>
                                            <td class="text-center"><a
                                                        href="{{ route('products.show', [$item->model->id, $item->model->slug]) }}">
                                                    <img style="max-width: 70px"
                                                            src="{{ asset($item->model->images[0]->image) }}"
                                                            alt="{{ $item->model->title }}" title="{{ $item->model->title }}" class="img-thumbnail"></a>
                                            </td>
                                            <td class="text-left"><a
                                                        href="{{ route('products.show', [$item->model->id, $item->model->slug]) }}">{{ $item->model->title }}</a>
                                            </td>
                                            <td class="text-right">{{ $item->qty }}</td>
                                            <td class="text-right">${{ $item->model->price * $item->qty }}</td>
                                            <td class="text-center">

                                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" title="" class="btn btn-danger btn-xs remove"><i class="fa fa-times"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>

                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Sub-Total</strong></td>
                                                <td class="text-right">${{ $cart_data['subtotal'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                <td class="text-right">${{ $cart_data['tax'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>VAT (20%)</strong></td>
                                                <td class="text-right">${{ $cart_data['vat'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">${{ $cart_data['total'] }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a class="btn btn-primary"
                                                               href="{{ route('cart.index') }}"><i
                                                        class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a
                                                    class="btn btn-primary"
                                                    href="{{ route('checkout.index') }}"><i
                                                        class="fa fa-share"></i> Checkout</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="container">
            <nav id="menu" class="navbar ">
                <div class="navbar-header"> <span class="visible-xs visible-sm">
                Menu                <i class="fa fa-align-justify pull-right flip"></i></span>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="Home"
                               href="{{ route('home.index') }}">
                                <i class="fa fa-home"></i>
                            </a></li>

                        @foreach ($mcategories as $mcategory)
                            <li class="categories_defu dropdown"><a class="dropdown-toggle"
                                                                    href="{{ route('main_categories.getRelatedSubCategoriesAndProducts', [$mcategory->id, $mcategory->slug]) }}">{{ $mcategory->title }}</a>
                                <span class="submore"></span>
                                <div class="dropdown-menu" style="display: none;">
                                    <ul>
                                        @forelse ($mcategory->subCategories as $scategory)
                                        <li>
                                            <a href="{{ route('sub_categories.getRelatedProducts', [$scategory->id,  $scategory->slug]) }}">{{ $scategory->title }}</a>
                                        </li>
                                        @empty

                                        @endforelse
                                    </ul>
                                </div>
                            </li>
                        @endforeach


                        <li class="menu_brands name dropdown">
                            <a href="">Brands</a>
                            <span class="submore"></span>
                            <div class="dropdown-menu" style="display: none;">
                                <ul>
                                    <li>
                                        <a href="">Apple</a>
                                    </li>
                                    <li>
                                        <a href="">Canon</a>
                                    </li>
                                    <li>
                                        <a href="">Hewlett-Packard</a>
                                    </li>
                                    <li>
                                        <a href="">HTC</a>
                                    </li>
                                    <li>
                                        <a href="">Palm</a>
                                    </li>
                                    <li>
                                        <a href="">Sony</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="custom-link"><a href="#" target="_self"> Custom Links</a></li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>Custom Block</a>
                            <span class="submore"></span>
                            <div class="dropdown-menu custom_block" style="">
                                <ul>
                                    <li>
                                        <table style="width:275px; height: 250px;">
                                            <tbody>
                                            <tr>
                                                <td><h3>Custom Block</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/sb2.jpg')}}">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><p>This is a CMS block edited from theme admin panel. You can insert
                                                        any content (HTML, Text, Images) Here. Lorem Ipsum is simply
                                                        dummy text of the printing and typesetting industry. </p>
                                                    <p><br></p>
                                                    <p><a target="" href="">Read More</a><br></p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="contact-link"><a href="">Contact Us</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>