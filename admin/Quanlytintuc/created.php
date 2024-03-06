<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color:#AAAAAA;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
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

        .success-message {
            display: none;
            margin-top: 10px;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
        }
    </style>
    <title>Thêm Tin tức</title>
</head>
<body>

<div class="form-container">
    <h1>Thêm tin tức</h1>
    <!-- Added success message container -->
    <div class="success-message alert alert-success">
        Tin tức đã được thêm thành công!
    </div>
    <div class="form-group">
        <label for="Tennv">Họ và tên</label>
        <input type="text" class="form-control" name="Tennv" placeholder="Vui lòng nhập vào Họ và tên">
    </div>
    <div class="form-group">
        <label for="Ma_nv">Ma_nv</label>
        <input type="text" class="form-control" name="Ma_nv" placeholder="Nhập vào mã nhân viên">
    </div>
    <div class="form-group">
        <label for="Tieude">Tieude</label>
        <input type="text" class="form-control" name="Tieude" placeholder="Nhập vào tiêu đề">
    </div>
    <div class="form-group">
        <label for="Mota">Mô tả</label>
        <input type="text" class="form-control" name="Mota" placeholder="Nhập vào mô tả">
    </div>
    <div class="form-group">
        <label for="Hinhanh">Chọn thư mục ảnh sản phẩm</label>
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
        <label for="Ngay">Ngày</label>
        <input type="text" class="form-control" name="Ngay" placeholder="Vui lòng nhập vào ngày">
    </div>
    <div class="form-group">
        <label for="luotthich">Lượt thích</label>
        <input type="text" class="form-control" name="luotthich" placeholder="Nhập điểm">
    </div>
    <div class="form-group">
        <label for="luotxem">Lượt xem</label>
        <input type="text" class="form-control" name="luotxem" placeholder="Địa chỉ hiện tại của bạn">
    </div>
    
    <!-- Other input fields... -->
    <div class="form-group">
        <button class="btn btn-primary" id="created">Create</button>
    </div>
</div>

</body>
</html>

<script>
   // Khi thư mục được chọn, hiển thị đường dẫn của thư mục
   document.getElementById('image-folder-input').addEventListener('change', function () {
        var folderPath = this.files[0].webkitRelativePath;
        document.getElementById('hinhanh').value = folderPath.substring(0, folderPath.indexOf('/'));
        
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

    var coursesApi = "http://localhost:3000/api/Tintuc/created.php";

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
            var Ma_nv = document.querySelector('input[name="Ma_nv"]').value;
            var Hinhanh= document.querySelector('input[name="Hinhanh"]').value;
            var Tieude = document.querySelector('input[name="Tieude"]').value;
            var Mota = document.querySelector('input[name="Mota"]').value;
            var Ngay = document.querySelector('input[name="Ngay"]').value;
            var Tennv = document.querySelector('input[name="Tennv"]').value;
            var luotthich = document.querySelector('input[name="luotthich"]').value;
            var luotxem = document.querySelector('input[name="luotxem"]').value;
            
            // Fix the variable name here

            var formData = {
                Ma_nv: Ma_nv,
                Hinhanh: Hinhanh,
                Tieude: Tieude,
                Mota: Mota,
                Ngay: Ngay,
                Tennv: Tennv,
                luotthich: luotthich,
                luotxem: luotxem
            };

            createCourse(formData, function (response) {
                console.log('Course created successfully:', response);
                // Handle success here if needed
            });
        };
    }
</script>
