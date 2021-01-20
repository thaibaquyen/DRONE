<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DRONE | Decorate Home </title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
      <style>
        .header_bottom nav > ul > li:nth-child(3) {
          background: #018576;
        }
      </style>
  </head>
  <body>
    @extends('welcome')

    @section('content')
    <!--breadcrumbs start-->
    <div class="breadcrumbs_area">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{ URL::to('/home') }}">Trang chủ</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Thông tin sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product wrapper start-->
    <div class="product_details">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="product_tab fix"> 
                    <div class="product_tab_button">    
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1" aria-selected="false"><img src="{{ asset('assets\img\product\product12.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2" aria-selected="false"><img src="{{ asset('assets\img\product\product12_2.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3" aria-selected="false"><img src="{{ asset('assets\img\product\product12_3.jpg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div> 
                    <div class="tab-content produc_tab_c">
                        <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                            <div class="modal_img">
                                <a href="#"><img src='{{ asset("assets/img/product/$data->hinhAnh") }}' alt="product12"></a>
                                <div class="img_icone">
                                    <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="span-new">
                                </div>
                                <div class="view_img">
                                    <a class="large_view" href='{{ asset("assets/img/product/$data->hinhAnh") }}'><i class="fa fa-search-plus"></i></a>
                                </div>    
                            </div>
                        </div>
                        <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                            <div class="modal_img">
                                <a href="#"><img src="{{ asset('assets\img\product\product12_2.jpg') }}" alt="product12_2"></a>
                                <div class="img_icone">
                                    <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                </div>
                                <div class="view_img">
                                    <a class="large_view" href="{{ asset('assets\img\product\product12_2.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                </div>     
                            </div>
                        </div>
                        <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                            <div class="modal_img">
                                <a href="#"><img src="{{ asset('assets\img\product\product12_3.jpg') }}" alt="product12_3"></a>
                                <div class="img_icone">
                                    <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                                </div>
                                <div class="view_img">
                                    <a class="large_view" href="{{ asset('assets\img\product\product12_3.jpg') }}"> <i class="fa fa-search-plus"></i></a>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="product_d_right">
                    <h1>{{ $data->tenSp }}</h1>
                      <div class="product_ratting mb-10"></div>
                      <h6>Mã sản phẩm: {{ $data->maSp }}</h6>
                      <div class="product_desc">
                          <p>{{ $data->moTa1 }}</p>
                      </div>
                    <div class="content_price mb-15">
                        <span>{{ number_format($data->gia, 2) }}</span>
                    </div>
                    <div class="box_quantity mb-20">                                     
                        <form action="#">
                            <label>Số lượng</label>
                            <input min="0" max="100" value="1" type="number">
                        </form> 
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                        <a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>    
                    </div>

                    <div class="sidebar_widget color">
                        <h2>Lựa chọn màu: </h2>
                          <div class="widget_color">
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li> <a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>                 

                    <div class="product_stock mb-20">
                        <p>{{ $data->soLuong }} sản phẩm</p>
                        <span> Trong kho </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">   
                    <div class="product_info_button">    
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Thêm thông tin</a>
                            </li>
                            <li>
                                  <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Bảng dữ liệu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="product_info_content">
                                <p>Bộ bàn ghế làm từ kim loại thiết kế độc đáo có thể đặt ở mọi vị trí bạn muốn như: ban công, phòng khách, phòng ngủ, sân vườn, sân thượng,....</p>
                                <p>Bàn có kích thước khá nhỏ gọn dễ dàng di chuyển và bày trí.</p>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                            <div class="product_d_table">
                                <form action="#">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="first_child">Chất liệu</td>
                                                <td>Kim loại</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Màu sắc</td>
                                                <td>Vàng, Đen, Trắng</td>
                                            </tr>
                                            <tr>
                                                <td class="first_child">Kích thước</td>
                                                <td>
                                                  <p>Ghế: 78cm*78cm*50cm</p> 
                                                  <p>Bàn: 65cm*50cm</p> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="product_info_content">
                                <p>Bộ bàn ghế làm từ kim loại thiết kế độc đáo có thể đặt ở mọi vị trí bạn muốn như: ban công, phòng khách, phòng ngủ, sân vườn, sân thượng,....</p>
                                <p>Bàn có kích thước khá nhỏ gọn dễ dàng di chuyển và bày trí.</p>
                            </div>    
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>  
    <!--product info end--> 
    @endsection
  </body>
</html>