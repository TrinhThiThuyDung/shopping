@extends('layout.layout-custome')

@section('title')
Quy tac cua vit con
@endsection

@section('content')
<?php $url = URL::to('/')."/images"; ?>
            
            <!--MENU: START -->
            <div id="menu">
            <ul class="menu">
            <li class="cat-1">
            	<a href="opencart.html">PHÒNG KHÁCH</a>
                <ul>
                	<li>
                    	<a href="openlist.html ">Kệ tivi</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Sofa / ghế dài</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Tủ kệ trang trí</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Tủ giày dép</a>
                    </li>
                </ul>
            </li>
            <li class="cat-2">
            	<a href="opencart.html">PHÒNG NGỦ</a>
                <ul>
                    <li>
                    	<a href="openlist.html">Giường ngủ</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Tủ đầu giường</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Bàn trang điểm</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Tủ quần áo</a>
                    </li>
                </ul>
            </li>
            <li class="cat-3">
            	<a href="opencart.html">DÀNH CHO BÉ</a>
                <ul>
                	<li>
                    	<a href="openlist.html">Bàn học trẻ em</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Giường trẻ em</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Tủ kệ</a>
                    </li>
                </ul>
            </li>
            <li class="cat-5">
            	<a href="opencart.html">PHÒNG ĂN / BẾP</a>
                <ul>
                	<li>
                    	<a href="openlist.html">Bàn ăn</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Kệ treo tường</a>
                    </li>
                    <li>
                    	<a href="openlist.html">cabinet</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Quần bar/ Tủ rượu</a>
                    </li> 
                </ul>
            </li>
            <li class="cat-6">
            	<a href="opencart.html">PHÒNG TẮM</a>
                <ul>
                	<li>
                    	<a href="openlist.html">Tủ lavabo</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Bồn tắm</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Gương soi</a>
                    </li>
                </ul>
            </li>
            <li class="cat-7">
            	<a href="opencart.html">TRANG TRÍ</a>
                <ul>
                	<li>
                    	<a href="openlist.html">Đèn LED</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Màn cửa</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Thảm trải sàn</a>
                    </li>
                    <li>
                    	<a href="openlist.html">Đồ mỹ nghệ</a>
                    </li>
                </ul>
            </li>
            <li class="cat-8">
            	<a href="opencart.html">SÀN ĐẸP</a>
            </li>
            </ul>
            <div class="clear"></div>
            </div>

            <!--MENU: END --><!-- InstanceBeginEditable name="container" -->
            <div id="container">
            	<div id="column-right">
                	<div class="box acount">
                    	<div class="box-heading">Tài khoản</div>
                    	<div class="box-content">
                        	<ul class="acount">
                            	<li>
                                	<a href="login.html">Đăng nhập</a>/
                                    <a href="register.html">Đăng kí</a>
                                </li>
                                <li>
                                	<a href="edit.html">Thay đổi mật khẩu</a>
                                </li>
                                <li>
                                	<a href="forgotten">Quên mật khẩu</a>
                                </li>
                                <li>
                                	<a href="bag.html">Giở hàng</a>
                                </li>
                                <li>
                                	<a href="download">Tái xuống</a>
                                </li>
                                <li>
                                	<a href="order">Lịch sử mua hàng</a>
                                </li>
                                <li>
                                	<a href="fanpage">Diễn đàn</a>
                                </li>
                                
                            </ul>
                        </div> 
                    </div>
                    <div class="box info">
                       <div class="box-heading">Thông tin</div>
                    	<div class="box-content">
                        	<ul class="acount">
                            	<li>
                                	<a href="about.html">Giới thiệu </a>
                                </li>
                            	<li>
                                	<a href="role.html">Nguyên tắc chung</a>
                                </li>
                                <li>
                                	<a href="privacy.html">Chính sách bảo mật thông tin</a>
                                </li>
                                <li>
                                	<a href="transaction_privacy.html">Quy định giao dịch</a>
                                </li>
                                <li>
                                	<a href="pay_policy.html">Quy định thanh toán</a>
                                </li>
                                <li>
                                	<a href="policy.html">Chính sách sử dụng</a>
                                </li>
                                <li>
                                	<a href="contact.html">Kết nối</a>
                                </li>
                                <li>
                                	<a href="map.html">Địa chỉ</a>
                                </li>
                                
                            </ul>
                        </div>  
                     </div>	
                    <div>
                    </div>
                </div>
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
