@extends('layout/layout-company')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('css/style.css')}}"/>
<script type="text/javascript" src = "{{Asset('/js/jquery-1.11.1.min.js')}}"></script>
@section('title')
	Quy tắc
@endsection

@section('content')
       <div id="content">
                        <div class="fast-link">
                            <a href="../home.html">Trang chủ</a>
                                » 
                            <a href="../role.html">Nguyên tắc chung</a>
                        </div>
                        <h1>Nguyên tắc chung</h1>
                        <div class="role">
                        	<h3>1.Mục đích</h3>
                        	<p>
                            	vitCon.com là Sàn giao dịch thương mại điện tử, phục vụ nhu cầu mua bán hàng hóa trực truyến theo đó người mua có thể mua hàng hóa,<br /> dịch vụ trực tuyến<br /><br />
Mục tiêu của vitCon.com  là xây dựng một Sàn giao dịch thương mại điện tử uy tín, là cầu nối giữa người mua và người bán và là nơi cung cấp nhiều loại hàng hóa, dịch vụ chất lượng.
                            </p>
                        </div>
                        <div class="role">
                        	<h3>2. Nguyên tắc hoạt động của Sàn giao dịch thương mại điện tử Vatgia.com</h3>
                            <p>
                            	<ul>
                                	<li>Bản quy chế này áp dụng cho các Thành viên đăng ký tham gia sử dụng dịch vụ, các Thương nhân, Tổ chức, Cá nhân tham gia mua bán hàng hóa trên vitCon.com</li>
                                    <li>Website Vatgia.com do Công ty Cổ phần Vật giá Việt Nam  làm chủ sở hữu. Thương nhân, Tổ chức và Cá nhân tham gia mua bán hàng hóa trên vitCon.com</li>
                                    <li>Cá nhân tham gia giao dịch trên vitCon.com  phải đăng ký thành viên hoặc kê khai các thông tin cá nhân ban đầu được vitCon.com công nhận và cho phép sử dụng dịch vụ trên vitCon.com.</li>
                                    <li>Hoạt động mua bán hàng hóa trên vitCon.com  phải công khai, minh bạch, bảo đảm quyền lợi của người tiêu dùng.</li>
                                    <li>Hàng hóa mua bán trên vitCon.com  được pháp luật cho phép, không thuộc loại hàng hóa bị cấm kinh doanh, cấm quảng cáo theo quy định của pháp luật.</li>
                                    <li>Người mua phải thanh toán tiền mua hàng hóa trực tiếp cho người bán hoặc cho vitCon.com (nếu người bán yêu cầu).</li>
                                </ul>
                            </p>
                        </div>
                </div>
            </div>
            <!-- InstanceEndEditable -->
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
@endsection