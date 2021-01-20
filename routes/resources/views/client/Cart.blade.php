<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>DRONE | Decorate Home </title>
      <meta name="description" content="Decorate Home">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets\img\favicon.png') }}">
      <style>
        .header_links ul li:first-child a{
          color: #018576;
          font-weight: 700;
        }
      </style>
  </head>
  <body>
  @extends('welcome')

  @section('content')
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="row">
          <div class="col-12">
              <div class="breadcrumb_content">
                  <ul>
                      <li><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
                      <li><i class="fa fa-angle-right"></i></li>
                      <li>Giỏ Hàng</li>
                  </ul>

              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->

  <!--shopping cart area start -->
  <div class="shopping_cart_area">
      <form action="#"> 
              <div class="row">
                  <div class="col-12">
                      <div class="table_desc">
                          <div class="cart_page table-responsive">
                          <table>
                              <thead>
                                  <tr>
                                      <th class="product_remove">Xóa</th>
                                      <th class="product_thumb">Ảnh</th>
                                      <th class="product_name">Tên sản phẩm</th>
                                      <th class="product-price">Giá</th>
                                      <th class="product_quantity">Số lượng</th>
                                      <th class="product_total">Tổng tiền </th>
                                  </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                  <td class="product_thumb"><a href="single-product.html"><img src="assets\img\product\product1.jpg" alt=""></a></td>
                                  <td class="product_name"><a href="#">Bộ bàn ghế hiện đại Mango</a></td>
                                  <td class="product-price">3.800.000đ</td>
                                  <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                  <td class="product_total">3.800.000đ</td>
                              </tr>
                              <tr>
                                  <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                  <td class="product_thumb"><a href="single-product.html"> <img src="assets\img\product\product2.jpg" alt=""></a></td>
                                  <td class="product_name"><a href="#">Đèn để bàn thân gỗ Luxury</a></td>
                                  <td class="product-price">425.000đ</td>
                                  <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                  <td class="product_total">425.000đ</td>
                              </tr>                                           
                              <tr>
                                  <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                  <td class="product_thumb"><a href="single-product.html"> <img src="assets\img\product\product3.jpg" alt=""></a></td>
                                  <td class="product_name"><a href="#">Tủ đầu giường có khóa</a></td>
                                  <td class="product-price">500.000đ</td>
                                  <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                  <td class="product_total">500.000đ</td>
                              </tr>
                              </tbody>
                          </table>   
                          </div>  
                          <div class="cart_submit">
                              <button type="submit">Tải lại giỏ hàng</button>
                          </div>      
                      </div>
                  </div>
              </div>
              <!--coupon code area start-->
              <div class="coupon_area">
                  <div class="row">
                      <div class="col-lg-12 col-md-12">
                          <div class="coupon_code">
                              <h3>Tổng tiền trong giỏ hàng</h3>
                              <div class="coupon_inner">
                                  <div class="cart_subtotal">
                                      <p>Tổng tiền hàng</p>
                                      <p class="cart_amount">4.725.00đ</p>
                                  </div>
                                  <div class="cart_subtotal ">
                                      <p>Phí vận chuyển</p>
                                      <p class="cart_amount"> 30.000đ</p>
                                  </div>
                                  <a href="#"></a>

                                  <div class="cart_subtotal">
                                      <p>Tổng tiền thanh toán</p>
                                      <p class="cart_amount">4.755.000đ</p>
                                  </div>
                                  <div class="checkout_btn">
                                      <a href="#">Tiến hành kiểm tra</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--coupon code area end-->
          </form> 
  </div>
  <!--shopping cart area end -->
  @endsection
  </body>
</html>