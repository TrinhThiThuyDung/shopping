@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>

@section('title')
    Lịch sử mua hàng
@endsection

@section('content')
<div role="navigation">
    <div class="tab-content"  style="width: 984px;">
      <div role="tabpanel" class="tab-pane active" id="week" >
            <h2 class="sub-header">
                Lịch sử mua hàng
            </h2>
            <div class="table-responsive">      
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>STT</th>                      
                            <th>Tên khách hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>giá tiền</th>
                            <th>Số lượng mua</th>
                            <th>Ngày mua</th>
                        </tr>
                    </thead>
                    <tbody>                    
                    @if(count($listSP) != 1)  
                        @for($i = 1 ; $i < count($listSP); $i++)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$listSP[$i]['username']}}</td>
                            <td>{{$listSP[$i]['name']}}</td>
                            <td>{{$listSP[$i]['price']}}</td>
                            <td>{{$listSP[$i]['number']}}</td>
                            <td>{{$listSP[$i]['date']}}</td>
                        </tr>
                        @endfor
                    @endif
                    </tbody>
                    
                </table>
            </div>
      </div>
</div>
</div>

@endsection
