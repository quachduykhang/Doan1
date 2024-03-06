<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color:#AAAAAA ;

        }

        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 70px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        button {
            background-color: #007bff;
            color: #fff;
        }
    </style>
    <title>Thêm Khách hàng</title>
</head>
<body>

<div class="form-container">
    <h1>Thêm Khách hàng</h1>
    <div class="form-group">
        <label for="Hoten">Họ và tên </label>
        <input type="text" class="form-control" name="Hoten" placeholder =" Vui lòng nhập vào Họ và tên">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" class="form-control" name="Email"placeholder =" Vui lòng nhập vào Email">
    </div>
    <div class="form-group">
        <label for="Namsinh">Năm sinh</label>
        <input type="text" class="form-control" name="Namsinh"placeholder =" Vui lòng nhập vào Năm sinh">
    </div>
    <div class="form-group">
        <label for="Gioitinh"> giới tính</label>
        <input type="text" class="form-control" name="Gioitinh"placeholder ="Nam :0 Nữ 1">
    </div>
    <div class="form-group">
        <label for="Hinhanhsp">Chọn thư mục ảnh sản phẩm</label>
        <div class="input-group">
            <input type="text" class="form-control" name="Hinhanh" id="hinhanh" placeholder="Đường dẫn thư mục" readonly>
            <div class="input-group-append">
                <label class="input-group-text" for="image-folder-input" id="image-folder-button">Chọn thư mục</label>
            </div>
            <input type="file" id="image-folder-input" webkitdirectory directory style="display: none;">
        </div>
    </div>
    <div class="form-group">
        <label for="SelectedImage">Tấm ảnh được chọn</label>
        <img src="" alt="Selected Image" id="selected-image">
    </div>
    <div class="form-group">
        <label for="Sodt">Số điện thoại</label>
        <input type="text" class="form-control" name="Sodt"placeholder =" Vui lòng nhập vào số điện thoại">
    </div>
    <div class="form-group">
        <label for="Diem">Điểm</label>
        <input type="text" class="form-control" name="Diem"  placeholder="Nhập điểm" >
    </div>
    <div class="form-group">
        <label for="Diachi">Địa chỉ</label>
        <input type="text" class="form-control" name="Diachi"  placeholder="Địa chỉ hiện tại của bạn">
    </div>
    <div class="form-group">
        <label for="Matkhau">Mật khẩu</label>
        <input type="text" class="form-control" name="Matkhau"  placeholder="Nhập Mật khẩu">
    </div>
    <!-- Other input fields... -->
    <div class="form-group">
        <button class="btn btn-primary" id="created">Create</button>
        <a href="index.php?id=1"><img src="../images/logo/undo.png" alt="" srcset="" width="40px" height="40px"></a>
    </div>
</div>

</body>
</html>


<script>
    
   // Khi thư mục được chọn, hiển thị đường dẫn của thư mục
   document.getElementById('image-folder-input').addEventListener('change', function () {
        var folderPath = this.files[0].webkitRelativePath;
        document.getElementById('hinhanhsp').value = folderPath.substring(0, folderPath.indexOf('/'));
        
        // Lấy tên của một ảnh đầu tiên trong thư mục và hiển thị
        var imageName = this.files[0].name;
        var imageUrl = URL.createObjectURL(this.files[0]);
        document.getElementById('selected-image').src = imageUrl;
    });

    // Khi nút "Chọn thư mục" được bấm, kích hoạt sự kiện click trên input file
    document.getElementById('image-folder-button').addEventListener('click', function () {
        document.getElementById('image-folder-input').click();
    });

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
        createBtn.onclick = function () {
            var Matkhau = document.querySelector('input[name="Matkhau"]').value;
            var Email = document.querySelector('input[name="Email"]').value;
            var Hoten = document.querySelector('input[name="Hoten"]').value;
            var Namsinh = document.querySelector('input[name="Namsinh"]').value;
            var Gioitinh = document.querySelector('input[name="Gioitinh"]').value;
            var Sodt = document.querySelector('input[name="Sodt"]').value;
            var Hinhanh = document.querySelector('input[name="Hinhanh"]').value;
            var Diem = document.querySelector('input[name="Diem"]').value;
            var Diachi = document.querySelector('input[name="Diachi"]').value;
            // Fix the variable name here
           

            var formData = {
                Matkhau: Matkhau,
                Email: Email,
                Hoten: Hoten,
                Namsinh: Namsinh,
                Gioitinh: Gioitinh,
                Sodt: Sodt,
                Hinhanh: Hinhanh,
                Diem: Diem,
                Diachi: Diachi

                // Add other fields to formData...
            };

            createCourse(formData, function (response) {
                console.log('Course created successfully:', response);
                // Handle success here if needed
            });
        };
    }
</script>
