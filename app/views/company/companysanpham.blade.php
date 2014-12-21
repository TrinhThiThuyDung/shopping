@extends('layout.layout-company')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{Asset('css/style.css')}}"/>
<script type="text/javascript" src = "{{Asset('/js/jquery-1.11.1.min.js')}}"></script>
@section('title')
	login
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
            	<div id="column-right" style="width: 474px;" >
                	<br />
                    <br />
                    <br />
                    <br />
                	<h1>Thêm sản phảm</h1>
                  <!-- companyEditsanpham-->
                    <form action="{{Asset('companyEditsanpham')}}" method="post" enctype="multipart/form-data" id="register" novalidate>
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
                                        	<input class="q1" type="file" name="file"  id="file"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	  <td>
                                        	<span class="required">*</span>Miểu tả sản phẩm :
                                        </td>
                                        <td>
                                        	<input class="q3" type="text" name="descripbe" id="descripbe" height: 14px font-size: 11px/>
                                        </td>
                                    </tr>

                                    
                                     <tr>
                                       <td>
                                         <span class="required">*</span> lenght :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="lenght" id="lenght"/>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                         <span class="required">*</span> height :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="height" id="height"/>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                         <span class="required">*</span> width :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="width" id="width"/>
                                        </td>
                                    </tr>
                                     <tr>
                                       <td>
                                         <span class="required">*</span> depth :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="depth" id="depth"/>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>
                                         <span class="required">*</span> color :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="color" id="color"/>
                                        </td>
                                    </tr>
                                     <tr>
                                       <td>
                                         <span class="required">*</span> Id Kind :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="idkind" id="idkind"/>
                                        </td>
                                    </tr>
                                     <tr>
                                       <td>
                                         <span class="required">*</span> price :
                                        </td>
                                        <td>
                                          <input class="q4" type="text" name="price" id="price"/>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<span class="required">*</span>Mã số công ty:
                                        </td>
                                        <td>
                                        	<input class="q1" type="text" name="codecompany" id="codecompany"/>
                                        </td>
                                    </tr>
                                    <td>
                                        <button class="btn btn-lg btn-primary btn-block" style="width: 95px; background : #d35400; margin-top:10px;margin-left:10px;border-color: #d35400">Tiếp tục</button>
                                    <!--	<a class="button">
                                        	<span>upload</span>
                                      </a>-->
                                    </td>
                                </tbody>
                            </table>
                </form>
                </div>
                    <div id="content" style=" width:536px">
                    <div class="fast-link">
                            <a href="quickview.html">Trang chủ</a>
                                » 
                            <a href="login.html">Đăng nhập</a>
                        </div>
                      <div>
                      	<h1>Tên công ty</h1>
                        <p>Tổng số sản phẩn của công ty 6 </p>
                        <p>
                        </p>
                      </div>
                      <div class="box featured" style="border: 1px solid #dedede; padding-left: 20px;">
                        <div class="box-content">
                        <div class="box-product" >
                          <ul>
                            <li class="first-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a >
                                   	    <img src="{{Asset('/images//box/Charles Eames Style Bench 1 copy-190x190.png')}}"  alt=""> 
                                       <!-- <img src="../images/box/Charles Eames Style Bench 1 copy-190x190.png" alt=""/>-->
                                   </a>
                                </div>
                                <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                <div class="wrapper">
                                  <div class="cart"> <a class="button" href="product.html"> <span>Chi Tiết</span> </a> </div>
                                  <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                </div>
                              </div>
                            </li>
                            <li class="last-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a>
                                        <img src="{{Asset('/images//box/Charles Eames Style Bench 1 copy-190x190.png')}}" alt=""/>
                                   </a>
                                </div>
                                <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                <div class="wrapper">
                                  <div class="cart"> <a href="product.html" class="button"> <span>Chi Tiết</span> </a> </div>
                                  <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                </div>
                              </div>
                            </li>
                            <li class="first-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a >
                                        <img src="{{Asset('/images//box/Charles Eames Style Bench 1 copy-190x190.png')}}" alt=""/>
                                   </a>
                                </div>
                                <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                <div class="wrapper">
                                  <div class="cart"> <a class="button" href="product.html"> <span>Chi Tiết</span> </a> </div>
                                  <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                </div>
                              </div>
                            </li>
                            <li class="last-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a>
                                        <img src="{{Asset('/images//box/Charles Eames Style Bench 1 copy-190x190.png')}}" alt=""/>
                                   </a>
                                </div>
                                <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                <div class="wrapper">
                                  <div class="cart"> <a class="button" href="product.html"> <span>Chi Tiết</span> </a> </div>
                                  <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                </div>
                              </div>
                            </li>
                              <li class="first-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a >
                                        <img src="{{Asset('/images//box/Charles Eames Style Bench 1 copy-190x190.png')}}" alt=""/>
                                   </a>
                                </div>
                                <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                <div class="wrapper">
                                  <div class="cart"> <a class="button" href="product.html"> <span>Chi Tiết</span> </a> </div>
                                  <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                </div>
                              </div>
                            </li>
                            <li class="last-in-line">
                              <div class="inner-indent">
                                <div class="img2">
                                   <a>
                                        <img src="{{Asset('/images//box/Charles Eames Style Bench 1 copy-190x190.png')}}" alt=""/>
                                   </a>
                                </div>
                                <div class="name"> <a href="#">Áo thun nam nữ</a> </div>
                                <div class="wrapper">
                                  <div class="cart"> <a class="button" href="product.html"> <span>Chi Tiết</span> </a> </div>
                                  <div class="price"> <span class="price-new">$599</span> <span class="price-old">$600</span> </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                 
                  </div>
                </div>
            </div>
<script type="text/javascript">
        $("#register").validate({
            rules:{
                 productname:{
                    required:true,
                   // remote:{
                     //   url:"{{Asset('checkcompanyaccountname')}}",
                       // type: "POST"
                    //}
                },
                nameimg:{
                    required:true,
                },
                descripbe:{
                    required:true
                },
               
                lenght:{
                    required:true
                },
                height:{
                    required:true
                },
                width:{
                    required:true
                },
                depth:{
                   required:true
                },
                color:{
                   required:true
                },
                idkind:{
                   required:true
                },
                price:{
                  required:true
                },
                codecompany:{
                  required:true
                }

            },
            messages:{
                 productname:{
                    required:"Vui lòng nhập productname",
                },
                descripbe:{
                    required:"Vui lòng nhập description",
                },
                lenght:{
                    required:"Vui lòng nhập lenght",
                },
                height:{
                    required:"Vui lòng nhập height",
                }
            },
        })
        
    </script>

@endsection