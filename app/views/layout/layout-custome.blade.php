@include('header')
<body class="common-home">
<div class="main-shining">
    <div class="main-width">
        <div class="main">
            <!--TOP: STRAT -->
            <div class="top">
            	<div id="row">
                    <div class="row-right">
                        <div class="group-name"></div>
                        
                        <div id="welcome">
                            <?php if(!Session::has('id_custome')){?>
                         Chào mừng bạn tới cửa hàng <a href="<?php echo URL::to('/')?>/custome/login">Đăng nhập</a>hoặc<a href="#">Đăng kí</a>
                          <?php } ?>
                         </div>
                        
                         <div id ="search">
                         	<div class="button-search">Tìm kiếm</div>
                            <span class="search-input">
                            	<input type="text" name="filter" placeholder="Enter here" >
                            </span>
                         </div>
                        </div>
                     <div id="logo">
                     <a href="<?php echo URL::to('/')?>/home">
                     <img src="{{Asset('/images/11.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="home.html">
                     <img src="{{Asset('/images/23.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="home.html">
                     <img src="{{Asset('/images/6.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="home.html">
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
            	<a href="#">ĐIỆN TỬ</a>
                <ul>
                	<li>
                    	<a href="#">Điện thoại</a>
                    </li>
                    <li>
                    	<a href="#">Tivi / Màn hình</a>
                    </li>
                    <li>
                    	<a href="#">Máy tính</a>
                    </li>
                    <li>
                    	<a href="#">Linh kiện</a>
                    </li>
                    <li>
                    	<a href="#">Máy ảnh/Máy quay</a>
                    </li>
                    <li>
                    	<a href="#">Máy in</a>
                    </li>
                    
                </ul>
            </li>
            <li class="cat-2">
            	<a href="#">GIA DỤNG</a>
                <ul>
                    <li>
                    	<a href="#">Đèn bàn</a>
                    </li>
                    <li>
                    	<a href="#">Quạt điện</a>
                    </li>
                    <li>
                    	<a href="#">Đồ dùng nhà bếp</a>
                        	<ul>
                            	<li> <a href="#">Nổi, Xoong, Chảo</li>
                                <li> <a href="#">Bộ ấm chém</li>
                                <li> <a href="#">Dụng cụ gọt</li>
                            </ul>
                    </li>
                    <li>
                    	<a href="#">Rỏ, khay , kệ</a>
                    </li>
                    <li>
                    	<a href="#">Tủ vải</a>
                    </li>
                </ul>
            </li>
            <li class="cat-3">
            	<a href="#">THỜI TRANG</a>
                <ul>
                	<li>
                    	<a href="#">Quần áo</a>
                    </li>
                    <li>
                    	<a href="#">Giày dép</a>
                    </li>
                    <li>
                    	<a href="#">Trang sức / Phụ kiện</a>
                    </li>
                    <li>
                    	<a href="#">Ví balo - Túi xách</a>
                    </li> 
                </ul>
            </li>
            <li class="cat-5">
            	<a href="#">MẸ & BÉ</a>
                <ul>
                	<li>
                    	<a href="#">Đồ cho mẹ</a>
                    </li>
                    <li>
                    	<a href="#">Đồ dùng trẻ em</a>
                    </li>
                    <li>
                    	<a href="#">Đồ chơi trẻ con</a>
                    </li>
                    <li>
                    	<a href="#">Thời trang trẻ em</a>
                    </li>
                    
                </ul>
            </li>
            <li class="cat-6">
            	<a href="#">SPA - LÀM ĐẸP</a>
                <ul>
                	<li>
                    	<a href="#">Spa - massage</a>
                    </li>
                    <li>
                    	<a href="#">Trang điểm - Làm tóc</a>
                    </li>
                    <li>
                    	<a href="#">Chăm sóc sức khỏe</a>
                    </li>
                    
                </ul>
            </li>
            <li class="cat-7">
            	<a href="#">DU LỊCH</a>
                <ul>
                	<li>
                    	<a href="#">Du lịch Miền Bắc</a>
                    </li>
                    <li>
                    	<a href="#">Du lịch Miền Trung</a>
                    </li>
                    <li>
                    	<a href="#">Du lịch Miền Nam</a>
                    </li>
                    <li>
                    	<a href="#">Du lịch Nước Ngoài</a>
                    </li>
                </ul>
            </li>
            <li class="cat-8">
            	<a href="#">GIẢI TRÍ</a>
                <ul>
                	<li>
                    	<a href="#">Xem phim</a>
                    </li>
                    <li>
                    	<a href="#">Karaoke</a>
                    </li>
                    <li>
                    	<a href="#">Chụp ảnh</a>
                    </li>
                    <li>
                    	<a href="#">Chơi gold</a>
                    </li> 
                </ul>
            </li>
            <li class="cat-8">
            	<a href="#">THẾ GIỚI XE</a>
                                <ul>
                	<li>
                    	<a href="#">Xe hơi</a>
                    </li>
                    <li>
                    	<a href="#">Xe máy</a>
                    </li>
                    <li>
                    	<a href="#">Xe đạp</a>
                    </li>
                    <li>
                    	<a href="#">Phụ tùng - Đồ chơi</a>
                    </li>
                    <li>
                    	<a href="#">Dịch vị xe hơi - xe máy</a>
                    </li> 
                </ul>

            </li>
            </ul>
            <div class="clear"></div>
            </div>
            <!--MENU: END -->

            @yield('content')
            
@include('footer')