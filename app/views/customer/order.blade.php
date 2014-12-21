@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>

@section('title')
	Đơn hàng
@endsection

@section('content')
<div id="container">
	<div style="padding-top: 50px;margin-bottom: 100px;">
		<div style="width: 300px;padding-left: 30px ; float: right; color: #ff4500" >
			<p style="font-size: 25px; font-weight: 700; color: #ff4500">Thông tin đặt hàng</p>
			<div class="khung1" style="padding-top:20px; background: #eedd82">
			Họ tên: <label>{{$user[0]['name']}}</label>
			</div>
			<div class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				Địa chỉ Email: 
				<label>{{$user[0]->email}}</label>
			</div>
			<div class="khung1" style="padding-top: 10px;background: #eedd82;margin-top:5px">
				Số điện thoại: 
				<label>{{$user[0]->phone}}</label>
			</div>
			<div class="khung1" style="padding-top: 10px;background: #eedd82; margin-top:5px">
				<p>Địa chỉ (số nhà, đường, tỉnh)</p>
				<label>{{$user[0]->address}}</label>			
			</div>
			<p style="font-size: 16px; font-weight: 700; color: #ff4500; padding-top: 20px">Nhập mã kí tự:</p>
			<p id="tb"></p>
			<form method="post" action="{{Asset('order')}}" id="captcha">
				<div style="padding-top: 20px">
					<img src="{{Asset('random_image')}}" />
				</div>
				<div style="padding-top: 10px; color:#ff4500;  float: left; margin-right: 20px; font-weight: 700">
				Captcha:
				</div>
				<div style="padding-top: 10px; float: left; color: black; padding-bottom: 20px">   	
					<input type="text" id="txtCaptcha" name="txtCaptcha" maxlength="10" size="25" />
				</div>
				<button class="btn btn-lg btn-primary btn-block" style="width: 250px; background : #d35400; margin-top:100px;border-color: #d35400; height: 40px">Đặt hàng</button>
				
			</form>
		</div>
			<div style="float:left; padding-left: 30px" >
				<p style="font-size: 25px; font-weight: 700; color: #ff4500; margin-left: 200px">Xác nhận đơn hàng</p>
			<table cellpadding="5" border="1" style="boder-collapse: collapse; width: 650; margin-top: 30px; padding-left: 30px"  >
				<tr style=" background:#f5f5f5; font-weight: bold;color: black;font-size:15;height: 30px;text-align:center; ">
					<td style="color: black;">STT</td>
					<td style="width: 100px">Tên sảm phẩm</td>
					<td style="width: 150px">Số Lượng</td>
					<td style="width: 150px">Giá</td>
				</tr>
				<?php $price = 0; ?>
				@if(Session::has('userSp'))	
					<?php $id = Session::get("userSp"); 
					foreach ($id as $sp) {
						$price += $sp['number']*$sp['price'];
					}
					?>
				
				@for($i =0 ; $i < count($id); $i++)
				<tr style=" color: black; font-size:14">
					<td style="text-align:center;">{{$i}}</td>
					<td class="produc" style="width:500px; height="100px" ">
						<div style="float: left">
							<p >{{$id[$i]['id']}}</p>
							<p>{{$id[$i]['name']}}</p>
						</div>
					</td>
					<td style="text-align:center;"><span>{{$id[$i]['number']}}</span></td>
					<td style="text-align:center;"><span>{{$id[$i]['price']*$id[$i]['number']}}</span></td>
				</tr>
				@endfor
				@endif
				<tr style=" color: black; font-size:14;;height: 80px">
					<td colspan="2"></td>
					<td colspan="4" style="text-align:center; line-height:22px; color:#555">
				        <b>Tổng tiền:</b>
				        <b style="color:red; font-size:18px;"><span class="sub1" id="price" style="color: red; font-weight: bold;">{{$price}}</span> VND</b><br>
				     </td>
				</tr>				
			</table>
			</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#captcha').submit(function(){
        var mxn = $('#txtCaptcha').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('captcha')}}',
           data: 
           {
            mxn : mxn
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
             	$('#tb').empty();
                $('#tb').append("Nhập lại mã xác nhận!");
             }
             else{
               document.forms["captcha"].submit()
            }
           }
        });
     return false;
    });   
});
</script>
@endsection