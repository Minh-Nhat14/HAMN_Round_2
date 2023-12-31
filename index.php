<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SpreadED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/eef555952d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <style>
        .features-caption p{
            color:#515151c9!important;
        }
    </style>
    <?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        $_SESSION['work'] =null;
        $_SESSION['username'] = null;
     }
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
                                                <li><a class="kh">Khóa học</a></li>
                                                <li><a href="blog.php">Blog</a>
                                                </li>
                                                <li id="logout" class="button-header margin-left "><a href="signup.php" class="btn">Đăng ký</a></li>
                                                <li id="login" class="button-header"><a href="login.php" class="btn btn3">Đăng nhập</a></li>
                                            </ul>
                                        </nav>
                                    </div>   
                                    <div class="container-profile" id="ctp"> 
                                        <div class="dropdown" style=" display: flex; align-items: center; width: 30%;"> 
                                            <div class="notification" id="nfc"> 
                                                <i class="fa-solid fa-bell" style="font-size: 20px; color: #494b3b;"></i>
                                                <div class="dropdown-content"> 
                                                    <ul> 
                                                        <li style="background-color: #ffd4c3;">
                                                                <i class="fa-solid fa-check" style="margin-right: 10px;"></i>
                                                            <a href="video_teacher.php">Bạn có một khóa học <span style="color: #ff2a2a;">NGAY BÂY GIỜ </span>với AnhMinh</a>
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
                                                <p id="pnw"></p>
                                                <div class="dropdown-content"> 
                                                    <ul> 
                                                        <li>
                                                        <a href="" style="padding: 0;">
                                                            <i class="fa-solid fa-gear"></i>
                                                            <span>Cài đặt</span>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a href="" style="padding: 0;">
                                                            <i class="fa-solid fa-user"></i>
                                                            <span>Hồ sơ</span>
                                                         </a>                                                        
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
        <!-- slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- introduction_main- -->
                <div class="single-slider slider-height d-flex align-items-center" style="background-image: linear-gradient(18deg, #2fb3a3, #ffeb9a);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s" style="font-family: 'Roboto', sans-serif !important;">Nền tảng học trực tuyến hiệu quả</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Một nền tảng giúp bạn dễ dàng trong việc tiếp cận với các chuyên gia hoặc những người dày dặn kinh nghiệm trong lĩnh vực cụ thể.</p>
                                    <!-- <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Đăng kí</a> -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!--  introduction_elements-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <i class="fa-solid fa-users" style="font-size: 35px; color:blueviolet"></i>
                            </div>
                            <div class="features-caption">
                                <h3>Cộng đồng học tập</h3>
                                <p>Quy tụ mọi người có tinh thần học tập đến từ mọi nơi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <i class="fa-solid fa-flask-vial" style="font-size: 35px; color:green"></i>
                            </div>
                            <div class="features-caption">
                                <h3>Chuyên gia</h3>
                                <p>Sự hỗ trợ từ các chuyên gia dày dặn kinh nghiệm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <i class="fa-solid fa-video" style="font-size: 35px; color:orange"></i>
                            </div>
                            <div class="features-caption">
                                <h3>Phương pháp học</h3>
                                <p>Học theo phương thức gọi video 1 kèm 1 với chuyên gia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- About Area-1 Start -->
        <section class="about-area1 fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="left-content1">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2" style="margin-bottom: 30px;">
                        <div class="front-text">
                            <h2 class="">Trao đổi, học hỏi các kiến thức mới trong các lĩnh vực giáo dục</h2>
                            <p>SpreadED là cầu nối hiệu quả giữa các chuyên gia với những người muốn học hỏi, đam mê về lĩnh vực nào đó.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <i class="fa-solid fa-circle-check" style="color: #0fc2c2;"></i>
                        </div>
                        <div class="features-caption">
                            <p>Tiếp cận với các những người có kinh nghiệm trong lĩnh vực.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <i class="fa-solid fa-circle-check" style="color: #0fc2c2;"></i>
                        </div>
                        <div class="features-caption">
                            <p>Cùng trao đổi học hỏi với những người bạn ở khắp nơi.</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <i class="fa-solid fa-circle-check" style="color: #0fc2c2;"></i>
                        </div>
                        <div class="features-caption">
                            <p>Tiếp lửa cho những đam mê và tạo ra một cộng đồng khuyến học.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- About Area End -->
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix" style="padding-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Các khóa học nổi bật</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a ><img src="assets/img/gallery/C++.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                 <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                    <i class="fa-regular fa-user"></i>
                                    <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                </div>
                                <p>Thời gian: 2 tiếng</p>
                                <h3><a >Học C++ cơ bản</a></h3>
                                <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của C++ trong thời gian ngắn. Ngoài ra khóa học sẽ hướng dẫn vài thuật toán giúp bạn giải được một số dạng toán cơ bản của các đề thi.
                                    
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
                                <a  class="border-btn border-btn2">Xem chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a ><img src="https://techvccloud.mediacdn.vn/2018/11/23/js-15429579443112042672363-crop-1542957949936317424252.png" alt="" height="225px"></a>
                            </div>
                            <div class="properties__caption">
                                 <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                    <i class="fa-regular fa-user"></i>
                                    <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                </div>
                                <p>Thời gian: 1 tiếng</p>
                                <h3><a >Học JS nâng cao</a></h3>
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
                                <a  class="border-btn border-btn2">Xem chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a ><img src="https://200lab-blog.imgix.net/2023/04/Python-la-gi.png" alt="" height="225px"></a>
                            </div>
                            <div class="properties__caption">
                                 <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                    <i class="fa-regular fa-user"></i>
                                    <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                </div>
                                <p>Thời gian: 1 tiếng</p>
                                <h3><a >Học Python cơ bản</a></h3>
                                <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của Pyhton trong thời gian ngắn. Ngoài ra khóa học sẽ hướng dẫn vài thuật toán giúp bạn giải được một số dạng toán cơ bản của các đề thi.
                                    
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
                                <a  class="border-btn border-btn2">Xem chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a ><img src="assets/img/gallery/C++.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                 <div class="icon_experience" style="display: flex; align-items: center; margin-bottom: 5px;">
                                    <i class="fa-regular fa-user"></i>
                                    <p style="margin: 0 0px 0px 10px;">Người có kinh nghiệm</p>
                                </div>
                                <p>Thời gian: 2 tiếng</p>
                                <h3><a >Học C++ cơ bản</a></h3>
                                <p>Khóa học sẽ giúp bạn nắm vững các kiến thức cơ bản của C++ trong thời gian ngắn. Ngoài ra khóa học sẽ hướng dẫn vài thuật toán giúp bạn giải được một số dạng toán cơ bản của các đề thi.
                                    
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
                                <a  class="border-btn border-btn2">Xem chi tiết</a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
       
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Khám phá các môn học</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6" style="padding-bottom: 35px;">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Tin học</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Kinh tế</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">THCS</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">THPT</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">C++</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Python</a></h3>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Toán 10</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Toán 9</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mt-20">
                            <a  class="kh border-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        
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

<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/jquery.slicknav.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/main.js"></script>
<script>

    var work = "<?php echo  $_SESSION['work']; ?>";
    const username = "<?php echo $_SESSION['name']; ?>";
    if(username != "" && work != ""){
        var usern = work + ": " + username ;
        document.getElementById("pnw").innerHTML = usern;
        document.getElementById('logout').style.display = 'none';
        document.getElementById('login').style.display = 'none';
        document.getElementById('ctp').style.display = 'flex';
        if(work == "Học sinh"){
            document.getElementById('nfc').style.display = 'none';
        }
    }else{
        document.getElementById('login').style.display = 'inline-block';
        document.getElementById('logout').style.display = 'inline-block';
        document.getElementById('ctp').style.display = 'none';
    }
    const ln=document.querySelector(".courses-actives");
    const kh=document.querySelector(".kh");
    ln.addEventListener("click", function(){
        if(username == "" && work == ""){
            window.location.href = "login.php";
        }else{
            window.location.href = "courses.php";
        }
    })
    kh.addEventListener("click", function(){
        if(username == "" && work == ""){
            window.location.href = "login.php";
        }else{
            window.location.href = "courses.php";
        }
    })
    </script>

</body>
</html>