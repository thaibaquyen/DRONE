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
      <link rel="stylesheet" href="{{ asset('assets\css\countdown.scss') }}">
      
      <script src="{{ asset('assets\js\countdown.js') }}"></script>
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
                        <li>Confirm Create User</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login">
        <div class="row">   
            <div class="col-lg-12 col-md-12">
                <div class="account_form">
                    <h2>Confilm</h2>

                    <form action="{{ URL::to('/confirmzip') }}" method="POST">
                    {{csrf_field()}}
                        <p>   
                            <label>Nhập mã được gửi tới trong địa chỉ {{ $email }} của bạn <span>*</span></label>
                            <input type="text" id="login_email" name="zip" required>
                        </p>
                       
                        <div class="login_submit">
                            <button type="submit">Send</button>
                        </div>

                    </form>
                </div>    
            </div>
        </div>
    </div>
    <!-- customer login end -->
  @endsection
  </body>
</html>