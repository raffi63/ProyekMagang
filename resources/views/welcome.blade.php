<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asnet | Dashboard</title>
    <link rel="stylesheet" href="../assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../dist/css/iconfont/tabler-icons.css">
    <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>
    <!------------------------------>
    <!-- Header Start -->
    <!------------------------------>
    <header class="main-header position-fixed w-100">
            <div class="container">
                <nav class="navbar navbar-expand-xl py-0">
                    <div class="logo">
                        <a class="navbar-brand py-0 me-0" href="home"><img src="https://www.as.net.id/wp-content/uploads/2020/04/logo-2982.png" alt=""></a>
                    </div>
                    <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                        <i class="ti ti-menu-2 text-warning"></i>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">                                             
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-capitalize" aria-current="page" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-capitalize" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-capitalize" href="#">Sengked Fiber</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-capitalize" href="#">Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-capitalize" href="#">blog</a>
                                </li>
                            </ul>
                        
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <a href="{{ route('login') }}" class="btn btn-warning btn-hover-secondery text-capitalize">Log in</a>
                        <a href="{{ route('register') }}" class="btn btn-warning btn-hover-secondery text-capitalize">Register</a>
                </div>
        
                    </div>
                </nav>
            </div>

            <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <div class="logo">
                        <a class="navbar-brand py-0 me-0" href="#"><img src="../assets/images/Creato-logo.svg" alt=""></a>
                    </div> 
                    <button type="button" class="btn-close text-reset  ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x text-warning"></i></button>
                </div>
                <div class="offcanvas-body pt-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" aria-current="page" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Pricing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Elements </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">blog </a>
                        </li>
                        </ul>
                        <div class="login d-block align-items-center mt-3">
                            <a class="btn btn-warning text-capitalize w-100" href="register">Register</a>
                        </div>

                        <div class="login d-block align-items-center mt-3">
                            <a class="btn btn-warning text-capitalize w-100" href="login">Login</a>
                        </div>    
                </div>
            </div>
    </header>
    <!------------------------------>
    <!-- Header End  -->
    <!------------------------------>

    <!------------------------------>
    <!--- Hero Banner Start--------->
    <!------------------------------>
    <section class="hero-banner position-relative overflow-hidden">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h2 class="mb-0 fw-bold">
                            Rasakan Kecepatan Internet Bebas Tanpa Hambatan
                        </h2>
                        <p>Asnet akan hadir di kota kota mu.</p>
                        <a href="#" class="btn btn-warning btn-hover-secondery"><span class="d-inline-block me-2"><i class="ti ti-playstation-triangle"></i></span>Ikuti Kami di Social Media</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="https://www.as.net.id/wp-content/uploads/2019/10/home_03_img_01-768x798.png" class="img-fluid"> 
                    </div>          
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Hero Banner End--------->
    <!------------------------------>

    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>
    <section class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <img src="../assets/images/service/dot-shape.png" class="shape position-absolute">
            <div class="row">
                <div class="col-12"><small class="fs-7 d-block">Working Process</small></div>
                <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-0.5 text-black mb-0">Everything Is Connected<br> But Some Things Are Connected Well</h2>
                    <a href="#" class="btn btn-warning btn-hover-secondery section-btn">All Services</a>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                <i class="ti ti-download text-primary position-relative"></i>
                            </div>
                            <h5 class="mb-0 fw-500">Step 1</h5>
                            <h3 class="fs-4">Daftar di Website Kami</h3>
                            <p class="fs-7 mb-0 fw-500">Pastikan untuk mengisi data secara lengkap</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                <i class="ti ti-user text-primary position-relative"></i>
                            </div>
                            <h5 class="mb-0 fw-500">Step 2</h5>
                            <h3 class="fs-4">Tunggu Konfirmasi dari CS Kami</h3>
                            <p class="fs-7 mb-0 fw-500">Selama menunggu mohon bersabar untuk di kontak CS kami</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                <i class="ti ti-gift text-primary position-relative"></i>
                            </div>
                            <h5 class="mb-0 fw-500">Step 3</h5>
                            <h3 class="fs-4">Rasakan Kecepatan Internet yang Tanpa Batas</h3>
                            <p class="fs-7 mb-0 fw-500">Kecepatan Hingga 1Gbps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>
    
    <!---------------------------------->
    <!--- Our Service section Start------>
    <!---------------------------------->
    <section class="our-service position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="../assets/images/our-service/isp.jpg" class="img-fluid"> 
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xxl-0 ps-xl-0 ps-lg-3 ps-md-3 ps-sm-3 ps-3">
                    <small class="fs-7 d-block">Our Service</small>
                    <h2 class="fs-2 text-black mb-0">Internet Service Provider</h2>
                    <p class="mb-0 fw-500 fs-7">
                        Premium Internet Solutions
                    </p>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">1:1 Bandwidth</span>
                        </li>
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">24/7 Customer Service</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 
    <!------------------------------>
    <!--- Our Service sectin End---->
    <!------------------------------>
    
    <!------------------------------>
    <!-- Pricing section Start------>
    <!------------------------------>
    <section class="pricing position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <a class="navbar-brand py-0 me-0" href="#"><img src="https://www.sengkedfiber.com/content/internet/images/logo.png" alt=""></a>
                    <br>
                    <br>
                    <br>
                    <h2 class="fs-2 pricing-head text-black mb-0 position-relative">Start From 199K IDR</h2>
                </div>
            </div>
            <div class="row plans">
                <div class="col-12 text-center">
                    <div class="form-check form-switch d-flex justify-content-center ps-0 align-items-center">
                        <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Monthly</label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Yearly</label>
                    </div>
                    <div class="save d-inline-block position-relative text-warning fw-500 fs-9 text-center">Save Up To 58%</div>
                </div>
            </div>
            <div class="row justify-content-center price-plan">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <div class="position-absolute badge bg-warning d-inline-block mx-auto">
                            Most Popular
                        </div>
                            <small class="fs-7 d-block text-warning text-center">Paket Internet H1</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">199K</sub><sup class="fs-6 position-absolute"> <del> 349 K</del></sup></h2>
                            <small class="fs-7 d-block text-center">Up To 25 Mbps</small>
                            <p class="fs-7 text-center fw-500">Benefit : </p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Modem</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Biaya Instalasi</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">IP Dynamic Private</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Bebas Kuota Tanpa FUP</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">24 Hours 7 Days Support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-hover-secondery text-capitalize">Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Pake Iternet H2</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">299K</sub><sup class="fs-6 position-absolute"> <del> 449 K</del></sup></h2>
                            <small class="fs-7 d-block text-center">Up To 35 Mbps</small>
                            <p class="fs-7 text-center fw-500">Benefit :</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Modem</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Biaya Instalasi</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">IP Dynamic Private</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Bebas Kuota Tanpa FUP</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">24 Hours 7 Days Support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-hover-secondery text-capitalize">Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Paket Internet H3</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">440k</sub><sup class="fs-6 position-absolute"> <del> 590 K</del></sup></h2>
                            <small class="fs-7 d-block text-center">Up To 45 Mbpss</small>
                            <p class="fs-7 text-center fw-500">Benefit :</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Modem</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Biaya Instalasi</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">IP Dynamic Private</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Bebas Kuota Tanpa FUP</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">24 Hours 7 Days Support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-hover-secondery text-capitalize">Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Paket Internet H4</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">690K</sub><sup class="fs-6 position-absolute"> <del> 840 K</del></sup></h2>
                            <small class="fs-7 d-block text-center">Up To 60 Mbps</small>
                            <p class="fs-7 text-center fw-500">Benefit :</p>
<ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Modem</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Free Biaya Instalasi</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">IP Dynamic Private</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Bebas Kuota Tanpa FUP</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">24 Hours 7 Days Support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-hover-secondery text-capitalize">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!-- Pricing section End-------->
    <!------------------------------>   

    <!------------------------------>
    <!-----Footer Start------------->
    <!------------------------------>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo-col">
                        <a href="#"><img src="https://www.as.net.id/wp-content/uploads/2020/04/logo-2982.png"></a>
                        <p class="blue-light mb-0 fs-7 fw-500">Since 2007 ADI SANGGORO Internet Broadband & Data Center started its service by developing divisions working in the provision of internet connections via wireless.</p>
                        <div class="callus text-white fw-500 fs-7">
                             Jln. Dr Semeru No 23E Bogor Tengah Bogor 16111, Indonesia
                            <div class="blue-light">Call us: <a href="#" class="text-warning fw-500 fs-7 text-decoration-none"> 0251-3100999 / 0251-8339929

</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Social</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Company</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="https://www.as.net.id/" target="_blank" >About</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Legal & Privacy</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="subscribe">
                        <h5 class="text-white">Subscribe</h5>
                        <p class="blue-light fw-500">Subscribe to get the latest news form us
                        </p>
                        <div class="input-group">
                            <input type="email" class="form-control br-15" placeholder="Enter email address" aria-label="Enter email address" aria-describedby="button-addon2">
                            <button class="btn btn-warning btn-hover-secondery ms-xxl-2 ms-xl-2 ls-lg-0 ms-md-0 ms-sm-0 ms-0"  type="button" id="button-addon2">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center blue-light  fw-500">@<span id="autodate">2023</span> - All Rights Reserved by <a href="https://adminmart.com/" class="blue-light text-decoration-none">adminmart.com</a> Dsitributed By <a href="https://themewagon.com" class="blue-light text-decoration-none">ThemeWagon</a></div>
        </div>
    </footer>
    <!------------------------------>
    <!-------Footer End------------->
    <!------------------------------>

    
    <script src="../dist/js/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/OwlCarousel-2/dist/owl.carousel.min.js"></script>
    <script src="../dist/js/custom.js"></script>

</body>
</html>