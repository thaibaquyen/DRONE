<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>