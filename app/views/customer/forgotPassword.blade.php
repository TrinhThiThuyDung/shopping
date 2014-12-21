
@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/style-dangky.css')}}"/>
@section('title')
	Quên mật khẩu
@endsection

@section('content')	
	<div class="dk" style="padding-top:80px; height : 400px; width: 500px">
	<p style="font-size: 25px; font-weight: 700; color: #ff4500; margin:outo">Quên mật khẩu</p>
		<p style="font-size: 15px; font-weight: 700; color: #ff4500">Nếu bạn quên mật khẩu vui lòng nhập email bạn của bạn<br>
		Hệ thống sẽ thiết lập lại pass và gưởi lại mật khẩu của bạn qua mail này</p>

		<form method="get" action="{{Asset('sentmail')}}" id="form12">
			<div class="khung1" style="">
				<p>Email:</p>
				<input type="text" name="mail" id="mail" placeholder="Email" class="form-control"/>
			</div>
			<button class="btn btn-lg btn-primary btn-block" style="width: 400px; background : #d35400; margin-top:40px;border-color: #d35400;">Sent</button>
		</form>
	</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#form12').submit(function(){
        var email= $('#mail').val();
        if(email == ""){
        	alert("Vui lòng nhập email");
        }else{
        	$.ajax({
	           type: 'post',
	           url: '{{Asset('checkEmail')}}',
	           data: 
	           {
	            email: email
	           },
	           dataType: 'json',
	           success:function(data){
	             if(data==false){
	             	document.forms["form12"].submit()
	             }
	             else{
	               alert("Email này chưa đăng kí vào hệ thống<br>Vui lòng nhập lại email");
	            }
	           }
	        });
        }        
     return false;
    });   
});
</script>
@endsection