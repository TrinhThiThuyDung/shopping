@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
@section('title')
search
@endsection

@section('content')
<div id="container">
    <div id="column-right">
    	<div style="width: 300px;padding-left: 30px ; float: right; color: #ff4500" >
			<p style="font-size: 25px; font-weight: 700; color: #ff4500">Tìm kiếm</p>
			<form  action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top:10px; width: 300px">
				<button value="1" name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">PHÒNG KHÁCH</button>
			</form>
			<form action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top: 10px; color:#ff4500; margin-top:5px">
				<button value="2"  name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">PHÒNG NGỦ</button>
			</form>
			<form action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="3"  name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">DÀNH CHO BÉ</button>
			</form>
			<form action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="4"  name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">PHÒNG ĂN/ BẾP</button>
			</form>
			<form action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="5"  name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">PHÒNG TẮM</button>
			</form>
			<form action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="6"  name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">TRANG TRÍ</button>
			</form>
			<form action="{{Asset('searchP')}}" method="get" class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="7"  name="bt1" class="btn btn-lg btn-primary btn-block" style="width: 300px; background : #d35400; margin-top:10px;border-color: #d35400">SÀN ĐẸP</button>
			</form>
		</div>
	</div>
	<?php $url = URL::to('/')."/images/"; ?>
	@if(count($id) == 0) 
		<p style="color: #ff4500; font-size: 18">Không tìm thấy kết quả nào giống với yêu cầu</p>
	@endif
	@if(count($id) != 0)
	@for($i =0 ; $i < count($id); $i++)

	<p style="font-size: 25px; font-weight: 700; color: #ff4500">Kết quả tìm kiến sản phẩm</p>
	<div id = "products" class = "product-list" style="width: 600px">
    	<ul>
        	<li class="first-in-line">
            
                <div class="right">
                    <div class="price">
                        <span class="price-new">
            
                            {{$id[$i]['price']}}.đ
            
                        </span>
                        
                       
                    </div>
                    <div class="cart">
                    	<form action="{{Asset('giohang')}}" method="get">
                        	<button name="id" value={{$id[$i]['id']}} class="button" style="background: #eedd82">vào giỏ</button>
                        </form>
                        <form action="{{Asset('giohang')}}" method="get" >
                        	<button style="background: #eedd82; margin-top:10px">Đến giỏ hàng</button>
                        </form>

                    </div>
                    <div class="wishlist">
                        <a class="tip">
            
                            Add to Wish List
            
                        </a>
                        <span class="tooltip">
            
                            Wishlist
            
                        </span>
                    </div>
                    <div class="compare">
                        <a class="tip2">
            
                            Add to Compare
            
                        </a>
                        <span class="tooltip2">compare</span>
                    </div>
                </div>
                <div class="left">
                    <div class="image">
                        <a href=>
                            <img src={{$url.$id[$i]['image']}}></img>
                        </a>
                    </div>
                    <div class="name">
                        <a>
            
                            Tên sản phẩm: {{$id[$i]['name']}}
            
                        </a>
                    </div>
                    <div class="description">
            
            
                            
                         Chi tiết về sản phẩm: {{$id[$i]['describe']}}
            
                    </div>
                    <div class="rating">
                    </div>
                </div>
            
            </li>
         </ul>
        </div>
        
       @endfor
       @endif

<script type="text/javascript">
$(document).ready(function(){
    $('.button').click(function(){
        var id= $('.button').val();
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
           }
        });
     return false;
    });   
});
</script>
@endsection
