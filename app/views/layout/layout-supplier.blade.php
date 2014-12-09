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
                            <?php if(!Session::has('id_supplier')){?>
                         Chào mừng bạn tới cửa hàng <a href="<?php echo URL::to('/')?>/supplier/login">Đăng nhập</a>hoặc<a href="<?php echo URL::to('/')?>/supplier/signup ?>">Đăng kí</a>
                         </div>
                         <?php } ?>
                        </div>
                     <div id="logo">
                     <a href="<?php echo URL::to('/') ?>/supplier/home">
                     <img src="{{Asset('/images/11.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/supplier/home">
                     <img src="{{Asset('/images/23.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/supplier/home">
                     <img src="{{Asset('/images/6.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/supplier/home">
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
            	<a href="#">SẢN PHẨM</a>
                <ul>
                    <li>
                        <a href="#">Danh sách</a>
                    </li>
                    <li>
                        <a href="# ">Thêm sản phảm</a>
                    </li>
                    <li>
                        <a href="#">Xóa sản phẩm</a>
                    </li>
                    <li>
                        <a href="#">Sửa thông tin sản phẩm</a>
                    </li>
                   
                </ul>
            </li>
            
            <li class="cat-5">
            	<a href="#">KHÁCH HÀNG</a>
                <ul>
                <li>
                        <a href="#">Khách hàng đã mua</a>
                    </li>
                    <li>
                        <a href="# ">Khách hàng thân thiết</a>
                    </li>
                </ul>

            </li>
            <li class="cat-6">
            	<a href="#">THÔNG TIN</a>
                 <ul>
                     <li>
                        <a href="#">Đổi mật khẩu</a>
                    </li>
                    <li>
                        <a href="# ">Xem thông tin nhà cung cấp</a>
                    </li>
                    <li>
                        <a href="#">Chỉnh sửa thông tin</a>
                    </li>           
                </ul>

            </li>
            <li class="cat-6">
                <a href="#">DOANH THU</a>
                 <ul>
                     <li>
                        <a href="#">Hàng tuần</a>
                    </li>
                    <li>
                        <a href="# ">Hàng tháng</a>
                    </li>
                    <li>
                        <a href="#">Quý</a>
                    </li>
                    <li>
                        <a href="#">Năm</a>
                    </li>            
                </ul>

            </li>
            </ul>
            <div class="clear"></div>
            </div>
            <!--MENU: END -->
            
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