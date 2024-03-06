  
            <!-- ====== product-area-start================================ -->
            <div class="product-area mt-115">
                <div class="container">
                    <div class="product-content single-product-tab-content">
                        <div class="row">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                                        <div class="shop-header d-sm-flex align-items-center justify-content-between">
                                            <div class="shop-h-title">
                                                <h6 class="primary-color font600 mb-0">Showing 1–12 of 38 results</h6>
                                            </div>
                                            <div class="product-selection">
                                                <select class="border-0 py-0 pl-0" name="select" id="select">
                                                    <option value="">Sort by : Default sorting</option>
                                                    <option value="">Sản phẩm phổ biến nhất</option>
                                                     <option value="">sản phẩm thấp nhất</option>
                                                    <option value="">Giá: từ thấp đến cao</option>
                                                    <option value="">Giá: từ cao xuống thấp</option>
                                                </select>
                                            </div>
                                        </div><!-- /shop-header -->
                                    </div><!-- /col -->
                                </div><!-- /row -->
                                <style>
    .table-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .product-table {
        width: 300px;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: 0.5s;
        text-decoration: none;
        margin: 10px;
    }

    .product-table:hover {
        color: #000;
        box-shadow: 0 3px #610636;
    }

    .product-image {
        max-width: 100%;
        height: auto;
        background-size: cover;
        background-position: center;
        object-fit: cover;
        box-shadow: 0px 0px 3px rgb(0, 0, 0);
        margin-bottom: 10px;
    }

    .chucnang-mua {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
    }

    .chucnang-mua a {
        padding: 10px;
        background-color: #ce3d56;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        transition: 0.3s;
    }

    .chucnang-mua a :hover {
        text-shadow: 0 3px #610636;
    }
</style>

<div class="container">
    <div class="table-container" id="result">
        <!-- Dữ liệu sản phẩm sẽ được thêm vào đây từ JavaScript -->
    </div>
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

        xhr.open("GET", "http://localhost:3000/api/product/read.php", true);
        xhr.send();
    });

    function displayData(data) {
        var resultDiv = document.getElementById("result");

        data.data.forEach(function (item) {
            resultDiv.innerHTML += `
                <div class="product-table">
                    <a href="index.php?id=20">
                        <img class="product-image" src="images/hinhanh/${item.Hinhanhsp}" alt="Product Image">
                    </a>
                    <div class="info-quanly-sp">
                        <h6>Tên sản phẩm: ${item.Tensp} </h6>
                       
                        <h8 style="text-decoration: line-through;"> Giá gốc: ${item.Gia}.000vnd</h8>
                        <h6>Giảm còn: ${item.Giamgia}.000vnd</h6> 
                    </div>
                    <div class="chucnang-mua">
                        <a href="#">Giỏ hàng</a>
                        <a href="#" onclick="return confirm('Bạn có thực sự muốn xóa?')">Mua ngay</a>
                    </div>
                </div>
            `;
        });
    }
</script>


                                
                                

            
      


