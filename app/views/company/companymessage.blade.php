@extends('layout/layout-company')
<script type="text/javascript" src="{{Asset('/js/jquery-validation/jquery.validate.js')}}"></script>
@section('title')
	Doanh thu
@endsection

@section('content')

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
            	<div>
            	<ul class="nav nav-tabs" role="tablist" id="myTab">
                              <li role="presentation" class="active"><a style="color:#FFF;background-color:#5cb85c" href="#week" aria-controls="home" role="tab" data-toggle="tab">	TUẦN	</a></li>
                              <li role="presentation"><a style="color:#FFF;background-color:#31b0d5"href="#mun" aria-controls="profile" role="tab" data-toggle="tab">	THÁNG	</a></li>
                              <li role="presentation"><a style="color:#FFF;background-color:#c9302c"href="#year" aria-controls="messages" role="tab" data-toggle="tab">	NĂM	</a></li>
                              <li role="presentation"><a style="color:#FFF;background-color:#ec971f"href="#chen" aria-controls="settings" role="tab" data-toggle="tab">	THÔNG TIN CÔNG TY	</a></li>
                            </ul>
                            
                            <div class="tab-content"  style="width: 984px;">
                              <div role="tabpanel" class="tab-pane active" id="week">
                                Doanh thu thang hien tai:
                                @if(!Session::has('countMonth'))
                                    0
                                @else  
                                    {{ Session::get("countMonth");}}                           
                                @endif 

                              </div>
                              <div role="tabpanel" class="tab-pane" id="mun">
                                     <tr>
                                        <td>
                                            <span class="required">*</span>
                                              @if(!Session::has('countQI'))
                                                 Doanh thu Quy I: 0
                                              @else
                                                 Tong doanh thu Quy I:  
                                              {{ Session::get("countQI");}}                           
                                              @endif  
                                        </td>
                                    </tr>
                                    <br/>
                                       <tr>
                                        <td>
                                            <span class="required">*</span>
                                              @if(!Session::has('countQII'))
                                                 Doanh thu Quy II: 0
                                              @else
                                                 Tong doanh thu Quy II:  
                                              {{ Session::get("countQII");}}                           
                                              @endif  
                                        </td>
                                    </tr>
                                    <br/>
                                       <tr>
                                        <td>
                                            <span class="required">*</span>
                                              @if(!Session::has('countQIII'))
                                                 Doanh thu Quy III: 0
                                              @else
                                                 Tong doanh thu Quy III:  
                                              {{ Session::get("countQIII");}}                           
                                              @endif  
                                        </td>
                                    </tr>
                                    <br/>
                                            <tr>
                                        <td>
                                            <span class="required">*</span>
                                              @if(!Session::has('countQIV'))
                                                 Doanh thu Quy IV: 0
                                              @else
                                                 Tong doanh thu Quy IV:  
                                              {{ Session::get("countQIV");}}                           
                                              @endif  
                                        </td>
                                    </tr>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="year">
                                 @if(!Session::has('countYear'))
                                   0
                                @else
                                    Tong doanh thu trong nam:  
                                    {{ Session::get("countYear");}}                           
                                @endif  
                              </div>
                              <div role="tabpanel" class="tab-pane" id="chen">
                              	                    <div class="box-container">

                        <form action="{{Asset('companyLoginTc')}}" method="post" id="register" novalidate>
                        	<h2 style="border-bottom: 1px solid #dedede;">THÔNG TIN CỦA CÔNG TY</h2>
                        	<div id="error" style="color: red"></div>
                            <div class="content" style="width:604px;">
                            <table class="form">
                            	<tbody>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>E-Mail:
                                        </td>
                                        <td>
                                        	<input class="q1" type="email" name="email" id="email" class="form-control"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Số điện thoại1:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="phone" id="phone" class="form-control"/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <h2>ĐỊA CHỈ CÔNG TY</h2>
                            	 <div class="content">
                            	<table class="form">
                                	<tbody>
                                    	<tr>
                                    	<td>
                                        	<span class="required">*</span>Cơ sở 1:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="address" id="address" class="form-control"/>
                                        </td>
                                    </tr>
                                    <td>
                                    	
                                    </td>
                                    </tbody>
                                </table>
                            </div>
                            <h2>ĐỔI MẬT KHẨU</h2>
                            <div class="content">
                            	<table class="form">
                                	<tbody>
                                    	<tr>
                                    	<td>
                                        	<span class="required">*</span>Mật khẩu mới:
                                        </td>
                                        <td>
                                        	<input class="q1" type="password" name="oldpass" id="oldpass" class="form-control"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Nhập lại mật khẩu mới:
                                        </td>
                                        <td>
                                        	<input class="q1" type="password" name="newpass" id="newpass" class="form-control"/>
                                        	
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                         <button type="submit" id="btLogin" name="btLogin" class="btn btn-lg btn-primary btn-block" style="width:130px;background : #d35400;border-color: #d35400">SAVE</button>
                                         </td>
                                     </tr>
                                    </tbody>
                                </table>
                            </div>
                         
                        </form>
                    </div>
                              </div>
                            </div>

							<script>
							$('#myTab a[href="#week"]').tab('show') // Select tab by name
							$('#myTab a:first').tab('show') // Select first tab
							$('#myTab a:last').tab('show') // Select last tab
							$('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
                            $(function () {
                                $('#myTab a:last').tab('show')
                              })
                            </script> 
                            </div>                      
            </div>
    

<script type="text/javascript">
$(document).ready(function(){
    $('#register').submit(function(){
        var email= $('#email').val();
        var phone =$('#phone').val();
        var address=$('#address').val();
        var oldpass=$('#oldpass').val();
        var newpass=$('#newpass').val();
        $.ajax({
           type: 'post',
           url: '{{Asset('checkupdateCompany')}}',
           data: 
           {
            email: email,
            phone: phone,
            address:address,
            oldpass:oldpass,
            newpass:newpass
           },
           dataType: 'json',
           success:function(data){
             if(data==0){
                $('#error').empty();
                $('#error').append("Thong tin khong chinh xac hoac ma xac nhan khong dung ");
             }else{
               document.forms["register"].submit()
            }
           }
        });
     return false;
    });
});
</script>

<script type="text/javascript">
        $("#register").validate({
                oldpass:{
                    required:true,
                    minlength:6
                },
                newpass:{
                    equalTo: "#oldpass",
                }
            },
            messages:{
                oldpass:{
                    required:"Vui lòng nhập password";
                },
                newpass:{
                	required:"ma xac nhan khong chjnh xac";
                }
            },
        })
        
    </script>
@endsection