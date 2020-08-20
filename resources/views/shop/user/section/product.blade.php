<div id="category-header">
    <div class="row">
        <div class="container">
            <div class="col-2">
                <div class="category-image">
                    <img src="{{ asset('user/img/products/category-show.png') }}" alt="Phone" class="img-responsive">
                </div><!-- End .category-image -->
            </div><!-- End .col-2 -->
            <div class="col-2 last">
                <div class="category-title">
                    <h2>Mobile</h2>
                    <p>Aenean dictum libero vitae magna sagittis, eu convallis dolor blandit. Fusce consectetur tincidunt pretium. Etiam non tellus massa. Aenean tincidunt in augue nec tempus. Nulla porta libero sit amet lorem pellentesque posuere...</p>
                    <a href="#" class="btn btn-custom">LEARN MORE</a>
                </div><!-- End .category-title -->
            </div><!-- End .col-2 -->
        </div><!-- End .container -->
    </div><!-- End .row -->
</div><!-- End #category-header -->
@include('layouts.user.breadcrumb')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                    <div class="category-toolbar clearfix">
                        <div class="toolbox-filter clearfix">
                            <div class="sort-box">
                                <span class="separator">sort by:</span>.
                                <div class="btn-group select-dropdown">
                                    <button type="button" class="btn select-btn">Position</button>
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Date</a></li>
                                        <li><a href="#">Name</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toolbox-pagination clearfix">
                                <ul class="pagination">
                                    {{ $products->links() }}
                                </ul>
                                <div class="view-count-box">
                                    <span class="separator">view:</span>
                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">10</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">15</a></li>
                                            <li><a href="#">30</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End .view-count-box -->
                            </div><!-- End .toolbox-pagination -->
                            <div class="category-list">
                                <input type="radio" id="tab1" name="tab-control" checked>
                                <input type="radio" id="tab2" name="tab-control">
                                <ul>
                                    <ul class="view-box">
                                        <label for="tab1" role="button" class="tab active icon-button icon-grid"><i class="fa fa-th-large"></i></label>
                                        <label for="tab2" role="button" class="tab icon-button icon-list"><i class="fa fa-th-list"></i></label>
                                    </ul><!-- End .view-box -->
                                </ul>
                                <div class="slider">
                                    <div class="indicator"></div>
                                </div>
                                <div class="content">
                                    <section>
                                        <div class="category-item-container category-list-container">
                                            @foreach($products as $product)
                                                @if($product->category_id == $id)
                                                <div class="item item-list clearfix">
                                                    <div class="item-image-container">
                                                        <figure>
                                                            <a href="{{ route('single_product', $product->id) }}">
                                                                <img src="{{ asset('uploads/single/') }}/{{ $product->img }}" alt="item1" class="item-image">
                                                                <img src="{{ asset('uploads/single/') }}/{{ $product->img }}" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        @if(isset($product->hit) && ($product->hit == 1))<span class="new-circle top-left">Hit</span>@endif
                                                        @if($product->old_price > $product->price)
                                                            <span class="discount-circle top-right">-{{ number_format(100-(($product->price / $product->old_price)*100)) }}%</span>
                                                        @endif
                                                    </div><!-- End .item-image -->
                                                    <div class="item-meta-container">
                                                        <h3 class="item-name"><a href="{{ route('single_product', $product->id) }}">{{ $product->title }}</a></h3>
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="70"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                        3 Reviews
                                                    </span>
                                                        </div><!-- End .rating-container -->
                                                        {{ $product->description }}
                                                        @if($product->price < $product->old_price)<p style="font-size: 18px"><b>Old price: <span style="text-decoration: line-through" class="old-price"><?php $old_price = explode('.', $product->old_price)?>{{ $old_price[0] }}<span class="sub-price">.@if(isset($old_price[1])){{ $old_price[1] }}@else{{ '00' }}@endif</span></span></b></p>
                                                        <p style="font-size: 18px"><b>New price: <?php $price = explode('.', $product->price)?>{{ $price[0] }}<span class="sub-price">.@if(isset($price[1])){{ $price[1] }}@else{{ '00' }}@endif</span></b></p>
                                                        @else
                                                            <p style="font-size: 18px"><b>Price: <?php $price = explode('.', $product->price)?>{{ $price[0] }}<span class="sub-price">.@if(isset($price[1])){{ $price[1] }}@else{{ '00' }}@endif</span></b></p>
                                                        @endif
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                                @endif
                                            @endforeach
                                        </div><!-- End .category-item-container -->
                                    </section>
                                    <section>
                                        <div class="category-item-container">
                                            <div class="row">
                                                @foreach($products as $product)
                                                    @if($product->category_id == $id)
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                            <div class="item">
                                                                <div class="item-image-wrapper">
                                                                    <figure class="item-image-container">
                                                                        <a href="{{ route('single_product', $product->id) }}">
                                                                            <img src="{{ asset('uploads/single/') }}/{{ $product->img }}" alt="item1" class="item-image">
                                                                            <img src="{{ asset('uploads/single/') }}/{{ $product->img }}" alt="item1  Hover" class="item-image-hover">
                                                                        </a>
                                                                    </figure><!-- End .item-image-container -->
                                                                    @if(isset($product->hit) && ($product->hit == 1))<span class="new-circle top-left">Hit</span>@endif
                                                                    @if($product->old_price > $product->price)
                                                                        <span class="discount-circle top-right">-{{ number_format(100-(($product->price / $product->old_price)*100)) }}%</span>
                                                                    @endif
                                                                </div><!-- End .item-image-wrapper -->
                                                                <div class="item-meta-container">
                                                                    <div class="item-meta-inner-container clearfix">
                                                                        <div class="item-price-container inline pull-left">
                                                                            @if($product->old_price > $product->price)<span class="old-price"><?php $old_price = explode('.', $product->old_price)?>{{ $old_price[0] }}<span class="sub-price">.@if(isset($old_price[1])){{ $old_price[1] }}@else{{ '00' }}@endif</span></span>@endif
                                                                            <span class="item-price"><?php $price = explode('.', $product->price)?>{{ $price[0] }}<span class="sub-price">.@if(isset($price[1])){{ $price[1] }}@else{{ '00' }}@endif</span></span>
                                                                        </div><!-- End .item-price-container -->
                                                                        <div class="ratings-container pull-right">
                                                                            <div class="ratings">
                                                                                <div class="ratings-result" data-result="70"></div>
                                                                            </div><!-- End .ratings -->
                                                                        </div><!-- End .rating-container -->
                                                                    </div><!-- End .item-meta-inner-container -->
                                                                    <h3 class="item-name"><a href="{{ route('single_product', $product->id) }}">{{ $product->title }}</a></h3>
                                                                    <div class="item-action">
                                                                        <a href="#" class="item-add-btn">
                                                                            <span class="icon-cart-text">Add to Cart</span>
                                                                        </a>
                                                                        <div class="item-action-inner">
                                                                            <a href="#" class="icon-button icon-like">Favourite</a>
                                                                            <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                        </div><!-- End .item-action-inner -->
                                                                    </div><!-- End .item-action -->
                                                                </div><!-- End .item-meta-container -->
                                                            </div><!-- End .item -->
                                                        </div><!-- End .col-md-4 -->
                                                    @endif
                                                @endforeach
                                            </div><!-- End .row -->
                                        </div><!-- End .category-item-container -->
                                    </section>
                                </div>
                            </div>
                        </div><!-- End .toolbox-filter -->
                    </div><!-- End .category-toolbar -->
                    <div class="pagination-container clearfix">
                        <div class="pull-right">
                            <ul class="pagination">
                                {{ $products->links() }}
                            </ul>
                        </div><!-- End .pull-right -->
                        <div class="pull-right view-count-box hidden-xs">
                            <span class="separator">view:</span>
                            <div class="btn-group select-dropdown">
                                <button type="button" class="btn select-btn">10</button>
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">15</a></li>
                                    <li><a href="#">30</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End pagination-container -->
                </div><!-- End .col-md-9 -->
                @include('shop.user.section.right-sidebar')
            </div><!-- End .row -->
        </div><!-- End .col-md-12 -->
    </div><!-- End .row -->
</div><!-- End .container -->

