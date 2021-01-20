<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DRONE | Decorate Home </title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
      <style>
        .header_bottom nav > ul > li:nth-child(4) {
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
                        <li><a href="{{ URL::to('/home') }}">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>blog</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    
    <!--blog start-->
    <div class="blog_area">
      <div class="row">   
          <div class="col-lg-4 col-md-6">
              <div class="single_blog">
                  <div class="blog_thumb">
                      <a href="{{  URL::to('/singerProduct') }}"><img src="assets\img\product\product27.jpg" alt=""></a>
                  </div>
                  <div class="blog_content">
                      <div class="blog_content_text">
                        <div class="blog_post">
                          <ul>
                              <li>
                                  <a href="#">Bộ ghế sofa đơn</a>
                              </li>
                          </ul>
                        </div>
                        <h3><a href="{{  URL::to('/singerProduct') }}">Ghế sofa đơn - hiện đại và tinh tế.</a></h3>
                        <p>Nếu bạn đang tìm kiếm một mẫu ghế sofa gây ấn tượng cho không gian sống của mình thì đừng bỏ lỡ mẫu sofa bán chạy nhất tại DROne sau: Đa dạng về thiết kế, giá thành phù hợp với nhiều phong cách phòng khách khác nhau như: cổ điển, hiện đại….</p>
                      </div>                                 
                      <div class="post_footer">
                          <div class="post_meta">
                              <ul>
                                  <li>11/12/2020</li>
                              </ul>
                          </div>
                          <div class="Read_more">
                              <a href="{{  URL::to('/singerProduct') }}">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="single_blog">
                  <div class="blog_thumb">
                      <a href="{{  URL::to('/singerProduct') }}"><img src="assets\img\product\product15.jpg" alt=""></a>
                  </div>
                  <div class="blog_content">
                      <div class="blog_content_text">
                        <div class="blog_post">
                          <ul>
                              <li>
                                  <a href="#">Bàn trang điểm đơn giản</a>
                              </li>
                          </ul>
                        </div>
                        <h3><a href="{{  URL::to('/singerProduct') }}">Bàn trang điểm “Xu Hướng Mới Nhất”.</a></h3>
                        <p>Để mua được mẫu bàn trang điểm ưng ý, bạn cần phải đảm bảo tính thẩm mỹ cao cho cả gian phòng. Và tất nhiên, cũng không thể thiếu được cảm giác thoải mái, "relax" mỗi khi con gái chúng mình ngồi makeup.</p>
                      </div>
                      <div class="post_footer">
                          <div class="post_meta">
                              <ul>
                                  <li>1/1/2021</li>
                              </ul>
                          </div>
                          <div class="Read_more">
                              <a href="{{  URL::to('/singerProduct') }}">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="single_blog">
                  <div class="blog_thumb">
                      <a href="{{  URL::to('/singerProduct') }}"><img src="assets\img\product\product36.jpg" alt=""></a>
                  </div>
                  <div class="blog_content">
                      <div class="blog_content_text">
                        <div class="blog_post">
                          <ul>
                              <li>
                                  <a href="#">Bộ 2 kệ </a>
                              </li>
                          </ul>
                        </div>
                        <h3><a href="{{  URL::to('/singerProduct') }}">Kệ sách Story - Bình yên giữa chốn thị thành.</a></h3>
                        <p>DRONE gửi đến tổ ấm bạn những sản phẩm mang nét đẹp thẩm mỹ đầy khác biệt với tính ứng dụng cao cho các không gian nhỏ hiện đại...</p>
                      </div>                              
                      <div class="post_footer">
                          <div class="post_meta">
                              <ul>
                                  <li>20/12/2020</li>
                              </ul>
                          </div>
                          <div class="Read_more">
                              <a href="{{  URL::to('/singerProduct') }}">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="single_blog">
                  <div class="blog_thumb">
                      <a href="{{  URL::to('/singerProduct') }}"><img src="assets\img\product\product25.jpg" alt=""></a>
                  </div>
                  <div class="blog_content">
                      <div class="blog_content_text">
                        <div class="blog_post">
                          <ul>
                              <li>
                                  <a href="#">Sofa giường</a>
                              </li>
                          </ul>
                        </div>
                        <h3><a href="{{  URL::to('/singerProduct') }}">Mang cả thiên đường đến căn phòng của bạn.</a></h3>
                        <p>"Mua sofa giường sẽ mang cả thiên đường đến căn hộ nhỏ" chính xác là câu từ ví von mà người ta đặc biệt dành riêng cho sofa giường. Nhiều người sẽ nghĩ đây là chiêu trò quảng cáo cho các nhãn hàng, nhưng không. Bạn sẽ thật sự tin vào điều đó nếu cùng chúng tôi chiêm nghiệm những lí do vô cùng thuyết phục dưới đây.</p>
                      </div>
                      
                      <div class="post_footer">
                          <div class="post_meta">
                              <ul>
                                  <li>30/11/2020</li>
                              </ul>
                          </div>
                          <div class="Read_more">
                              <a href="{{  URL::to('/singerProduct') }}">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="single_blog">
                  <div class="blog_thumb">
                      <a href="{{  URL::to('/singerProduct') }}"><img src="assets\img\product\product2.jpg" alt=""></a>
                  </div>
                  <div class="blog_content">
                      <div class="blog_content_text">
                        <div class="blog_post">
                          <ul>
                              <li>
                                  <a href="#">Đèn ngủ</a>
                              </li>
                          </ul>
                        </div>
                        <h3><a href="{{  URL::to('/singerProduct') }}">Đèn ngủ để bàn nhỏ gọn, ấm áp.</a></h3>
                        <p>Mẫu đèn để bàn phòng ngủ nhỏ gọn mang đến nhiều tiện lợi trong quá trình sử dụng cho khách hàng. Mẫu đèn để bàn với kiểu dáng bên ngoài vô cùng nhỏ gọn, thích hợp với mọi không gian gia đình.</p>
                      </div>

                      <div class="post_footer">
                          <div class="post_meta">
                              <ul>
                                  <li>5/11/2020</li>
                              </ul>
                          </div>
                          <div class="Read_more">
                              <a href="{{  URL::to('/singerProduct') }}">Xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="single_blog">
                  <div class="blog_thumb">
                      <a href="{{  URL::to('/singerProduct') }}"><img src="assets\img\product\product8.jpg" alt=""></a>
                  </div>
                  <div class="blog_content">
                      <div class="blog_content_text">
                        <div class="blog_post">
                          <ul>
                              <li>
                                  <a href="#">Đồng hồ treo tường Cricle Royal</a>
                              </li>
                          </ul>
                        </div>
                        <h3><a href="{{  URL::to('/singerProduct') }}">Mẫu đồng hồ hiện đại, sang trọng.</a></h3>
                        <p>Đồng hồ treo tường Cricle Royal lấy cảm hứng từ vòng tròn nghệ thuật đậm chất hoàng gia. Thiết kế mang phong cách Minimalism tối giản, Scandinavian hiện đại và không kém phần sang trọng. Thường được dùng trang trí không gian nội thất phòng khách, phòng ngủ, nhà hàng, khách sạn cao cấp.</p>
                      </div> 

                      <div class="post_footer">
                          <div class="post_meta">
                              <ul>
                                  <li>13/10/2020</li>
                              </ul>
                          </div>
                          <div class="Read_more">
                              <a href="{{  URL::to('/singerProduct') }}">xem chi tiết<i class="fa fa-angle-double-right"></i></a>
                          </div> 
                      </div>
                  </div>
              </div>
          </div>
      </div>    
    </div>
    <!--blog end-->
    
    <!--pagination style start--> 
    <div class="blog_pagination">
        <div class="row">
            <div class="col-12">
                <div class="page_number">
                    <span>Trang: </span>
                    <ul>
                        <li>«</li>
                        <li class="current_number">1</li>
                        <li><a href="#">2</a></li>
                        <li>»</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
  </body>
</html>