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
                            <div class="view-box">
                                <a href="category.html" class="active icon-button icon-grid"><i class="fa fa-th-large"></i></a>
                                <a href="category-list.html" class="icon-button icon-list"><i class="fa fa-th-list"></i></a>
                            </div><!-- End .view-box -->
                        </div><!-- End .toolbox-filter -->
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
                    </div><!-- End .category-toolbar -->
                    <div class="md-margin"></div><!-- .space -->
                    <div class="category-item-container">
                        <div class="row">
                            @foreach($products as $product)
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
                                                @if($product->old_price > $product->price)<span class="old-price">{{ $product->old_price }}</span>@endif
                                                <span class="item-price">{{ $product->price }}</span>
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
                            @endforeach
                        </div><!-- End .row -->
                    </div><!-- End .category-item-container -->
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

