@extends('frontend.layouts.landing-page')
@section('content')
@push('header-top')
@include('frontend.layouts.headers.header-top')
@endpush
@push('header-center')
@include('frontend.layouts.headers.header-center')
@endpush
@push('header-bottom')
@include('frontend.layouts.headers.header-bottom')
@endpush

@push('extracss')
<link id="color_scheme" href="{{ asset('public/frontend/css/home2.css') }}" rel="stylesheet">
@endpush
<!-- Main Container  -->
<div class="main-container">
   
    <div id="content">
        <div class="module sohomepage-slider ">
            <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
          
                @foreach ($slider->images as $slide)
                <div class="yt-content-slide">
                
                    <a href="#"><img src="{{asset($slide['image'])}}" alt="" class="img-responsive"></a>
                </div>    
                @endforeach
                
              
            </div>
            
            <div class="loadeding"></div>
        </div>

        <div class="container">
            <div class="block-policy2">
                <ul>
                    <li class="item-1">
                        <div class="item-inner">
                            <div class="icon icon1"></div>
                            <div class="content"> <a href="#">free delivery</a>
                                <p>From AED 99.99</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-2">
                        <div class="item-inner">
                            <div class="icon icon2"></div>
                            <div class="content"> <a href="#">support 24/7</a>
                                <p>Online 24 hours</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-3">
                        <div class="item-inner">
                            <div class="icon icon3"></div>
                            <div class="content"> <a href="#">free return</a>
                                <p>365 a day</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-4">
                        <div class="item-inner">
                            <div class="icon icon4"></div>
                            <div class="content"> <a href="#">payment method</a>
                                <p>secure payment</p>
                            </div>
                        </div>
                    </li>
                    <li class="item-5">
                        <div class="item-inner">
                            <div class="icon icon5"></div>
                            <div class="content"> <a href="#">big saving</a>
                                <p>weekend sales</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="so-categories module custom-slidercates">
                <h3 class="modtitle"><span>Shop by Categories</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title">
                        <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="7" data-items_column1="4" data-items_column2="4"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                          @foreach ($shopByCategory as $shopcat )
                          <div class="content-box">
                            <div class="image-cat">
                                <a href="category/{{$shopcat->slug}}" title="Smart Phones" target="_self">
                                    <img src="{{asset($shopcat->image)}}" title="{{$shopcat->name}}" alt="{{$shopcat->name}}" />
                                </a>
                            </div>
                            <div class="cat-title"> 
                              <a href="#" title="{{$shopcat->name}}" target="_self">{{$shopcat->name}}</a>
                            </div>
                        </div>
                          @endforeach
                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="banners banners1">
                <div class="banner">
                    <a href="#">
                        <img src="{{asset('public/frontend/image/catalog/banners/id2-banner1.jpg')}}" alt="image">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="module so-deals-ltr deals-layout2">
                        <h3 class="modtitle"><span>Deals of the week</span></h3>                    
                        <div class="modcontent">
                            <div id="so_deal_1" class="so-deal style2">
                                <div class="extraslider-inner products-list yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="1" data-items_column1="1" data-items_column2="2"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image"> 
                                                            <span class="label-product label-product-sale">
                                                                -22%
                                                            </span>
                                                            <a href="#" target="_self" title="product">
                                                                <img src="{{asset('public/frontend/image/catalog/demo/product/index2/8.jpg')}}" alt="Yutculpa ullamco" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>                                                        
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>                                                    
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="#" target="_self" title="Yutculpa ullamco">Yutculpa ullamco</a></h4>
                                                            <p class="price">   <span class="price-new">$60.00</span>
                                                                <span class="price-old">$77.00</span>
                                                            </p>
                                                            
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>98</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>32</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="75%" data-toggle="tooltip" title="75%" style="width: 75%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title"><span>Hurry Up!</span> Offer ends in:</div>
                                                                    <div class="item-time">
                                                                        <div class="item-timer">
                                                                            <div class="defaultCountdown-30"></div>
                                                                        </div>
                                                                    </div>                                                                                                                                                                
                                                            </div>                                                    
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          
                                    <div class="item">
                                        <div class="product-thumb ">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image"> 
                                                            <span class="label-product label-product-sale">
                                                                -10%
                                                            </span>
                                                            <a href="#" target="_self" title="Xancetta bresao">
                                                                <img src="{{asset('public/frontend/image/catalog/demo/product/index2/2.jpg')}}" alt="Xancetta bresao" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('75');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('75');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('75');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="#" target="_self" title="Xancetta bresao">Xancetta bresao</a></h4>
                                                            <p class="price">   <span class="price-new">$80.00</span>
                                                                <span class="price-old">$89.00</span>
                                                            </p>
                                                            
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>555</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>0</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="0%" data-toggle="tooltip" title="75%" style="width: 0%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title"><span>Hurry Up!</span> Offer ends in:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                                                                                                                                    
                                                            </div>                                                    
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb transition ">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <span class="label-product label-product-sale">-17%</span>
                                                            <a href="#" target="_self" title="Wamboudin ribeye">
                                                                <img src="{{asset('public/frontend/image/catalog/demo/product/index2/16.jpg')}}" alt="Wamboudin ribeye" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('79');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('79');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('79');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="#" target="_self" title="Wamboudin ribeye">Wamboudin ribeye</a></h4>
                                                            <p class="price">   <span class="price-new">$70.00</span>
                                                                <span class="price-old">$84.00</span>
                                                            </p>
                                                            
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>100</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>60</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="63%" data-toggle="tooltip" title="63%" style="width: 63%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title"><span>Hurry Up!</span> Offer ends in:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                                                                                                                                    
                                                            </div>                                                    
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!-- Listing tabs -->
                    <div class="module listingtab-layout2">
                        <h3 class="modtitle"><span>Best seller</span></h3>
                        <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                            <div class="loadeding"></div>
                            <div class="ltabs-wrap">
                                <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                    <!--Begin Tabs-->
                                    <div class="ltabs-tabs-wrap"> 
                                    <span class="ltabs-tab-selected">Bathroom</span> <span class="ltabs-tab-arrow">▼</span>
                                        <div class="item-sub-cat">
                                            <ul class="ltabs-tabs cf">
                                                @foreach ($bestSellerCategory as $key=>$bestSeller )
                                                @php
                                                if($key==0)
                                                $class="tab-sel";
                                                else
                                                $class="";
                                              
                                               @endphp
                                                <li class="ltabs-tab {{$class}}"  data-category-id="{{$bestSeller->_id}}" data-active-content=".items-category-{{$bestSeller->_id}}" > <span  class="ltabs-tab-label">{{$bestSeller->name}}</span> </li>
                                                @endforeach
                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Tabs-->
                                </div>
                            
                                <div class="ltabs-items-container products-list">
                                    <!--Begin Items-->
                                    @foreach ($bestSellerCategory as $key=>$bestSeller )
                                 @php
                                    if($key==0)
                                    $class="ltabs-items-selected ltabs-process";
                                    else
                                    $class="";
                                  
                                   @endphp
                                    <div class="ltabs-items {{$class}}  items-category-{{$bestSeller->_id}}" data-total="20">
                                        <div class="ltabs-items-inner ltabs-slider">
                                            <!-- item listing tab -->
                                         
                                                @foreach ($bestSeller->product as $product )
                                                <div class="ltabs-item">
                                                    
                                                <div class="item-inner product-layout transition product-grid">
                                                    <div class="product-item-container">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="product.html" target="_self" title="Chicken swinesha">
                                                                    <img src="{{asset($product->feature_image)}}" class="img-1 img-responsive" alt="image">
                                                                    <img src="{{asset($product->feature_image)}}" class="img-2 img-responsive" alt="image">
                                                                </a>
                                                            </div>
                                                            <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                                            <div class="button-group so-quickview cartinfo--left">
                                                                <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                                    <span>Add to cart </span>   
                                                                </button>
                                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="caption">
                                                                <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                </div>
                                                                <h4><a href="product.html" title="Chicken swinesha" target="_self">Chicken swinesha</a></h4>
                                                                <div class="price"> <span class="price-new">$46.00</span>
                                                                    <span class="price-old">$55.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                @endforeach
                                             

                                           
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                    <!--End Items-->
                                </div>
                                
                            </div>   
                        </div>
                    </div>
                    <!-- end Listing tabs -->
                </div>
            </div>

            <div class="row sliderimages ">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 "></div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 inner">
                    <div class="slider-images">
                        <div class="yt-content-slider" data-rtl="yes" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('public/frontend/image/catalog/banners/sl1.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('public/frontend/image/catalog/banners/sl3.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="{{asset('public/frontend/image/catalog/banners/sl2.jpg')}}" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12"></div>
            </div>

            <!-- Listing tabs order -->
            <div class="module layout2-listingtab2">
                
                <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                    <div class="loadeding"></div>
                    <div class="ltabs-wrap">
                        <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="2" data-xs="1" data-margin="30">
                            <!--Begin Tabs-->                            
                            <div class="ltabs-tabs-wrap">   
                                <span class='ltabs-tab-selected'></span>
                                <span class="ltabs-tab-arrow">▼</span>
                                <ul class="ltabs-tabs cf list-sub-cat font-title">                                  
                                    <li class="ltabs-tab tab-sel" data-category-id="61" data-active-content=".items-category-61"><span class="ltabs-tab-label">Best sellers</span></li>
                                    <li class="ltabs-tab  " data-category-id="62" data-active-content=".items-category-62">   <span class="ltabs-tab-label">New Arrivals</span></li>
                                    <li class="ltabs-tab  " data-category-id="63" data-active-content=".items-category-63">   <span class="ltabs-tab-label">Most Rating</span></li>                                                
                                </ul>
                            </div>
                            <!-- End Tabs-->
                        </div>
                        <div class="wap-listing-tabs ltabs-items-container products-list grid">
                            <!--Begin Items-->
                            <div class="ltabs-items ltabs-items-selected items-category-61" data-total="10">
                                <div class="ltabs-items-inner ltabs-slider">
                                  
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Pastrami bacon">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/1.jpg')}}" class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/6.jpg')}}" class="img-2 img-responsive" alt="Pastrami bacon">
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Pastrami bacon</a></h4>
                                                        <div class="price">$42.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/2.jpg')}}" class="img-1 img-responsive" alt="image">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/5.jpg')}}" class="img-2 img-responsive" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price"> <span class="price-new">$46.00</span>
                                                            <span class="price-old">$55.00</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Chicken swinesha</a></h4>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Kielbasa hamburg">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/3.jpg')}}" class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/4.jpg')}}" class="img-2 img-responsive" alt="Pastrami bacon">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-new"> New </span></div>
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        
                                                        <h4><a href="product.html" title="Kielbasa hamburg" target="_self">Kielbasa hamburg</a></h4>
                                                        <div class="price">$55.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Sausage cowbee">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/4.jpg')}}" class="img-1 img-responsive" alt="image">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/3.jpg')}}" class="img-2 img-responsive" alt="image">
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        
                                                        <h4><a href="product.html" title="Sausage cowbeea" target="_self">Sausage cowbee</a></h4>
                                                        <div class="price">$60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Kielbasa hamburg">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/5.jpg')}}" class="img-1 img-responsive" alt="Pastrami bacon">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/2.jpg')}}" class="img-2 img-responsive" alt="Pastrami bacon">
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        
                                                        <h4><a href="product.html" title="Drumstick tempor" target="_self">Drumstick tempor</a></h4>
                                                        <div class="price">$75.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Balltip nullaelit">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/6.jpg')}}" class="img-1 img-responsive" alt="image">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/1.jpg')}}" class="img-2 img-responsive" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-new"> New </span></div>
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        
                                                        <h4><a href="product.html" title="Balltip nullaelit" target="_self">Balltip nullaelit</a></h4>
                                                        <div class="price">$80.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ltabs-item">
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Lamboudin ribeye">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/7.jpg')}}" class="img-1 img-responsive" alt="image">
                                                            <img src="{{asset('public/frontend/image/catalog/demo/product/320/10.jpg')}}" class="img-2 img-responsive" alt="image">
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                        </button>
                                                        <!--quickview-->                                                      
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        
                                                        <h4><a href="product.html" title="Lamboudin ribeye" target="_self">Lamboudin ribeye</a></h4>
                                                        <div class="price">$63.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>

                            <div class="ltabs-items items-category-62 grid" data-total="10">
                                <div class="ltabs-loading"></div>
                                
                            </div>

                            <div class="ltabs-items  items-category-63 grid" data-total="10">
                                <div class="ltabs-loading"></div>
                            </div>

                          
                            <!--End Items-->
                        </div>

                    </div>

                </div>
            </div>
            <!-- end Listing tabs order -->

            <div class="slider-brands">
                <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="8" data-items_column1="6" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b1.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b2.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b3.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b4.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b5.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b6.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b4.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b5.png')}}" alt="brand">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="{{asset('public/frontend/image/catalog/brands/b6.png')}}" alt="brand">
                        </a>
                    </div>
                </div>
            </div>

            <div class="module so-latest-blog blog-home blog-home2">
                <h3 class="modtitle"><span>Our Latest Blogs</span></h3>
                <div class="modcontent clearfix">
                    <div class="so-blog-external">
                        <div class="yt-content-slider blog-external" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/2.jpg')}}" alt="Lorem ipsum dolor sit amet" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Lorem ipsum dolor sit amet" target="_self">Lorem ipsum dolor sit amet</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/3.jpg')}}" alt="Kire tuma feugiat" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Kire tuma feugiat" target="_self">Kire tuma feugiat</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/4.jpg')}}" alt="Kire tuma demons vel eum iriure" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Kire tuma demons vel eum iriure" target="_self">Kire tuma demons vel eum iriure</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/5.jpg')}}" alt="minim veniam  justo duo dolores" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Minim veniam  justo duo dolores" target="_self">Lorem ipsum dolor sit amet</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/6.jpg')}}" alt="Duis autem vel eum tempor inviduntt" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Duis autem vel eum tempor invidunt" target="_self">Duis autem vel eum tempor invidunt</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/7.jpg')}}" alt="Tuma demons vel eum iriure dolor" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Tuma demons vel eum iriure dolor" target="_self">Tuma demons vel eum iriure dolor</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/8.jpg')}}" alt="Kire tuma demons vel eum iriure" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Kire tuma demons vel eum iriure" target="_self">Kire tuma demons vel eum iriure</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="item">
                                    <div class="media-left">
                                        <a href="#" target="_self">
                                            <img src="{{asset('public/frontend/image/catalog/blog/9.jpg')}}" alt="minim veniam  justo duo dolores" />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-content">                                           
                                            <h4 class="media-heading font-title">
                                                <a href="#" title="Minim veniam  justo duo dolores" target="_self">Lorem ipsum dolor sit amet</a>
                                            </h4>
                                            <div class="media-date-added idx-other">    <i class="fa fa-calendar"></i><span class="media-date-added"> November 15th, 2017</span>
                                            </div>                                            
                                            <div class="media-subcontent">  <span class="media-comment"><i class="fa fa-comments"></i> 0  Comment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //Main Container -->
@push('vuejs')
@include('frontend.plugins.vuejs')
@endpush
@endsection
