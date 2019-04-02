@extends('layout')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')

    <div id="content" class="col-sm-9">
        <div class="list-group">
            <div class="welcome"><h4 style=" text-align: center;"> " The clean and modern look allows you to
                    use the theme for every kind of eCommerce online shop. Great Looks on Desktops, Tablets
                    and Mobiles. "</h4></div>
        </div>

        <div id="product-tab-0" class="product-tab">
            <ul id="tabs-0" class="tabs clearfix">
                <li class="active"><a href="#tab-featured-0">Featured</a></li>
                <li><a href="#tab-latest-0">Latest</a></li>
                <li><a href="#tab-bestseller-0">Bestseller</a></li>
                <li><a href="#tab-special-0">Special</a></li>
            </ul>
            <div id="tab-featured-0" class="tab_content deactive" style="display: block;">
                <div class="row products-category product_carousel_tab mod" style="display: block;">

                    @for ($i = 0; $i < count($featured); $i++)
                    <div class="product-grid col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product-thumb">
                            <div class="image"><a href="{{ route('products.show', [$featured[$i]->id, $featured[$i]->slug]) }}">
                                    <img style="max-height: 196px; max-width: 196px;" src="{{ asset($featured[$i]->images[0]->image) }}"
                                            alt="{{ $featured[$i]->title }}" title="{{ $featured[$i]->title }}" class="img-responsive"></a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="{{ route('products.show', [$featured[$i]->id, $featured[$i]->slug]) }}">{{ $featured[$i]->title }}</a>
                                </h4>
                                <p class="" style="font-size: 13px; margin: 10px 0;">Rating: {{ $featured[$i]->rating }}</p>
                                <p class="price">${{ $featured[$i]->price }}</p>
                            </div>
                            <div class="button-group">
                                @if ($featured[$i]->available_quantity > 0)
                                    <form action="{{ route('cart.store', $featured[$i]) }}"
                                          method="POST">
                                        {{ csrf_field() }}
                                        <button class="btn-primary" type="submit"><span>Add to Cart</span></button>
                                    </form>
                                @endif
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title=""
                                            data-original-title="Add to Wish List"><i class="fa fa-heart"></i> <span>Add to Wish List</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        @if (($i + 1) % 4 === 0)
                            <span class="clearfix visible-lg-block"></span>
                        @endif
                    @endfor

                </div>
            </div>
            <div id="tab-latest-0" class="tab_content deactive">
                <div class="row products-category product_carousel_tab mod" style="display: block;">


                    @for ($i = 0; $i < count($latest); $i++)
                        <div class="product-grid col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="product-thumb">
                                <div class="image"><a href="{{ route('products.show', [$latest[$i]->id, $latest[$i]->slug]) }}">
                                        <img style="max-height: 196px; max-width: 196px;" src="{{ asset($latest[$i]->images[0]->image) }}"
                                             alt="{{ $latest[$i]->title }}" title="{{ $latest[$i]->title }}" class="img-responsive"></a>
                                </div>
                                <div class="caption">
                                    <h4>
                                        <a href="{{ route('products.show', [$latest[$i]->id, $latest[$i]->slug]) }}">{{ $latest[$i]->title }}</a>
                                    </h4>
                                    <p class="" style="font-size: 13px; margin: 10px 0;">Rating: {{ $latest[$i]->rating }}</p>
                                    <p class="price">${{ $latest[$i]->price }}</p>
                                </div>
                                <div class="button-group">
                                    @if ($latest[$i]->available_quantity > 0)
                                        <form action="{{ route('cart.store', $latest[$i]) }}"
                                              method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn-primary" type="submit"><span>Add to Cart</span></button>
                                        </form>
                                    @endif
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title=""
                                                data-original-title="Add to Wish List"><i class="fa fa-heart"></i> <span>Add to Wish List</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (($i + 1) % 4 === 0)
                            <span class="clearfix visible-lg-block"></span>
                        @endif
                    @endfor

                </div>
            </div>
            <div id="tab-bestseller-0" class="tab_content deactive">
                <div class="row products-category product_carousel_tab mod" style="display: block;">

                    @for ($i = 0; $i < count($featured); $i++)
                        <div class="product-grid col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="product-thumb">
                                <div class="image"><a href="{{ route('products.show', [$featured[$i]->id, $featured[$i]->slug]) }}">
                                        <img style="max-height: 196px; max-width: 196px;" src="{{ asset($featured[$i]->images[0]->image) }}"
                                             alt="{{ $featured[$i]->title }}" title="{{ $featured[$i]->title }}" class="img-responsive"></a>
                                </div>
                                <div class="caption">
                                    <h4>
                                        <a href="{{ route('products.show', [$featured[$i]->id, $featured[$i]->slug]) }}">{{ $featured[$i]->title }}</a>
                                    </h4>
                                    <p class="" style="font-size: 13px; margin: 10px 0;">Rating: {{ $featured[$i]->rating }}</p>
                                    <p class="price">${{ $featured[$i]->price }}</p>
                                </div>
                                <div class="button-group">
                                    @if ($featured[$i]->available_quantity > 0)
                                        <form action="{{ route('cart.store', $featured[$i]) }}"
                                              method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn-primary" type="submit"><span>Add to Cart</span></button>
                                        </form>
                                    @endif
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title=""
                                                data-original-title="Add to Wish List"><i class="fa fa-heart"></i> <span>Add to Wish List</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (($i + 1) % 4 === 0)
                            <span class="clearfix visible-lg-block"></span>
                        @endif
                    @endfor
                </div>
            </div>

            <div id="tab-special-0" class="tab_content deactive">
                <div class="row products-category product_carousel_tab mod" style="display: block;">

                    @for ($i = 0; $i < count($featured); $i++)
                        <div class="product-grid col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="product-thumb">
                                <div class="image"><a href="{{ route('products.show', [$featured[$i]->id, $featured[$i]->slug]) }}">
                                        <img style="max-height: 196px; max-width: 196px;" src="{{ asset($featured[$i]->images[0]->image) }}"
                                             alt="{{ $featured[$i]->title }}" title="{{ $featured[$i]->title }}" class="img-responsive"></a>
                                </div>
                                <div class="caption">
                                    <h4>
                                        <a href="{{ route('products.show', [$featured[$i]->id, $featured[$i]->slug]) }}">{{ $featured[$i]->title }}</a>
                                    </h4>
                                    <p class="" style="font-size: 13px; margin: 10px 0;">Rating: {{ $featured[$i]->rating }}</p>
                                    <p class="price">${{ $featured[$i]->price }}</p>
                                </div>
                                <div class="button-group">
                                    @if ($featured[$i]->available_quantity > 0)
                                        <form action="{{ route('cart.store', $featured[$i]) }}"
                                              method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn-primary" type="submit"><span>Add to Cart</span></button>
                                        </form>
                                    @endif
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title=""
                                                data-original-title="Add to Wish List"><i class="fa fa-heart"></i> <span>Add to Wish List</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (($i + 1) % 4 === 0)
                            <span class="clearfix visible-lg-block"></span>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#product-tab-0 .tab_content").addClass("deactive");
                $("#product-tab-0 .tab_content:first").show();
                //Default Action
                $("ul#tabs-0 li:first").addClass("active").show(); //Activate first tab
                //On Click Event
                $("ul#tabs-0 li").click(function () {
                    $("ul#tabs-0 li").removeClass("active"); //Remove any "active" class
                    $(this).addClass("active"); //Add "active" class to selected tab
                    $("#product-tab-0 .tab_content").hide();
                    var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
                    $(activeTab).fadeIn(); //Fade in the active content
                    return false;
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#content .product_carousel_tab .product-layout').attr('class', 'product-grid col-lg-3 col-md-3 col-sm-4 col-xs-6');
                $('#content .product_carousel_tab').css('display', 'block');
                $screensize = $(window).width();
                if ($screensize > 1199) {
                    $(".products-category.product_carousel_tab > .clearfix").remove();
                    $('.products-category.product_carousel_tab .product-grid:nth-child(4n)').after('<span class="clearfix visible-lg-block"></span>');
                }
                if ($screensize < 1199) {
                    $(".products-category.product_carousel_tab > .clearfix").remove();
                    $('.products-category.product_carousel_tab .product-grid:nth-child(4n)').after('<span class="clearfix visible-lg-block visible-md-block"></span>');
                }
                if ($screensize < 991) {
                    $(".products-category.product_carousel_tab > .clearfix").remove();
                    $('.products-category.product_carousel_tab .product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block visible-sm-block"></span>');
                }
                if ($screensize < 767) {
                    $(".products-category.product_carousel_tab > .clearfix").remove();
                    $('.products-category.product_carousel_tab .product-grid:nth-child(2n)').after('<span class="clearfix visible-lg-block visible-xs-block"></span>');
                }
                $(window).resize(function () {
                    $screensize = $(window).width();
                    if ($screensize > 1199) {
                        $(".products-category.product_carousel_tab > .clearfix").remove();
                        $('.products-category.product_carousel_tab .product-grid:nth-child(4n)').after('<span class="clearfix visible-lg-block"></span>');
                    }
                    if ($screensize < 1199) {
                        $(".products-category.product_carousel_tab > .clearfix").remove();
                        $('.products-category.product_carousel_tab .product-grid:nth-child(4n)').after('<span class="clearfix visible-lg-block visible-md-block"></span>');
                    }
                    if ($screensize < 991) {
                        $(".products-category.product_carousel_tab > .clearfix").remove();
                        $('.products-category.product_carousel_tab .product-grid:nth-child(3n)').after('<span class="clearfix visible-lg-block visible-sm-block"></span>');
                    }
                    if ($screensize < 767) {
                        $(".products-category.product_carousel_tab > .clearfix").remove();
                        $('.products-category.product_carousel_tab .product-grid:nth-child(2n)').after('<span class="clearfix visible-lg-block visible-xs-block"></span>');
                    }
                });
            });
        </script>

        <div id="bigshop-banner1" class="bigshop-banner">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 moderns"><a href="#"><img
                                src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/banners/small-banner1-410x170.jpg"
                                alt="sample banner" title="sample banner"></a></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 moderns"><a href="#"><img
                                src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/banners/small-banner-410x170.jpg"
                                alt="sample banner 2" title="sample banner 2"></a></div>
            </div>
        </div>


    </div>
@endsection
