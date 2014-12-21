<html>
    <head>
        <title>@yield('title')</title>
        <html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="{{Asset('/images/logo.jpg')}}" >
        
        <link rel="stylesheet" type="text/css" href="{{Asset('/css/style.css')}}" />
        <script type="text/javascript" src="{{Asset('js/jquery-validation/jquery-1.11.1.min.js')}}"></script>                
        <script type="text/javascript" src="{{Asset('js/jquery-validation/jquery.validate.js')}}"></script>
    </head>
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
                             
                                @if(!Session::has('userLogin'))
                                    Chào mừng bạn tới cửa hàng 
                                    <a href="{{Asset('customerLogin')}}">Đăng nhập</a>hoặc
                                    <a href="{{Asset('customerRegister')}}">Đăng kí</a>         
                                   
                                 @else
                                    Chào mừng bạn:  
                                    <a href="{{Asset('thongTin')}}">{{ Session::get("userLogin");}}</a>
                                    <a href="{{Asset('logout')}}">Đăng xuất</a>                              
                                @endif                           
                         </div>
                    
                         <div id ="search">
                         	<div class="search-box">
                                <div class="button-search">Tìm kiếm</div>
                                <span class="search-input">
                                    <input type="text" name="filter" placeholder="Bàn gỗ, ghế dài, đèn..." >
                                </span>
                             </div>
                         </div>
                         <?php if((!Session::has('userLogin'))&&(!Session::has('companyLogin'))){ ?>
                         <div id="company">
                         	Dành cho nhà sản xuất <a href="<?php echo URL::to('/')?>/companyLoginTc/">Đăng nhập</a>
                         </div>
                         <?php }?>
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
            

                  @yield('content')

@include('customer/footer')