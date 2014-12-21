@extends('layout/layout-company')
@section('title')
	Quên mật khẩu
@endsection

@section('content')
   <body class="common-home">
    <div class="main-shining">
            <!--MENU: END --><!-- InstanceBeginEditable name="container" -->
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
                                    <a href="{{Asset('getPassword')}}">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="{{Asset('getInsertProduct')}}">Thêm sản phẩm</a>
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
                    <div id="content" style="height: 300px">
                        <div class="fast-link">
                            <a href="home">Trang chủ</a>
                                » 
                            <a href="{{Asset('companyLogin')}}">Đăng nhập</a>
                        </div>
                        <h1>  </h1>
                        <div class="login-content" style="padding-left:198px;">
                            <div class="left" style="height: 300px">
                                <h2>Forgot Password System</h2>
                                <div id="error" style="color: red"></div>
                                <form action="" method="post" id="form_forgot">
                                    <div class="content">
                                        <b class="padd">Enter Your Email:</b>
                                        <input  class="b1" type="text" name="email"  id="email" style="width:310px" style="height: 120px">
                                        <br>
                                        <button type="submit" id="btLogin" name="btLogin" class="btn btn-lg btn-primary btn-block" style="width:180px;background : #d35400;border-color: #d35400">Send PassWord</button>
                                
                                    </div>
                                </form>
                            </div>
                            </div>
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
            <!--BACKTOP: END-->
            <div class="clear"></div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#form_forgot').submit(function(){
        var email= $('#email').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('postPassword')}}',
           data: 
           {
            email:email
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
                $('#error').empty();
                $('#error').append("Email khong ton tai trong he thong hoac chua nhap mail");
             }else{
               document.forms["form_forgot"].submit()
            }
           }
        });
     return false;
    });   
});
</script>

@endsection
