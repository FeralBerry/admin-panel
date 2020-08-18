@include('shop.user.section.slider')
<div class="lg-margin"></div><!-- Space -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row home-banners">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="#"><img src="{{ asset('user/img/big-banner-1.png') }}" alt="Home Big Banner 1" class="img-responsive"></a>
                </div><!-- End .col-md-6 -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="#"><img src="{{ asset('user/img/big-banner-2.png') }}" alt="Home Big Banner 2" class="img-responsive"></a>
                </div><!-- End .col-md-6 -->
            </div><!-- End .home-banners -->
            <div class="lg-margin"></div><!-- space -->
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                    <header class="content-title">
                        <h2 class="title">Our Products</h2>
                        <p class="title-desc">Save your money and time with our store. Here's the best part of our impressive assortment.</p>
                    </header>
                    <ul id="products-tabs-list" class="tab-style-1 clearfix">
                        <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                        <li><a href="#latest" data-toggle="tab">Latest</a></li>
                        <li><a href="#featured" data-toggle="tab">Featured</a></li>
                        <li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
                        <li><a href="#special" data-toggle="tab">Special</a></li>
                    </ul>
                    <div id="products-tabs-content" class="row tab-content">
                        <div class="tab-pane active" id="all">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item1.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item1-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>
                                        <span class="discount-circle top-right">-15%</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="old-price">$99</span>
                                                <span class="item-price">$49<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .item-meta-inner-container -->
                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="90"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item4.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item4-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>
                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$29</span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="20"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item5.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item5-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="discount-circle top-right">-25%</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="old-price">$120</span>
                                                <span class="item-price">$60<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="95"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item7.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item7-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$299<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="66"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item10.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item10-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$19<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="96"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="latest">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item6.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item6-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="old-price">$99</span>
                                                <span class="item-price">$49<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item4.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item4-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="90"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item3.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item3-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>
                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$29</span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item9.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item9-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="discount-circle top-right">-25%</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$60<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="95"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$299<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="66"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item5.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item5-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$129<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="46"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="featured">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item9.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item9-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="old-price">$99</span>
                                                <span class="item-price">$49<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="90"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item10.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item10-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>
                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$29</span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item1.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item1-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="discount-circle top-right">-25%</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$60<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="95"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item4.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item4-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$299<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="66"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item3.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item3-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$129<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="46"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="bestsellers">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item9.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item9-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="old-price">$99</span>
                                                <span class="item-price">$49<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item7.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item7-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="90"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>
                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$29</span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item3.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item3-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="discount-circle top-right">-25%</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$60<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="95"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item5.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item5-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$299<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="66"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$88<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="46"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane" id="special">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item4.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item4-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="old-price">$99</span>
                                                <span class="item-price">$49<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="70"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item8.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item8-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="90"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item1.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item1-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="new-circle top-left">New</span>
                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$29</span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->
                                        <span class="discount-circle top-right">-25%</span>

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$60<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="95"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item4.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item4-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$299<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="66"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container">
                                            <a href="product.html">
                                                <img src="{{ asset('user/img/products/item5.jpg') }}" alt="item1" class="item-image">
                                                <img src="{{ asset('user/img/products/item5-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                            </a>
                                        </figure><!-- End .item-image-container -->

                                    </div><!-- End .item-image-wrapper -->
                                    <div class="item-meta-container">
                                        <div class="item-meta-inner-container clearfix">

                                            <div class="item-price-container inline pull-left">
                                                <span class="item-price">$129<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <div class="ratings-container pull-right">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="46"></div>
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->

                                        </div><!-- End .item-meta-inner-container -->

                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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

                        </div><!-- End .tab-pane -->
                    </div><!-- End #products-tabs-content -->

                    <div class="sm-margin"></div><!-- Space -->
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <header class="content-title">
                                <h2 class="title">Welcome to Venedor</h2>
                            </header>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venedor is a fully responsive Magento theme with advanced admin module. Based on Bootstrap’s 12 column 1200px responsive grid Theme. Great looks on desktops, tablets and mobiles. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venedor is extremely customizable, easy to use and fully responsive. Suitable for every type of store. Great as a starting point for your custom projects. This theme includes several extensions including ajax price slider that will help you improve your sales. We supply a full help with our products and after purchase support to all our customers. <a href="#">Buy Venedor Theme!</a></p>
                        </div><!-- End .col-md-7 -->
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="sm-margin visible-xs"></div><!-- space -->
                            <img src="{{ asset('user/img/showcase.png') }}" alt="Showcase Venedor" class="img-responsive">
                        </div><!-- End .col-md-5 -->
                    </div><!-- End .row -->
                    <div class="xlg-margin"></div><!-- Space -->

                    <div class="hot-items carousel-wrapper">
                        <header class="content-title">
                            <div class="title-bg">
                                <h2 class="title">On Sale</h2>
                            </div><!-- End .title-bg -->
                            <p class="title-desc">Only with us you can get a new model with a discount.</p>
                        </header>

                        <div class="carousel-controls">
                            <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
                            </div><!-- End .carousel-prev -->
                            <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                            </div><!-- End .carousel-next -->
                        </div><!-- End .carousel-controls -->
                        <div class="hot-items-slider owl-carousel">
                            <div class="item">
                                <div class="item-image-wrapper">
                                    <figure class="item-image-container">
                                        <a href="product.html">
                                            <img src="{{ asset('user/img/products/item9.jpg') }}" alt="item1" class="item-image">
                                            <img src="{{ asset('user/img/products/item9-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                        </a>
                                    </figure><!-- End .item-image-container -->
                                    <span class="new-circle top-left">New</span>

                                </div><!-- End .item-image-wrapper -->
                                <div class="item-meta-container">
                                    <div class="item-meta-inner-container clearfix">

                                        <div class="item-price-container inline pull-left">
                                            <span class="old-price">$99</span>
                                            <span class="item-price">$49<span class="sub-price">.99</span></span>
                                        </div><!-- End .item-price-container -->
                                        <div class="ratings-container pull-right">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="70"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->

                                    </div><!-- End .item-meta-inner-container -->

                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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

                            <div class="item">
                                <div class="item-image-wrapper">
                                    <figure class="item-image-container">
                                        <a href="product.html">
                                            <img src="{{ asset('user/img/products/item5.jpg') }}" alt="item1" class="item-image">
                                            <img src="{{ asset('user/img/products/item5-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                        </a>
                                    </figure><!-- End .item-image-container -->
                                    <span class="new-circle top-left">New</span>

                                </div><!-- End .item-image-wrapper -->
                                <div class="item-meta-container">
                                    <div class="item-meta-inner-container clearfix">

                                        <div class="item-price-container inline pull-left">
                                            <span class="item-price">$49<span class="sub-price">.99</span></span>
                                        </div><!-- End .item-price-container -->
                                        <div class="ratings-container pull-right">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="10"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->

                                    </div><!-- End .item-meta-inner-container -->

                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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

                            <div class="item">
                                <div class="item-image-wrapper">
                                    <figure class="item-image-container">
                                        <a href="product.html">
                                            <img src="{{ asset('user/img/products/item2.jpg') }}" alt="item1" class="item-image">
                                            <img src="{{ asset('user/img/products/item2-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                        </a>
                                    </figure><!-- End .item-image-container -->
                                    <span class="discount-circle top-left">-20%</span>

                                </div><!-- End .item-image-wrapper -->
                                <div class="item-meta-container">
                                    <div class="item-meta-inner-container clearfix">

                                        <div class="item-price-container inline pull-left">
                                            <span class="old-price">$99</span>
                                            <span class="item-price">$49<span class="sub-price">.99</span></span>
                                        </div><!-- End .item-price-container -->
                                        <div class="ratings-container pull-right">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="70"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->

                                    </div><!-- End .item-meta-inner-container -->

                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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

                            <div class="item">
                                <div class="item-image-wrapper">
                                    <figure class="item-image-container">
                                        <a href="product.html">
                                            <img src="{{ asset('user/img/products/item3.jpg') }}" alt="item1" class="item-image">
                                            <img src="{{ asset('user/img/products/item3-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                        </a>
                                    </figure><!-- End .item-image-container -->

                                </div><!-- End .item-image-wrapper -->
                                <div class="item-meta-container">
                                    <div class="item-meta-inner-container clearfix">

                                        <div class="item-price-container inline pull-left">
                                            <span class="item-price">$45<span class="sub-price">.99</span></span>
                                        </div><!-- End .item-price-container -->
                                        <div class="ratings-container pull-right">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->

                                    </div><!-- End .item-meta-inner-container -->

                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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

                            <div class="item">
                                <div class="item-image-wrapper">
                                    <figure class="item-image-container">
                                        <a href="product.html">
                                            <img src="{{ asset('user/img/products/item10.jpg') }}" alt="item1" class="item-image">
                                            <img src="{{ asset('user/img/products/item10-hover.jpg') }}" alt="item1  Hover" class="item-image-hover">
                                        </a>
                                    </figure><!-- End .item-image-container -->
                                    <span class="new-circle top-left">New</span>

                                </div><!-- End .item-image-wrapper -->
                                <div class="item-meta-container">
                                    <div class="item-meta-inner-container clearfix">

                                        <div class="item-price-container inline pull-left">
                                            <span class="item-price">$150</span>
                                        </div><!-- End .item-price-container -->
                                        <div class="ratings-container pull-right">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="70"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->

                                    </div><!-- End .item-meta-inner-container -->

                                    <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
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
                        </div><!--hot-items-slider -->

                        <div class="lg-margin"></div><!-- Space -->
                    </div><!-- End .hot-items -->
                </div><!-- End .col-md-9 -->

                <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                    <div class="widget subscribe">
                        <h3>BE THE FIRST TO KNOW</h3>
                        <p> Get all the latest information on Events, Sales and Offers. Sign up for the Venedor store newsletter today.</p>
                        <form action="#" id="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email address">
                            </div>
                            <input type="submit" value="SUBMIT" class="btn btn-custom">
                        </form>
                    </div>
                    <div class="widget testimonials">
                        <h3>Testimonials</h3>

                        <div class="testimonials-slider flexslider sidebarslider">
                            <ul class="testimonials-list clearfix">
                                <li>
                                    <div class="testimonial-details">
                                        <header>Best Service!</header>
                                        Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti.
                                    </div><!-- End .testimonial-details -->
                                    <figure class="clearfix">
                                        <img src="{{ asset('user/img/testimonials/anna.jpg') }}" alt="Computer Ceo">
                                        <figcaption>
                                            <a href="#">Anna Retallic</a>
                                            <span>12.05.2013</span>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <div class="testimonial-details">
                                        <header>Cool Style!</header>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt iure quisquam necessitatibus fugit! Nisi tempora reiciendis omnis error sapiente ipsam maiores dolorem maxime.
                                    </div><!-- End .testimonial-details -->
                                    <figure class="clearfix">
                                        <img src="{{ asset('user/img/testimonials/jake.jpg') }}" alt="Computer Ceo">
                                        <figcaption>
                                            <a href="#">Jake Suasoo</a>
                                            <span>17.05.2013</span>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div><!-- End .testimonials-slider -->
                    </div><!-- End .widget -->


                    <div class="widget latest-posts">
                        <h3>Latest News</h3>

                        <div class="latest-posts-slider flexslider sidebarslider">
                            <ul class="latest-posts-list clearfix">
                                <li>
                                    <a href="single.html">
                                        <figure class="latest-posts-media-container">
                                            <img class="img-responsive" src="{{ asset('user/img/blog/post1-small.jpg') }}" alt="lats post">
                                        </figure>
                                    </a>
                                    <h4><a href="single.html">35% Discount on second purchase!</a></h4>
                                    <p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus ante ultricies dictum sed lobortis.</p>
                                    <div class="latest-posts-meta-container clearfix">
                                        <div class="pull-left">
                                            <a href="#">Read More...</a>
                                        </div><!-- End .pull-left -->
                                        <div class="pull-right">
                                            12.05.2013
                                        </div><!-- End .pull-right -->
                                    </div><!-- End .latest-posts-meta-container -->
                                </li>

                                <li>
                                    <a href="single.html">
                                        <figure class="latest-posts-media-container">
                                            <img class="img-responsive" src="{{ asset('user/img/blog/post2-small.jpg') }}" alt="lats post">
                                        </figure>
                                    </a>
                                    <h4><a href="single.html">Free shipping for regular customers.</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
                                    <div class="latest-posts-meta-container clearfix">
                                        <div class="pull-left">
                                            <a href="#">Read More...</a>
                                        </div><!-- End .pull-left -->
                                        <div class="pull-right">
                                            10.05.2013
                                        </div><!-- End .pull-right -->
                                    </div><!-- End .latest-posts-meta-container -->
                                </li>

                                <li>
                                    <a href="single.html">
                                        <figure class="latest-posts-media-container">
                                            <img class="img-responsive" src="{{ asset('user/img/blog/post3-small.jpg') }}" alt="lats post">
                                        </figure>
                                    </a>
                                    <h4><a href="#">New jeans on sales!</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
                                    <div class="latest-posts-meta-container clearfix">
                                        <div class="pull-left">
                                            <a href="#">Read More...</a>
                                        </div><!-- End .pull-left -->
                                        <div class="pull-right">
                                            8.05.2013
                                        </div><!-- End .pull-right -->
                                    </div><!-- End .latest-posts-meta-container -->
                                </li>

                            </ul>
                        </div><!-- End .latest-posts-slider -->
                    </div><!-- End .widget -->

                    <div class="widget banner-slider-container">
                        <div class="banner-slider flexslider">
                            <ul class="banner-slider-list clearfix">
                                <li><a href="#"><img src="{{ asset('user/img/banner1.jpg') }}" alt="Banner 1"></a></li>
                                <li><a href="#"><img src="{{ asset('user/img/banner2.jpg') }}" alt="Banner 2"></a></li>
                                <li><a href="#"><img src="{{ asset('user/img/banner3.jpg') }}" alt="Banner 3"></a></li>
                            </ul>
                        </div>
                    </div><!-- End .widget -->

                </div><!-- End .col-md-3 -->
            </div><!-- End .row -->

            <div id="brand-slider-container" class="carousel-wrapper">
                <header class="content-title">
                    <div class="title-bg">
                        <h2 class="title">Manufacturers</h2>
                    </div><!-- End .title-bg -->
                </header>
                <div class="carousel-controls">
                    <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev">
                    </div><!-- End .carousel-prev -->
                    <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                    </div><!-- End .carousel-next -->
                </div><!-- End .carousel-controllers -->
                <div class="sm-margin"></div><!-- space -->
                <div class="row">
                    <div class="brand-slider owl-carousel">
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 1"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 2"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 3"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 4"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 5"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 6"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 7"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 8"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 9"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 10"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 11"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 12"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 13"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 14"></a>
                        <a href="#"><img src="{{ asset('user/img/brands/brand-logo.png') }}" alt="Brand Logo 15"></a>
                    </div><!-- End .brand-slider -->
                </div><!-- End .row -->
            </div><!-- End #brand-slider-container -->

        </div><!-- End .col-md-12 -->
    </div><!-- End .row -->
</div><!-- End .container -->
