@extends('layout.layout-custome')

@section('title')
Trang chu 
@endsection

@section('content')

@section('slide')
 <!--SLIDE: START -->
            <div class="slide">
              <div class="slideshow">
                  <div id="slidewhow0">
                        <div id="bigPic">
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img href="" src="{{Asset('/images/slide/2.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/3.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/1.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/4.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/3.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/1.jpg')}}">
                            </a>
                            <a href="<?php echo URL::to('/') ?>/custome/home">
                                <img alt="" src="{{Asset('/images/slide/4.jpg')}}">
                            </a>
                        </div>
    
                        <ul id="thumbs">
                            <li class="active" rel="1"><img alt="" src="{{Asset('/images/slide/2.jpg')}}"> </li>
                            <li rel="2"><img alt="" src="/images/slide/3.jpg"> </li>
                            <li rel="3"><img alt="" src="{{Asset('/images/slide/1.jpg')}}"> </li>
                            <li rel="4"><img alt="" src="{{Asset('/images/slide/4.jpg')}}"> </li>
                            <li rel="5"><img alt="" src="{{Asset('/images/slide/3.jpg')}}"> </li>
                            <li rel="6"><img alt="" src="{{Asset('/images/slide/1.jpg')}}"> </li>
                            <li rel="7"><img alt="" src="{{Asset('/images/slide/4.jpg')}}"> </li>
                        </ul>
            <div class="banner">
                            <a>
                                <img src="{{Asset('/images/slide/banner-1-398x163.jpg')}}" title="banner" >
                            </a>
                        </div>
                        <div class="banner">
                            <a>
                                <img src="{{Asset('/images/slide/banner-2-398x163.jpg')}}" title="banner" >
                            </a>
                        </div>
                        <div class="banner">
                            <a>
                                <img src="{{Asset('/images/slide/banner-3-398x163.jpg')}}" title="banner" >
                            </a>
                      </div>
                    </div>
                     
              </div>
          </div>
            <!--SLIDE: END -->
            @endsection
