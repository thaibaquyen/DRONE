<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DRONE | Decorate Home </title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            $(".detail_product").click(function(){
                $.ajax({
                    url:"{{ URL::to('detail') }}",
                    method:"GET",
                    data:{ masp:$(this).attr("masp") },
                    success:function(data){     
                        $('#detailme').html(data);
                    }
                });
            });
        })
        </script>
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
                      @foreach($danhmuc as $valu)
                      <li class="has-sub add"><a href="#"><i class="fa fa-caret-right"></i>{{ $valu->name }}</a>
                        <ul class="categorie_sub">
                            @foreach($menu as $value1)
                                @foreach($value1 as $key => $value)
                                    @if($key == $valu->id)
                                        @foreach($value as $k => $values)
                                            <li><a href='{{  URL::to("/shop/$values->id") }}'><i class="fa fa-caret-right"></i>{{ $values->tendanhmuc }}</a></li>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach
                        </ul> 
                      </li>
                      @endforeach
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
                            @foreach($datanew as $valu)
                              <div class="col-lg-3">
                                  <div class="single_product">
                                      <div class="product_thumb">
                                          <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt="product1"></a> 
                                          <div class="img_icone">
                                              <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="span-new">
                                          </div>
                                          <div class="product_action">
                                              <a href="#"> <i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                          </div>
                                      </div>
                                      <div class="product_content">
                                          <span class="product_price">{{ number_format(($valu->gia * (100 - $valu->giamGia)/100), 2) }} đ</span>
                                          <h3 class="product_title"><a href="{{  URL::to('/singerProduct') }}">{{ $valu->tenSp }}</a></h3>
                                      </div>
                                      <div class="product_info">
                                          <ul>
                                              <li><a href="#" title=" Add to Wishlist ">Yêu thích</a></li>
                                              <li><a href="#" data-toggle="modal" masp="{{ $valu->maSp }}" class="detail_product" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                            @endforeach
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
                          @foreach($datahot as $valu)
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt=""></a> 
                                        <div class="hot_img">
                                            <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="">
                                        </div>
                                        <div class="product_action">
                                            <a href="#"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <span class="product_price">{{ number_format(($valu->gia * (100 - $valu->giamGia)/100), 2) }} đ</span>
                                        <h3 class="product_title"><a href='{{  URL::to("/singerProduct/$valu->maSp") }}'>{{ $valu->tenSp }}</a></h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="#" title=" Yêu thích ">Yêu thích</a></li>
                                            <li><a href="#" class="detail_product" masp = "{{ $valu->maSp }}" data-toggle="modal" data-target="#modal_box" title="Quick view">Xem chi tiết</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
      <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div id="detailme">
                        <!-- <div class="row">
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
                        </div>   -->
                    </div>
                </div>    
            </div>
        </div>
    </div> 
  </body>
</html>