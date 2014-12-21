@extends('layout/layout-custome')
@section('style')
<script type="text/javascript" src="{{Asset('/js/jquery-validation/jquery-1.11.1.min.js')}}"></script>  
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('css/style-dangky.css')}}"/>
<script type="text/javascript" src="{{Asset('js/jquery-validation/jquery.validate.js')}}"></script>
@endsection
@section('title')
	Đăng ký
@endsection

@section('content')
	<div class="fast-link" style="margin-top: 30px;">
        <a href="{{Asset('home')}}">Trang chủ</a>
        » 
        <a> Đăng ký</a>
    </div>
	<div class="dk">
		<p style="font-size: 25px; font-weight: 700; color: #ff4500">Đăng ký</p>
		<form method="post" action="{{Asset('customerRegister')}}" id="form-dk" >
			<div class="khung1">
				<input type="text" name="username" id="username" placeholder="Username" class="form-control"/>
			</div>
			<div class="khung1">
				<div class="rr">
					<div>Gender</div>
					<div><input type="radio" style="width: 18px; height: 18px;" name="gener" id="gender" value="male" checked /> Male </div>
					<div><input type="radio" style="width: 18px; height: 18px;" name="gener" id="gender" value="female" /> Female</div>
				</div>
			</div>
			<div class="khung1">
				<div class="day">
					<div style="width: 80px;float: left;color: #95a5a6; font-size: 14px">Birth Day</div>
					<select name="day"  class="form-control" style="width: 80px; float: left">
						<?php
							for($i = 1; $i < 32;$i++){
								print '<option "value= $i" select>'.$i.'</option>';
							}
						?>
					</select>
					<select name="month" class="form-control" style="width: 80px; float: left; margin-left:10px;">
						<?php
							for($i = 1; $i <=12 ;$i++){
								print '<option "value= $i" select>'.$i.'</option>';
							}
						?>
					</select>
					<select name="year" class="form-control" style="width: 100px; float: left; margin-left:10px;">
						<?php
							for($i = 1905; $i < 2015;$i++){
								print '<option "value= $i" select>'.$i.'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="khung1">
				<input type="text" name="email" id="email" placeholder="Email" class="form-control"/>
			</div>
			<div class="khung1">
				<input type="text" name="address" id="address" placeholder="Address" class="form-control"/>	
			</div>
			<div class="khung1">
				<input type="text" name="phone" id="phone" placeholder="Phone" class="form-control"/>
			</div>
			<div class="khung1">
				<input type="password" name="pass" id="pass" placeholder="Password" class="form-control"/>
			</div>
			<div class="khung1">
				<input type="password" name="passconfir" id="passconfir" placeholder="Re-Password" class="form-control"/>
			</div>
			<button class="btn btn-lg btn-primary btn-block" style="width: 400px; background : #d35400; margin-top:10px;border-color: #d35400">Đăng ký</button>
		</form>
	</div>
 </div>
	<script type="text/javascript">
		$("#form-dk").validate({
			rules:{
				username:{
					required:true,
					remote:{
						url:"{{Asset('checkUsername')}}",
						type: "POST"
					}
				},
				pass:{
					required:true,
					minlength:6
				},
				passconfir:{
					equalTo: "#pass",
				},
				email:{
					required:true,
					email:true,
					remote:{
						url:"{{Asset('checkEmail')}}",
						type: "POST"
					}
				},
				address:{
					required:true
				},
				phone:{
					required:true
				}
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
				phone:{
					required:"Vui lòng nhập phone number"
				},
				pass:{
					required:"Vui lòng nhập password",
					minlength:"Mật Khẩu phải nhập 6 kí tự trở lên"
				},
				passconfir:{
					equalTo:"Mật khẩu xác nhận không đúng"
				}
			},
		})
	</script>
	
@endsection