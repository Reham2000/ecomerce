<?php
session_start();
ob_start(); 
$style = "style.css";
$script="main.js";
$boot = "true";
include 'init.php';
?>

    <!-- For Loading Screen -->
    <div class="loading d-flex justify-content-center align-items-center">
        <div id="spinner" class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
          </div>
    </div>
    <!-- End Loading -->

    <!-- Start Header -->
    <header >
    <!-- Start Main-header -->
    <section style="padding: 30px 0 !important;" id="Main_header" class="py-2">
            <div class="container">
                <div class="row  align-items-center ">
    
                    <div class="col-md-2 brand_name">
                        <div class="logo">
                            <a href="#">OneTech</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form id="Main_head_form" class=" m-auto position-relative d-none d-md-block">
                            <input class="form-control" type="text" placeholder="Search For Products..." required>
                           
                            <button class="btnSubmit" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-3 cart_place">
                        <div style="justify-content: center;" class="wishlist_cart d-flex">
                            <div class="d-flex justify-content-center mr-5 align-items-center me-3 me-sm-5">
                                <div class="image">
                                    <img class="w-100" src="img/wishlist_cart/download.webp" alt="">
                                </div>
                                <div class="wishlist-info ms-3 text-end ">
                                    <a href="#" class="fs-5 d-block"><strong>wishlist</strong></a>
                                    <small>115</small>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="image position-relative">
                                    <img class="w-100" src="img/wishlist_cart/download (4).webp" alt="">
                                    <div class="cart-count">10</div>
                                </div>
                                <div class="cart-info ms-3 text-end ">
                                    <a href="cart.php" class="fs-5 d-block"><strong>Cart</strong></a>
                                    <small>$85</small>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
    <!-- End Main-header -->

    <!-- Start Main-Nav -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light">
        <div class="container ">
            <div id="category-bar" class="d-flex justify-content-center align-items-center position-relative">
                <span class="me-2"><i class="fas fa-bars bar-ico fs-5"></i></span>
                <span class="fs-5 fw-bold text-uppercase" href="#">Categories</span>
                <ul class="custom_list list-unstyled shadow ">
                    <li><a href="#">Computers & Laptops</a></li>
                    <li><a href="#">Cameras & Photos</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Smartphones & Tablets</a></li>
                    <li><a href="#">TV & Audio</a></li>
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Car Electronics</a></li>
                    <li><a href="#">Video Games & Consoles</a></li>
                </ul>
            </div>
            <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="none" aria-label="Toggle navigation">
                <span class="me-2 text-white fw-bold text-uppercase d-lg-none">Menu</span>
                <span><i class="fas fa-bars bar-ico text-white"></i></span>
            </button>
            <div class="collapse navbar-collapse w-100  justify-content-end" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="homeLink" class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a id="SuperLink" class="nav-link" href="#deals_featured">Super Deals</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a id="FeaturedLink" class="nav-link" href="#New_Arrival">New Arrival</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a id="PagesLink" class="nav-link" href="#">Pages <i class="fas fa-angle-down"></i></a>
                        <ul class="custom_list list-unstyled shadow ">
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="product.php">Product</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a id="blogLink" class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a id="contactLink" class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a id="LogoutLink" class="nav-link d-none" aria-current="page" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>    
    </nav>
    <div class="page-nav">
        <div class="container">
            <div class="collapse navbar-collapse w-100 mt-2  justify-content-end d-lg-none" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <form class="collapse-form position-relative ">
                        <input class="form-control" type="text" placeholder="Search For Products..." required>
                    </form>
                    <li class="nav-item">
                        <a id="homeLink" class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a id="SuperLink" class="nav-link" href="#deals_featured">Super Deals</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a id="FeaturedLink" class="nav-link" href="#New_Arrival">New Arrival</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a id="PagesLink" class="nav-link" href="#">Pages <i class="fas fa-angle-down"></i></a>
                        <ul class="custom_list list-unstyled shadow ">
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="product.php">Product</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a id="blogLink" class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a id="contactLink" class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a id="LogoutLink" class="nav-link d-none " aria-current="page" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Main-Nav -->

    <!-- Start Banner -->
    <section id = "banner" class="py-5">
        <div class="container">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="info ">
                        <h1>NEW ERA OF SMARTPHONES</h1>
                        <div class="mt-5">
                            <span class="text-decoration-line-through me-3 fs-3 fw-bold">$530</span>
                            <span class="text-danger fs-3 fw-bold">$460</span>
                        </div>
                        <strong class="d-block mb-4">Apple Iphone 6s</strong>
                        <a href="#" type="button" role="button" class="btn px-4 py-2 text-white fw-bold">Shop Now</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="w-100" src="img/xbanner_product.png.pagespeed.ic.8YoeI51pih.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <!-- UpButton -->
    <a id="btnUp" role="button" class="btn bg-primary  p-2 text-white" ><i class="fas fa-angle-up fs-5"></i> </a>

    </header>
    <!-- End Header -->

    <!-- Start characteristics -->
    <section id = "characteristics" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center p-3 ">
                                <div class="image">
                                    <img  src="img/characteristics/download.webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Free Delivery</strong>
                                    <small>from $50</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center  p-3">
                                <div class="image">
                                    <img  src="img/characteristics/download (1).webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Free Delivery</strong>
                                    <small>from $50</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center  p-3 ">
                                <div class="image">
                                    <img  src="img/characteristics/download (2).webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Free Delivery</strong>
                                    <small>from $50</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="item d-flex justify-content-lg-center justify-content-start align-items-center  p-3 ">
                                <div class="image">
                                    <img  src="img/characteristics/download (3).webp" alt="">
                                </div>
                                <div class="text ps-3">
                                    <strong class="d-block">Free Delivery</strong>
                                    <small>from $50</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End characteristics -->

    <!-- Start Deals Featured -->
    <section id="deals_featured" >
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="Deals_of_the_Week">
                        <h5>Deals of the Week</h5>
                        <div class="content  position-relative Deals_of_the_Week_Owl">

                            <div class="one px-2">
                                <div class="image my-4">
                                    <img class="w-100" src="img/deals-featured/xdeals.png.pagespeed.ic.nmhfwwkKMA.webp" alt="">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small>Headphone</small>
                                    <small>$300</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center fw-bold fs-4 mb-3">
                                    <span>Beoplay H7</span>
                                    <span class="text-danger">$225</span>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <small>Available: <strong>6</strong></small>
                                        <small>Already Sold: <strong>28</strong></small>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong class="d-block">Hurry Up</strong>
                                        <small>Offer ends in:</small>
                                    </div>
                                    <div id="countDown" class="d-flex justify-content-between align-items-center border border-dark border-2  rounded-2">
                                        <div class="hours m-1 text-center position-relative">
                                            <div id="hour" class="fw-bold fs-5">50</div>
                                            <small>Hours</small>
                                        </div>
                                        <div class="mins m-1 px-2 text-center position-relative border-start border-end border-dark">
                                            <div id="min" class="fw-bold fs-5">30</div>
                                            <small>Mins</small>
                                        </div>
                                        <div class="secs m-1 text-center position-relative">
                                            <div id="sec" class="fw-bold fs-5">01</div>
                                            <small>Secs</small>
                                        </div>
                                    
                                    </div>
                                    <div id="countDownEnd" class=" d-none">This Product not Available now.</div>
                                </div>
                            </div>

                            <div class="one px-2">
                                <div class="image my-4">
                                    <img class="w-100" src="img/deals-featured/xdeals.png.pagespeed.ic.nmhfwwkKMA.webp" alt="">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small>Headphone</small>
                                    <small>$300</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center fw-bold fs-4 mb-3">
                                    <span>Beoplay H7</span>
                                    <span class="text-danger">$225</span>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <small>Available: <strong>6</strong></small>
                                        <small>Already Sold: <strong>28</strong></small>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong class="d-block">Hurry Up</strong>
                                        <small>Offer ends in:</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border border-dark border-2  rounded-2">
                                        <div class="hours m-1 text-center position-relative">
                                            <div class="fw-bold fs-5">45</div>
                                            <small>Hours</small>
                                        </div>
                                        <div class="mins m-1 px-2 text-center position-relative border-start border-end border-dark">
                                            <div class="fw-bold fs-5">10</div>
                                            <small>Mins</small>
                                        </div>
                                        <div class="secs m-1 text-center position-relative">
                                            <div class="fw-bold fs-5">05</div>
                                            <small>Secs</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="one px-2">
                                <div class="image my-4">
                                    <img class="w-100" src="img/deals-featured/xdeals.png.pagespeed.ic.nmhfwwkKMA.webp" alt="">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small>Headphone</small>
                                    <small>$300</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center fw-bold fs-5 mb-3">
                                    <span>Beoplay H7</span>
                                    <span class="text-danger">$225</span>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <small>Available: <strong>6</strong></small>
                                        <small>Already Sold: <strong>28</strong></small>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong class="d-block">Hurry Up</strong>
                                        <small>Offer ends in:</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border border-dark border-2  rounded-2">
                                        <div class="hours m-1 text-center position-relative">
                                            <div class="fw-bold fs-5">45</div>
                                            <small>Hours</small>
                                        </div>
                                        <div class="mins m-1 px-2 text-center position-relative border-start border-end border-dark">
                                            <div class="fw-bold fs-5">10</div>
                                            <small>Mins</small>
                                        </div>
                                        <div class="secs m-1 text-center position-relative">
                                            <div class="fw-bold fs-5">05</div>
                                            <small>Secs</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <ul class="featurd_list list-unstyled d-flex align-items-center justify-content-start  mb-0">
                        <li class="active" data-content =".featured" >Featured</li>
                        <li  data-content =".Onsale">On Sale</li>
                        <li  data-content =".Best_Rated">Best Rated</li>
                    </ul>
                    <hr>
                    <div class="items-sections">
                        <div class="row g-4 featured">
                            <div class="col-md-3 col-sm-4 col-6  ">
                                <div class="item">
                                    <div class="image position-relative my-3">
                                        <img  src="img/deals-featured/xfeatured_1.png.pagespeed.ic.nzWvRNeKk3.webp" alt="">
                                        <div class="sell-offer bg-danger">-25%</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Headphone</small>
                                            <a class="pro_name mb-2">Huawei MediaPad</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6  ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/deals-featured/xfeatured_3.png.pagespeed.ic.wmJbCYIZcx.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">SmartWatch</small>
                                            <a class="pro_name mb-2">Sony MDRZX310W</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/deals-featured/xfeatured_6.png.pagespeed.ic.KkzNytvHVM.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Smartphone</small>
                                            <a class="pro_name mb-2">Samsung J330F</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/deals-featured/xdeals.png.pagespeed.ic.nmhfwwkKMA.webp" alt="">
                                        <div class="sell-offer">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Headphone</small>
                                            <a class="pro_name mb-2">Beoplay</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_2.jpg.pagespeed.ic.HKQA4qV2Mn.webp" alt="">
                                        <div class="sell-offer ">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Ipod</small>
                                            <a class="pro_name mb-2">Transcend T.Sonic</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                        <div class="sell-offer bg-danger">-25%</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Mouse</small>
                                            <a class="pro_name mb-2">Rapoo T8 White</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_8.jpg.pagespeed.ic.lAcp8-nlW0.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Camera</small>
                                            <a class="pro_name mb-2">Canon EF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="item">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_6.jpg.pagespeed.ic.K3dGMH41m4.webp" alt="">
                                        <div class="sell-offer">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Smartphone</small>
                                            <a class="pro_name mb-2">LUNA</a>
                                        </div>
                                    </div>
                                    <div class="Add-Cart ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="row g-4 Onsale ">
                            <div class="col-md-3 col-sm-4 col-6  ">
                                <div class="item">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xreview_3.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                                        <div class="sell-offer bg-danger">-25%</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Headphone</small>
                                            <a class="pro_name mb-2">Nomi Black White</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6  ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_3.jpg.pagespeed.ic.5huJuP7Vcc.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">SmartWatch</small>
                                            <a class="pro_name mb-2">Xiaomi Band 2...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_5.jpg.pagespeed.ic.o6B80wnRBW.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Smartphone</small>
                                            <a class="pro_name mb-2">Philips BT6900A</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_7.jpg.pagespeed.ic.CWzzc10GcH.webp" alt="">
                                        <div class="sell-offer">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Mouse</small>
                                            <a class="pro_name mb-2">Rapoo 7100p Gray</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_2.jpg.pagespeed.ic.HKQA4qV2Mn.webp" alt="">
                                        <div class="sell-offer ">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Ipod</small>
                                            <a class="pro_name mb-2">Transcend T.Sonic</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                        <div class="sell-offer bg-danger">-25%</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Mouse</small>
                                            <a class="pro_name mb-2">Rapoo T8 White</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_8.jpg.pagespeed.ic.lAcp8-nlW0.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Camera</small>
                                            <a class="pro_name mb-2">Canon EF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="item">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_6.jpg.pagespeed.ic.K3dGMH41m4.webp" alt="">
                                        <div class="sell-offer">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Smartphone</small>
                                            <a class="pro_name mb-2">LUNA Smartphone</a>
                                        </div>
                                    </div>
                                    <div class="Add-Cart ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="row g-4 Best_Rated">
                            <div class="col-md-3 col-sm-4 col-6  ">
                                <div class="item">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                        <div class="sell-offer bg-danger">-25%</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Headphone</small>
                                            <a class="pro_name mb-2">Nomi Black White</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6  ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_3.jpg.pagespeed.ic.5huJuP7Vcc.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">SmartWatch</small>
                                            <a class="pro_name mb-2">Xiaomi Band 2...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_5.jpg.pagespeed.ic.o6B80wnRBW.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Smartphone</small>
                                            <a class="pro_name mb-2">Philips BT6900A</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_7.jpg.pagespeed.ic.CWzzc10GcH.webp" alt="">
                                        <div class="sell-offer">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Mouse</small>
                                            <a class="pro_name mb-2">Rapoo 7100p Gray</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_2.jpg.pagespeed.ic.HKQA4qV2Mn.webp" alt="">
                                        <div class="sell-offer ">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Ipod</small>
                                            <a class="pro_name mb-2">Transcend T.Sonic</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                        <div class="sell-offer bg-danger">-25%</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Mouse</small>
                                            <a class="pro_name mb-2">Rapoo T8 White</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6 ">
                                <div class="item  ">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_8.jpg.pagespeed.ic.lAcp8-nlW0.webp" alt="">
                                        <div class="sell-offer d-none">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Camera</small>
                                            <a class="pro_name mb-2">Canon EF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="Add-Cart  ">
                                    <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="item">
                                    <div class="image position-relative my-3">
                                        <img  src="img/new-arrivals/xnew_6.jpg.pagespeed.ic.K3dGMH41m4.webp" alt="">
                                        <div class="sell-offer">New</div>
                                    </div>
                                    <div class="img-info text-center">
                                        <span>$357</span>
                                        <div class="price d-flex justify-content-between flex-column">
                                            <small class="me-2 ">Smartphone</small>
                                            <a class="pro_name mb-2">LUNA Smartphone</a>
                                        </div>
                                    </div>
                                    <div class="Add-Cart ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Deals Featured -->

    <!-- Start Category -->
    <section id="category" class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-3">
                    <h2 class="mb-3">Popular Categories</h2>
                    <a href="#" class="btn btn-info text-white fw-bold py-2 px-3" role="button" type="button">Full Categories</a>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col p-3">
                            <div class="item text-center">
                                <img src="img/category/xpopular_1.png.pagespeed.ic.iakLDOhA7r.webp" alt="">
                                <p class="mb-0 mt-2">Smartphones & Tablets</p>
                            </div>
                        </div>

                        <div class="col p-3">
                            <div class="item text-center">
                                <img src="img/category/xpopular_2.png.pagespeed.ic.2dscQlBLuy.webp" alt="">
                                <p class="mb-0 mt-2">Computers & Laptops</p>
                            </div>
                        </div>

                        <div class="col p-3">
                            <div class="item text-center">
                                <img src="img/category/xpopular_3.png.pagespeed.ic.0uu5Dfk2Gh.webp" alt="">
                                <p class="mb-0 mt-2">Gadgets</p>
                            </div>
                        </div>

                        <div class="col p-3">
                            <div class="item text-center">
                                <img src="img/category/xpopular_4.png.pagespeed.ic.2oShzKU_RW.webp" alt="">
                                <p class="mb-0 mt-2">Video Games & Consoles</p>
                            </div>
                        </div>

                        <div class="col p-3">
                            <div class="item text-center">
                                <img src="img/category/xpopular_5.png.pagespeed.ic.N9JFcEegtU.webp" alt="">
                                <p class="mb-0 mt-2">Accessories</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Category -->

    <!-- Start Mac -->
    <section id="mac" class="py-5 bg-white">
        <div class="container owl-carousel ">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="item">
                        <div class="mb-5">
                            <span>Laptops</span>
                            <h2 class="fw-bold">MacBook Air 13</h2>
                            <p >Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                            <div class="stars d-flex justify-content-start align-items-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <a role="button" type="button" class="btn  text-white fw-bold">Explore</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <img class="w-100" src="img/xbanner_2_product.png.pagespeed.ic.26wMfooIqr.webp" alt=""> 
                </div>
            </div>
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="item">
                        <div class="mb-5">
                            <span>Laptops</span>
                            <h2 class="fw-bold">MacBook Air 13</h2>
                            <p >Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                            <div class="stars d-flex justify-content-start align-items-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <button class="btn text-white fw-bold">Explore</button>
                    </div>
                </div>
                <div class="col-md-7">
                    <img class="w-100" src="img/xbanner_2_product.png.pagespeed.ic.26wMfooIqr.webp" alt=""> 
                </div>
            </div>
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="item">
                        <div class="mb-5">
                            <span>Laptops</span>
                            <h2 class="fw-bold">MacBook Air 13</h2>
                            <p >Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                            <div class="stars d-flex justify-content-start align-items-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <button class="btn text-white fw-bold">Explore</button>
                    </div>
                </div>
                <div class="col-md-7">
                    <img class="w-100" src="img/xbanner_2_product.png.pagespeed.ic.26wMfooIqr.webp" alt=""> 
                </div>
            </div>

        </div>
    </section>
    <!-- End Mac -->

    <!-- Start Hot New Arrival -->
    <section id="New_Arrival" class="py-5">
        <div class="container">
            <div class="seller-head d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Hot New Arrival</h2>
                <ul class="featurd_list list-unstyled d-flex align-items-center justify-content-start  mb-0">
                    <li class="active" data-content =".featured" >Featured</li>
                    <li  data-content =".Onsale">Audio & Video</li>
                    <li  data-content =".Best_Rated">Laptops & Computers</li>
                </ul>
            </div>
            <hr>
            <div class="items-sections">
                <div class="row g-4 featured">
                    <div class="col-lg-9 ">
                        <div class="items">
                            <div class="row g-4">
                                <div class="col-md-3 col-sm-4 col-6  ">
                                    <div class="item">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xreview_3.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Headphone</small>
                                                <a class="pro_name mb-2">Nomi Black White</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6  ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_3.jpg.pagespeed.ic.5huJuP7Vcc.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">SmartWatch</small>
                                                <a class="pro_name mb-2">Xiaomi Band 2...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_5.jpg.pagespeed.ic.o6B80wnRBW.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Smartphone</small>
                                                <a class="pro_name mb-2">Philips BT6900A</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_7.jpg.pagespeed.ic.CWzzc10GcH.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Mouse</small>
                                                <a class="pro_name mb-2">Rapoo 7100p Gray</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_2.jpg.pagespeed.ic.HKQA4qV2Mn.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Ipod</small>
                                                <a class="pro_name mb-2">Transcend T.Sonic</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Mouse</small>
                                                <a class="pro_name mb-2">Rapoo T8 White</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_8.jpg.pagespeed.ic.lAcp8-nlW0.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Camera</small>
                                                <a class="pro_name mb-2">Canon EF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="item">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_6.jpg.pagespeed.ic.K3dGMH41m4.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Smartphone</small>
                                                <a class="pro_name mb-2">LUNA Smartphone</a>
                                            </div>
                                        </div>
                                        <div class="Add-Cart ">
                                            <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="item  bg-white rounded-1 p-4 position-relative">
                            <div class="image position-relative my-3">
                                <img class="w-100" src="img/new-arrivals/xnew_single.png.pagespeed.ic.VpcKBxUE65.webp" alt="">
                                <div class="sell-offer">New</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Smartphone</small>
                                <div class="price d-flex justify-content-between">
                                    <a class="pro_name mb-2">LUNA Smartphone</a>
                                    <span>$357</span>
                                </div>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="Add-Cart">
                                <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row g-4 Onsale ">
                    <div class="col-lg-9 ">
                        <div class="items">
                            <div class="row g-4">
                                <div class="col-md-3 col-sm-4 col-6  ">
                                    <div class="item">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xreview_3.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Headphone</small>
                                                <a class="pro_name mb-2">Nomi Black White</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6  ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_3.jpg.pagespeed.ic.5huJuP7Vcc.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">SmartWatch</small>
                                                <a class="pro_name mb-2">Xiaomi Band 2...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_5.jpg.pagespeed.ic.o6B80wnRBW.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Smartphone</small>
                                                <a class="pro_name mb-2">Philips BT6900A</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_7.jpg.pagespeed.ic.CWzzc10GcH.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Mouse</small>
                                                <a class="pro_name mb-2">Rapoo 7100p Gray</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_2.jpg.pagespeed.ic.HKQA4qV2Mn.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Ipod</small>
                                                <a class="pro_name mb-2">Transcend T.Sonic</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Mouse</small>
                                                <a class="pro_name mb-2">Rapoo T8 White</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_8.jpg.pagespeed.ic.lAcp8-nlW0.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Camera</small>
                                                <a class="pro_name mb-2">Canon EF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="item">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_6.jpg.pagespeed.ic.K3dGMH41m4.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Smartphone</small>
                                                <a class="pro_name mb-2">LUNA Smartphone</a>
                                            </div>
                                        </div>
                                        <div class="Add-Cart ">
                                            <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="item  bg-white rounded-1 p-4 position-relative">
                            <div class="image position-relative my-3">
                                <img class="w-100" src="img/new-arrivals/xnew_single.png.pagespeed.ic.VpcKBxUE65.webp" alt="">
                                <div class="sell-offer">New</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Smartphone</small>
                                <div class="price d-flex justify-content-between">
                                    <a class="pro_name mb-2">LUNA Smartphone</a>
                                    <span>$357</span>
                                </div>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="Add-Cart">
                                <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row g-4 Best_Rated ">
                    <div class="col-lg-9 ">
                        <div class="items">
                            <div class="row g-4">
                                <div class="col-md-3 col-sm-4 col-6  ">
                                    <div class="item">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xreview_3.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Headphone</small>
                                                <a class="pro_name mb-2">Nomi Black White</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6  ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_3.jpg.pagespeed.ic.5huJuP7Vcc.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">SmartWatch</small>
                                                <a class="pro_name mb-2">Xiaomi Band 2...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_5.jpg.pagespeed.ic.o6B80wnRBW.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Smartphone</small>
                                                <a class="pro_name mb-2">Philips BT6900A</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_7.jpg.pagespeed.ic.CWzzc10GcH.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Mouse</small>
                                                <a class="pro_name mb-2">Rapoo 7100p Gray</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_2.jpg.pagespeed.ic.HKQA4qV2Mn.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Ipod</small>
                                                <a class="pro_name mb-2">Transcend T.Sonic</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_4.jpg.pagespeed.ic.YvShdYiv_G.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Mouse</small>
                                                <a class="pro_name mb-2">Rapoo T8 White</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6 ">
                                    <div class="item  ">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_8.jpg.pagespeed.ic.lAcp8-nlW0.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Camera</small>
                                                <a class="pro_name mb-2">Canon EF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Add-Cart  ">
                                        <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                    </div>
                                </div>
    
                                <div class="col-md-3 col-sm-4 col-6">
                                    <div class="item">
                                        <div class="image position-relative my-3">
                                            <img  src="img/new-arrivals/xnew_6.jpg.pagespeed.ic.K3dGMH41m4.webp" alt="">
                                            <div class="sell-offer">New</div>
                                        </div>
                                        <div class="img-info text-center">
                                            <span>$357</span>
                                            <div class="price d-flex justify-content-between flex-column">
                                                <small class="me-2 ">Smartphone</small>
                                                <a class="pro_name mb-2">LUNA Smartphone</a>
                                            </div>
                                        </div>
                                        <div class="Add-Cart ">
                                            <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="item  bg-white rounded-1 p-4 position-relative">
                            <div class="image position-relative my-3">
                                <img class="w-100" src="img/new-arrivals/xnew_single.png.pagespeed.ic.VpcKBxUE65.webp" alt="">
                                <div class="sell-offer">New</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Smartphone</small>
                                <div class="price d-flex justify-content-between">
                                    <a class="pro_name mb-2">LUNA Smartphone</a>
                                    <span>$357</span>
                                </div>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="Add-Cart">
                                <a type="button" role="button" class="btn btn-info w-100 text-white fw-bold" href="#">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Hot New Arrival -->

    <!-- Start Best-Seller -->
    <section id="best_seller" class="py-5 ">
        <div class="container">
            <div class="seller-head d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Hot Best Seller</h2>
                <ul class="featurd_list list-unstyled d-flex align-items-center justify-content-start  mb-0">
                    <li class="active" data-content =".featured" >Featured</li>
                    <li  data-content =".Onsale">On Sale</li>
                    <li  data-content =".Best_Rated">Best Rated</li>
                </ul>
            </div>
            <hr>
            <div class="items-sections">

                <div class="row g-4 featured">

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image  me-3">
                                <img class="w-100" src="img/best-seller/xbest_1.png.pagespeed.ic.Xl5pJgNFuc.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Xiaomi Redmi Note 4</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image  me-3">
                                <img class="w-100" src="img/best-seller/xbest_5.png.pagespeed.ic.HTKJQ0sBzB.webp" alt="">
                                <div class="sell-offer bg-danger ">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">headphone</small>
                                <a class="pro_name mb-2">Beoplay H7</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav ">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image  me-3">
                                <img class="w-100" src="img/best-seller/xview_1.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="Item_img">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Headphone</small>
                                <a class="pro_name mb-2">Nomi Black White</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image  me-3">
                                <img class="w-100" src="img/best-seller/xbest_2.png.pagespeed.ic.GT_naP4XUu.webp" alt="">
                                <div class="sell-offer bg-danger d-none ">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Headphone</small>
                                <a class="pro_name mb-2">Samsung J730F...</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav d-none">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image  me-3">
                                <img class="w-100" src="img/best-seller/xview_3.jpg.pagespeed.ic.HLpVYh24-I.webp" alt="">
                                <div class="sell-offer bg-danger d-none">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Samsung Charm Gold</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav d-none">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image  me-3">
                                <img class="w-100" src="img/best-seller/xview_4.jpg.pagespeed.ic.gcfPB3V9Wh.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Huawei MediaPad T3</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row g-4 Onsale">

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xbest_1.png.pagespeed.ic.Xl5pJgNFuc.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Xiaomi Redmi Note 4</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xbest_5.png.pagespeed.ic.HTKJQ0sBzB.webp" alt="">
                                <div class="sell-offer bg-danger ">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">headphone</small>
                                <a class="pro_name mb-2">Beoplay H7</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav ">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xview_1.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Headphone</small>
                                <a class="pro_name mb-2">Nomi Black White</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xbest_2.png.pagespeed.ic.GT_naP4XUu.webp" alt="">
                                <div class="sell-offer bg-danger d-none">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Headphone</small>
                                <a class="pro_name mb-2">Samsung J730F...</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav d-none">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xview_3.jpg.pagespeed.ic.HLpVYh24-I.webp" alt="">
                                <div class="sell-offer bg-danger d-none">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Samsung Charm Gold</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav d-none">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xview_4.jpg.pagespeed.ic.gcfPB3V9Wh.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Huawei MediaPad T3</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row g-4 Best_Rated">

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xbest_1.png.pagespeed.ic.Xl5pJgNFuc.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Xiaomi Redmi Note 4</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xbest_5.png.pagespeed.ic.HTKJQ0sBzB.webp" alt="">
                                <div class="sell-offer bg-danger ">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">headphone</small>
                                <a class="pro_name mb-2">Beoplay H7</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav ">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xview_1.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Headphone</small>
                                <a class="pro_name mb-2">Nomi Black White</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xbest_2.png.pagespeed.ic.GT_naP4XUu.webp" alt="">
                                <div class="sell-offer bg-danger d-none">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Headphone</small>
                                <a class="pro_name mb-2">Samsung J730F...</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav d-none">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xview_3.jpg.pagespeed.ic.HLpVYh24-I.webp" alt="">
                                <div class="sell-offer bg-danger d-none">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Samsung Charm Gold</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav d-none">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item position-relative d-flex justify-content-lg-center justify-content-start align-items-center bg-white rounded-1 p-4 position-relative">
                            <div class="image me-3">
                                <img class="w-100" src="img/best-seller/xview_4.jpg.pagespeed.ic.gcfPB3V9Wh.webp" alt="">
                                <div class="sell-offer bg-danger">-25%</div>
                            </div>
                            <div class="img-info">
                                <small class="me-2 ">Phone</small>
                                <a class="pro_name mb-2">Huawei MediaPad T3</a>
                                <div class="stars d-flex justify-content-start align-items-center mb-3">
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star me-1"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="price d-flex">
                                    <strong class="text-danger me-2">$355</strong>
                                    <small class="text-decoration-line-through">$450</small>
                                </div>
                            </div>
                            <div class="seller-fav">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Best-Seller -->

    <!-- Start Trending -->
    <section id="trending" class="py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-4">
                    <div class="item shadow">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-8">
                                <h3 class="h5">Trends 2018</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                            </div>
                            <div class="col-4">
                                <img class="w-100" src="img/trending/xadv_1.png.pagespeed.ic.ecBWb3SJqG.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item shadow">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-8">
                                <h3 class="h5">Trends 2018</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                            </div>
                            <div class="col-4">
                                <img class="w-100" src="img/trending/xadv_2.png.pagespeed.ic.JgJKs9KYy_.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item shadow">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-8">
                                <h3 class="h5">Trends 2018</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                            </div>
                            <div class="col-4">
                                <img class="w-100" src="img/trending/xadv_3.png.pagespeed.ic.8YIssqGZh0.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trending -->

    <!-- Start Trends -->
    <section id="trends" class="py-5 ">
        <div class="overlay"></div>
        <div class="container position-relative">
            <h2 class=" mb-3  fw-bold">Trends in 2021</h2>
            <hr>
            <div class="row g-4 ">
                <div class="content trends">
                    <div class="col-md-3">
                        <div class="item p-3">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                    <li><i class="fas fa-heart"></i></li>
                                </ul>
                            </div>
                            <img  src="img/trending/xview_2.jpg.pagespeed.ic.C2lAFOmOFR.webp" alt="">
                            <div class="info mt-4">
                                <span>Smartphone</span>
                                <div class="price d-flex justify-content-between align-items-center">
                                    <span>Jump White</span>
                                    <span>$379</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item p-3">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                    <li><i class="fas fa-heart"></i></li>
                                </ul>
                            </div>
                            <img  src="img/trending/xtrends_2.jpg.pagespeed.ic.qX9onP8wVn.webp" alt="">
                            <div class="info mt-4">
                                <span>Smartphone</span>
                                <div class="price d-flex justify-content-between align-items-center">
                                    <span>Jump White</span>
                                    <span>$379</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item p-3">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                    <li><i class="fas fa-heart"></i></li>
                                </ul>
                            </div>
                            <img  src="img/trending/xview_4.jpg.pagespeed.ic.gcfPB3V9Wh.webp" alt="">
                            <div class="info mt-4">
                                <span>Smartphone</span>
                                <div class="price d-flex justify-content-between align-items-center">
                                    <span>Jump White</span>
                                    <span>$379</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item p-3">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                    <li><i class="fas fa-heart"></i></li>
                                </ul>
                            </div>
                            <img   src="img/trending/xview_3.jpg.pagespeed.ic.HLpVYh24-I.webp" alt="">
                            <div class="info mt-4">
                                <span>Smartphone</span>
                                <div class="price d-flex justify-content-between align-items-center">
                                    <span>Jump White</span>
                                    <span>$379</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item p-3">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                    <li><i class="fas fa-heart"></i></li>
                                </ul>
                            </div>
                            <img   src="img/trending/xview_1.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                            <div class="info mt-4">
                                <span>Smartphone</span>
                                <div class="price d-flex justify-content-between align-items-center">
                                    <span>Jump White</span>
                                    <span>$379</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </section>
    <!-- End Trends -->

    <!-- Start Latest_Reviews -->
    <section id="Latest_Reviews" class="py-5">
        <div class="container">
            <h2 class="h3 mb-3  fw-bold">Latest Reviews</h2>
            <hr>
            <div class="row g-4 position-relative Latest_Reviews_owl">
                
                <div class="col">
                    <div class="item p-3 text-center">
                        <img  src="img/recently-viewed/xview_4.jpg.pagespeed.ic.gcfPB3V9Wh.webp" alt="">
                        <div class="info mt-3 ">
                            <h3 class="h6 fw-bold">Huawei MediaPad</h3>
                            <div class="stars d-flex justify-content-center align-items-center mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">2 days ago</span>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque excepturi consectetur ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="item p-3 text-center ">
                        <img  src="img/recently-viewed/xview_3.jpg.pagespeed.ic.HLpVYh24-I.webp" alt="">
                        <div class="info mt-3">
                            <h3 class="h6 fw-bold">Samsung J730F</h3>
                            <div class="stars d-flex justify-content-center align-items-center mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">2 days ago</span>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque excepturi consectetur ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="item p-3  text-center">
                        <img  src="img/recently-viewed/xview_2.jpg.pagespeed.ic.C2lAFOmOFR.webp" alt="">
                        <div class="info mt-3">
                            <h3 class="h6 fw-bold">LUNA Smartphone</h3>
                            <div class="stars d-flex justify-content-center align-items-center mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">2 days ago</span>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque excepturi consectetur ducimus.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="item p-3  text-center">
                        <img  src="img/recently-viewed/xview_5.jpg.pagespeed.ic.LXZD3f2D0h.webp" alt="">
                        <div class="info mt-3">
                            <h3 class="h6 fw-bold">Sony PS4 Slim</h3>
                            <div class="stars d-flex justify-content-center align-items-center mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">2 days ago</span>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque excepturi consectetur ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="item p-3  text-center">
                        <img  src="img/recently-viewed/xview_6.jpg.pagespeed.ic.A0_NjsZwto.webp" alt="">
                        <div class="info mt-3">
                            <h3 class="h6 fw-bold">Speedlink</h3>
                            <div class="stars d-flex justify-content-center align-items-center mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">2 days ago</span>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque excepturi consectetur ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="item p-3  text-center">
                        <img  src="img/recently-viewed/xview_1.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                        <div class="info mt-3">
                            <h3 class="h6 fw-bold">Beoplay H4</h3>
                            <div class="stars d-flex justify-content-center align-items-center mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2">2 days ago</span>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque excepturi consectetur ducimus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recently Viewed -->
    
    <!-- Start Recently Viewed -->
    <section id="recently_viewed" class="py-5">
        <div class="container">
            <h2 class="h3 mb-3  fw-bold">Recently Viewed</h2>
            <hr>
            <div class="row g-4">
                <div class="content recently_viewed_owl position-relative">

                    <div class="col">
                        <div class="item p-3 ">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                </ul>
                            </div>
                            <img  src="img/recently-viewed/xview_4.jpg.pagespeed.ic.gcfPB3V9Wh.webp" alt="">
                            <div class="info mt-4">
                                <div class="price d-flex justify-content-center flex-column align-items-center">
                                    <span>$379</span>
                                    <a href="#">Huawei MediaPad</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="item p-3 ">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li class="bg-danger">-25%</li>
                                </ul>
                            </div>
                            <img  src="img/recently-viewed/xview_3.jpg.pagespeed.ic.HLpVYh24-I.webp" alt="">
                            <div class="info mt-4">
                                <div class="price d-flex justify-content-center flex-column align-items-center">
                                    <div>
                                        <span class="text-danger">$250</span>
                                        <span class="offer text-secondary text-decoration-line-through" >$300</span>
                                    </div>
                                    <a href="#">Samsung J730F</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="item p-3 ">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                </ul>
                            </div>
                            <img  src="img/recently-viewed/xview_2.jpg.pagespeed.ic.C2lAFOmOFR.webp" alt="">
                            <div class="info mt-4">
                                <div class="price d-flex justify-content-center flex-column align-items-center">
                                    <span>$379</span>
                                    <a href="#">LUNA Smartphone</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="item p-3 ">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li class="bg-danger">-25%</li>
                                </ul>
                            </div>
                            <img  src="img/recently-viewed/xview_1.jpg.pagespeed.ic.c7PizLSOMV.webp" alt="">
                            <div class="info mt-4">
                                <div class="price d-flex justify-content-center flex-column align-items-center">
                                    <div>
                                        <span class="text-danger">$225</span>
                                        <span class="offer text-secondary text-decoration-line-through" >$300</span>
                                    </div>
                                    <a href="#">Beoplay H4</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="item p-3 ">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li>new</li>
                                </ul>
                            </div>
                            <img  src="img/recently-viewed/xview_6.jpg.pagespeed.ic.A0_NjsZwto.webp" alt="">
                            <div class="info mt-4">
                                <div class="price d-flex justify-content-center flex-column align-items-center">
                                    <span>$375</span>
                                    <a href="#">Speedlink</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="item p-3 ">
                            <div class="new-fav ">
                                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                                    <li class="bg-danger">-25%</li>
                                </ul>
                            </div>
                            <img  src="img/recently-viewed/xview_5.jpg.pagespeed.ic.LXZD3f2D0h.webp" alt="">
                            <div class="info mt-4">
                                <div class="price d-flex justify-content-center flex-column align-items-center">
                                    <div>
                                        <span class="text-danger">$225</span>
                                        <span class="offer text-secondary text-decoration-line-through" >$300</span>
                                    </div>
                                    <a href="#">Sony PS4 Slim</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Recently Viewed -->

    <!-- Start Brand -->
    <section id="brand" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-content  brand-owl  ">
                        <img src="img/brand/xbrands_1.jpg.pagespeed.ic.1nM7wgM6yq.webp" alt="">
                        <img src="img/brand/xbrands_2.jpg.pagespeed.ic.aGWd17n_6c.webp" alt="">
                        <img src="img/brand/xbrands_3.jpg.pagespeed.ic.qRuw2zePgn.webp" alt="">
                        <img src="img/brand/xbrands_4.jpg.pagespeed.ic.XORj7-7yxR.webp" alt="">
                        <img src="img/brand/xbrands_5.jpg.pagespeed.ic.ugJTUVZ99O.webp" alt="">
                        <img src="img/brand/xbrands_6.jpg.pagespeed.ic.YeinomSK6w.webp" alt="">
                        <img src="img/brand/xbrands_7.jpg.pagespeed.ic.CRMxw_h7rx.webp" alt="">
                        <img src="img/brand/xbrands_8.jpg.pagespeed.ic.kERsDDzwQK.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Brand -->

    <!-- Start Subscribe -->
    <section id="subscribe" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="item d-flex justify-content-center">
                            <div class="img-sub me-4">
                                <img src="img/telegram.webp" alt="">
                            </div>
                            <div class="text-sub">
                                <h3 class="h5 fw-bold">Sign up for Newsletter</h3>
                                <p class="mb-0">...and receive %20 coupon for first shopping.</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form id="subscrib_form">
                        <input id="userSubEmail" class="form-control" type="email" name="userSubEmail"  placeholder="Enter Your Email Adress">
                        <p class=" mt-2 d-none text-danger" id="userSubEmailReq">Email is invalid.</p>
                        <button id="btnSubEmail" class="btn text-white btn-info" type="submit" disabled>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe -->

    <!-- Start Footer -->
    <footer class="pt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="item">
                        <div class="logo mb-4">
                            <a href="#">OneTech</a>
                        </div>
                        <div class="footer_title mb-2">Got Question? Call Us 24/7</div>
                        <div class="footer_phone mb-2">+38 068 005 3570</div>
                        <div class="footer_email mb-2">omarmokhtar363@gmail.com</div>
                        <div class="footer_contact_text mb-3">17 Princess Road, London Grester London NW18JR, UK</div>
                        <div class="footer_social d-flex">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="item">
                        <h3 class="h6 mb-3">Find it Fast</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Car Electronics</a></li>
                            <li><a href="#">Video Games & Consoles</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item">
                        <h3 class="h6 mb-3">Customer Care</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Copyright  -->
    <div class="copyright py-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <p class="mb-0">Copyright &copy;2021 All rights reserved | This template is made by <a class="triple" href="#">Triple-O</a> </p>
                </div>
                <div class="col-md-4">
                    <div class="pay ">
                        <ul class="list-unstyled d-flex justify-content-md-end mb-0 ">
                            <li><a href="#" class="me-3"><img src="img/footer/footer1.webp" alt=""></a></li>
                            <li><a href="#" class="me-3"><img src="img/footer/footer2.webp" alt=""></a></li>
                            <li><a href="#" class="me-3"><img src="img/footer/footer3.webp" alt=""></a></li>
                            <li><a href="#" ><img src="img/footer/footer4.webp" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright  -->

<?php 
require './includes/template/footer.php';
?>