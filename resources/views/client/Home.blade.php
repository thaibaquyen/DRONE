<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DRONE | Decorate Home </title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
      <style>
        .header_bottom nav > ul > li:first-child {
          background: #018576;
        }
      </style>
  </head>
  <body>
      @extends('welcome')

      @section('content')
      <div class=" pos_home_section">
          <div class="row pos_home">
              <div class="col-lg-3 col-md-12 col-12">
                  <!--sidebar banner-->
                  <div class="sidebar_widget banner mb-35">
                      <div class="banner_img mb-35">
                          <a href="#"><img src="{{ asset('assets\img\banner\banner5.jpg') }}" alt="banner5"></a>
                      </div>
                      <div class="banner_img">
                          <a href="#"><img src="{{ asset('assets\img\banner\banner6.jpg') }}" alt="banner6"></a>
                      </div>
                  </div>
                  <!--sidebar banner end-->

                  <!--categorie menu start-->
                  <div class="sidebar_widget catrgorie mb-35">
                      <h3>Phân loại</h3>
                      <ul>
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i>Bàn ghế</a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i>Sofa</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i>Bàn trà</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i>Bàn học & làm việc</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i>Bàn trang điểm</a></li>
                              </ul>     
                          </li>
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i> Tủ kệ</a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i>Kệ đứng</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Kệ treo tường</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Tủ đựng đồ</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Tủ quần áo</a></li>
                              </ul> 
                          </li>
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i> Đèn</a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Đèn trần</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Đèn bàn</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Đèn đứng</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Đèn treo tường</a></li>
                              </ul> 
                          </li>
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i> Tranh </a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Tranh sơn dầu</a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Tranh in vải canvas</a></li>
                              </ul>    
                          </li>                        
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i> Đồng hồ </a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Đồng hồ treo tường </a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Đồng hồ để bàn </a></li>
                              </ul>
                          </li>
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i> Gối sofa & Thảm</a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Gối sofa </a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Thảm </a></li>
                              </ul>
                          </li>
                          <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i> Đồ trang trí khác</a>
                              <ul class="categorie_sub">
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Lịch </a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Bình hoa </a></li>
                                  <li><a href="#"><i class="fa fa-caret-right"></i> Chậu cây mini </a></li>
                              </ul>
                          </li>
                      </ul>
                  </div>
                  <!--categorie menu end-->

                  <!--sidebar banner-->
                      <div class="sidebar_widget bottom ">
                      <div class="banner_img">
                          <a href="#"><img src="{{ asset('assets\img\banner\banner9.jpg') }}" alt="banner9"></a>
                      </div>
                      </div>
                  <!--sidebar banner end-->
              </div>

              <div class="col-lg-9 col-md-12">
                  <!--banner slider start-->
                  <div class="banner_slider slider_1">
                      <div class="slider_active owl-carousel">
                          <div class="single_slider" style="background-image: url( {{ asset('assets/img/slider/slider_1.jpg') }})">
                              <div class="slider_content">
                                  <div class="slider_content_inner">  
                                      <h1>Chào mừng bạn đến với DRONE</h1>
                                      <p>Thiên đường mua sắm, thế giới nằm trong tay của bạn. </p>
                                      <a href="{{ URL::to('/shop') }}">Mua sắm ngay bây giờ</a>
                                  </div>     
                              </div>    
                          </div>
                          <div class="single_slider" style="background-image: url({{ asset('assets/img/slider/slider_2.jpg') }})">
                              <div class="slider_content">
                                  <div class="slider_content_inner">  
                                      <h1>Chào mừng bạn đến với DRONE</h1>
                                      <p>Hiện đại, tiện nghi và tiết kiệm.</p>
                                      <a href="{{ URL::to('/shop') }}">Mua sắm ngay bây giờ</a>
                                  </div>         
                              </div>         
                          </div>
                          <div class="single_slider" style="background-image: url({{ asset('assets/img/slider/slider_3.jpg') }})">
                              <div class="slider_content">  
                                  <div class="slider_content_inner">  
                                      <h1>Chào mừng bạn đến với DRONE</h1>
                                      <p>Hãy mua theo cách của bạn. </p>
                                      <a href="{{ URL::to('/shop') }}">Mua sắm ngay bây giờ</a>
                                  </div> 
                              </div> 
                          </div>
                      </div>
                  </div> 
                  <!--banner slider start-->

                  <!--new product area start-->
                  <div class="new_product_area">
                      <div class="block_title">
                          <h3>Sản phẩm mới nhất</h3>
                      </div>
                      <div class="row">
                          <div class="product_active owl-carousel">
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product1.jpg') }}" alt="product1"></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="span-new">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">3.800.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Bộ bàn ghế hiện đại Mango</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Add to Wishlist ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product2.jpg') }}" alt="product2"></a> 
                                          <div class="hot_img">
                                              <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="span-hot">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng </a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">425.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Đèn để bàn thân gỗ Luxury</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box2" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product3.jpg') }}" alt=""></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">500.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Tủ đầu giường có khóa</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box3" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product4.jpg') }}" alt=""></a> 
                                          <div class="hot_img">
                                              <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">290.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Bộ 3 tranh trừu tượng</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box4" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product6.jpg') }}" alt=""></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">435.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Thảm sàn tròn Scandivian</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box5" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      </div>       
                  </div> 
                  <!--new product area start-->  

                  <!--featured product start--> 
                  <div class="featured_product">
                      <div class="block_title">
                          <h3>Sản phẩm nổi bật</h3>
                      </div>
                      <div class="row">
                          <div class="product_active owl-carousel">
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product7.jpg') }}" alt=""></a> 
                                          <div class="hot_img">
                                              <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">550.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Đèn cây vòm Retro</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box6" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product8.jpg') }}" alt=""></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">230.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Đồng hồ treo tường pastel</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box7" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product9.png') }}" alt=""></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">180.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Kệ sách gỗ freestyle</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box8" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product10.jpg') }}" alt=""></a> 
                                          <div class="hot_img">
                                              <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">750.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Bộ bàn ghế làm việc Simple</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box9" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product11.jpg') }}" alt=""></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">70.000đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">Tranh canvas hoa cỏ</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" data-target="#modal_box10" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      </div> 
                  </div>     
                  <!--featured product end--> 

                  <!--banner area start-->
                  <div class="banner_area mb-60">
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                              <div class="single_banner">
                                  <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product37.jpg') }}" alt=""></a>
                                  <div class="banner_title">
                                      <p>Giảm giá lên tới<span> 40%</span></p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="single_banner">
                                  <a href="{{  URL::to('/singerProduct') }}"><img src="{{ asset('assets\img\product\product36.jpg') }}" alt=""></a>
                                  <div class="banner_title title_2">
                                      <p>Giảm giá <span> 30%</span></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>     
                  <!--banner area end-->        
              </div>
          </div>  
      </div>
      @endsection
  </body>
</html>