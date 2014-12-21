@extends('layout/layout-custome')

@section('title')
Test | Cửa hàng bán hàng trực tuyến Vịt Con
@endsection

@section('content')
	<?php $url = URL::to('/')."/images/"; ?>
	<div id="container">

    <div id="content">
    	<div class="fast-link">
            <a href="home.html">Trang chủ</a>
                » 
            <a href="search.html">Tìm kiếm sản phẩm</a>
        </div>
        <h1>Tìm kiếm-Tên sản phẩm</h1>
        <div class="box-container">
        	<b>Tìm kiếm theo : </b>
            <div class="content111" style="float: left; width: 800px">
            
                	<!--Tìm kiếm sản phẩm: 
                    <input type="text" value="" name="filter_name" />
                    <select name="filter_category_id">
                    	<option value="0">TẤT CẢ CÁC HẠNG MỤC</option>
                    	<option value="1">---PHÒNG KHÁCH---</option>
                        <option value="2">---PHÒNG NGỦ---</option>
                        <option value="3">---DÀNH CHO BÉ---</option>
                        <option value="4">---PHÒNG ĂN/ BẾP---</option>
                        <option value="5">---PHÒNG TẮM---</option>
                        <option value="6">---TRANG TRÍ---</option>
                        <option value="7">---SÀN ĐẸP---</option>
                    </select>
                    Giá  tiền : 
                    <select name="pire">
                    	<option value="1">TẤT CẢ CÁC HẠNG MỤC</option>
                    	<option value="1">---PHÒNG KHÁCH---</option>
                        <option value="2">---PHÒNG NGỦ---</option>
                        <option value="3">---DÀNH CHO BÉ---</option>
                        <option value="4">---PHÒNG ĂN/ BẾP---</option>
                        <option value="5">---PHÒNG TẮM---</option>
                        <option value="6">---TRANG TRÍ---</option>
                        <option value="7">---SÀN ĐẸP---</option>
                    </select>-->
                    <form action="{{Asset('search_name')}}" method="get" id="searchName" style="float: left">
                    	<input type="text" value="" name="NameSP" id="NameSP" autocomplete="off"/>
                    	<button class="button-search" name="search" style="display:none" ></button>
                       	<div style="background:#f0e68c; color: #433225">
                            <ul id='result'></ul>
                        </div>
                    </form>
                    <form action="" method="get" style="float: left" id="search12">
                        <select name="filter_category_id">
                        	<option value="0">TẤT CẢ CÁC HẠNG MỤC</option>
                        	<option value="1">---PHÒNG KHÁCH---</option>
                            <option value="2">---PHÒNG NGỦ---</option>
                            <option value="3">---DÀNH CHO BÉ---</option>
                            <option value="4">---PHÒNG ĂN/ BẾP---</option>
                            <option value="5">---PHÒNG TẮM---</option>
                            <option value="6">---TRANG TRÍ---</option>
                            <option value="7">---SÀN ĐẸP---</option>
                        </select>
                       <!-- Giá  tiền : 
                        <select name="pire">
                        	<option value="1">TẤT CẢ CÁC HẠNG MỤC</option>
                        	<option value="1">---PHÒNG KHÁCH---</option>
                            <option value="2">---PHÒNG NGỦ---</option>
                            <option value="3">---DÀNH CHO BÉ---</option>
                         
                        </select>!-->
                         <button  name="tk" value="Tìm kiếm"></button>
                    </form>
                    <!--<input type="text" value="" name="filter_cost" />-->
     <div>
     	
     </div>  
        <h2>Kết quả tìm kiếm : </h2>
    	<div id="product-list">
        </div>
    </div>
     <div style="width: 300px;padding-left: 30px ; float: right; color: #ff4500" >
			<p style="font-size: 25px; font-weight: 700; color: #ff4500">Tìm kiếm</p>
			<form class="khung1" style="padding-top:20px; background: #eedd82">
				<button value="1">PHÒNG KHÁCH</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="2">PHÒNG NGỦ</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="3">DÀNH CHO BÉ</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="4">PHÒNG ĂN/ BẾP</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="4">PHÒNG TẮM</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="4">TRANG TRÍ</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="4">SÀN ĐẸP</button>
			</form>
			<form class="khung1" style="padding-top: 10px; color:#ff4500;background: #eedd82; margin-top:5px">
				<button value="4"></button>
			</form>
	</div>
<script type="text/javascript">
		$(document).ready(function(){
		    $('#NameSP').focus(function(){
		        var NameSP= $('#NameSP').val();
		        
		        $.ajax({
		           type: 'get',
		           url: '{{Asset('search')}}',
		           data: 
		           {
		            NameSP : NameSP
		           },
		           dataType: 'json',
		           success:function(data){
		           		$('#result').empty();
		                $.each(data, function(i, field){
		                       $('#result').append('<li class="nameSP1" onclick="search('+field+')"value='+field+'>'+field+'</li>');
		                });
		            }   
		        });
		   
		    });		   
		});
</script>
<script type="text/javascript">
	function search(val){
		 $('#NameSP').append(val);
 	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
	    $('#search12').submit(function(){
	        var filter_category_id = $('#filter_category_id').val();
			$.ajax({
	           type: 'get',
	           url: '{{Asset('searchP')}}',
	           data: 
	           {
	            filter_category_id : filter_category_id

	           },
	           dataType: 'json',
	           success:function(data){
	                //$.each(data, function(i, field){
	                     //  $('#product-list').append('<div class="nameSP1" style="width: 700px; height: 400px"><img src='+$url+filed[0]['image']+' />'+field[0]['id']+'</div>');
	                	alert("Bạn cần phải nhập kí tự là số :!");
	                //});
	            }   
	        });	    

	});
});
</script>



@endsection

