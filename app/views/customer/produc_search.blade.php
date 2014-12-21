@extends('layout/layout-custome')
@section('style')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
@endsection
@section('title')
Tìm kiếm sản phẩm
@endsection

@section('content')
<div id="container">
	<?php $url = URL::to('/')."/images/"; ?>
	@if(count($id) == 0) 
		<p style="color: #ff4500; font-size: 18">Không tìm thấy kết quả nào giống với yêu cầu</p>
	@endif
	@if(count($id) != 0)
    <p style="font-size: 25px; font-weight: 700; color: #ff4500">Kết quả tìm kiếm sản phẩm</p>
	@for($i =0 ; $i < count($id); $i++)

	<div id = "products" class = "product-list" style="width: 600px; margin:auto">
    	<ul>
        	<li class="first-in-line">
            
                <div class="right" style="width: 140px;">
                    <div class="price">
                        <span class="price-new">
            
                            {{$id[$i]['price']}}.VND
            
                        </span>
                        
                       
                    </div>
                    <div class="cart">
                    	<form action="{{Asset('giohang')}}" method="get" class="button1">
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
                            <img src={{$url.$id[$i]['image']}} width="400px" height="400px"></img>
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
    $('.button1').submit(function(){
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
