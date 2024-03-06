<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết sản phẩm</title>
</head>
<body>

  <h1>Thông tin chi tiết sản phẩm</h1>

  <div id="product-details">
    <!-- Thông tin sản phẩm sẽ được hiển thị ở đây -->
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Lấy mã sản phẩm từ URL
      const urlParams = new URLSearchParams(window.location.search);
      const productId = urlParams.get('id');

      // Gọi API để lấy thông tin chi tiết sản phẩm
      const apiUrl = `http://localhost:3000/api/product/read.php${Ma_sp}`;

      const xhr = new XMLHttpRequest();
      xhr.open('GET', apiUrl, true);

      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Xử lý dữ liệu khi nhận được từ API
          const productDetails = JSON.parse(xhr.responseText);
          displayProductDetails(productDetails);
        }
      };

      xhr.send();
    });

    // Hàm để hiển thị thông tin sản phẩm trên trang
    function displayProductDetails(product) {
      const productDetailsContainer = document.getElementById('product-details');

      // Tạo HTML để hiển thị thông tin sản phẩm
      const html = `
        <h2>${product.Tensp}</h2>
        <p>Mã sản phẩm: ${product.Ma_sp}</p>
        <p>Giá: ${product.Gia}</p>
        <p>Mô tả: ${product.Motasp}</p>
        <!-- Thêm các trường thông tin khác nếu cần -->

        <!-- Có thể thêm hình ảnh sản phẩm -->
        <img src="${product.Hinhanhsp}" alt="${product.Tensp}" width="300">

      `;

      // Đưa HTML vào container
      productDetailsContainer.innerHTML = html;
    }
  </script>

</body>
</html>
