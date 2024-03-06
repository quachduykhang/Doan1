
    
       
                    
              
       

            <!-- ====== right-sidebar-area-start================================ -->
            <div class="blog-siderbar-area pt-115">
                <div class="right-sidebar-area">
                    <div class="container">
                        <div class="row">
                        <div id="result">
            <!-- Dữ liệu từ API sẽ được hiển thị ở đây -->
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var xhr = new XMLHttpRequest();

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var responseData = JSON.parse(xhr.responseText);
                            displayData(responseData);
                        } else {
                            console.error('Error:', xhr.status, xhr.statusText);
                        }
                    }
                };

                xhr.open("GET", "http://localhost:3000/api/Tintuc/read.php", true);
                xhr.send();
            });

            // Hàm xử lý dữ liệu và hiển thị
            function displayData(data) {
                var resultDiv = document.getElementById("result");

                // Hiển thị dữ liệu trong div với id "result"
                data.data.forEach(function (item) {
                    resultDiv.innerHTML += `
                            <div class="col-xl-9  col-lg-9  col-md-12  col-sm- col-">
                                <div class="blog-rs-post single-blog mt-2 pr-40">
                                    <div class="row">
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img mb-50">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="images/img-tintuc/${item.Hinhanh}" alt="">
                                                    </a>
                                                </div><!-- /blog-img -->
                                                <div class="single-blog-content bg-white pt-25 pr-20">
                                                    <ul class="single-blog-info d-sm-flex mb-15">
                                                        <li class="date pr-25 mt-10">
                                                            <a href="#" class="text-uppercase gray-color2 hvr font500">
                                                                <span class="pr-1 theme-color"><i class="fas fa-calendar-alt"></i> </span>

                                                                <span> ${item.Ngay}</span>
                                                            </a>
                                                        </li>
                                                        <li class="comment pr-25 mt-10">
                                                            <a href="#" class="text-uppercase gray-color2 hvr font500">
                                                                <span class="pr-1 theme-color"><i class="fas fa-user"></i></span>
                                                                <span>${item.Tennv}</span>
                                                            </a>
                                                        </li>
                                                        <li class="comment mt-10">
                                                            <a href="#" class="text-uppercase gray-color2 hvr font500">
                                                                <span class="pr-1 theme-color"><i class="fas fa-comment"></i></span>
                                                                <span>${item.luotxem}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h4 class="font500 blog-title-1"><a class="pb-2 d-block" href="blog-details.html">${item.Tieude}</a></h4>
                                                    <p class="pb-1 gray-color2">
                                                    ${item.Mota}
                                                    </p>
                                                    <a href="blog-details.html" class="d-inline-block text-capitalize primary-color hvr font500">Read more...</a>
                                                </div><!-- /single-blog-content -->
                                            </div>
                                        </div><!-- /col -->
                                        
                                        `;
                });
            }
        </script>
    </div>     
                                               
                                       
                                                                
                                                       
                                    </div><!-- /row -->
                                </div><!-- blog-rs-left -->
                                <div class="basic-pagination mb-100">
                                    <nav class="pagination-page" aria-label="Page navigation example">
                                        <ul class="pagination align-items-center">
                                            <li class="page-item">
                                                <a class="page-link" href="blog.html"><i class="fas fa-angle-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="blog.html">1</a></li>
                                            <li class="page-item"><a class="page-link" href="blog.html">2</a></li>
                                            <li class="page-item"><a class="page-link" href="blog.html">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="blog.html"><i class="fas fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-3  col-lg-3  col-md-12  col-sm-12 col-12 pl-lg-0">
                                    <div class="rs-right panel">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-3 px-lg-0">
                                                <div class="sidebar-widget mb-40">
                                                    <h4 class="pb-10 mb-30 font500 sidebar-title position-relative">Search</h4>
                                                    <div class="blog-search position-relative">
                                                        <input class="form-control theme-color" type="text" placeholder="Search ...">
                                                        <a class="position-absolute gray-color2" href="#"><span><i class="far fa-search"></i></span></a>
                                                    </div>
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- /col -->
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 px-3 px-lg-0">
                                                <div class="sidebar-widget mb-30">
                                                    <h4 class="pb-10 mb-25 font500 sidebar-title position-relative">Categories</h4>
                                                    <ul>
                                                        <li class="pb-20 d-block"><a href="blog.html">Accessories</a> <span class="gray-color pl-1">(2)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Floor</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">Outdoor</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="pb-20 d-block"><a href="blog.html">Clothing</a> <span class="gray-color pl-1">(3)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Man</a></li>
                                                                <li><a class="pb-15 d-block gray-color2" href="blog-details.html">Women</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">children</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="pb-20 d-block"><a href="blog.html">Interior</a> <span class="gray-color pl-1">(3)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Man</a></li>
                                                                <li><a class="pb-15 d-block gray-color2" href="blog-details.html">Women</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">children</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="pb-20 d-block"><a href="blog.html">Lights</a> <span class="gray-color pl-1">(4)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Bathroom Lights</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">Ceiling lights</a></li>
                                                                <li><a class="pb-15 pt-2 d-block gray-color2" href="blog-details.html">Tables lamp</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">Wall lights</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="pb-20 d-block"><a href="blog.html">Uncategorized</a> <span class="gray-color pl-1">(3)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Man</a></li>
                                                                <li><a class="pb-15 d-block gray-color2" href="blog-details.html">Women</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">children</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="pb-20 d-block"><a href="blog.html">Wheel</a> <span class="gray-color pl-1">(3)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Man</a></li>
                                                                <li><a class="pb-15 d-block gray-color2" href="blog-details.html">Women</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">children</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="pb-20 d-block"><a href="blog.html">Tires</a> <span class="gray-color pl-1">(4)</span>
                                                            <span class="accordion"></span>
                                                            <ul class="panel bg-transparent over-hidden">
                                                                <li><a class="pb-15 pt-20 d-block gray-color2" href="blog-details.html">Bathroom Lights</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">Ceiling lights</a></li>
                                                                <li><a class="pb-15 pt-2 d-block gray-color2" href="blog-details.html">Tables lamp</a></li>
                                                                <li><a class="pb-2 d-block gray-color2" href="blog-details.html">Wall lights</a></li>
                                                            </ul>
                                                        </li> 
                                                    </ul>
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- /col -->
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 px-3 px-lg-0">
                                                <div class="sidebar-widget mb-50">
                                                    <h4 class="pb-10 mb-30 font500 sidebar-title position-relative">Recent Posts</h4>
                                                    <ul class="recent-post">
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="images/blog/blog-page/propular-post-img1.jpg" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html" class="primary-color font600">Adipisci Fugiat ea quod iste voluptate numquam</a>
                                                                </h6>
                                                                <span>May 23, 2020</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="images/blog/blog-page/propular-post-img2.jpg" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html" class="primary-color font600">Fugiat quod iste adipisci voluptate numquam</a>
                                                                </h6>
                                                                <span>June 24, 2020</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="images/blog/blog-page/propular-post-img3.jpg" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html" class="primary-color font600">Numquam Fugiat ea quod iste adipisci voluptate</a>
                                                                </h6>
                                                                <span>Aug 26, 2020</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="images/blog/blog-page/propular-post-img4.jpg" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html" class="primary-color font600">APL Logistics seeks to be a premier, profitable</a>
                                                                </h6>
                                                                <span>June 24, 2020</span>
                                                            </div>
                                                        </li>
                                                    </ul>  
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- /col -->
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 px-3 px-lg-0">
                                                <div class="sidebar-widget mb-40">
                                                    <h4 class="pb-10 mb-30 font500 sidebar-title position-relative">Tags post</h4>
                                                    <ul class="search-tag">
                                                        <li><a href="blog-details.html">product Store</a></li>
                                                        <li><a href="blog-details.html">Living room</a></li>
                                                        <li><a href="blog-details.html">Home Accessories</a></li>
                                                        <li><a href="blog-details.html">Lighting</a></li>
                                                        <li><a href="blog-details.html">Easy Chair</a></li>
                                                        <li><a href="blog-details.html">Bathroom</a></li>
                                                        <li><a href="blog-details.html">Office</a></li>
                                                        <li><a href="blog-details.html">Clothing</a></li>
                                                        <li><a href="blog-details.html">Chairs</a></li>
                                                        <li><a href="blog-details.html">fashion</a></li>
                                                        <li><a href="blog-details.html">Interior</a></li>
                                                        <li><a href="blog-details.html">Bags</a></li>
                                                    </ul>
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- /col -->
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 px-3 px-lg-0">
                                                <div class="sidebar-widget mb-50">
                                                    <h4 class="pb-10 mb-30 font500 sidebar-title position-relative">Popular Posts</h4>
                                                    <ul class="recent-post">
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="images/blog/blog-page/propular-post-img3.jpg" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html" class="primary-color font600">In key markets & region We will accomplish</a>
                                                                </h6>
                                                                <span>May 23, 2020</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="images/blog/blog-page/propular-post-img5.jpg" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html" class="primary-color font600">Enable sustainable trade and commerce</a>
                                                                </h6>
                                                                <span>June 24, 2020</span>
                                                            </div>
                                                        </li>
                                                    </ul>  
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- /col -->
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 px-3 px-lg-0">
                                                <div class="sidebar-widget mb-50">
                                                    <a href="blog-details.html">
                                                        <img src="images/blog/blog-page/blog-banner.jpg" alt="">
                                                    </a>
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                    </div><!-- rs-right -->                                     
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
            </div><!-- /blog-sidebar-area -->
            <!-- right-sidebar-area-end -->

        </main>
        
        <!-- ====== footer-area-start ============================================ -->
        <footer> 
            <div class="footer-area footer-bg">
                <div class="footer-top pt-80 pb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4  col-lg-4  col-md-6  col-sm-6 col-12 ">
                                <div class="footer-widget f-adress pb-40 pr-100">
                                    <img src="images/footer/footer-logo.png" alt="">
                                    <p class="pt-18">Sed perspiciatis unde omnisse natus error voluptatem accusan doloreqe laudantium totam</p>
                                    <ul class="footer-address mt-30">
                                        <li class="mb-25">
                                            <span class="pr-1"><i class="fas fa-map-marker-alt"></i></span> 
                                            250 Main Street. USA
                                        </li>
                                        <li class="mb-25">
                                            <span class="pr-1"><i class="far fa-envelope"></i></span> 
                                            supportinfo@gmail.com
                                        </li>
                                        <li>
                                            <a href="tell:+898-123-456-98"><span class="pr-1"><i class="fas fa-phone"></i></span> +898 - 123 - 456 - 98</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-3  col-lg-3  col-md-6  col-sm-6 col-12 pl-xl-0">
                                <div class="footer-widget f-link pb-30 ml--15">
                                    <h5 class="text-white pb-30">Quick Links</h5>
                                    <ul class="footer-info">
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Discount Returns</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Customer Service</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Term & condition</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Specials Offers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-2  col-lg-2  col-md-6  col-sm-6 col-12 ">
                                <div class="footer-widget pb-30">
                                    <h5 class="text-white pb-30">Account</h5>
                                    <ul class="footer-account">
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">My Account</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Order History</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Wish List</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Specials</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Information</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="position-relative d-inline-block">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-3  col-lg-3  col-md-6  col-sm-6 col-12 d-flex justify-content-lg-end">
                                <div class="footer-widget f-payment pb-30">
                                    <h5 class="text-white pb-30">Follow Us</h5>
                                    <ul class="social-link">
                                        <li class="d-inline-block">
                                            <a class="active white text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="white text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="white text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="white text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-behance"></i></a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="white text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul><!-- social-link -->
                                    <h5 class="text-white pb-25 mt-10">Payments</h5>
                                    <div class="footer-payment">
                                        <img class="w-100" src="images/footer/payment-img.png" alt="">
                                    </div>
                                </div>
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="copyright-area pt-25 pb-25 border-t-gray3">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="copyright-text d-sm-flex justify-content-center align-items-center text-center">
                                        <p class="mb-0">© Copyright 2022
                                             <a href="#" class="c-theme">KingStock.</a>
                                              All rights reserved.
                                        </p>
                                    </div>
                                </div><!-- /col -->
                            </div><!-- /row -->
                        </div><!-- /copyright-area -->
                    </div><!-- /container -->
                </div>
            </div>
        </footer>

      <!-- back top -->
        <div class="scroll-up" id="scroll">
            <a href="#" class="theme-bg white d-block text-center position-fixed mr-10">
                <span class="icon-chevrons-up"></span>
            </a>
        </div>

        