@extends('layout/layout-company')

@section('title')
Thêm sản phẩm lỗi
@endsection
@section('content')
       <div id="content">
                        <div class="fast-link">
                            <a href="../home.html">Trang chủ</a>
                                » 
                            <a href="{{Asset('companyLogin')}}">Đăng nhập</a>
                        </div>
                        <h1>Nguyên tắc</h1>
                        <div class="role">
                        	<h3>Hãy đăng nhập để sử dụng chức năng thêm sản phẩm này này !</h3>
                        </div>
                </div>
            </div>
             	<script type="text/javascript">
					$(document).ready(function() {
						$('.main-shining').append('<div id="back-top"><a><span>Back to top</span></a>');
                        $(window).scroll(function(){
							if($(window).scrollTop() != 0){
								$('#back-top').fadeIn();
								}else{
									$('#back-top').fadeOut();
									}
							});
							$('#back-top').click(function(){
								$('html, body').animate({scrollTop:0},500);
								});
                    });
                </script>
@endsection