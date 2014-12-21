@extends('layout.layout-company')

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
			<label style="font-weight: 700; color:black">Adress:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->address}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">Account Name:</label>
			<label style="margin-left: 20px; color:black">{{$data[0]->account_name}}</label>
		</div>
		<div style="height: 30px; margin-left: 20px">
			<label style="font-weight: 700; color:black">Tel </label>
			<label style="margin-left: 20px; color:black">{{$data[0]->tel}}</label>
		</div>
	</div>

@endsection