</div>
</div>

            <!-- ====== pagination-area-start================================ -->
            <div class="pagination-area mt-30 mb-20 over-hidden">
                <div class="container-wrapper extra-padding-15">
                    <div class="row pb-110">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <nav class="pagination-page" aria-label="Page navigation example">
                                <ul class="pagination align-items-center justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="shop-full-width.html"><i class="fas fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="shop-full-width.html">1</a></li>
                                    <li class="page-item"><a class="page-link" href="shop-full-width.html">2</a></li>
                                    <li class="page-item"><a class="page-link" href="shop-full-width.html">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="shop-full-width.html"><i class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- pagination-area-end -->

            <!-- ====== brand-logo-area-start ========================================= -->
           
            <!-- brand-logo-area-end  -->


            <!-- Modal start -->
            <div class="modal fade" id="product-modal" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product-modal my-" role="document">
                    <div class="modal-content product-modal pt-30 pb-30">
                        <div class="modal-body pt-0 px-0">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <!-- product-details-tab-area start -->
                                    <div class="product-details-content pl-20 pr-20">
                                        <div class="single-product-tab-content main-tab-content tab-content pt-19" id="myTabContent10">
                                            <div class="row">
                                                <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                                    <div class="product-left-img-tab"> 
                                                        <div class="tab-content width100 text-center mt-30 position-relative" id="v-pills-tabContent10">
                                                            <div class="tab-pane fade show active" id="v-pills-home10" role="tabpanel" aria-labelledby="v-pills-home-tab10">
                                                                <div class="product-gallery-btn position-absolute right-site">
                                                                    <a href="images/product-details/prduct-detl-large-img5.jpg" class="zoom-gallery dark-black-color bg-white d-inline-block m-2 " data-fancybox="images" ><i class="fas fa-compress"></i><img class="width100 d-none" src="images/product-details/prduct-detl-large-img5.jpg" alt=""></a>                            
                                                                </div><!-- /product-gallery-btn -->
                                                                <div class="product-img">
                                                                    <img  class="width100 height100" src="images/product-details/prduct-detl-large-img5.jpg" alt="">
                                                                </div><!-- /product-img -->
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-profile10" role="tabpanel" aria-labelledby="v-pills-profile-tab10">
                                                                <div class="product-gallery-btn position-absolute right-site">
                                                                    <a href="images/product-details/prduct-detl-large-img6.jpg" class="zoom-gallery dark-black-color bg-white d-block m-2" data-fancybox="images" ><i class="fas fa-compress"></i><img class="width100 d-none" src="images/product-details/prduct-detl-large-img6.jpg" alt=""></a> 
                                                                </div><!-- /product-gallery-btn -->
                                                                <div class="product-img"> 
                                                                    <img class="width100" src="images/product-details/prduct-detl-large-img6.jpg" alt="">                                 
                                                                </div><!-- /product-img -->
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-messages10" role="tabpanel" aria-labelledby="v-pills-messages-tab10">
                                                                <div class="product-gallery-btn position-absolute right-site">
                                                                    <a href="images/product-details/prduct-detl-large-img11.jpg" class="zoom-gallery dark-black-color bg-white d-block m-2" data-fancybox="images" ><i class="fas fa-compress"></i><img class="width100 d-none" src="images/product-details/prduct-detl-large-img11.jpg" alt=""></a>
                                                                </div><!-- /product-gallery-btn -->
                                                                <div class="product-img"> 
                                                                    <img class="width100" src="images/product-details/prduct-detl-large-img11.jpg" alt="">                                     
                                                                </div><!-- /product-img -->
                                                            </div>
                                                        </div><!-- /tab-content -->
                                                        <div class="nav product-tabs pt-20" id="v-pills-tab10" role="tablist" aria-orientation="vertical">
                                                            <a class="nav-link  show active mr-20" id="v-pills-home-tab10" data-toggle="pill" href="#v-pills-home10" role="tab" aria-controls="v-pills-home10" aria-selected="true">
                                                                <img class="product-thumbnail" src="images/product-details/prduct-detl-thamb5.jpg" alt="">
                                                            </a>
                                                            <a class="nav-link mr-20" id="v-pills-profile-tab10" data-toggle="pill" href="#v-pills-profile10" role="tab" aria-controls="v-pills-profile10" aria-selected="false">
                                                                <img class="product-thumbnail" src="images/product-details/prduct-detl-thamb6.jpg" alt="">
                                                            </a>
                                                            <a class="nav-link mr-20" id="v-pills-messages-tab10" data-toggle="pill" href="#v-pills-messages10" role="tab" aria-controls="v-pills-messages10" aria-selected="false">
                                                                <img class="product-thumbnail" src="images/product-details/prduct-detl-thamb11.jpg" alt="">
                                                            </a>
                                                        </div><!-- /nav product-tabs -->
                                                    </div><!-- /product-left-img-tab -->
                                                </div><!-- /col -->
                                                <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                                    <div class="product-view-info mt-30">
                                                        <div class="product-left-img-info">
                                                            <h3>Willmann Concrete <br> & Glass Vase</h3>
                                                            <div class="rating rating-shop d-flex align-items-center mt-15">
                                                                <ul class="d-flex mr-2">
                                                                    <li>
                                                                        <span class="theme-color2"><i class="fas fa-star"></i></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="theme-color2"><i class="fas fa-star"></i></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="theme-color2"><i class="fas fa-star"></i></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="theme-color2"><i class="fas fa-star"></i></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="theme-color2"><i class="fad fa-star-half-alt"></i></span>
                                                                    </li>
                                                                </ul>
                                                                <span class="gray-color2">(05 Reviews)</span>
                                                            </div>
                                                            <div class="price pb-18 pt-3">
                                                                <span class="rc-price font700">$250.99</span>
                                                            </div>
                                                            <div class="p-info-text pr-55">
                                                                <p class="gray-color2">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms</p>
                                                                <p class="gray-color2 pt-10">But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                                            </div>
                                                            <div class="all-info d-sm-flex align-items-center mt-35">
                                                                <div class="quick-add-to-cart d-sm-flex align-items-center">
                                                                    <div class="quantity-field position-relative d-inline-block mt-15 mr-3">
                                                                        <input type="text" name="select1" value="0" class="quantity-input-arrow quantity-input shop-border2 dark-black-color text-center"> 
                                                                    </div>
                                                                    <div class="quick-add-to-cart d-sm-flex align-items-center mr-15 mt-15">
                                                                        <a href="cart.html" class="web-btn d-inline-block theme-bg border-theme02 white text-uppercase over-hidden position-relative ptb-19 pl-30 pr-30 rounded-0">add to CART 
                                                                            <span class="ml-1"><span class="icon-plus"></span></span>
                                                                        </a>
                                                                    </div>
                                                                </div><!-- /quick-add-to-cart -->
                                                            </div>
                                                            <ul class="single-product-list-button d-flex align-items-center mt-25 mb-45">
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                                    <a href="wishlist.html" class="d-block shop-border2 primary-list-color transition-3 text-center mr-12"><span><i class="far fa-heart"></i></span></a>
                                                                </li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                                    <a href="shop.html" class="d-block shop-border2 primary-list-color transition-3 text-center mr-12"><span><i class="far fa-search"></i></span></a>
                                                                </li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                                    <a href="shop.html" class="d-block shop-border2 primary-list-color transition-3 text-center mr-12"><span><i class="fas fa-compress"></i></span></a>
                                                                </li>
                                                            </ul><!-- /single-product-list-button -->
                                                            <ul class="review-cat review-cat2  d-sm-flex align-items-center pb-20">
                                                                <li class="mb-1 mb-2 mr-6 d-inline-block position-static">
                                                                    <span class="cat-title dark-black-color font600">Loại</span>
                                                                </li>
                                                                <li class="mr-6 mb-2 d-inline-block position-relative">
                                                                    <a href="shop.html" class="gray-color2 font600">Mask,</a>
                                                                </li>
                                                               
                                                                <li class="mr-6 mb-2 d-inline-block position-relative">
                                                                    <a href="shop.html" class="gray-color2 font600">Sanitizer,</a>
                                                                </li>
                                                                <li class="mr-6 mb-2 d-inline-block position-relative">
                                                                    <a href="shop.html" class="gray-color2 font600">Facemask</a>
                                                                </li>
                                                            </ul><!-- /review-cat -->
                                                            <ul class="social-link">
                                                                <li class="d-block d-sm-inline-block mr-12">
                                                                    <span class="cat-title dark-black-color font600">Share Now:</span>
                                                                </li>
                                                                <li class="d-inline-block" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Facebook">
                                                                        <a class="d-inline-block transition-3 gray-color2 shop-border2 text-center" href="#">
                                                                        <i class="fab fa-facebook-f"></i>
                                                                        </a>
                                                                </li>
                                                                <li class="d-inline-block"  data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Instagram">
                                                                    <a class="d-inline-block transition-3 gray-color2 shop-border2 text-center" href="#">
                                                                        <i class="fab fa-instagram"></i>
                                                                        </a>
                                                                </li>
                                                                <li class="d-inline-block"  data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Twitter">
                                                                    <a class="d-inline-block transition-3 gray-color2 shop-border2 text-center" href="#">
                                                                        <i class="fab fa-twitter"></i>
                                                                        </a>
                                                                </li>
                                                                <li class="d-inline-block"  data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Google plus">
                                                                    <a class="d-inline-block transition-3 gray-color2 shop-border2 text-center" href="#">
                                                                        <i class="fab fa-google"></i>
                                                                        </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- /col -->
                                            </div><!-- /row -->
                                        </div>
                                    </div><!-- /product-content -->
                                    <!-- product-details-tab-area end -->
                                </div><!-- /col -->
                            </div><!-- /row -->
                        </div>
                    </div>
                    <button type="button" class="close position-absolute f-flex-align-items-center justify-content-center text-white dark-black-bg" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><span class="icon-close"></span></span>
                    </button>
                </div>
            </div>
            <!-- Modal end -->

        </main>
        
        <!-- ====== footer-area-start ============================================ -->
        
      <!-- back top -->
        <div class="scroll-up" id="scroll">
            <a href="#" class="theme-bg white d-block text-center position-fixed mr-10">
                <span class="icon-chevrons-up"></span>
            </a>
        </div>

