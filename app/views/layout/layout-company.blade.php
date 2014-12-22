@include('header')

<script type="text/javascript" src="{{Asset('/bootstrap-3.3.1/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{Asset('/bootstrap-3.3.1/css/bootstrap-theme.min.css')}}"/>
<script type="text/javascript" src="{{Asset('/js/jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{Asset('/bootstrap-3.3.1/css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('/bootstrap-3.3.1/css/justified-nav.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('/css/home.css')}}" />

<body>
        <div class="main">
            <!--TOP: STRAT -->
            <div class="masthead">
            <br />
            <br />
            <p>
                 <a href="{{Asset('company/home')}}">
                <h1 class="text-muted">

                    HÃY KẾT NỐI CÙNG VỊT CON

                </h1>
            </a>
                      <div id="welcome" style="width: 300px;">
                         <div style="float:left; padding-top: 20px">Công ty: </div>
                                    
                                    <div id="menu1" style="float:left; width: 100px; height:30px;color: #433225">
                                    <ul class="menu">
                                    <li class="cat-1" style="">
                                        <a  style="color: #433225; margin-bottom: 30px; height: 20px">{{ Session::get("companyLogin");}}</a>
                                        <ul>
                                            <li>
                                                <a href="{{Asset('/companythongTin')}}">Thông tin cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="{{Asset('/getPassword')}}">Thay đỗi pass</a>
                                            </li>
            
                                        </ul>
                                    </li>
                                    </ul>
                                    </div>
                                    <label style="padding-top: 20px"> <a href="{{Asset('/logoutCompany')}}" >Đăng xuất</a> </label>
                                                                
                        
                         </div>
                </p>
                <br />
                <br />
                <br />
                <div role="navigation">
                    <ul class="nav nav-justified">
                        <li>
                            <a href="{{Asset('/company/home')}}">SẢN PHẨM</a>
                        </li>
                        <li>
                            <a href="{{Asset('/gethistory')}}">KHÁCH HÀNG</a>
                        </li>
                        <li>
                            <a href="{{Asset('/companythongTin')}}">THÔNG TIN CÔNG TY</a>
                        </li>
                        <li>
                            <a href="{{Asset('/companymessage')}}">DOANH THU</a>
                        </li>
                    </ul>
                </div>
                @yield('content')
            </div>
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
             
@section('company')
<div class="column col1-3">
                    
                    </div>
                    @endsection
                    @yield('script')
@include('footer')