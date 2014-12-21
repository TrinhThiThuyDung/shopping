@extends('layout/layout-company')

@section('title')
	Sửa sản phẩm
@endsection
@section('content')

   <!--BACKTOP: START-->
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
             <!--BACKTOP: END-->
            <div class="clear"></div>
            <!--Hộp chứa nội dung sản phẩm:START--><!-- InstanceBeginEditable name="container" -->
            <div id="container">
            	<div class="modal fade" id="myModaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                	
                	<h1>Thêm sản phảm</h1>
                    <form action="{{Asset('postInsertProduct')}}" method="post"  enctype="multipart/form-data" id="registef" novalidate>
                    <table class="form">
                            	<tbody>
                                	<tr>
                                    	<td>
                                        	<span class="required">*</span>Tên sản phẩm :
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="productname" id="productname"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Ảnh sản phẩm :
                                        </td>
                                        <td>
                                        	<input class="q1" type="file" name="productimg[]" id="productimg"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Miểu tả sản phẩm :
                                        </td>
                                        <td>
                                        	<input class="q3" type="text" name="descripbe" id="descripbe"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Giá sản phẩm:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="codecompany" id="codecompany"/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
               <!-- </form>-->
                <!--</div>-->
                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-primary" style="background-color:#d45f09">Uplaod</button>
                                      </div>
                               </form>
                               </div>
                </div>
                </div>
                    <div id="content">
                    <div class="fast-link">
                            <a href="{{Asset('company/home')}}">Trang chủ</a>
                                » 
                            <a href="l">Thêm sản phẩm</a>
                        </div>
                      <div>
                      	<h1>
                             @if(!Session::has('companyLogin'))
                                   TÊN CÔNG TY
                                @else
  
                                    <a href="">{{ Session::get("companyLogin");}}</a>
                                                          
                                @endif  

                      		<!--Tên công ty--></h1>
                        <p>
                              @if(!Session::has('CompanyProduct'))
                                   Tổng số sản phẩn của công ty 0
                                @else
  
                                   Tổng số sản phẩn của công ty <a href="">{{ Session::get("CompanyProduct");}}</a>
                                                          
                                @endif 
                        </p>
                        <p>
                        	<a class="button"  data-toggle="modal" data-target="#myModaladd"> <span>Thêm sản phẩm</span> </a>
                        </p>
                      </div>
                  </div>
                </div>
            </div>   
<script type="text/javascript">
$(document).ready(function(){
    $('#changepro').submit(function(){
        var productname= $('#proname').val();
        var descripbe = $('#prodescripbe').val();
        var codecompany= $('#procodecompany').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('ktupdatePro')}}',
           data: 
           {
            productname :productname,
            descripbe   :descripbe,
            codecompany :codecompany
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
                $('#error').empty();
                $('#error').append("Xjn hay nhap thong tjn chinh xac");
             }else{
               document.forms["changepro"].submit()
            }
           }
        });
     return false;
    });   
});
</script>

<script type="text/javascript">
$(document).ready(function(){
     var productid=15;
    $('#deletepro').submit(function(){
        $.ajax({
           type: 'post',
           url: '{{Asset('ktdeletePro')}}',
           data: 
           {
            productid :productid
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
                $('#error').empty();
                $('#error').append("sai");
             }else{
               document.forms["deletepro"].submit()
            }
           }
        });
     return false;
    });   
});
</script>

@endsection