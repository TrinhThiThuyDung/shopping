
 <h1>Hi, {{ $firstname }}!</h1>
 
<p>Cảm nơn bạn đã đến với web bán hàng của chúng tôi</p>
<p>Danh sách các sản phẩm bạn đã đặt hàng</p>
@for($i =0 ; $i < count($id); $i++)	
	<p >ID sản phẩm: {{$id[$i]['id']}}</p>
	<p>Tên sản phẩm: {{$id[$i]['name']}}</p>
	<p>Giá: {{$id[$i]['price']*$id[$i]['number']}}<p>
@endfor