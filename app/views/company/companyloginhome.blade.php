@extends('layout/layout-company')

@section('title')
	Đăng nhập
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
                                    <a href="{{Asset('companymessage')}}">Thong tin nha cung cap va Doanh thu</a>
                                </li>
                                <li>
                                    <a href="{{Asset('gethistory')}}">listNguoimua</a>
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
                        <h1>Đăng nhập</h1>
                        <div class="login-content" style="padding-left:198px;">
                            <div class="left" style="height: 400px">
                                <h2>Đăng nhập vào hệ thống</h2>
                                <div id="error" style="color: red"></div>
                                <form action="{{Asset('companyLoginTc')}}" method="post" id="form_lg">
                                    <div class="content">
                                        <p>Đăng nhập :)  plz</p>
                                        <b class="padd">Tên tài khoản:</b>
                                        <input  class="b1" type="text" name="username"  id="username" style="width:330px">
                                        <b class="padd">Mật khẩu:</b>
                                        <input class="" type="password" name="pass" id="pass" style="width:330px" >
                                        <br>
                                        <div>
                                            <a href="#" >Quên mật khẩu<br><br>
                                            </a>
                                           <p>Bạn chưa có tài khoản
                                              <a class="button" href="{{Asset('companyRegister')}}">
                                                <span>Đăng ký</span>
                                              </a>
                                        </div>
                                        <button type="submit" id="btLogin" name="btLogin" class="btn btn-lg btn-primary btn-block" style="width:130px;background : #d35400;border-color: #d35400">Đăng nhập</button>
                                
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
    $('#form_lg').submit(function(){
        var id= $('#username').val();
        var pass = $('#pass').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('ktcompanyLogin')}}',
           data: 
           {
            user_name: id,
            pass:pass
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
                $('#error').empty();
                $('#error').append("AccountName hoặc mật khẩu của bạn sai");
             }else{
               document.forms["form_lg"].submit()
            }
           }
        });
     return false;
    });   
});
</script>
@endsection
