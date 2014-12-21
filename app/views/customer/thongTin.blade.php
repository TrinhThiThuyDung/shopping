@extends('layout/layout-custome')

@section('title')
	Thông tin cá nhân
@endsection

@section('content')
	/<div style="width: 300px; height: 260px;margin: 0 auto; background:#CCC;margin-bottom: 50px"> 
		<p style="font-weight: 700; font-size: 20pt; color: #d35400; margin-left: 20px;height: 40px; padding-top:20px; ">Thông Tin Cá Nhân</p>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black;">Tên:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->name}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">giới tính:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->gener}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">Ngày sinh:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->birth}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">Email:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->email}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">Địa chỉ:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->address}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">Điện thoại:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->tel}}</label>
		</div>
	</div>

@endsection