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
    
    <!-- modal area start --> 
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('assets\img\product\product1.jpg') }}" alt="product1"></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\cart\cart1.jpg') }}" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Bộ bàn ghế hiện đại Mango</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">3.800.000đ</span>
                                    </div>
                                    <div class="modal_content mb-10">
                                        <p>Bộ bàn ghế sofa hiện đại, nhỏ gọn kiểu Nhật dành cho căn hộ nhỏ ban công Bắc Âu.</p>    
                                    </div>
                                    <div class="modal_size mb-15">
                                        <h2>Chọn số lượng:</h2>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>   
                                    <div class="modal_description mb-15">
                                        <h6>Mã sản phẩm: BG01</h6>
                                        <ul>
                                          Sản phẩm gồm:                                          
                                          <li>01 x Bàn</li>
                                          <li>02 x Ghế</li>
                                        </ul>
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div> 
    <div class="modal fade" id="modal_box2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product2.jpg') }}" alt="product2"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product2.jpg') }}" alt="product2"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Đèn để bàn thân gỗ LUXURY</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">425.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Đèn ngủ gỗ - đèn ngủ để bàn - đèn ngủ đầu giường LUKA cao cấp đã bao gồm bóng LED chuyên dụng.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: DE02</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x Thân đèn</li>
                                        <li>01 x Chóa đèn</li>
                                        <li>01 x Bóng LED chyên dụng</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>  
    <div class="modal fade" id="modal_box3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product3.jpg') }}" alt="product3"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product3.jpg') }}" alt="product3"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Tủ đầu giường có khóa</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">500.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Chiếc tủ đầu giường với 1 ngăn kéo có khóa để những đồ đạc nhỏ gọn dành cho phòng ngủ.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: TK01</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x Tủ</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div> 
    <div class="modal fade" id="modal_box4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product4.jpg') }}" alt="product4"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product4.jpg') }}" alt="product4"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Bộ 3 tranh trừu tượng</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">290.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Bộ tranh mang phong cách hiện đại, tạo điểm nhấn ấn tượng, đầy nghệ thuật trong không gian nhà bạn.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: TR01</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>03 x Bức tranh</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>
    <div class="modal fade" id="modal_box5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product6.jpg') }}" alt="product6"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product6.jpg') }}" alt="product6"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Thảm sàn tròn Scandivian</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">453.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Thảm trải sàn có hình tròn hay hình chữ nhật dạng lông xù đang được ưa chuộng, giúp căn phòng của bạn trở nên sạch sẽ và tiện nghi hơn.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: GT01</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x thảm</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div> 
    <div class="modal fade" id="modal_box6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product7.jpg') }}" alt="product7"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product7.jpg') }}" alt="product7"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Đèn cây vòm Dolado</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">550.000đ</span> 
                                      <span class="old_price">610.000đ</span> 
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Đèn sàn cây bằng kim loại Dolado đế bằng đá cẩm thạch Châu Âu có thể điều chỉnh đèn chiếu sáng.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: DE01</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x đèn</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>
    <div class="modal fade" id="modal_box7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product8.jpg') }}" alt="product8"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product8.jpg') }}" alt="product8"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Đồng hồ treo tường pastel</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">230.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Đồng hồ treo tường pastel mang thiết kế tối giản, hiện đại, sang trọng đang được ưa chuộng, nó sẽ là điểm nhấn nổi bật ở căn phòng của bạn.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: DH01</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x đồng hồ</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>
    <div class="modal fade" id="modal_box8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product9.png') }}" alt="product9"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product9.png') }}" alt="product9"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Kệ sách gỗ freestyle</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">180.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Kệ treo tường với thiết kế đơn giản nhưng sắc nét,  hiện đại, giúp trang trí nhà thêm ấn tượng mà vẫn để đồ hiệu quả, tiết kiệm diện tích.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: TK02</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x kệ</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>
    <div class="modal fade" id="modal_box9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product10.jpg') }}" alt="product10"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product10.jpg') }}" alt="product10"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Bộ bàn ghế làm việc Simple</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">750.000đ</span>
                                      <span class="old_price">790.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Lầy cảm hứng từ sự kết hợp giữa chân kẹp tóc của mình với mặt bàn nhiều lớp phủ Formica đẹp mắt để tạo ra bộ bàn làm việc đơn giản với nét cổ điển cho căn phòng của bạn. </p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: BG02</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x bàn</li>
                                        <li>01 x ghế</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>
    <div class="modal fade" id="modal_box10" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal_body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12">
                              <div class="modal_tab">  
                                  <div class="tab-content" id="pills-tabContent">
                                      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                          <div class="modal_tab_img">
                                              <a href="#"><img src="{{ asset('assets\img\product\product11.jpg') }}" alt="product11"></a>    
                                          </div>
                                      </div>
                                  </div>
                                  <div class="modal_tab_button">    
                                      <ul class="nav product_navactive" role="tablist">
                                          <li>
                                              <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product11.jpg') }}" alt="product11"></a>
                                          </li>
                                      </ul>
                                  </div>    
                              </div>  
                          </div> 
                          <div class="col-lg-7 col-md-7 col-sm-12">
                              <div class="modal_right">
                                  <div class="modal_title mb-10">
                                      <h2>Tranh canvas hoa cỏ</h2> 
                                  </div>
                                  <div class="modal_price mb-10">
                                      <span class="new_price">70.000đ</span>  
                                  </div>
                                  <div class="modal_content mb-10">
                                      <p>Tranh mang phong cách hiện đại, tạo điểm nhấn ấn tượng, đầy nghệ thuật trong không gian nhà bạn. Ngoài ra, sản phẩm còn có thể là món quà tặng bạn bè, người thân đầy ý nghĩa.</p>    
                                  </div>
                                  <div class="modal_size mb-15">
                                      <h2>Chọn số lượng:</h2>
                                  </div>
                                  <div class="modal_add_to_cart mb-15">
                                      <form action="#">
                                          <input min="0" max="100" step="2" value="1" type="number">
                                          <button type="submit">Thêm vào giỏ hàng</button>
                                      </form>
                                  </div>   
                                  <div class="modal_description mb-15">
                                      <h6>Mã sản phẩm: TR02</h6>
                                      <ul>
                                        Sản phẩm gồm:                                          
                                        <li>01 x tranh</li>
                                      </ul>
                                  </div>      
                              </div>    
                          </div>    
                      </div>     
                  </div>
              </div>    
          </div>
      </div>
    </div>
    <!-- modal area end --> 
  <!-- JavaScript -->
      <script src="{{ asset('assets\js\vendor\jquery-1.12.0.min.js') }}"></script>
      <script src="{{ asset('assets\js\popper.js') }}"></script>
      <script src="{{ asset('assets\js\bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets\js\ajax-mail.js') }}"></script>
      <script src="{{ asset('assets\js\plugins.js') }}"></script>
      <script src="{{ asset('assets\js\main.js') }}"></script>
  </body>
</html>
