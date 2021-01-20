<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DRONE | Decorate Home </title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
      <style>
        .header_bottom nav > ul > li:nth-child(2) {
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
                        <li>Giới thiệu về chúng tôi</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--about section -->
    <div class="about_section">
      <div class="row align-items-center">
              <div class="col-lg-6 col-md-6">
                  <div class="about_thumb">
                      <img src="assets\img\ship\about1.jpg" alt="about1">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6">
                  <div class="about_content">
                      <h1>Chúng tôi là DRONE</h1>
                      <p>Các sản phẩm của DRONE đa dạng và phong phú, hứa hẹn sẽ thổi một luồng gió mới tới căn nhà của bạn. Hãy cùng DRONE tiếp tục hành trình kiến tạo nên những tổ ấm tươi đẹp, bởi đối với chúng tôi, nhà không chỉ là nơi dừng chân mà còn là nơi nuôi dưỡng những tâm hồn, nơi những giá trị văn hoá Việt được kế thừa và phát huy.Tận tâm và không ngừng đổi mới với mong muốn mang lại dịch vụ tốt nhất cho khách hàng.</p>
                      <div class="view__work">
                          <a href="{{ URL::to('/home') }}">Đến trang chủ </a>
                      </div>  
                  </div>
              </div>
      </div>
    </div>
    <!--about section end-->

    <!-- Advantages section-->
    <div class="row my-5">
      <div class="col-sm-12 col-lg-4">
          <div class="service-block-inner">
              <h3>Chúng tôi đáng tin cậy</h3>
              <p>Tận tâm và không ngừng đổi mới với mong muốn mang lại dịch vụ tốt nhất cho khách hàng. </p>
          </div>
      </div>
      <div class="col-sm-12 col-lg-4">
          <div class="service-block-inner">
              <h3>Chúng tôi chuyên nghiệp</h3>
              <p>Đội ngũ nhân viên thiết kế chuyên nghiệp luôn tư vấn cho khách hàng lựa chọn sản phẩm phù hợp với không gian sống, sở thích và nhu cầu sử dụng.</p>
          </div>
      </div>
      <div class="col-sm-12 col-lg-4">
          <div class="service-block-inner">
              <h3>Chúng tôi là chuyên gia</h3>
              <p>DROne đáp ứng được đầy đủ các yêu cầu khắt khe của phân khúc nội thất “thiết kế theo phong cách riêng” và làm hài lòng các khách hàng khó tính nhất.</p>
          </div>
      </div>
    </div>
    @endsection
  </body>
</html>