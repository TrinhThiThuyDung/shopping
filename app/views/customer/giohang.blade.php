@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
@section('title')
	Giỏ hàng
@endsection

@section('content')
	<?php $url = URL::to('/')."/images/"; ?>
	<div id="container">
	<div  style="padding-top: 30px; padding-left: 10px;padding-top : 40px">
		<img src="{{Asset('/images/giohang.png')}}" style="width:83px;height:68px;background-position:-522px -126px;float:left;margin-top:-8px">
		<p style="color: #d35400; font-size: 20; font-weight: 700;">Chi tiết về giỏ hàng</p>
		<p style="color: black;font-size: 16" >Để xóa sản phẩm khỏi giỏ hàng bấm <img src="{{Asset('/images/xoa.png')}}">,để mua thêm sản phẩm thì bấm <b style="color: d35400">"mua thêm sản phẩm" </b>
		 Để sang bước đặt hàng bấm <b style="color: d35400">"Mua"</b></p>
	</div>
			<table cellpadding="5" border="1" style="boder-collapse: collapse; width: 100%; padding-top: 30px"  >
				<tr style=" background:#f5f5f5; font-weight: bold;color: black;font-size:15;height: 30px;text-align:center; ">
					<td style="color: black;">STT</td>
					<td>Tên sảm phẩm</td>
					<td>Giá sản phẩm</td>
					<td>Số Lượng</td>
					<td>Tổng</td>
					<td>Xóa</td>
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
						<div style="vertical-align: middle; margin-right: 10px; float:left; width:120px;height: 100px">
							<img src= {{$url.$id[$i]['image']}} width = "120px" height = "100px" />
						</div>
						<div style="float: left">
							<p >ID sản phẩm: {{$id[$i]['id']}}</p>
							<p>Tên sản phẩm: {{$id[$i]['name']}}</p>
						</div>
					</td>
					<td style="text-align:center;"><span >{{$id[$i]['price']}}</span></td>
					<td style="text-align:center;">
						<form class="number12" action="" method="post">
							<input type="text" size='2' class="numbersp" name="numbersp" value="{{$id[$i]['number']}}" onkeydown="enterKey(event);">
							<button type="submit" class="idsp" name="idsp" value="{{$id[$i]['id']}}" style="display:none"></button>
						</form>
					</td>
					<td style="text-align:center;" id="{{$id[$i]['id']}}" >{{$id[$i]['price']*$id[$i]['number']}}</td>
					<td style="text-align:center;">	
						<form class="delete1" method="get" action="{{Asset('deleteSession')}}">
							<button type="submit"  class="delete" name="id" value="{{$id[$i]['id']}}">	
							<img src="{{Asset('/images/xoa.png')}}">
							</button>
						</form>
					</td>
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
			<div style="height: 70px;">
				<form action="{{Asset('order')}}" method="get" style="height: 70px;float: right">
					<button type="submit" class="btn btn-lg btn-primary btn-block" style="width:75px;background : #D68731; margin-top:10px;border-color: #D68731">Mua</button>	
				</form>
				<form action="{{Asset('buyProduc')}}" method="get" style="height: 70px;float: right; padding-right: 40px">
					<button type="submit" class="btn btn-lg btn-primary btn-block" style="width:225px;background : #D68731; margin-top:10px;border-color: #D68731">Mua thêm sản phẩm </button>
				</form>
			</div>	
		</td>
		</div>
<script type="text/javascript">	
$(document).ready(function(){
	function tang(sl){
		//if(sl <= 0)
			alert("Bạn cần phải nhập kí tự là số :!");
			var conf = confirm("Bạn muốn xóa sản phẩm?(y/n)");
	};
});
</script>
<script >
	
			$(".number12").submit(function(){
				var sl = $('.numbersp').val();
				//var sl = $(this).val();
				if(sl <= 0)
					alert("Bạn cần phải nhập kí tự là số và lớn hơn 0!");

			});

	
	//});
</script>

<script type="text/javascript">	
$(document).ready(function(){
		function enterKey(event) { 
			if ( event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 ) )
	       		event.preventDefault(); 	  
			else
				 alert("Bạn cần phải nhập kí tự là số :!");
		}
});
</script>

<script type="text/javascript">	
$(document).ready(function(){
});
	
</script>
@endsection
