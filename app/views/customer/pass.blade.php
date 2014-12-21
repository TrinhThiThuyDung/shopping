@extends('layout/layout-custome')
<link rel="stylesheet" type="text/css" href="{{Asset('css/style-dangky.css')}}"/>
@section('title')
    Thay đổi mật khẩu
@endsection
<link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.css')}}"/>
@section('content')
    <div class="dk" style="margin-top: 50px">
        <p style="font-size: 25px; font-weight: 700; color: #ff4500">Thay Đổi mật khẩu</p>
        <form action="{{Asset('tdPasscustomer')}}" method="post" id="tdpass">
            <div class="khung1" style="margin-top: 20px">
                <input type="password" name="pass" id="pass" placeholder="Root Password" class="form-control"/>
            </div>
            <div class="khung1" style="margin-top: 20px">
                <input type="password" name="passnew" id="passnew" placeholder="Password new" class="form-control"/>
            </div>
            <div class="khung1" style="margin-top: 20px">
                <input type="password" name="passconfirnew" id="passconfirnew" placeholder="Re-Password new" class="form-control"/>
            </div>
            <button class="btn btn-lg btn-primary btn-block" style="width: 400px; background : #d35400; margin-top:10px;border-color: #d35400; margin-top: 30px">Thay Đổi Mật Khẩu</button>
        </form>
    </div>

    <script type="text/javascript">
        $("#tdpass").validate({
            rules:{
                pass:{
                    required:true,
                     remote:{
                        url:"{{Asset('checkPassCustomer')}}",
                        type: "POST"
                    }
                },
                passnew:{
                    required:true,
                    minlength:6,       
                },
                passconfirnew:{
                    equalTo: "#passnew",
                },
            },
            messages:{
                pass:{
                    required:"Vui lòng nhập mật khẩu cũ",
                    remote:"Mật khẩu cũ xác nhận không đúng"
                },
                passnew:{
                    required:"Vui lòng nhập mật khẩu mới",
                    minlength:"Mật Khẩu phải nhập 6 kí tự trở lên"
                },
                passconfirnew:{
                    equalTo:"Mật khẩu mới xác nhận không đúng"
                }
            },
        })
    </script>
@endsection 