@extends('layout/layout-company')


@section('title')
    Khách hàng
@endsection

@section('content')
<div role="navigation">
    <div class="tab-content"  style="width: 1063px;">
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
                </table>
            </div>
      </div>
</div>
</div>

@endsection
