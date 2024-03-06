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
    <title> Sửa sản phẩm</title>
</head>
<body>

<div class="form-container">
    <h1>Sửa sản phẩm</h1>
    <div class="success-message alert alert-success">
        Sản phẩm đã được sửa thành công!
    </div>
    <div class="form-group">
        <label for="Ma_dm">Mã danh mục</label>
        <input type="text" class="form-control" name="Ma_dm" placeholder =" Vui lòng nhập vào Mã danh mục">
    </div>
    <div class="form-group">
        <label for="Tensp">Tên sản phẩm</label>
        <input type="text" class="form-control" name="Tensp"placeholder =" Vui lòng nhập vào Tên sản phẩm">
    </div>
    <div class="form-group">
        <label for="Gia">Gía</label>
        <input type="text" class="form-control" name="Gia"placeholder =" Vui lòng nhập vào Gía gốc">
    </div>
    <div class="form-group">
        <label for="Giamgia">Giảm giá</label>
        <input type="text" class="form-control" name="Giamgia"placeholder =" Vui lòng nhập vào Gía giảm">
    </div>
    <div class="form-group">
        <label for="Hinhanhsp">Chọn thư mục ảnh sản phẩm</label>
        <div class="input-group">
            <input type="text" class="form-control" name="Hinhanhsp" id="hinhanhsp" placeholder="Đường dẫn thư mục" readonly>
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
        <label for="Motasp">Mô tả sản phẩm</label>
        <input type="text" class="form-control" name="Motasp"placeholder =" Vui lòng nhập vào Mô tả sản phẩm">
    </div>
    <div class="form-group">
        <label for="Thoigianban">Thời gian bán</label>
        <input type="text" class="form-control" name="Thoigianban" id="thoigianban" placeholder="Thời gian bán" readonly>
    </div>
    <div class="form-group">
        <label for="Thoigiancapnhat">Thời gian cập nhật</label>
        <input type="text" class="form-control" name="Thoigiancapnhat" id="thoigiancapnhat" placeholder="Thời gian cập nhật" readonly>
    </div>
    <!-- Other input fields... -->
    <div class="form-group">
        <button class="btn btn-primary" id="created">Create</button>
    </div>
</div>

</body>
</html>


<script>
    // Lấy thời gian hiện tại
    function getCurrentTime() {
        var now = new Date();
        var formattedTime = now.toISOString().slice(0, 19).replace("T", " ");
        return formattedTime;
    }

    // Gán giá trị thời gian hiện tại cho các input
    document.getElementById('thoigianban').value = getCurrentTime();
    document.getElementById('thoigiancapnhat').value = getCurrentTime();
    document.getElementById('image-folder-button').addEventListener('click', function () {
        document.getElementById('image-folder-input').click();
    });

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
    var coursesApi = "http://localhost:3000/api/product/create.php";

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
            var Ma_dm = document.querySelector('input[name="Ma_dm"]').value;
            var Tensp = document.querySelector('input[name="Tensp"]').value;
            var Gia = document.querySelector('input[name="Gia"]').value;
            var Giamgia = document.querySelector('input[name="Giamgia"]').value;
            var Motasp = document.querySelector('input[name="Motasp"]').value;
            var Thoigianban = document.querySelector('input[name="Thoigianban"]').value;
            var Thoigiancapnhat = document.querySelector('input[name="Thoigiancapnhat"]').value;

            // Fix the variable name here
            var Giagiam = document.querySelector('input[name="Giamgia"]').value;

            var formData = {
                Ma_dm: Ma_dm,
                Tensp: Tensp,
                Gia: Gia,
                Giamgia: Giagiam,
                Motasp: Motasp,
                Thoigianban: Thoigianban,
                Thoigiancapnhat: Thoigiancapnhat
                // Add other fields to formData...
            };

            createCourse(formData, function (response) {
                console.log('Course created successfully:', response);
                // Handle success here if needed
            });
        };
    }
</script>
