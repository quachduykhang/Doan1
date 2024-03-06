<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết nhân viên</title>
    <link rel="stylesheet" href="employee-details.css">
</head>
<body>
    <style>
        



        
    </style>
   <div class="container">
   <div class="nav">
            <h1>Dashboard</h1>
            <nav class="navbar">
                <a href="#product-section">Sản phẩm</a>
                <a href="#employee-section">Nhân viên</a>
                <a href="#customer-section">Khách hàng</a>
                <a href="#news-section">Tin tức</a>
            </nav>
        </div>

        <div class="employee-info">
            <h1>Thông tin nhân viên</h1>
            <fieldset>
                <legend>Thông tin cơ bản</legend>
                <div class="info">
                    <label>Mã:</label>
                    <input type="text" id="employee-id">
                </div>
                <div class="info">
                    <label>Tên:</label>
                    <input type="text" id="employee-name">
                </div>
                <div class="info">
                    <label>SĐT:</label>
                    <input type="text" id="employee-phone">
                </div>
                <div class="info">
                    <label>Địa chỉ:</label>
                    <input type="text" id="employee-address">
                </div>
                <div class="info">
                    <label>Hình ảnh:</label>
                    <input type="file" id="employee-image" accept="image/*">
                </div>
            </fieldset>
            <fieldset>
                <legend>Thông tin bảo mật</legend>
                <div class="info">
                    <label>PassNV:</label>
                    <input type="password" id="employee-passnv">
                </div>
            </fieldset>
            <fieldset>
                <legend>Thông tin chức vụ</legend>
                <div class="info">
                    <label>Chức vụ:</label>
                    <input type="text" id="employee-position">
                </div>
            </fieldset>
            <div class="action-buttons">
                <button id="update-button">Cập nhật</button>
                <button id="delete-button">Xóa</button>
            </div>
        </div>
    </div>
</body>
</html>
