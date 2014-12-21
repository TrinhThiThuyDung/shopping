@extends('layout.layout-company')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('css/style.css')}}"/>
<script type="text/javascript" src = "{{Asset('/js/jquery-1.11.1.min.js')}}"></script>
@section('title')
    login
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
                                    <a href="forgotten.html">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="stoies.html">Gian hàng</a>
                                </li>
                                <li>
                                    <a href="qa.html">Q&A</a>
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
                        <h1>Thay Đổi Mật Khẩu</h1>
                        <div class="login-content" style="padding-left:198px;">
                            <div class="left" style="height: 300px">
                                <h2>thay đổi mật khẩu của hệ thống </h2>
                                <div id="error" style="color: red"></div>
                                <form action="{{Asset('postcompanyediter')}}" method="post" id="form_lg" nonvalidate>
                                    <div class="content">
                                        <b class="padd">Tên tài khoản:</b>
                                        <input  class="b1" type="text" name="username"  id="username" style="width:310px">
                                        <b class="padd">Mật khẩu:</b>
                                        <input class="" type="password" name="pass" id="pass" style="width:310px" >
                                        <br>
                                        <div class="content">
                                        <b class="padd">Mật khẩu moi:</b>
                                        <input class="" type="password" name="newpass" id="newpass" style="width:310px" >
                                        <br>
                                        <div>
                                         <button type="submit" id="btLogin" name="btLogin" class="btn btn-lg btn-primary btn-block" style="width:310px;background : #d35400; margin-top:15px;border-color: #d35400">SAVE</button>
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
@endsection
