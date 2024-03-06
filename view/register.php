       
        <main>

            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area over-hidden">
                <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="images/img/anh-dangky.png">
                    
                    <div class="row align-items-center">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <div class="page-title b-l pt-100 text-center position-relative z-index1">
                                <h2 class="text-capitalize font600 mb-10">Đăng ký</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a class="primary-color" href="index.php">Trang chủ</a></li>
                                    <li class="breadcrumb-item active text-capitalize" aria-current="page">Đăng ký</li>
                                    </ol>
                                </nav>
                            </div><!-- /page title -->
                        </div><!-- /col -->
                    </div>
                </div><!-- /single-slider -->
            </div>
            <!-- slider-area-end  -->
            
            <!-- ====== login-area-start================================ -->
            <div class="login-area pb-110 pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8  col-lg-10  col-md-12  col-sm-12 col-12 offset-xl-2 offset-lg-1 px-xl-0">
                            <div class="login-form-area border-light-gray2 pl-90 pr-90 pt-90 pb-100">
                                <h3 class="mb-30 text-center"> Đăng ký tại đây</h3>
                                <form action="#" method="POST">
                                    <div class="login-form mb-25">
                                        <label class="mt-25" for="Hoten">Họ và tên<span class="theme-color">**</span></label>
                                        <div class="name">
                                            <input type="text" class="form-control primary-bg2 rounded-0 pl-20" name="Hoten" id="r-name" placeholder="Vui lòng nhập HỌ TÊN">
                                        </div>
                                        <label class="mt-25" for ="Email">Email  <span class="theme-color">**</span></label>
                                        <div class="email">
                                            <input type="email" class="form-control primary-bg2 rounded-0 pl-20" name="Email" id="r-email" placeholder="Nhâp Email tại đây">
                                        </div>
                                        <label class="mt-25" for ="Sodt">Số điện thoại <span class="theme-color">**</span></label>
                                        <div class="email">
                                            <input type="phonenumber" class="form-control primary-bg2 rounded-0 pl-20" name="Sodt" id="r-email" placeholder="Nhập số điện thoại tại đây">
                                        </div>
                                        <label class="mt-25" for ="Diachi"> Địa chỉ <span class="theme-color">**</span></label>
                                        <div class="email">
                                            <input type="Adress" class="form-control primary-bg2 rounded-0 pl-20" name="Diachi" id="r-email" placeholder="Nhâp Địa chỉ tại đây">
                                        </div>
                                        <label class="mt-25"> Mật khẩu <span class="theme-color">**</span></label>
                                            <div class="password">
                                              <input type="password" class="form-control primary-bg2 rounded-0 pl-20" name="Matkhau" id="Matkhau" placeholder=" Mật khẩu">


                                              </div>
                                    </div><!-- /login-form -->
                                       <div class="form-group">
                                             <button class="web-btn d-block text-center theme-bg theme-color02 white text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40 w-100" id="created">Create</button>
                                       </div>
                                    <div class="or text-center mt-30 mb-30">
                                        <span class="d-block position-relative">or</span>
                                    </div>
                                    <a href="login.html" class="web-btn d-block text-center theme-bg theme-color02 white text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40 w-100">
                                        Đăng nhập
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- login-area-end  -->

        </main>
        
        <!-- ====== footer-area-start ============================================ -->
                
        <!-- back top -->
        <div class="scroll-up" id="scroll">
            <a href="#" class="theme-bg white d-block text-center position-fixed mr-10">
                <span class="icon-chevrons-up"></span>
            </a>
        </div>
        <script>

    // Khi nút "Create" được bấm, hiển thị thông báo thành công
    document.getElementById('created').addEventListener('click', function () {
        document.querySelector('.success-message').style.display = 'block';
    });
    var coursesApi = "http://localhost:3000/api/Khachhang/cread.php";

    function start() {
        handleCreateForm();
    }

    start();

    function createCourse(data, callback) {
        var options = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        };
        fetch(coursesApi, options)
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(callback)
            .catch(function (error) {
                console.error('Error creating course:', error);
            });
    }

    function handleCreateForm() {
        var createBtn = document.querySelector('#created');
        createBtn.onclick = function (event) {
            event.preventDefault(); // Prevent form submission

            var Matkhau = document.querySelector('input[name="Matkhau"]').value;
            var Email = document.querySelector('input[name="Email"]').value;
            var Hoten = document.querySelector('input[name="Hoten"]').value;
            var Sodt = document.querySelector('input[name="Sodt"]').value;
            var Diachi = document.querySelector('input[name="Diachi"]').value;

            var formData = {
                Matkhau: Matkhau,
                Email: Email,
                Hoten: Hoten,
                Sodt: Sodt,
                Diachi: Diachi
                // Add other fields to formData...
            };

            createCourse(formData, function (response) {
                console.log('User registered successfully:', response);
                // Handle success here if needed
            });
        };
    }
</script>
       