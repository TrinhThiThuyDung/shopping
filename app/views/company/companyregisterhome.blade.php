@extends('layout.layout-company')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('css/style.css')}}"/>
<script type="text/javascript" src = "{{Asset('/js/jquery-1.11.1.min.js')}}"></script>
@section('title')
	Register
@endsection
@section('content')
      <div id="container">
            	<div id="column-right">
                	<div class="box acount">
                    	<div class="box-heading">Tài khoản</div>
                    	<div class="box-content">
                        	<ul class="acount">
                            	<li>
                                	<a href="{{Asset('companyLogin')}}">Đăng nhập</a>/
                                    <a href="{{Asset('companyRegister')}}">Đăng kí</a>
                                </li>
                                <li>
                                	<a href="{{Asset('companyediter')}}">Thay đổi mật khẩu</a>
                                </li>
                                <li>
                                	<a href="forgotten">Quên mật khẩu</a>
                                </li>
                                <li>
                                	<a href="forgotten.html">Quên mật khẩu</a>
                                </li>
                                <li>
                                	<a href="{{Asset('companysanpham')}}">Thêm sản phẩm</a>
                                </li>
                                <li>
                                	<a href="stoies.html">Gian hàng</a>
                                </li>
                                <li>
                                	<a href="qa.html">Q&A</a>
                                </li>
                                <li>
                                	<a href="customer.html">Khách quen</a>
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
                                	<a href="{{Asset('companyThongtin')}}">Nguyên tắc chung</a>
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
                            <a href="home.html">Trang chủ</a>
                                » 
                            <a href="{{Asset('companyRegister')}}">Đăng ký</a>       
                    </div>
                    <h1>ĐĂNG KÝ TÀI KHOẢN CÔNG TY</h1>
                    <div class="box-container">
                    	<p><span class="required">*</span>Các hạng mục bắt buộc, cần điền đầy đủ!</p>
                        <form action="{{Asset('companyRegister')}}" method="post" enctype="multipart/form-data" id="register" novalidate>
                        	<h2>THÔNG TIN CỦA CÔNG TY</h2>
                            <div class="content">
                            <table class="form">
                            	<tbody>
                                	<tr>
                                    	<td>
                                        	<span class="required">*</span>Tên công ty:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="username" id="username"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>E-Mail:
                                        </td>
                                        <td>
                                        	<input class="q1" type="email" name="email" id="email"/>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Số điện thoại1:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="phone1" id="phone1"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	Số điện thoại2:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="phone2" id="phone2"/>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            </div>
                            <h2>ĐỊA CHỈ CÔNG TY</h2>
                            	 <div class="content">
                            	<table class="form">
                                	<tbody>
                                    	<tr>
                                    	<td>
                                        	<span class="required">*</span>Address:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="address" id="address"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>MẬT KHẨU</h2>
                            <div class="content">
                            	<table class="form">
                                	<tbody>
                                    	<tr>
                                    	<td>
                                        	<span class="required">*</span>Mật khẩu:
                                        </td>
                                        <td>
                                        	<input class="q1" type="password" name="pass" id="pass"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Nhập lại mật khẩu:
                                        </td>
                                        <td>
                                        	<input class="q1" type="password" name="otherpass" id="otherpass"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>MIỂU TẢ CHI TIẾT</h2>
                            <div>
                            	<div class="content">
                                    <table class="form">
                                        <tbody>
                                        	<tr>
                                        <td>
                                        	<input class="q2" type="text" name="description" id="description"/>
                                       
                                        </td>
                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="buttons">
                            	<div class="right">
                                	Tôi đã đọc và đồng ý với
                                	<a href="policy.html" alt="Privacy Policy">Điều khoản sử dụng</a>
                                    <input type="checkbox" name="agree" value="1" id="agree"/>
                                    <button class="btn btn-lg btn-primary btn-block" style="width: 95px; background : #d35400; margin-top:10px;border-color: #d35400">Tiếp tục</button>
                                    <!--<button type="submit" id="btLogin" name="btLogin" class="btn btn-lg btn-primary btn-block" style="width:100px;background : #d35400;border-color: #d35400">Tiếp tục</button>-->
                                   <!-- <a class="button">
                                    	<span>Tiếp tục</span>
                                    </a>-->

                                </div>
                            </div>
                            
                        </form>
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

<script type="text/javascript">
        $("#register").validate({
            rules:{
                username:{
                    required:true,
                    remote:{
                        url:"{{Asset('checkcompanyaccountname')}}",
                        type: "POST"
                    }
                },
                pass:{
                    required:true,
                    minlength:6
                },
                otherpass:{
                    equalTo: "#pass",
                },
               
                address:{
                    required:true
                },
                phone1:{
                    required:true
                },
                email:{
                    required:true
                },
            },
            messages:{
                username:{
                    required:"Vui lòng nhập username",
                    remote: "Username này đã tồn tại"
                },
                email:{
                    required:"Vui lòng nhập email",
                    email:"Không đúng định dạng email",
                    remote: "Email này đã tồn tại"
                },
                address:{
                    required:"Vui lòng nhập address"
                },
                phone1:{
                    required:"Vui lòng nhập phone number"
                },
                pass:{
                    required:"Vui lòng nhập password",
                    minlength:"Mật Khẩu phải nhập 6 kí tự trở lên"
                },
                otherpass:{
                    equalTo:"Mật khẩu xác nhận không đúng"
                },
            },
        })
        
    </script>
@endsection