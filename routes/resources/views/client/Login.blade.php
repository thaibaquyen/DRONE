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
        .header_links ul li:last-child a{
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
                            <li>Đăng nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login">
        <div class="row">
                    <!--login area start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form">
                            <h2>Đăng nhập</h2>
                            <form action="#">
                                <p>   
                                    <label>Nhập địa chỉ email của bạn<span>*</span></label>
                                    <input type="email">
                                </p>
                                <p>   
                                    <label>Mật khẩu <span>*</span></label>
                                    <input type="password">
                                </p>   
                                <div class="login_submit">
                                    <button type="submit">Đăng nhập</button>
                                    <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Lưu tài khoản
                                    </label>
                                </div>

                            </form>
                        </div>    
                    </div>
                    <!--login area start-->

                    <!--register area start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form register">
                            <h2>Đăng kí</h2>
                            <form action="#">
                                <p>   
                                    <label>Họ và tên  <span>*</span></label>
                                    <input type="text">
                                </p>
                                <p>   
                                    <label>Số điện thoại  <span>*</span></label>
                                    <input type="tel">
                                </p>
                                <p>   
                                    <label>Nhập địa chỉ email của bạn  <span>*</span></label>
                                    <input type="email">
                                </p>
                                <p>   
                                    <label>Mật khẩu <span>*</span></label>
                                    <input type="password">
                                </p>
                                <div class="login_submit">
                                    <button type="submit">Đăng kí</button>
                                </div>
                            </form>
                        </div>    
                    </div>
                    <!--register area end-->
                </div>
    </div>
    <!-- customer login end -->
  @endsection
  </body>
</html>