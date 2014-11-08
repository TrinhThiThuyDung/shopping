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
                        <?php if(!Session::has('id_custome')){?>
                        <div id="welcome">
                         Chào mừng bạn tới cửa hàng <a href="<?php echo URL::to('/')?>/custome/login">Đăng nhập</a>hoặc<a href="#">Đăng kí</a>
                         </div>
                         <?php } ?>
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
             <div id="menu">
            <ul class="menu">
           </ul>
               <div class="clear"></div>
            </div>
            <!--MENU: END -->
            <!--MENU: START -->
            <div id="menu">
            <ul class="menu">
            <li class="cat-1">
                <a href="#">SẢN PHẨM</a>
                <ul>
                     
                    <li>
                        <a href="#">Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a href="#">Sửa thông tin</a>
                    </li>
                    <li>
                        <a href="#">Xóa sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li class="cat-2">
                <a href="#">KHÁCH HÀNG</a>
                <ul>
                    <li>
                        <a href="#">Danh sách khách hàng</a>
                    </li>
                    <li>
                        <a href="#">Khách hàng thân thiết</a>
                    </li>
                </ul>
            </li>
            <li class="cat-3">
                <a href="#">NHÀ CUNG CẤP</a>
                <ul>
                    <li>
                        <a href="#">Thông tin chi tiết</a>
                    </li>
                    <li>
                        <a href="#">Quản lý tài khoản</a>
                    </li>
                    
                </ul>
            </li>
            <li class="cat-5">
                <a href="#">HỎI & ĐÁP</a>
                
            </li>
            <li class="cat-6">
                <a href="#">DANH MỤC SẢN PHẨM</a>
                <ul>
                    <li>
                        <a href="#">Tất cả</a>
                    </li>
                    @yield('san-pham')
                </ul>
            </li>
            
            </ul>
            <div class="clear"></div>
            </div>
            <!--MENU: END -->

            @yield('content')
@include('footer')