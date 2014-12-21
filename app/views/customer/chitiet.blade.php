@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>

@section('title')
	sản phẩm
@endsection

@section('content')
<?php $url = URL::to('/')."/images/"; ?>
<div id="container">
<div  style="padding-top: 30px; padding-left: 10px;padding-top : 40px">
		
		<p style="color: #d35400; font-size: 20; font-weight: 700;">Chi tiết về giỏ hàng</p>
  <form action="{{Asset('giohang')}}" method="get" id="formSP">
  	<table cellpadding="5" border="1" style="boder-collapse: collapse; width: 100%; padding-top: 30px"  >
				<tr style=" background:#f5f5f5; font-weight: bold;color: black;font-size:15;height: 30px;text-align:center; ">
					<td>Tên sảm phẩm</td>
					<td>Giá sản phẩm</td>

				</tr>    
      
        <tr style=" color: black; font-size:14">
			<td class="produc" style="width:500px; height="100px" ">
				<div style="vertical-align: middle; margin-right: 10px; float:left; width:120px;height: 100px">
					<img src= {{$url.$id[0]['image']}} style="width:100px; height:100px"/>
				</div>
				<div style="float: left">
					<p >ID sản phẩm: {{$id[0]['id']}}</p>
					<p>Tên sản phẩm: {{$id[0]['name']}}</p>
				</div>
			<td style="text-align:center;"><span >{{$id[0]['price']}}</span></td>
		</tr>
		</table>
		<button type="submit" id="id" value={{$id[0]['id']}} >Mua sản phẩm</button>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#formSP').submit(function(){
        var id= $('#id').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('getUserSp')}}',
           data: 
           {
            id: id,
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
             	 alert("Bạn cần phải đăng nhập khi mua sản phẩm :!");
             }
             else{
               document.forms["formSP"].submit()
            }
           }
        });
     return false;
    });   
});
</script>
@endsection