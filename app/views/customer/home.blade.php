
@extends('layout/layout-custome')

@section('title')
	Home
@endsection

@section('content')
	<!--SLIDE: START -->
            <div class="slide">
            	<div class="slideshow">
                	<div id="slideshow0" class="nivoSlider" style="width:666px; height:489px; position:relative;background:url(assets/images/slide/slide-3-666x489.jpg) no-repeat;">
                    	<a title="banner" href="#" class="nivo-imageLink" style="display:none;">
                        	<img title src="{{Asset('assets/images/slide/anh be.jpg')}}" alt="banner" style="display:none";>
                        </a>
                        
                        <a title="banner" href="#" class="nivo-imageLink" style="display:none;">
                        	<img title src="{{Asset('assets/images/slide/anh be.jpg')}}" alt="banner" style="display:none";>
                        </a>
                        
                        <a title="banner" href="#" class="nivo-imageLink" style="display:none;">
                        	<img title src="{{Asset('assets/images/slide/anh.jpg')}}" alt="banner" style="display:none";>
                        </a>
                        
                        <a title="banner" href="#" class="nivo-imageLink" style="display:none;">
                        	<img title src="{{Asset('assets/images/slide/anh be.jpg')}}" alt="banner" style="display:none";>
                        </a>
                        
                        <a title="banner" href="#" class="nivo-imageLink" style="display:none;">
                        	<img title src="{{Asset('assets/images/slide/anh be.jpg')}}" alt="banner" style="display:none";>
                        </a>
                        <div class="nivo-controlNav">
                        	<a class="nivo-control" rel ="0">1</a>
                            <a class="nivo-control" rel ="1">2</a>
                            <a class="nivo-control" rel ="2">3</a>
                            <a class="nivo-control" rel ="3">4</a>
                        </div>
                	</div>
            </div>
            <div id="banner0">
            	<a>
                	<img src="{{Asset('assets/images/slide/banner-1-398x163.jpg')}}" title="banner" >
                </a>
            </div>
            <div id="banner1">
            	<a>
                	<img src="{{Asset('assets/images/slide/banner-1-398x163.jpg')}}" title="banner" >
                </a>
            </div>
            <div id="banner2">
            	<a>
                	<img src="{{Asset('assets/images/slide/banner-3-398x163.jpg')}}" title="banner" >
                </a>
            
          </div>
          </div>
            <!--SLIDE: END -->
            
            <!--BACKTOP: START-->
            <p id="back-top" style="diplay:block;">
            	<a href="home.html">
                	<span></span>
                 </a>
            </p>
             <!--BACKTOP: END-->
            <div class="clear"></div>
            <!--Hộp chứa nội dung sản phẩm:START-->
            <div id="container">
            	<div id="content">
                	<div class="box featured">
                    	<div class="box-heading">
                        SẢN PHẨM<span> HOT</span>
                        </div>
                        <div class="box-content">
                        	<!--ttl:START-->
                        	<div class="home-block fashion">
                                <!--Thanh tiêu đề:START-->
                                <div class="ttl-block">
                                    <a class="ttl" href>mẹ và bé</a>                      
                                </div>
                                <hr  width="1000px" height="1px" align="center" color="#ff6600" /> 
                                <!--Thanh tiêu đề:END->
                                <!--Sản phẩm theo tiêu đề:START-->
                                <div class="box-product">
                                    <ul>
                                        <li class="first-in-line">
                                        	<div class="inner-indent">
                                                <div class="img2">
                                                    <a class="colorbox1">
                                                        <img src="{{Asset('assets/images/box/253705664a6dca894847ea43a4c3d055.jpg')}}">
                                                    </a>
                                                    <!--a rel="colorbox">
                                                    	<span>Xem</span>
                                                    </a-->
                                                </div>
                                                <div class="name">
                                                	<a href="#">Áo thun nam nữ</a>
                                                </div>
                                                <div class="wrapper">
                                                	<div class="cart">
                                                    	<a class="button">
                                                        	<span>Chi Tiết</span>
                                                        </a>
                                                    </div>
                                                    <div class="price">
                                                    	<span class="price-new">$599</span>
                                                        <span class="price-old">$600</span>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                        </li>
                                        <li>
                                        	<div class="inner-indent">
                                                <div class="img2">
                                                    <a class="colorbox1">
                                                        <img src="{{Asset('assets/images/box/253705664a6dca894847ea43a4c3d055.jpg')}}">
                                                    </a>
                                                    <!--a rel="colorbox">
                                                    	<span>Xem</span>
                                                    </a-->
                                                </div>
                                                <div class="name">
                                                	<a href="#">Áo thun nam nữ</a>
                                                </div>
                                                <div class="wrapper">
                                                	<div class="cart">
                                                    	<a class="button">
                                                        	<span>Chi Tiết</span>
                                                        </a>
                                                    </div>
                                                    <div class="price">
                                                    	<span class="price-new">$599</span>
                                                        <span class="price-old">$600</span>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                        </li>
                                        <li>
                                        	<div class="inner-indent">
                                                <div class="img2">
                                                    <a class="colorbox1">
                                                        <img src="{{Asset('assets/images/box/253705664a6dca894847ea43a4c3d055.jpg')}}">
                                                    </a>
                                                    <!--a rel="colorbox">
                                                    	<span>Xem</span>
                                                    </a-->
                                                </div>
                                                <div class="name">
                                                	<a href="#">Áo thun nam nữ</a>
                                                </div>
                                                <div class="wrapper">
                                                	<div class="cart">
                                                    	<a class="button">
                                                        	<span>Chi Tiết</span>
                                                        </a>
                                                    </div>
                                                    <div class="price">
                                                    	<span class="price-new">$599</span>
                                                        <span class="price-old">$600</span>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                        </li>
                                        <li class="last-in-line">
                                        	<div class="inner-indent">
                                                <div class="img2">
                                                    <a class="colorbox1">
                                                        <img src="{{Asset('assets/images/box/253705664a6dca894847ea43a4c3d055.jpg')}}">
                                                    </a>
                                                    <!--a rel="colorbox">
                                                    	<span>Xem</span>
                                                    </a-->
                                                </div>
                                                <div class="name">
                                                	<a href="#">Áo thun nam nữ</a>
                                                </div>
                                                <div class="wrapper">
                                                	<div class="cart">
                                                    	<a class="button">
                                                        	<span>Chi Tiết</span>
                                                        </a>
                                                    </div>
                                                    <div class="price">
                                                    	<span class="price-new">$599</span>
                                                        <span class="price-old">$600</span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        
                                    </ul>
                            </div>
                            <!--Sản phẩm theo tiêu đề:END-->
                           </div>
                          <!--ttl:END-->                 
                        </div>
                	</div>
            	</div>
              </div>
            <!--Hộp chứa nội dung sản phẩm:END-->
@endsection

