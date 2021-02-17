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
                        <li>Sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--pos home section-->
    <div class=" pos_home_section shop_section shop_fullwidth">
      <div class="row">
          <div class="col-12">
              <!--banner slider start-->
              <div class="banner_slider fullwidht  mb-35">
                  <img src="{{ asset('assets\img\banner\banner10.jpg') }}" alt="banner10">
              </div> 
              <!--banner slider start-->
          </div>
      </div>       
      <div class="row">
          <div class="col-12">
              <!--shop toolbar start-->
              <div class="shop_toolbar mb-35">
                  <div class="list_button">
                      <ul class="nav" role="tablist">
                          <li>
                              <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                          </li>
                      </ul>
                  </div>
                  <div class="page_amount">
                      <p>Hiển thị {{ ($data->currentPage() - 1) * 8 + 1 }} -> {{ $data->lastItem() }} kết quả</p>
                  </div>
                  <div class="select_option">
                      <form action="#">
                          <label>Sắp xếp theo</label>
                          <select name="orderby" id="short">
                              <option selected="" value="1">Giá trị</option>
                              <option value="1">Giá: thấp đến cao</option>
                              <option value="1">Giá: cao đến thấp</option>
                              <option value="1">Tên sản phẩm: A-Z</option>
                              <option value="1">Tên sản phẩm: Z-A</option>
                          </select>
                      </form>
                  </div>
              </div>
              <!--shop toolbar end-->
          </div>
      </div>        
      <!--shop tab product-->
      <div class="shop_tab_product shop_fullwidth">   
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="large" role="tabpanel">
                <div class="row">
                @foreach($data as $valu)
                    @if($valu->trangThai == 1)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt="product1"></a> 
                                    <div class="img_icone">
                                        <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="span-new">
                                    </div>
                                    <div class="product_action">
                                        <a href="#" class="add-to-cart" masp="{{ $valu->maSp }}"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">{{ number_format(($valu->gia * (100 - $valu->giamGia)/100)) }} đ</span>
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
                    @elseif($valu->trangThai == 2)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt=""></a> 
                                    <div class="hot_img">
                                        <img src="{{ asset('assets\img\cart\span-hot.png') }}" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#" class="add-to-cart" masp="{{ $valu->maSp }}"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">{{ number_format(($valu->gia * (100 - $valu->giamGia)/100)) }} đ</span>
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
                    @else
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt=""></a> 
                                    <div class="product_action">
                                        <a href="#" class="add-to-cart" masp="{{ $valu->maSp }}"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">{{ number_format(($valu->gia * (100 - $valu->giamGia)/100)) }} đ</span>
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
                    @endif
                @endforeach                         
                </div>  
            </div>
            <div class="tab-pane fade" id="list" role="tabpanel">
            @foreach($data as $valu)
                @if($valu->trangThai == 1)
                    <div class="product_list_item mb-35">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-5 col-sm-6">
                                <div class="product_thumb">
                                    <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt="product1"></a> 
                                    <div class="hot_img">
                                    <img src="assets\img\cart\span-new.png" alt="">
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-7 col-sm-6">
                                <div class="list_product_content">
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                    <div class="list_title">
                                        <h3><a href='{{  URL::to("/singerProduct/$valu->maSp") }}'>{{ $valu->tenSp }}</a></h3>
                                    </div>
                                    <p class="design">{{ $valu->moTa1 }}</p>

                                    <p class="compare">
                                        <input id="select" type="checkbox">
                                        <label for="select">Select to compare</label>
                                    </p>
                                    <div class="content_price">
                                        <span>{{ number_format(($valu->gia * (100 - $valu->giamGia)/100)) }} đ</span>
                                        @if($valu->giamGia > 0)
                                            <span class="old-price">{{ $valu->gia }}</span>
                                        @endif
                                    </div>
                                    <div class="add_links">
                                        <ul>
                                            <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                @elseif($valu->trangThai == 2)
                    <div class="product_list_item mb-35">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-5 col-sm-6">
                                <div class="product_thumb">
                                    <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt="product1"></a> 
                                    <div class="hot_img">
                                    <img src="assets\img\cart\span-hot.png" alt="">
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-7 col-sm-6">
                                <div class="list_product_content">
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                    <div class="list_title">
                                        <h3><a href='{{  URL::to("/singerProduct/$valu->maSp") }}'>{{ $valu->tenSp }}</a></h3>
                                    </div>
                                    <p class="design">{{ $valu->moTa1 }}</p>

                                    <p class="compare">
                                        <input id="select" type="checkbox">
                                        <label for="select">Select to compare</label>
                                    </p>
                                    <div class="content_price">
                                        <span>{{ number_format(($valu->gia * (100 - $valu->giamGia)/100)) }} đ</span>
                                        @if($valu->giamGia > 0)
                                            <span class="old-price">{{ $valu->gia }}</span>
                                        @endif
                                    </div>
                                    <div class="add_links">
                                        <ul>
                                            <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>   
                @else
                    <div class="product_list_item mb-35">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-5 col-sm-6">
                                <div class="product_thumb">
                                    <a href='{{  URL::to("/singerProduct/$valu->maSp") }}'><img src='{{ asset("assets/img/product/$valu->hinhAnh") }}' alt="product1"></a> 
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-7 col-sm-6">
                                <div class="list_product_content">
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                    <div class="list_title">
                                        <h3><a href='{{  URL::to("/singerProduct/$valu->maSp") }}'>{{ $valu->tenSp }}</a></h3>
                                    </div>
                                    <p class="design">{{ $valu->moTa1 }}</p>

                                    <p class="compare">
                                        <input id="select" type="checkbox">
                                        <label for="select">Select to compare</label>
                                    </p>
                                    <div class="content_price">
                                        <span>{{ number_format(($valu->gia * (100 - $valu->giamGia)/100)) }} đ</span>
                                        @if($valu->giamGia > 0)
                                            <span class="old-price">{{ $valu->gia }}</span>
                                        @endif
                                    </div>
                                    <div class="add_links">
                                        <ul>
                                            <li><a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Yêu thích"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                @endif  
            @endforeach          
            </div>
        </div>
      </div>    
      <!--shop tab product end-->

      <!--pagination style start--> 
      <div class="pagination_style shop_page">
          <div class="item_page">
              <form action="#">
                  <label for="page_select">Hiển thị tối đa 8</label>
                  <span>sản phẩm trên trang</span>
              </form>
          </div>
          <div class="page_number">
              <span>Trang:  {{$data->currentPage()}}   </span>
              {{ $data->links() }}
          </div>
      </div>
      <!--pagination style end-->   
    </div>
    <!-- modal area start --> 
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div id="detailme">
                      
                    </div>
                </div>    
            </div>
        </div>
    </div> 
    <!-- modal area end --> 
    @endsection
  </body>
</html>