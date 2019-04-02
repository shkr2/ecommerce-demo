@extends('layout')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div id="content" class="col-sm-9">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul style="list-style-type: none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div itemscope="" itemtype="http://schema.org/Product">
            <h1 itemprop="name">{{ $product->title }}</h1>
            <div class="row product-info">
                <div class="col-sm-6">
                    <script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
                    <div class="image">
                        <div class="zoomWrapper">
                            <img class="img-responsive" itemprop="image" id="zoom_01"
                                 src="{{ asset($product->images[0]->image) }}" title="iPod Classic" alt="iPod Classic"
                                 data-zoom-image="{{ asset($product->images[0]->image) }}" style="max-height: 250px;">
                        </div>
                    </div>
                    <div class="center-block text-center "><span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span>
                    </div>
                    <div class="image-additional" id="gallery_01">
                        @foreach($product->images as $image)
                            <a class="thumbnail" href="#" data-zoom-image="{{ asset($image->image) }}"
                               data-image="{{ asset($image->image) }}" title="{{ asset($product->title) }}"> <img
                                        style="" src="{{ asset($image->image) }}" title="{{ asset($product->title) }}"
                                        alt="{{ asset($product->title) }}"></a>
                        @endforeach
                    </div>
                    <script type="text/javascript">
                        $("#zoom_01").elevateZoom({zoomType: 'inner'});
                    </script>
                    <script type="text/javascript">
                        $("#zoom_01").elevateZoom({
                            gallery: 'gallery_01',
                            cursor: 'pointer',
                            galleryActiveClass: 'active',
                            imageCrossfade: true,
                            zoomWindowFadeIn: 500,
                            zoomWindowFadeOut: 500,
                            lensFadeIn: 500,
                            lensFadeOut: 500,
                            loadingIcon: 'catalog/view/theme/bigshop/image/progress.gif'
                        });
                        //////pass the images to swipebox
                        $("#zoom_01").bind("click", function (e) {
                            var ez = $('#zoom_01').data('elevateZoom');
                            $.swipebox(ez.getGalleryList());
                            return false;
                        });</script>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled description">
                        <li><b>Brand:</b> <a
                                    href=""><span
                                        itemprop="brand">Apple</span></a></li>
                        <li><b>Product Code:</b> <span itemprop="mpn">product 20</span></li>
                        <li><b>Availability:</b> <span style="color:#53af2e; font-weight:bold;">In Stock</span></li>
                    </ul>

                    <ul class="price-box">
                        <li class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <span style="background: url({{ asset('img/price-tag.png') }}) left top no-repeat #555;" class="real" itemprop="price">${{ $product->price }}</span><span
                                    itemprop="availability" content="In Stock"></span></li>
                        <li></li>
                        <li>Ex Tax: $100.00</li>
                    </ul>
                    <div id="product">
                        <div class="cart">
                            <div>

                                @if ($product->available_quantity > 0)
                                    <form action="{{ route('cart.store', $product) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" id="button-cart" data-loading-text="Loading..."
                                                class="btn btn-primary btn-lg">Add to Cart
                                        </button>
                                    </form>
                                @endif

                            </div>
                            <div>
                                <button type="button" class="wishlist" onclick="wishlist.add('48');"><i
                                            class="fa fa-heart"></i> Add to Wish List
                                </button>
                                <br>
                                <button type="button" class="wishlist" onclick="compare.add('48');"><i
                                            class="fa fa-exchange"></i> Compare this Product
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="rating" itemprop="aggregateRating" itemscope=""
                         itemtype="http://schema.org/AggregateRating">
                        <meta itemprop="ratingValue" content="0">
                        <p>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <a href=""><span itemprop="reviewCount">0 reviews</span></a> / <a href="">Write a review</a></p>
                    </div>
                    <hr>

                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-description" itemprop="description">
                    <div class="cpt_product_description ">
                        <div>
                            <p>
                                <strong>More room to move.</strong></p>
                            <p>
                                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic
                                lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                wherever you go.</p>
                            <p>
                                <strong>Cover Flow.</strong></p>
                            <p>
                                Browse through your music collection by flipping through album art. Select an album to
                                turn it over and see the track list.</p>
                            <p>
                                <strong>Enhanced interface.</strong></p>
                            <p>
                                Experience a whole new way to browse and view your music and video.</p>
                            <p>
                                <strong>Sleeker design.</strong></p>
                            <p>
                                Beautiful, durable, and sleeker than ever, iPod classic now features an anodized
                                aluminum and polished stainless steel enclosure with rounded edges.</p>
                        </div>
                    </div>
                    <!-- cpt_container_end --></div>
                <div class="tab-pane" id="tab-review">
                    <form class="form-horizontal" id="form-review">
                        <div id="review"><p>There are no reviews for this product.</p>
                        </div>
                        <h2>Write a review</h2>
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label" for="input-name">Your Name</label>
                                <input type="text" name="name" value="" id="input-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label" for="input-review">Your Review</label>
                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label">Rating</label>
                                &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                <input type="radio" name="rating" value="1">
                                &nbsp;
                                <input type="radio" name="rating" value="2">
                                &nbsp;
                                <input type="radio" name="rating" value="3">
                                &nbsp;
                                <input type="radio" name="rating" value="4">
                                &nbsp;
                                <input type="radio" name="rating" value="5">
                                &nbsp;Good
                            </div>
                        </div>
                        <div class="buttons">
                            <div class="pull-right">
                                <button type="button" id="button-review" data-loading-text="Loading..."
                                        class="btn btn-primary">Continue
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection