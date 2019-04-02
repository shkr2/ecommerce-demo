<column id="column-left" class="col-sm-3 hidden-xs">

    <h3><span>Categories</span></h3>
    <div class="box-category">
        {{--<ul id="cat_accordion">--}}
        <ul id="cat_accordion">
            @foreach ($mcategories as $mcategory)
                <li class="custom_id{{ $mcategory->id }} cutom-parent-li">

                    @if (isset($mcategory->subCategories[0]))
                        <a class="cutom-parent">{{ $mcategory->title }}
                            <span class="dcjq-icon"></span></a>
                    @else
                        <a class="cutom-parent"
                           href="{{ route('main_categories.getRelatedSubCategoriesAndProducts', [$mcategory->id, $mcategory->slug]) }}">{{ $mcategory->title }}
                            <span class="dcjq-icon"></span></a>
                    @endif

                    <span class="down"></span>
                    <ul>
                        @forelse ($mcategory->subCategories as $scategory)
                            <li class="custom_id{{ $scategory->id }}">
                                <a href="{{ route('sub_categories.getRelatedProducts', [$scategory->id,  $scategory->slug]) }}">{{ $scategory->title }}</a>
                            </li>
                        @empty

                        @endforelse
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>

    <h3><span>Bestsellers</span></h3>
    <div class="row products-category mod">

        @foreach ($bestsellers as $bestseller)
            <div class="product-layout">
                <div class="product-thumb clearfix">
                    <div class="image"><a
                                href="{{ route('products.show', [$bestseller->id, $bestseller->slug]) }}"><img
                                    src="{{ asset($bestseller->images[0]->image) }}"
                                    alt="{{ $bestseller->title }}" title="{{ $bestseller->title }}" class="img-responsive"></a>
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="{{ route('products.show', [$bestseller->id, $bestseller->slug]) }}">{{ $bestseller->title }}</a></h4>
                        <p class="price">
                            ${{ $bestseller->price }} </p>
                        <div class="rating">

                            @for($i = 0; $i < 5; $i++)
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <div id="bigshop-banner0" class="bigshop-banner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 moderns"><a href="#"><img
                            src="{{ asset('img/sb.jpg')}}"
                            alt="sample banner" title="sample banner"></a></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 moderns"><a href="#"><img
                            src="{{ asset('img/sb2.jpg')}}"
                            alt="sb" title="sb"></a></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 moderns"><a href="#"><img
                            src="{{ asset('img/sb3.jpg')}}"
                            alt="sb banner" title="sb banner"></a></div>
        </div>
    </div>

    <div class="list-group">
        <h2>Custom Content</h2>
        <div class="welcome">This is a CMS block edited from theme admin panel. You can insert any
            content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry.
        </div>
    </div>
</column>