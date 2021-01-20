<!doctype html>
<html class="no-js" lang="zxx">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>DRONE | Decorate Home </title>
      <meta name="description" content="Decorate Home">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets\img\favicon.png') }}">
  
  <!-- CSS -->
      <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets\css\plugin.css') }}">
      <link rel="stylesheet" href="{{ asset('assets\css\bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets\css\responsive.css') }}">
      <script src="{{ asset('assets\js\vendor\modernizr-2.8.3.min.js') }}"></script>
  </head>
  <body>
    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">  
                <!--header area -->
                <div class="header_area">
                    <!--header top--> 
                    <div class="header_top">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="header_links">
                                    <ul>
                                        <li><a href="{{ URL::to('/cart') }}" title="My cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                        <li><a href="{{ URL::to('/login') }}" title="Login">Đăng nhập</a></li>
                                    </ul>
                                </div>   
                            </div>
                        </div> 
                    </div> 
                    <!--header top end-->

                    <!--header middel--> 
                    <div class="header_middel">
                        <div class="row align-items-center">
                            <!--logo start-->
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="{{ URL::to('/home') }}"><img src="{{ asset('assets\img\logo\logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <!--logo end-->
                            <div class="col-lg-9 col-md-9">
                                <div class="header_right_info">
                                    <div class="search_bar">
                                        <form action="#">
                                            <input placeholder="Tìm kiếm..." type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="shopping_cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> 2 sản phẩm - 209.000đ <i class="fa fa-angle-down"></i></a>

                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="{{ asset('assets\img\cart\cart1.jpg') }}" alt="cart1"></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Bộ Bàn Ghế Hiện Đại Mango</a>
                                                    <span class="cart_price">3.800.000đ</span>
                                                    <span class="quantity">Số lượng: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="{{ asset('assets\img\cart\cart2.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Đèn Để Bàn Thân Gỗ Luxury</a>
                                                    <span class="cart_price">425.000đ</span>
                                                    <span class="quantity">Số lượng: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="shipping_price">
                                                <span> Phí vận chuyển </span>
                                                <span>  30.000đ  </span>
                                            </div>
                                            <div class="total_price">
                                                <span> Tổng tiền thanh toán </span>
                                                <span class="prices">  4.255.000đ </span>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html"> Kiểm tra</a>
                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                    <!--header middel end-->      
                    <div class="header_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="main_menu_inner">
                                    <div class="main_menu d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
                                                <li><a href="{{ URL::to('/about') }}">Giới thiệu</a></li>  
                                                <li><a href="{{ URL::to('/shop') }}">Sản phẩm</a>
                                                    <div class="mega_menu jewelry">
                                                        <div class="mega_items jewelry">
                                                          <ul>
                                                              <li><a href="{{ URL::to('/shop') }}">Bàn ghế</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Tủ kệ</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Đèn</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Tranh</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Đồng hồ</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Gối sofa & Thảm</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Đồ trang trí khác</a></li>
                                                          </ul>
                                                        </div>
                                                    </div>  
                                                </li>                      
                                                <li><a href="{{ URL::to('/blog') }}">Blog</a></li>
                                                <li><a href="{{ URL::to('/contact') }}">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mobile-menu d-lg-none">
                                        <nav>
                                            <ul>
                                                <li><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
                                                <li><a href="{{ URL::to('/about') }}">Giới thiệu</a></li>  
                                                <li><a href="{{ URL::to('/shop') }}">Sản phẩm</a>
                                                    <div>
                                                        <div>
                                                            <ul>
                                                              <li><a href="{{ URL::to('/shop') }}">Bàn ghế</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Tủ kệ</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Đèn</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Tranh</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Đồng hồ</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Gối sofa & Thảm</a></li>
                                                              <li><a href="{{ URL::to('/shop') }}">Đồ trang trí khác</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>  
                                                </li>                                                      
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="contact.html">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header end -->

                <!--pos home section-->
                @yield('content');
                <!--pos home section end-->
            </div>
            <!--pos page inner end-->
        </div>
    </div>
    <!--pos page end-->
    
    <!--footer area start-->
    <div class="footer_area">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer_widget">
                            <h3>Giới thiệu về chúng tôi</h3>
                            <p>Thành lập năm 2020, DRONE đã nhanh chóng trở thành một địa chỉ đáng tin cậy trong lĩnh vực nội thất phòng khách, phòng ngủ, đồ trang trí nhà cửa..Tự tay sắm sửa những món đồ xinh đẹp cho căn nhà của mình là một việc vừa thư giãn, vừa thể hiện sự quan tâm, chu đáo đến tổ ấm của gia đình nhỏ. Các sản phẩm của DRONE đa dạng và phong phú, hứa hẹn sẽ mang đến một thế giới mới cho căn nhà của bạn.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Thông tin</h3>
                            <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Dịch vụ khách hàng</a></li>
                                <li><a href="#">Điều khoản và điều kiện</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Thông tin giao hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3>Liên hệ</h3>
                            <div class="footer_widget_contect">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Thị trấn Trâu Quỳ, Huyện Gia Lâm, Hà Nội</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> 0327394455</p>
                                <a href="#"><i class="fa fa-envelope-square" aria-hidden="true"></i> thaoao4@gmail.com </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="footer_social text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->
    
  <!-- JavaScript -->
      <script src="{{ asset('assets\js\vendor\jquery-1.12.0.min.js') }}"></script>
      <script src="{{ asset('assets\js\popper.js') }}"></script>
      <script src="{{ asset('assets\js\bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets\js\ajax-mail.js') }}"></script>
      <script src="{{ asset('assets\js\plugins.js') }}"></script>
      <script src="{{ asset('assets\js\main.js') }}"></script>
      <script src="{{ asset('assets\js\form-validation.js') }}"></script>
  </body>
</html>
