@include('header')
@section('style')
<script type="text/javascript" src="{{Asset('/bootstrap-3.3.1/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{Asset('/bootstrap-3.3.1/css/bootstrap-theme.min.css')}}"/>
<script type="text/javascript" src="{{Asset('/js/jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{Asset('/bootstrap-3.3.1/css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('/bootstrap-3.3.1/css/justified-nav.css')}}"/>
@endsection
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
                       <ul class="nav navbar-nav navbar-right">
                        <li id="fat-menu" class="dropdown">
                          <a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                           <?php if(Session::has('companyLogin')){
                            echo Session::get('companyLogin');
                           }?> 
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Thông tin</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Đổi mật khẩu</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Khách hàng</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Đăng xuất</a></li>
                          </ul>
                        </li>
                      </ul>
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
                            <a href="{{Asset('/doanhthu')}}">DOANH THU</a>
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