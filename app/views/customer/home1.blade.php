@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>

@section('title')
	Hôm
@endsection

@section('content')
<?php $url = URL::to('/')."/images/"; ?>
  <div id="container">
              <div id="content">
                <div class="box featured">
                  <div class="box-heading"> SẢN PHẨM<span> HOT</span> </div>
                  <div class="box-content">
                    <div class="box-product">
                      <ul>
                      @for($i = 0 ; $i < count($listSP); $i++)
                        <li class="first-in-line" style="float: left; width: 220px">
                          <div class="inner-indent">
                            <div class="img2">
                               <a rel="gallery"  class="fancybox" href="quickview.html">                               
                                  <img src= {{$url.$listSP[$i]['image']}}  style="width: 180px; height=220px" />
                               </a>
                            </div>
                            <div class="name"> <a href="#">{{$listSP[$i]['name']}}</a> </div>
                            <div class="wrapper">
                              <div class="cart">
                              <form action="{{Asset('chitiet')}}" method="get">
                                <button name="id" value="{{$listSP[0]['id']}}" style="background:#d45f09"> Chi Tiết</button>
                              </form>
                            </div>
                              <div class="price"> <span class="price-new">{{$listSP[$i]['price']}}đ</span> <span class="price-old">$600</span> </div>
                            </div>
                          </div>
                        </li>
                        @endfor
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

  <script type="text/javascript">
                 
    $(document).ready(function() {
  $("a.fancybox").fancybox({
        'titleShow'   : false,
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic'
      });
  
  });
  </script> 
@endsection