<?php $url = URL::to('/')."/images";?>
            <div class="clear" width="1041px"></div>
            <!--Hộp chứa nội dung sản phẩm:START--><!-- TemplateBeginEditable name="container" -->
            <div id="container" width="1041px">
              <div id="content" width="1041px">
                <div class="box featured" style="width:1041px">
                  <div class="box-heading" style="width:1041px"> <h2><strong>SẢN PHẨM<span style="color:red"> HOT</span> </h2></div>
                  <div class="box-content" style="width:1041px">
                    <div class="box-product">
                      
                      <ul>
                         <?php 
                      
                        $i = 0;
                        $total = (int)(count($products['product'])/4);
                       
                        $y = $i;
                       while($i<$total&&$i<8){
                         ?>
                          <li class="first-in-line">
                          <div class="inner-indent">
                            <div class="img2">
                              <form method="get" action="<?php echo 'product/'.$products['product'][$y]->id_kind.'/'.$products['product'][$y]->id;?>" class="inline">
                               <a rel="gallery" href="<?php echo 'product/'.$products['product'][$y]->id_kind.'/'.$products['product'][$y]->id;?>">
                                  <img src="<?php echo $url.$products['product'][$y]->image;?>" alt="" width="250px" height="250px;"/>
                               </a>
                            </div>
                            <div class="name"> <a href="<?php echo 'product/'.$products['product'][$y]->id_kind.'/'.$products['product'][$y]->id;?>"><?php echo $products['product'][$y]->name;?></a> </div>
                            <div class="wrapper">
                              <div class="cart"> <a class="button" href="<?php echo 'product/'.$products['product'][$y]->id_kind.'/'.$products['product'][$y]->id;?>"> <span>Chi Tiết</span></a></div>
                              <div class="price"> <span class="price-new"><?php echo $products['product'][$y]->price;?></span> 
                                <span class="price-old"><?php echo (int)(($products['product'][$y]->price*100)/30); ?></span></div>
                            </div>
                          </form>
                          </div>
                        </li>
                        <li>
                          <div class="inner-indent">
                            <div class="img2">
                              <form method="get" action="<?php echo 'product/'.$products['product'][$y+1]->id_kind.'/'.$products['product'][$y+1]->id;?>" class="inline">
                               <a rel="gallery"  href="<?php echo 'product/'.$products['product'][$y+1]->id_kind.'/'.$products['product'][$y+1]->id;?>" >
                                  <img src="<?php echo $url.$products['product'][$y+1]->image;?>" alt=""  width="250px" height="250px;"/>
                               </a>
                            </div>
                            <div class="name"> <a href="#"><?php echo $products['product'][$y+1]->name;?></a> </div>
                            <div class="wrapper">
                              <div class="cart"> <a class="button" href="<?php echo 'product/'.$products['product'][$y+1]->id_kind.'/'.$products['product'][$y+1]->id;?>"><span>Chi Tiết</span> </a> </div>
                              <div class="price"> <span class="price-new"><?php echo $products['product'][$y+1]->price;?></span> 
                                <span class="price-old"><?php echo (int)(($products['product'][$y+1]->price*100)/30); ?></span> </div>
                            </form>
                            </div>
                          </div>
                        </li>
                        
                        <li>
                          <div class="inner-indent">
                            <div class="img2">
                              <form method="get" action="<?php echo 'product/'.$products['product'][$y+2]->id_kind.'/'.$products['product'][$y+2]->id;?>" class="inline">
                               <a rel="gallery" href="<?php echo 'product/'.$products['product'][$y+2]->id_kind.'/'.$products['product'][$y+2]->id;?>" >
                                  <img src="<?php echo $url.$products['product'][$y+2]->image;?>" alt=""  width="250px" height="250px;"/>
                               </a>
                            </div>
                            <div class="name"> <a href="#"><?php echo $products['product'][$y+2]->name;?></a> </div>
                            <div class="wrapper">
                              <div class="cart"> <a class="button" href="<?php echo 'product/'.$products['product'][$y+2]->id_kind.'/'.$products['product'][$y+2]->id;?>"> <span>Chi Tiết </a> </div>
                              <div class="price"> <span class="price-new"><?php echo $products['product'][$y+2]->price;?></span> 
                                <span class="price-old"><?php echo (int)(($products['product'][$y+2]->price*100)/30); ?></span> </div>
                            </div>
                          </form>
                          </div>
                        </li>
                         <li class="last-in-line">
                          <div class="inner-indent">
                            <div class="img2">
                              <form method="get" action="<?php echo 'product/'.$products['product'][$y+3]->id_kind.'/'.$products['product'][$y+3]->id;?>" class="inline">
                               <a rel="gallery"  href="<?php echo 'product/'.$products['product'][$y+3]->id_kind.'/'.$products['product'][$y+3]->id;?>">
                                  <img src="<?php echo $url.$products['product'][$y+3]->image;?>" alt="" width="250px" height="250px;"/>
                               </a>
                            </div>
                            <div class="name"> <a href="#"><?php echo $products['product'][$y+3]->name;?></a> </div>
                            <div class="wrapper">
                              <div class="cart"> <a href="<?php echo 'product/'.$products['product'][$y+3]->id_kind.'/'.$products['product'][$y+3]->id;?>"  class="button"> <span>Chi Tiết</span></a></div>
                              <div class="price"> <span class="price-new"><?php echo $products['product'][$y+3]->price;?></span>
                               <span class="price-old"><?php echo (int)(($products['product'][$y+3]->price*100)/30); ?></span> </div>
                            </div>
                          </form>
                          </div>
                        </li>
                       
                        <?php 
                        $i ++;
                        $y = $y+4;
                       }
                      ?>
                          </ul>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
@endsection