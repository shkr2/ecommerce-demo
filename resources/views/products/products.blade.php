@extends('layout')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div id="content" class="col-sm-9">
        <h1>{{ $current_s_category->title }}</h1>
        <div class="row">
            <div class="col-sm-12"><p>{{ $current_s_category->description }}</p>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $screensize = $(window).width();

                if ($screensize > 991) {
                    $('.category-list-thumb > div:nth-child(6n)').after('<div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>');
                }
                if ($screensize < 767) {
                    $('.category-list-thumb > div:nth-child(3n)').after('<div class="clearfix visible-lg-block visible-md-block visible-xs-block"></div>');
                }
                $(window).resize(function () {
                    $screensize = $(window).width();

                    if ($screensize > 991) {
                        $(".category-list-thumb > .clearfix.visible-lg-block").remove();
                        $('.category-list-thumb > div:nth-child(6n)').after('<div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>');
                    }
                    if ($screensize < 767) {
                        $(".category-list-thumb > .clearfix.visible-lg-block").remove();
                        $('.category-list-thumb > div:nth-child(3n)').after('<div class="clearfix visible-lg-block visible-md-block visible-xs-block"></div>');
                    }
                });
            });
        </script>
        <div class="product-filter">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="btn-group">
                        <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title=""
                                data-original-title="List"><i class="fa fa-th-list"></i></button>
                        <button type="button" id="grid-view" class="btn btn-default selected" data-toggle="tooltip"
                                title="" data-original-title="Grid"><i class="fa fa-th"></i></button>
                    </div>
                    <a href=""
                       id="compare-total">Product Compare (0)</a></div>
                <div class="col-sm-2 col-xs-4 text-right">
                    <label class="control-label" for="input-sort">Sort By:</label>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-8 text-right">
                    <select id="input-sort" class="form-control col-sm-3">
                        <option value="1">Rating (Highest)</option>
                        <option value="2">Rating (Lowest)</option>
                        <option value="3">Name (A - Z)</option>
                        <option value="4">Name (Z - A)</option>
                        <option value="5">Price (Low &gt; High)</option>
                        <option value="6">Price (High &gt; Low)</option>

                    </select>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#input-sort").val(getSpecificURLParameter(window.location.href, 'order_by'));
                        })
                    </script>

                    <script type="text/javascript">
                        $('#input-sort').on("change", function () {
                            var e = document.getElementById("input-sort");
                            var selected_value = e.options[e.selectedIndex].value;
                            window.location.assign(updateURLParameter(window.location.href, 'order_by', selected_value));
                        });
                    </script>

                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-sm-1 col-xs-4 text-right">
                    <label class="control-label" for="input-limit">Show:</label>
                </div>
                <div class="col-sm-2 col-xs-8 text-right">
                    <select id="input-limit" class="form-control">
                        <option value="1">8</option>
                        <option value="2">16</option>
                        <option value="3">24</option>
                        <option value="4">32</option>
                    </select>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#input-limit").val(getSpecificURLParameter(window.location.href, 'pagination'));
                        })
                    </script>

                    <script type="text/javascript">
                        $('#input-limit').on("change", function () {
                            var e = document.getElementById("input-limit");
                            var selected_value = e.options[e.selectedIndex].value;
                            window.location.assign(updateURLParameter(window.location.href, 'pagination', selected_value));
                        });
                    </script>

                </div>
            </div>
        </div>
        <br>
        <div class="row products-category">

            @for ($i = 0; $i < count($products); $i++)
                <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="product-thumb">
                        <div class="image"><a style="width: 100%"
                                              href="{{ route('products.show', [$products[$i]->id, $products[$i]->slug]) }}">
                                <img style="max-height: 196px; max-width: 196px;"
                                     src="{{ asset($products[$i]->images[0]->image) }}"
                                     alt="{{ $products[$i]->title }}"
                                     title="{{ $products[$i]->title }}" class="img-responsive">
                            </a>
                        </div>
                        <div>
                            <div class="caption">
                                <h4>
                                    <a href="{{ route('products.show', [$products[$i]->id, $products[$i]->slug]) }}">{{ $products[$i]->title }}</a>
                                </h4>
                                <p class="" style="font-size: 13px; margin: 10px 0;">Rating: {{ $products[$i]->rating }}</p>
                                <p class="price">${{ $products[$i]->price }}</p>
                            </div>
                            <div class="button-group">
                                @if ($products[$i]->available_quantity > 0)
                                    <form action="{{ route('cart.store', $products[$i]) }}"
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
                </div>

                @if (($i + 1) % 4 === 0)
                    <span class="clearfix visible-lg-block"></span>
                @endif
            @endfor


        </div>
        <div class="row">
            <div class="col-sm-12 text-center">{{ $products->appends(Request::only ('order_by', 'pagination'))->render() }}</div>
        </div>
    </div>

@endsection