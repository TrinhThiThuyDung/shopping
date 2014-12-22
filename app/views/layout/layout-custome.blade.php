@include('header')
<link rel="stylesheet" type="text/css" href="{{Asset('/css/home.css')}}" />
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
                        <div id="welcome" style="width: 380px;">
                            <?php if(!Session::has('userLogin')){?>
                         Chào mừng bạn tới cửa hàng <a href="<?php echo URL::to('/')?>/customerLogin">Đăng nhập</a>hoặc<a href="<?php echo URL::to('/')?>/customerRegister">Đăng kí</a>
                         
                         <?php } else{?> 
                         <div id="welcome" style="width: 300px;">
                         <div style="float:left; padding-top: 20px">Chào mừng bạn:  </div>
                                    
                                    <div id="menu1" style="float:left; width: 100px; height:30px;color: #433225">
                                    <ul class="menu">
                                    <li class="cat-1" style="">
                                        <a  style="color: #433225; margin-bottom: 30px; height: 20px">{{ Session::get("userLogin");}}</a>
                                        <ul>
                                            <li>
                                                <a href="{{Asset('thongTin')}}">Thông tin cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="{{Asset('tdPasscustomer')}}">Thay đỗi pass</a>
                                            </li>
                                            <li>
                                                <a href="{{Asset('historySP')}}">Lịch sử mua hàng</a>
                                            </li>
                                        </ul>
                                    </li>
                                    </ul>
                                    </div>
                                    <label style="padding-top: 20px"> <a href="{{Asset('logout')}}" >Đăng xuất</a> </label>
                                                                
                        
                         </div>
  <?php }?>
                       <form id ="search" method="get" action="{{Asset('search_name')}}" style="height:35px; width: 350px">
                            <button class="button-search" name="search" style="font-size:15; height:35px">Tìm kiếm</button>
                            <span class="search-input" >
                                <input type="text"  id="texSearch1" name="texSearch1" autocomplete="off" placeholder="Bàn gỗ, ghế dài, đèn..." >
                            </span>
                            <div style="background:#f0e68c; color: #433225">
                                <ul id='result1'></ul>
                            </div>
                        </form>
                         <?php if((!Session::has('userLogin'))&&(!Session::has('companyLogin'))){ ?>
                         <div id="company">
                         	Dành cho nhà sản xuất <a href="<?php echo URL::to('/')?>/companyLogin/">Đăng nhập</a>
                         </div>
                         <?php }?>
                        </div>
                     <div id="logo">
                     <a href="<?php echo URL::to('/') ?>/home">
                     <img src="{{Asset('/images/11.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/home">
                     <img src="{{Asset('/images/23.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/home">
                     <img src="{{Asset('/images/6.gif')}}" title="logo" alt="logo">
                     </a>
                     <a href="<?php echo URL::to('/') ?>/home">
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
            	<a href="{{Asset('opencart/10/')}}">PHÒNG KHÁCH</a>
                <ul>
                	<li>
                    	<a href="{{Asset('opencart/11/')}} ">Kệ tivi</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/12/')}}">Sofa / ghế dài</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/13/')}}">Tủ kệ trang trí</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/14/')}}">Tủ giày dép</a>
                    </li>
                </ul>
            </li>
            <li class="cat-2">
            	<a href="{{Asset('opencart/20/')}}">PHÒNG NGỦ</a>
                <ul>
                    <li>
                    	<a href="{{Asset('opencart/21/')}}">Giường ngủ</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/22/')}}">Tủ đầu giường</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/23/')}}">Bàn trang điểm</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/24/')}}">Tủ quần áo</a>
                    </li>
                </ul>
            </li>
            <li class="cat-3">
            	<a href="{{Asset('opencart/30/')}}">DÀNH CHO BÉ</a>
                <ul>
                	<li>
                    	<a href="{{Asset('opencart/31/')}}">Bàn học trẻ em</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/32/')}}">Giường trẻ em</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/33/')}}">Tủ kệ</a>
                    </li>
                </ul>
            </li>
            <li class="cat-5">
            	<a href="{{Asset('opencart/40/')}}">PHÒNG ĂN / BẾP</a>
                <ul>
                	<li>
                    	<a href="{{Asset('opencart/41/')}}">Bàn ăn</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/42/')}}">Kệ treo tường</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/43/')}}">cabinet</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/44/')}}">Quần bar/ Tủ rượu</a>
                    </li> 
                </ul>
            </li>
            <li class="cat-6">
            	<a href="{{Asset('opencart/50/')}}">PHÒNG TẮM</a>
                <ul>
                	<li>
                    	<a href="{{Asset('opencart/51/')}}">Tủ lavabo</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/52/')}}">Bồn tắm</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/53/')}}">Gương soi</a>
                    </li>
                </ul>
            </li>
            <li class="cat-7">
            	<a href="{{Asset('opencart/60/')}}">TRANG TRÍ</a>
                <ul>
                	<li>
                    	<a href="{{Asset('opencart/61/')}}">Đèn LED</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/62/')}}">Màn cửa</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/63/')}}">Thảm trải sàn</a>
                    </li>
                    <li>
                    	<a href="{{Asset('opencart/64/')}}">Đồ mỹ nghệ</a>
                    </li>
                </ul>
            </li>
            <li class="cat-8">
            	<a href="{{Asset('opencart/70/')}}">SÀN ĐẸP</a>
            </li>
            </ul>
            <div class="clear"></div>
            </div>
            <!--MENU: END -->
            @yield('slide')
           
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
                           
    $('#texSearch1').focus(function(){
        var texSearch1= $('#texSearch1').val();
        
        $.ajax({
           type: 'get',
           url: '{{Asset('texsearch')}}',
           data: 
           {
            texSearch1:texSearch1
           },
           dataType: 'json',
           success:function(data){
                $('#result1').empty();
                $('#texSearch1').blur(function(){
            $('#result1').empty();
        });
                $.each(data, function(i, field){
                       $('#result1').append('<li class="nameSP" value='+field+'><a >'+field+'</a >'+'</li>');
                });
            }   
        });

   });
});
</script>
                    
            </div>
             <!--BACKTOP: END-->
             @yield('content')
@section('company')
<div class="column col1-3">
                      <h3>NHÀ CUNG CẤP</h3>
                      <ul>
                        <li> <a href="http://avalo.vn/">AVALO</a> </li>
                        <li> <a href="http://www.honda.com.vn/">Nội thất Hòa Phát</a> </li>
                        <li> <a href="http://www.thietkekientrucvietvn/">Areka  Vietnam</a> </li>
                        <li> <a href="http://www.kbis.vn/">KBIS</a> </li>
                      </ul>
                    </div>
                    @endsection
                   

@include('footer')
