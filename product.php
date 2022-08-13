<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <head>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    <title>Rheem Cooling</title>
</head>
<body>
<header>
    <div class="logo">
        <img src="image/logo.jpg" >
    </div>
    <div class="menu">
        <li><a href="#">ĐIỀU HÒA</a>
            <ul class="sub-menu">
               <li><a href="#">Điều hòa 1 chiều</a></li>
               <li><a href="#">Điều hòa 2 chiều</a></li>
               <li><a href="#">Điều hòa mini</a></li>
               <li><a href="#">Điều hòa cây</a></li>
               <li><a href="#">Điều hòa âm trần</a></li>
            </ul>
        </li>
        <li><a href="#">THƯƠNG HIỆU</a></li>
        <li><a href="#">BÁN CHẠY NHẤT</a></li>
        <li><a href="#">CÔNG NGHỆ INVERTER</a></li>
        <li><a href="#">VỀ CHÚNG TÔI</a></li>
    </div>
    <div class="others">
        <li><input type="text" placeholder="Tìm kiếm"><i class="fas fa-search"></i></li>
        <li><a class="fa fa-user" href="#">Đăng Nhập</a></li>
        <li><a class="fa fa-shopping-cart" href="#">Giỏ Hàng</a></li>
        <li><a class="fa fa-phone" href="#">Hotline</a></li>
    </div>
</header>  
<!-- ----------------product--------  -->
<footer>
    <div class="ship">
        <li><a href="#">Dịch Vụ Uy Tín</a></li>
        <li><a href="#">Đổi Trả Trong 7 Ngày</a></li>
        <li><a href="#">Giao Hàng Toàn Quốc</a></li>
    </div>
<section class="infor">
    <div class="infor-1"> 
        <p>Công ty cổ phần Rheem Cooling <br>
        Đăng ký đăng ký: Số 285 Đội Cấn, Ba Đình, Hà Nội <br>
        Số điện thoại: 0243 666 8888
        </p>
    </div>
    <div class="infor-2">
        <h3>Giới Thiệu</h3>
        <li><a href="#">Về chúng tôi</a></li>
        <li><a href="#">Tuyển dụng</a></li>
        <li><a href="#">Hệ thống cửa hàng</a></li>
    </div>
    <div class="infor-3">
        <h3>Dịch vụ khách hàng</h3>
        <li><a href="#">Chính sách điều khoản</a></li>
        <li> <a href="#">Hướng dẫn mua hàng</a></li>
        <li><a href="#">Chính sách thanh toán</a></li>
    </div>
    <div class="infor-4">
        <h3>Liên hệ</h3>
        <li><a href="#">Hotline</a></li>
        <li> <a href="#">Email</a></li>
        <li> <a href="#">Facebook</a></li>
    </div>
</section>
<div class="footer-bottom">
    ©Rheem Cooling rights reserved
</div>
</footer>
</body>
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    let imgNumber = imgPosition.length
    let index=0
    // console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
    })
    function imgSlide(){
        index++;
        console.log(index)
        if(index>=imgNumber) {index=0}
        imgContainer.style.left = "-" +index*100 +"%"
    }
    setInterval(imgSlide,5000)
</script>
</html>