@extends('layout/layout-custome')
@section('title')
	Lịch sử mua hàng
@endsection

@section('content')		
<div class="fast-link" style="margin-top: 30px;">
       <div class="fast-link" style="margin-top: 30px;">
        <a href="{{Asset('home')}}">Trang chủ</a>
        » 
        <a href="">Lịch sử mua hàng</a>
    </div>	

			<?php $url = URL::to('/')."/images/"; ?>
			@if(count($sp) == 0)
				<p>Bạn không có lịch sử mua hàng tại hệ thống của chúng tôi</p>
			@endif
			@if(count($sp) != 0)
				<p style="font-size: 25px; font-weight: 700; color: #ff4500">Danh sách các sản phẩm đã đặt hàng</p>
				<div  style="padding-top: 30px; padding-left: 10px;padding-top : 40px; width: 900px; margin: auto">

					<table cellpadding="5" border="1" style="boder-collapse: collapse; width: 100%; padding-top: 30px"  >
						<tr style=" background:#f5f5f5; font-weight: bold;color: black;font-size:15;height: 30px;text-align:center; ">
							<td style="color: black;">STT</td>
							<td>Tên sảm phẩm</td>
							<td>Số Lượng mua</td>
							<td>Ngày mua hàng</td>
						</tr>	
						@for($i = 0 ; $i < count($sp); $i++)
						<tr style=" color: black; font-size:14">
							<td style="text-align:center;">{{$i}}</td>
							<td class="produc" style="width:500px; height="100px" ">
								<div style="vertical-align: middle; margin-right: 10px; float:left; width:120px;height: 100px">
									<img src= {{$url.$sp[$i]['image']}} width = "120px;" height="100px"/>
								</div>
								<div style="float: left">
									<p>Tên sản phẩm: {{$sp[$i]['name']}}</p>
									<p>Giá: {{$sp[$i]['price']}}</p>
								</div>
							</td>
							<td style="text-align:center;">{{$sp[$i]['number']}}</td>
							<td style="text-align:center;">	{{$sp[$i]['date']}}</td>
						</tr>
						@endfor						
					</table>
				</div>
			@endif

@endsection