<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (isset($data))
                             
<a href="#"><i class="fa fa-shopping-cart"></i> {{ count($data) }} sản phẩm - {{ number_format($money) }}đ <i class="fa fa-angle-down"></i></a>

<!--mini cart-->
<div class="mini_cart">
@foreach($data as $key => $valu)
    <div class="cart_item">
        <div class="cart_img">
            <a href="#"><img src="{{ asset('assets/img/product/').'/'.$valu['img'] }}" alt="cart1"></a>
        </div>
        <div class="cart_info">
            <a href="#"></a>
            <span class="cart_price">{{ number_format($valu['gia']) }}đ</span>
            <span class="quantity">{{ $valu['sl'] }}</span>
        </div>
        <div class="cart_remove">
            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
        </div>
    </div>
@endforeach 
    <div class="shipping_price">
        <span> Phí vận chuyển </span>
        <span>  30.000đ  </span>
    </div>
    <div class="total_price">
        <span> Tổng tiền thanh toán </span>
        <span class="prices"> {{ number_format($money + 30000) }}đ </span>
    </div>
    <div class="cart_button">
        <a href="{{ URL::to('/cart') }}"> Kiểm tra</a>
    </div>
</div>
@else
<a href="#"><i class="fa fa-shopping-cart"></i>0 sản phẩm<i class="fa fa-angle-down"></i></a>
@endif
</body>
</html>