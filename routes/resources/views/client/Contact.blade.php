<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DRONE | Decorate Home </title>
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
      <style>
        .header_bottom nav > ul > li:last-child {
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
                        <li>Liên hệ</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--contact start-->
    <div class="contact_area">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact_message">
                    <h3>Thông tin của bạn</h3>   
                    <form id="contact-form" method="POST" action="assets/mail.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="name" placeholder="Họ tên *" type="text">    
                            </div>
                            <div class="col-lg-6">
                                <input name="email" placeholder="Email *" type="email">    
                            </div>
                            <div class="col-lg-6">
                                <input name="subject" placeholder="Tiêu đề *" type="text">   
                            </div>
                              <div class="col-lg-6">
                                <input name="phone" placeholder="Số điện thoại *" type="text">   
                            </div>

                            <div class="col-12">
                                <div class="contact_textarea">
                                    <textarea placeholder="Văn bản *" name="message" class="form-control2"></textarea>     
                                </div>   
                                <button type="submit"> Gửi tin nhắn </button>  
                            </div> 
                            <div class="col-12">
                                <p class="form-messege">
                            </div>
                        </div>
                    </form>    
                </div> 
            </div>                                                        
            <div class="col-lg-6 col-md-12">
                <div class="contact_message contact_info">
                    <h3>Liên hệ</h3>    
                    <ul>
                        <li><i class="fa fa-fax"></i>  Địa chỉ : Thị trấn Trâu Quỳ, Huyện Gia Lâm, Hà Nội.</li>
                        <li><i class="fa fa-phone"></i> Số điện thoại:<a href="#"> 0327394455</a></li>
                        <li><i class="fa fa-envelope-o"></i>Email: thaoao4@gmail.com</li>
                    </ul>        
                    <h3><strong>Giờ làm việc</strong></h3>
                    <p><strong>Thứ 2 – Thứ 7</strong>:  08AM – 22PM</p>       
                </div> 
            </div>
        </div>
    </div>
    <!--contact  end-->
    
    <!--contact map start-->
    <div class="contact_map">
      <div class="row">
          <div class="col-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.408170854374!2d105.9337434505472!3d21.004495761268604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cb2530a1a6b6c0!2zSOG7jWMgVmnhu4duIE7DtG5nIE5naGnhu4dwIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1610716607578!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="500" height="450" style="border:0" allowfullscreen=""></iframe>
          </div>
      </div>
    </div>
    @endsection
  </body>
</html>