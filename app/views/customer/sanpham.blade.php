@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>

@section('title')
	sản phẩm
@endsection

@section('content')
	<div style="height: 100px">
		<form action="{{Asset('giohang')}}" method="get" id="formSP">
			<button type="submit" value="2" name="id" id="id">
				<img alt="pic" src="{{Asset('/images/11.gif')}}">
			</button>
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