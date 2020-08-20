@include('layouts.user.breadcrumb')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">
                    <div id="product-image-carousel-container">
                        <ul id="product-carousel" class="celastislide-list">
                            <li class="active-slide"><a data-rel='prettyPhoto[product]' href="{{ asset('uploads/single/') }}/{{ $product[$id]->img }}" data-image="{{ asset('uploads/single/') }}/{{ $product[$id]->img }}" data-zoom-image="{{ asset('uploads/single/') }}/{{ $product[$id]->img }}" class="product-gallery-item"><img src="{{ asset('uploads/single/') }}/{{ $product[$id]->img }}" alt="{{ $product[$id]->title }}"></a></li>
                            @foreach($gallery as $g)
                                <li><a data-rel='prettyPhoto[product]' href="{{ asset('uploads/gallery/') }}/{{ $g->img }}" data-image="{{ asset('uploads/gallery/') }}/{{ $g->img }}" data-zoom-image="{{ asset('uploads/gallery/') }}/{{ $g->img }}" class="product-gallery-item"><img src="{{ asset('uploads/gallery/') }}/{{ $g->img }}" alt="{{ $product[$id]->title }}"></a></li>
                            @endforeach
                        </ul><!-- End product-carousel -->
                    </div>
                    <div id="product-image-container">
                        <figure><img src="{{ asset('uploads/single/') }}/{{ $product[$id]->img }}" data-zoom-image="{{ asset('uploads/single/') }}/{{ $product[$id]->img }}" alt="{{ $product[$id]->title }}" id="product-image">
                            @if($product[$id]->price < $product[$id]->old_price)
                            <figcaption class="item-price-container">
                                    <span class="old-price">{{ $product[$id]->old_price }}</span>
                                    <span class="item-price">{{ $product[$id]->price }}</span>
                            </figcaption>
                            @endif
                        </figure>
                    </div><!-- product-image-container -->
                </div><!-- End .col-md-6 -->
                <div class="col-md-6 col-sm-12 col-xs-12 product">
                    <div class="lg-margin visible-sm visible-xs"></div><!-- Space -->
                    <h1 class="product-name">{{ $product[$id]->title }}</h1>
                    <div class="ratings-container">
                        <div class="ratings separator">
                            <div class="ratings-result" data-result="70"></div>
                        </div><!-- End .ratings -->
                        <span class="ratings-amount separator">
									3 Review(s)
								</span>
                        <span class="separator">|</span>
                        <a href="#review" class="rate-this">Add Your Review</a>
                    </div><!-- End .rating-container -->
                    <ul class="product-list">
                        <li><span>Availability:</span>In Stock</li>
                        <li><span>Product Code:</span> {{ $product[$id]->product_code }}</li>
                        @foreach($brand as $b)
                            @if($product[$id]->brand_id == $b->id)<li><span>Brand:</span>{{ $b->title }}</li>@endif
                        @endforeach
                    </ul>
                    <hr>
                    <p>{{ $product[$id]->description }}</p>
                    @if($product[$id]->price < $product[$id]->old_price)<p style="font-size: 18px"><b>Old price: <span style="text-decoration: line-through" class="old-price">{{ $product[$id]->old_price }}</span></b></p>
                    <p style="font-size: 18px"><b>New price: {{ $product[$id]->price }}</b></p>
                    @else
                    <p style="font-size: 18px"><b>Price: {{ $product[$id]->price }}</b></p>
                    @endif
                    <div class="product-color-filter-container">
                        <span>Select Color:</span>
                        <div class="xs-margin"></div>
                        <ul class="filter-color-list clearfix">
                            <li><a href="#" data-bgcolor="#fff" class="filter-color-box"></a></li>
                            <li><a href="#" data-bgcolor="#d1d2d4" class="filter-color-box"></a></li>
                            <li><a href="#" data-bgcolor="#666467" class="filter-color-box"></a></li>
                            <li><a href="#" data-bgcolor="#515151" class="filter-color-box"></a></li>
                            <li><a href="#" data-bgcolor="#bcdae6" class="filter-color-box"></a></li>
                            <li><a href="#" data-bgcolor="#5272b3" class="filter-color-box"></a></li>
                            <li><a href="#" data-bgcolor="#acbf0b" class="filter-color-box"></a></li>
                        </ul>
                    </div><!-- End .product-color-filter-container-->
                    <hr>
                    <div class="product-add clearfix">
                        <div class="custom-quantity-input">
                            <input type="text" name="quantity" value="1">
                            <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                            <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <button class="btn btn-custom-2">ADD TO CART</button>
                    </div><!-- .product-add -->
                    <div class="md-margin"></div><!-- Space -->
                    <div class="product-extra clearfix">
                        <div class="product-extra-box-container clearfix">
                            <div class="item-action-inner">
                                <a href="#" class="icon-button icon-like">Favourite</a>
                                <a href="#" class="icon-button icon-compare">Checkout</a>
                            </div><!-- End .item-action-inner -->
                        </div>
                        <div class="md-margin visible-xs"></div>
                        <div class="share-button-group">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                <a class="addthis_button_facebook"></a>
                                <a class="addthis_button_twitter"></a>
                                <a class="addthis_button_email"></a>
                                <a class="addthis_button_print"></a>
                                <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52b2197865ea0183"></script>
                            <!-- AddThis Button END -->
                        </div><!-- End .share-button-group -->
                    </div>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
            <div class="lg-margin2x"></div><!-- End .space -->
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="tab-container left product-detail-tab clearfix">
                        <ul class="nav-tabs">
                            <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                            <li><a href="#review" data-toggle="tab">Review</a></li>
                        </ul>
                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="overview">
                                {!!  $product[$id]->content !!}
                            </div><!-- End .tab-pane -->
                            <div class="tab-pane" id="review">
                                <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel, tristique urna. </p>
                                <p>Cumque nihil facere itaque mollitia consectetur saepe cupiditate debitis fugiat temporibus soluta maxime doloremque alias enim officia aperiam at similique quae vel sapiente nulla molestiae tenetur deleniti architecto ratione accusantium.
                                </p>
                            </div><!-- End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .tab-container -->
                    <div class="lg-margin visible-xs"></div>
                </div><!-- End .col-md-9 -->
                <div class="lg-margin2x visible-sm visible-xs"></div><!-- Space -->
                <div class="col-md-3 col-sm-12 col-xs-12 sidebar">
                    <div class="widget related">
                        <h3>Related</h3>
                        <div class="related-slider flexslider sidebarslider">
                            <ul class="related-list clearfix">
                                <li>
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item1.jpg') }}" alt="item1">
                                        </figure>
                                        <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="84"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$40</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item2.jpg') }}" alt="item2">
                                        </figure>
                                        <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="84"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">18$</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item3.jpg') }}" alt="item3">
                                        </figure>
                                        <h5><a href="#">Women's Lauren Dress</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="84"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$30</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                </li>
                                <li>
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item4.jpg') }}" alt="item4">
                                        </figure>
                                        <h5><a href="#">Swiss Mobile Phone</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="64"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$39</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item5.jpg') }}" alt="item5">
                                        </figure>
                                        <h5><a href="#">Zwinzed HeadPhones</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="94"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$18.99</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item6.jpg') }}" alt="item6">
                                        </figure>
                                        <h5><a href="#">Kless Man Suit</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="74"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$99</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                </li>
                                <li>
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item2.jpg') }}" alt="item2">
                                        </figure>
                                        <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="84"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$17</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                    <div class="related-product clearfix">
                                        <figure>
                                            <img src="{{ asset('user/img/products/thumbnails/item4.jpg') }}" alt="item4">
                                        </figure>
                                        <h5><a href="#">Women's Lauren Dress</a></h5>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="84"></div>
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <div class="related-price">$30</div><!-- End .related-price -->
                                    </div><!-- End .related-product -->
                                </li>
                            </ul>
                        </div><!-- End .related-slider -->
                    </div><!-- End .widget -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
            <div class="lg-margin2x"></div><!-- Space -->
            <div class="purchased-items-container carousel-wrapper">
                <header class="content-title">
                    <div class="title-bg">
                        <h2 class="title">Also Purchased</h2>
                    </div><!-- End .title-bg -->
                    <p class="title-desc">Note the similar products - after buying for more than $500 you can get a discount.</p>
                </header>
                <div class="carousel-controls">
                    <div id="purchased-items-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                    <div id="purchased-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                </div><!-- End .carousel-controllers -->
                <div class="purchased-items-slider owl-carousel">
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
                </div><!--purchased-items-slider -->
            </div><!-- End .purchased-items-container -->
        </div><!-- End .col-md-12 -->
    </div><!-- End .row -->
</div><!-- End .container -->
