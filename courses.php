<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <script src="https://kit.fontawesome.com/eef555952d.js" crossorigin="anonymous"></script>

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>
    .chose{
    border: solid 1.5px;
    min-width: 50px;
    text-align: center;
    border-radius: 30px;
    padding: 5px;
    margin: 0 15px;
    }
    .chose:hover{
        background-color: rgb(201, 201, 201);
    }
    .properties__img img{
        height: 225px;
    }
</style>

<body>
<?php
    session_start();
    ?>
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/Spread.png" alt="" style="max-width: 100px;"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation" style="margin: 0 20px 0 0;">                                                                                          
                                                <li class="active" ><a href="index.php">Trang chủ</a></li>
                                                <li><a href="courses.php">Khóa học</a></li>
                                                <li><a href="blog.html">Blog</a>
                                                </li>
                                                <!-- <li class="button-header margin-left "><a href="#" class="btn">Đăng ký</a></li>
                                                <li class="button-header"><a href="login.html" class="btn btn3">Đăng nhập</a></li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                    <div class="container-profile"> 
                                        <div class="dropdown" style=" display: flex; align-items: center; width: 30%;"> 
                                            <div class="notification"> 
                                                <i class="fa-solid fa-bell" style="font-size: 20px; color: #494b3b;"></i>
                                                <div class="dropdown-content"> 
                                                    <ul> 
                                                        <li style="background-color: #ffd4c3;">
                                                            <i class="fa-solid fa-check" style="margin-right: 10px;"></i>
                                                            <span>Bạn có một khóa học <span style="color: #ff2a2a;">NGAY BÂY GIỜ </span>với AnhMinh</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-check" style="margin-right: 10px;"></i>
                                                            <span>Bạn có một khóa học đặt trước vào ngày 10/6/2023 với DoVanHoangAnh</span>
                                                        </li>
                                                    </ul> 
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="dropdown"> 
                                            <div class="profile"> 
                                                <img class="dropbtn" src="https://nhanvietluanvan.com/wp-content/uploads/2023/05/c6e56503cfdd87da299f72dc416023d4-736x620.jpg"> 
                                                <p><?php echo  $_SESSION['work']; ?>: <?php echo $_SESSION['username']; ?>
                                                <div class="dropdown-content"> 
                                                    <ul> 
                                                        <li>
                                                            <i class="fa-solid fa-gear"></i>
                                                            <span>Cài đặt</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-user"></i>
                                                            <span>Hồ sơ</span>
                                                        </li> 
                                                        <li>
                                                            <a href="logout.php" style="padding: 0;">
                                                            <i class="fa-solid fa-right-from-bracket"></i>
                                                            <span>Đăng xuất</span></a>
                                                         </li>  
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
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="fadeInLeft" data-delay="0.3s">Khóa học</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="#">Khóa học</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Các khóa học nổi bật</h2>
                        </div>
                    </div>
                </div>
                <div class="filter" style="margin-bottom: 30px;">
                    <ul style="display: flex;">
                        <i class="fa-solid fa-filter" style="font-size: 20px; margin-top: 7px;"></i>
                        <button class="chose" id="button0"> Tất cả</button>
                        <button class="chose" id="button1"> C++</button>
                        <button class="chose" id="button2"> Powerpoint</button>
                        <button class="chose" id="button3"> JS</button>
                        <button class="chose" id="button4"> Github </button>
                        <button class="chose" id="button5"> Canva</button>
                        <button class="chose" id="button6"> Toán 10</button>
                        <button class="chose" id="button7"> Triết học</button>
                    </ul>
                </div>
                <div class="row" id="row">
                    <div class="col-lg-4 c" >
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="./profile/c++/c++_coban.html"><img src="assets/img/gallery/C++.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                        <i class="fa-regular fa-user"></i>
                                        <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                    </div>
                                    <p>Thời gian: 2 tiếng</p>
                                    <h3><a href="./profile/c++/c++_coban.html">Học C++ cơ bản</a></h3>
                                    <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của C++ trong thời gian ngắn. Ngoài ra khóa học sẽ hướng dẫn vài thuật toán giúp bạn giải được một số dạng toán cơ bản của các đề thi.
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name" style="display: flex; align-items: center;">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span style="margin-left: 3px; color: #181818ad;">(5.0)</span>
                                        </div>
                                        <div class="price">
                                            <span>5.000VND</span>
                                        </div>
                                    </div>
                                    <a href="./profile/c++/c++_coban.php" class="border-btn border-btn2">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 JS">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="./profile/js/js_nangcao.html"><img src="https://techvccloud.mediacdn.vn/2018/11/23/js-15429579443112042672363-crop-1542957949936317424252.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                     <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                        <i class="fa-regular fa-user"></i>
                                        <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                    </div>
                                    <p>Thời gian: 1 tiếng</p>
                                    <h3><a href="./profile/js/js_nangcao.html">Học JS nâng cao</a></h3>
                                    <p>Khóa học dành cho những bạn có nền tảng về lập trình. Khóa học sẽ hướng dẫn vài thuật toán và ứng dụng được vào các dự án.
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name" style="display: flex; align-items: center;">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <span style="margin-left: 3px; color: #181818ad;">(4.5)</span>
                                        </div>
                                        <div class="price">
                                            <span>5.000VND</span>
                                        </div>
                                    </div>
                                    <a href="./profile/js/js_nangcao.html" class="border-btn border-btn2">Xem chi tiết</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 python">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="./profile/powerpoint/powerpoint.html"><img src="https://cdn.tgdd.vn/Files/2021/08/12/1374841/powerpoint-la-gi-nhung-thong-tin-ma-ban-nen-biet-.jpg" alt="" height="225px"></a>
                                </div>
                                <div class="properties__caption">
                                     <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                        <i class="fa-regular fa-user"></i>
                                        <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                    </div>
                                    <p>Thời gian: 1 tiếng</p>
                                    <h3><a href="./profile/powerpoint/powerpoint.html">Powerpoint cơ bản</a></h3>
                                    <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của powerpoint trong thời gian ngắn. Sẽ giúp bạn áp dụng vào thực tế các dự án.
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name" style="display: flex; align-items: center;">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <span style="margin-left: 3px; color: #181818ad;">(4.5)</span>
                                        </div>
                                        <div class="price">
                                            <span>5.000VND</span>
                                        </div>
                                    </div>
                                    <a href="./profile/powerpoint/powerpoint.html" class="border-btn border-btn2">Xem chi tiết</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 GB">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="./profile/github/github.html"><img src="https://vienthonga.com/wp-content/uploads/2020/11/github-la-gi-nhung-khai-niem-co-ban-trong-github.jpeg" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                     <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                        <i class="fa-regular fa-user"></i>
                                        <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                    </div>
                                    <p>Thời gian: 30 phút</p>
                                    <h3><a href="./profile/github/github.html">Sử dụng Github trong Visual Studio Code</a></h3>
                                    <p>Khóa học sẽ giúp bạn cách up code lên từ VSC và ứng dụng chuyên sau về Github.
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name" style="display: flex; align-items: center;">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <span style="margin-left: 3px; color: #181818ad;">(4.5)</span>
                                        </div>
                                        <div class="price">
                                            <span>5.000VND</span>
                                        </div>
                                    </div>
                                    <a href="./profile/github/github.html" class="border-btn border-btn2">Xem chi tiết</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 JS">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="./profile/js/js_coban.html"><img src="https://techvccloud.mediacdn.vn/2018/11/23/js-15429579443112042672363-crop-1542957949936317424252.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                     <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                        <i class="fa-regular fa-user"></i>
                                        <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                    </div>
                                    <p>Thời gian: 2 tiếng</p>
                                    <h3><a href="./profile/js/js_coban.html">Học JS cơ bản</a></h3>
                                    <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của JS trong thời gian ngắn. Ngoài ra khóa học sẽ hướng dẫn vài thuật toán giúp bạn giải được một số dạng toán cơ bản của các đề thi.
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name" style="display: flex; align-items: center;">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <span style="margin-left: 3px; color: #181818ad;">(4.5)</span>
                                        </div>
                                        <div class="price">
                                            <span>5.000VND</span>
                                        </div>
                                    </div>
                                    <a href="./profile/c++/c++_coban.html" class="border-btn border-btn2">Xem chi tiết</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hl" >
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="./profile/canva/canva.html"><img src="https://www.phucanh.vn/media/news/2309_canva-ra-mat-loat-tinh-nang-moi.jpg" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                     <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                        <i class="fa-regular fa-user"></i>
                                        <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                    </div>
                                    <p>Thời gian: 2 tiếng</p>
                                    <h3><a href="./profile/canva/canva.html">Canva cơ bản</a></h3>
                                    <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của HCanva trong thời gian ngắn. Ngoài ra khóa học sẽ đước hướng dẫn áp dụng vào các dự án thực tế.
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name" style="display: flex; align-items: center;">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <span style="margin-left: 3px; color: #181818ad;">(4.5)</span>
                                        </div>
                                        <div class="price">
                                            <span>5.000VND</span>
                                        </div>
                                    </div>
                                    <a href="./profile/canva/canva.html" class="border-btn border-btn2">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mt-40">
                            <a href="#" class="border-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!-- ? services-area -->
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
           <!-- Footer Start-->
           <div class="footer-area footer-padding">
               <div class="container">
                   <div class="row justify-content-between">
                       <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                           <div class="single-footer-caption mb-50">
                               <div class="single-footer-caption mb-30">
                                   <!-- logo -->
                                   <div class="footer-logo mb-25">
                                       <a href="index.php"><img src="assets/img/logo/Spread.png" alt="" style="max-width: 130px;"></a>
                                   </div>
                                   <div class="footer-tittle">
                                       <div class="footer-pera">
                                           <p>Trao đổi, học hỏi các kiến thức mới trong các lĩnh vực giáo dục.</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>  
                   </div>
               </div>
           </div>
           <!-- footer-bottom area -->
           <div class="footer-bottom-area">
               <div class="container">
                   <div class="footer-border">
                       <div class="row d-flex align-items-center">
                           <div class="col-xl-12 ">
                               <div class="footer-copy-right text-center">
                                   <p>
                                     Được thiết kế bởi <a href="index.php" target="_blank">HAMN</a>
                                   </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Footer End-->
         </div>
     </footer> 
      <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fa-solid fa-up-long" style="color: #0000007c;"></i></a>
    </div>
    <script>
        var elements = document.querySelectorAll('.JS');
    
        // Kiểm tra xem có các phần tử hay không
        if (elements.length > 0) {
            // Hiển thị các phần tử
            elements.forEach(function(element) {
                element.style.display = 'block'; // Hoặc loại hiển thị mong muốn
            });
        } else {
            // Ẩn đi nếu không có phần tử
            elements.forEach(function(element) {
                element.style.display = 'none';
            });
        }
    </script>
    <script>
    var button0 = document.getElementById('button0');
    var button1 = document.getElementById('button1');
    var button2 = document.getElementById('button2');
    var button3 = document.getElementById('button3');
    var button4 = document.getElementById('button4');
    var button5 = document.getElementById('button5');
    var button6 = document.getElementById('button6');
    var button7 = document.getElementById('button7');
    var c = document.querySelectorAll('.c');
    var git = document.querySelectorAll('.GB');
    var JS = document.querySelectorAll('.JS');
    var python = document.querySelectorAll('.python');
    var hl = document.querySelectorAll('.hl');
    var cs = document.querySelectorAll('.cs');
    var ai = document.querySelectorAll('.AI');

    button0.addEventListener('click', function() {
        c.forEach(function(element) {
            element.style.display = 'block';
        });
        git.forEach(function(element) {
            element.style.display = 'block';
        });
        JS.forEach(function(element) {
            element.style.display = 'block';
        });
        python.forEach(function(element) {
            element.style.display = 'block';
        });
        hl.forEach(function(element) {
            element.style.display = 'block';
        });
        cs.forEach(function(element) {
            element.style.display = 'block';
        });
        ai.forEach(function(element) {
            element.style.display = 'block';
        });
    });
    button1.addEventListener('click', function() {
        c.forEach(function(element) {
            element.style.display = 'block';
        });
        git.forEach(function(element) {
            element.style.display = 'none';
        });
        JS.forEach(function(element) {
            element.style.display = 'none';
        });
        python.forEach(function(element) {
            element.style.display = 'none';
        });
        hl.forEach(function(element) {
            element.style.display = 'none';
        });
        cs.forEach(function(element) {
            element.style.display = 'none';
        });
        ai.forEach(function(element) {
            element.style.display = 'none';
        });
    });
    button2.addEventListener('click', function() {
        python.forEach(function(element) {
            element.style.display = 'block';
        });
        c.forEach(function(element) {
            element.style.display = 'none';
        });
        JS.forEach(function(element) {
            element.style.display = 'none';
        });
        git.forEach(function(element) {
            element.style.display = 'none';
        });
        hl.forEach(function(element) {
            element.style.display = 'none';
        });
        cs.forEach(function(element) {
            element.style.display = 'none';
        });
        ai.forEach(function(element) {
            element.style.display = 'none';
        });
    });
    button3.addEventListener('click', function() {
        JS.forEach(function(element) {
            element.style.display = 'block';
        });
        git.forEach(function(element) {
            element.style.display = 'none';
        });
        c.forEach(function(element) {
            element.style.display = 'none';
        });
        python.forEach(function(element) {
            element.style.display = 'none';
        });
        hl.forEach(function(element) {
            element.style.display = 'none';
        });
        cs.forEach(function(element) {
            element.style.display = 'none';
        });
        ai.forEach(function(element) {
            element.style.display = 'none';
        });
    });
    button4.addEventListener('click', function() {
        git.forEach(function(element) {
            element.style.display = 'block';
        });
        python.forEach(function(element) {
            element.style.display = 'none';
        });
        JS.forEach(function(element) {
            element.style.display = 'none';
        });
        c.forEach(function(element) {
            element.style.display = 'none';
        });
        hl.forEach(function(element) {
            element.style.display = 'none';
        });
        cs.forEach(function(element) {
            element.style.display = 'none';
        });
        ai.forEach(function(element) {
            element.style.display = 'none';
        });
    });
    button5.addEventListener('click', function() {
        hl.forEach(function(element) {
            element.style.display = 'block';
        });
        git.forEach(function(element) {
            element.style.display = 'none';
        });
        JS.forEach(function(element) {
            element.style.display = 'none';
        });
        python.forEach(function(element) {
            element.style.display = 'none';
        });
        c.forEach(function(element) {
            element.style.display = 'none';
        });
        cs.forEach(function(element) {
            element.style.display = 'none';
        });
        ai.forEach(function(element) {
            element.style.display = 'none';
        });
    });
    button6.addEventListener('click', function() {
        cs.forEach(function(element) {
            element.style.display = 'block';
        });
        git.forEach(function(element) {
            element.style.display = 'none';
        });
        JS.forEach(function(element) {
            element.style.display = 'none';
        });
        python.forEach(function(element) {
            element.style.display = 'none';
        });
        hl.forEach(function(element) {
            element.style.display = 'none';
        });
        c.forEach(function(element) {
            element.style.display = 'none';
        });
        ai.forEach(function(element) {
            element.style.display = 'none';
        });
    });
    button7.addEventListener('click', function() {
        ai.forEach(function(element) {
            element.style.display = 'block';
        });
        git.forEach(function(element) {
            element.style.display = 'none';
        });
        JS.forEach(function(element) {
            element.style.display = 'none';
        });
        python.forEach(function(element) {
            element.style.display = 'none';
        });
        hl.forEach(function(element) {
            element.style.display = 'none';
        });
        cs.forEach(function(element) {
            element.style.display = 'none';
        });
        c.forEach(function(element) {
            element.style.display = 'none';
        });
    });
</script>
    

    </script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/main.js"></script> 
</body>
</html>