@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>

@section('title')
	Đăng nhập
@endsection

@section('content')
	<div class="fast-link">
        <a href="{{Asset('home')}}">Trang chủ</a>
        » 
        <a> Đăng nhập</a>
    </div>
	<div class="login-content" style="margin-top:50px; height:480px">
    	<div class="left" style="height:350px;width:370px">
        	<h2>Đăng nhập vào hệ thống</h2>
                <div  style="color: #ff7f00;margin-left:50px;font-size:12 ;height: 30px;">      
                   
                    <div id="error"></div>
                </div>
            <form id="form_lg" action="{{Asset('customerLoginTc')}}" method="post">
            	<div class="content" style="height:300px">
                	
                	<b class="padd">Email:</b>
                    <input  type="text" name="user_input" id="user_input" style="width:330px" class="form-control">
                    <b class="padd" style="width:330px; margin-top:20px">Mật khẩu:</b>
                    <input type="password" name="pass" id="pass" style="width:330px" class="form-control">
                    <br>
                    
                    <button type="submit" id="btLogin" name="btLogin" class="btn btn-lg btn-primary btn-block" style="width:325px;background : #d35400; margin-top:10px;border-color: #d35400">Đăng nhập</button>
                </div>
            </form>
        </div>
        <div class="right" style="margin-left:50px;">
        	<h2>Tài khoản mới</h2>
            <div class="content" >
            	<p>
                	<b>Đăng kí tài khoản</b>
                </p>
                <p>
                	Lập tài khoản rất có lợi cho khách hàng<br />Tốt nhất là lập đi nha<br />Đảm bảo tính bảo mật<br />Click bên dưới<br />
                </p>
                <form action="{{Asset('customerRegister')}}" method="get">
                 <button class="btn btn-lg btn-primary btn-block" style="background : #d35400;border-color: #d35400; width:80px;height:40px;font-size:14">Đăng ký</button>
                </form>
            </div>
            
        </div>
       
             </div> 
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#form_lg').submit(function(){
        var id= $('#user_input').val();
        var pass = $('#pass').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('ktLogin')}}',
           data: 
           {
            user_input: id,
            pass:pass
           },
           dataType: 'json',
           success:function(data){
             if(data==0){

                $('#error').empty();
                $('#error').append("Email hoặc mật khẩu của bạn sai.</br>Vui lòng nhập lại.");
             }
             else{
               document.forms["form_lg"].submit()
            }
           }
        });
     return false;
    });   
});
</script>
@endsection
