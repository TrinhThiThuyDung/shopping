@include('header')
<body class="common-home">
<div class="main-shining">
    <div class="main-width">
        <div class="main">
            <!--TOP: STRAT -->
            <div class="top">
            	<div id="row">
                    <div class="row-right">
                        <div class="group-name">
                        	<img src="{{Asset('/images/header-phone.png')}}" />
                        </div>
                        <div id="welcome">
                            <?php if(!Session::has('id_custome')){?>
                         Chào mừng bạn tới cửa hàng <a href="<?php echo URL::to('/')?>/custome/login">Đăng nhập</a>hoặc<a href="<?php echo URL::to('/')?>/custome/signup ?>">Đăng kí</a>
                         </div>
                         <?php } ?>
                         <div id ="search">
                         	<div class="search-box">
                                <div class="button-search">Tìm kiếm</div>
                                <span class="search-input">
                                    <input type="text" name="filter" placeholder="Bàn gỗ, ghế dài, đèn..." >
                                </span>
                             </div>
                         </div>
                         <div id="company">
                         	Dành cho nhà sản xuất <a href="<?php echo URL::to('/')?>/supplier/login ?>">Đăng nhập</a>
                         </div>
                         
                        </div>
                     <div id="logo">
                     <a href="<?php echo URL::to('/') ?>/custome/home">
                     <img src="{{Asset('/images/11.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/custome/home">
                     <img src="{{Asset('/images/23.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/custome/home">
                     <img src="{{Asset('/images/6.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/custome/home">
                     <img src="{{Asset('/images/25.gif')}}" title="logo" alt="logo">
                     </a>
                      </div>
                
                </div>
            </div>
            <!--TOP: END -->
            
            <!--MENU: START -->
            <div id="menu">
            <ul class="menu">
            <li class="cat-1">
            	<a href="#">PHÒNG KHÁCH</a>
                <ul>
                	<li>
                    	<a href="# ">Kệ tivi</a>
                    </li>
                    <li>
                    	<a href="#">Sofa / ghế dài</a>
                    </li>
                    <li>
                    	<a href="#">Tủ kệ trang trí</a>
                    </li>
                    <li>
                    	<a href="#">Tủ giày dép</a>
                    </li>
                </ul>
            </li>
            <li class="cat-2">
            	<a href="#">PHÒNG NGỦ</a>
                <ul>
                    <li>
                    	<a href="#">Giường ngủ</a>
                    </li>
                    <li>
                    	<a href="#">Tủ đầu giường</a>
                    </li>
                    <li>
                    	<a href="#">Bàn trang điểm</a>
                    </li>
                    <li>
                    	<a href="#">Tủ quần áo</a>
                    </li>
                </ul>
            </li>
            <li class="cat-3">
            	<a href="#">DÀNH CHO BÉ</a>
                <ul>
                	<li>
                    	<a href="#">Bàn học trẻ em</a>
                    </li>
                    <li>
                    	<a href="#">Giường trẻ em</a>
                    </li>
                    <li>
                    	<a href="#">Tủ kệ</a>
                    </li>
                </ul>
            </li>
            <li class="cat-5">
            	<a href="#">PHÒNG ĂN / BẾP</a>
                <ul>
                	<li>
                    	<a href="#">Bàn ăn</a>
                    </li>
                    <li>
                    	<a href="#">Kệ treo tường</a>
                    </li>
                    <li>
                    	<a href="#">cabinet</a>
                    </li>
                    <li>
                    	<a href="#">Quần bar/ Tủ rượu</a>
                    </li> 
                </ul>
            </li>
            <li class="cat-6">
            	<a href="#">PHÒNG TẮM</a>
                <ul>
                	<li>
                    	<a href="#">Tủ lavabo</a>
                    </li>
                    <li>
                    	<a href="#">Bồn tắm</a>
                    </li>
                    <li>
                    	<a href="#">Gương soi</a>
                    </li>
                </ul>
            </li>
            <li class="cat-7">
            	<a href="#">TRANG TRÍ</a>
                <ul>
                	<li>
                    	<a href="#">Đèn LED</a>
                    </li>
                    <li>
                    	<a href="#">Màn cửa</a>
                    </li>
                    <li>
                    	<a href="#">Thảm trải sàn</a>
                    </li>
                    <li>
                    	<a href="#">Đồ mỹ nghệ</a>
                    </li>
                </ul>
            </li>
            <li class="cat-8">
            	<a href="#">SÀN ĐẸP</a>
            </li>
            </ul>
            <div class="clear"></div>
            </div>
            <!--MENU: END -->
            
            <!--SLIDE: START -->
            <div class="slide">
            	<div class="slideshow">
                	<div id="slidewhow0">
                        <div id="bigPic">
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img href="" src="{{Asset('/images/slide/2.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/3.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/1.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/4.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/3.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/1.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/4.jpg')}}">
                            </a>
                        </div>
    
                        <ul id="thumbs">
                            <li class="active" rel="1"><img alt="" src="{{Asset('/images/slide/2.jpg')}}"> </li>
                            <li rel="2"><img alt="" src="/images/slide/3.jpg"> </li>
                            <li rel="3"><img alt="" src="{{Asset('/images/slide/1.jpg')}}"> </li>
                            <li rel="4"><img alt="" src="{{Asset('/images/slide/4.jpg')}}"> </li>
                            <li rel="5"><img alt="" src="{{Asset('/images/slide/3.jpg')}}"> </li>
                            <li rel="6"><img alt="" src="{{Asset('/images/slide/1.jpg')}}"> </li>
                            <li rel="7"><img alt="" src="{{Asset('/images/slide/4.jpg')}}"> </li>
                        </ul>
 						<div class="banner">
                            <a>
                                <img src="{{Asset('/images/slide/banner-1-398x163.jpg')}}" title="banner" >
                            </a>
                        </div>
                        <div class="banner">
                            <a>
                                <img src="{{Asset('/images/slide/banner-2-398x163.jpg')}}" title="banner" >
                            </a>
                        </div>
                        <div class="banner">
                            <a>
                                <img src="{{Asset('/images/slide/banner-3-398x163.jpg')}}" title="banner" >
                            </a>
                      </div>
                    </div>
                     
              </div>
          </div>
            <!--SLIDE: END -->
             <!--BACKTOP: START-->
             	<script type="text/javascript">
					$(document).ready(function() {
						$('.main-shining').append('<div id="back-top"><a><span>Back to top</span></a>');
                        $(window).scroll(function(){
							if($(window).scrollTop() != 0){
								$('#back-top').fadeIn();
								}else{
									$('#back-top').fadeOut();
									}
							});
							$('#back-top').click(function(){
								$('html, body').animate({scrollTop:0},500);
								});
                    });
                </script>
            </div>
             <!--BACKTOP: END-->
             @yield('content')

@include('footer')