@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
@section('title')
	Xác nhận | 
@endsection

@section('content')
	<div style="padding-top:50px;margin-top:50px; width: 220px">
		<form action="{{Asset('captcha')}}" method='post' style="padding-top:50px;margin-top:50px">
			<div>
				<img src="{{Asset('random_image')}}" width = "100px" height = "100px;" />
			</div>
			<div style="padding-top: 10px; color:#ff4500;  float: left; margin-right: 20px; font-weight: 700">
				Captcha:
			</div>
			<div style="padding-top: 10px; float: left; color: black">   	
				<input type="text" name="txtCaptcha" maxlength="10" size="18" />
			</div>
			<div  style="padding-top: 10px; color: #ff4500">
				<input type=submit name=ok value="Check" />
			</div> 
		</form>

	</div>
	
@endsection