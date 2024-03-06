document.addEventListener("DOMContentLoaded", function () {
    // Bắt đầu khi trang đã load
  
    // Lấy đối tượng XMLHttpRequest
    var xhr = new XMLHttpRequest();
  
    // Thiết lập hàm xử lý khi nhận được phản hồi từ API
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Phân tích dữ liệu JSON từ API
          var responseData = JSON.parse(xhr.responseText);
  
          // Xử lý dữ liệu ở đây, ví dụ:
          displayData(responseData);
        } else {
          // Xử lý lỗi nếu có
          console.error('Error:', xhr.status, xhr.statusText);
        }
      }
    };
  
    // Mở kết nối đến API với phương thức GET và đường dẫn của API
    xhr.open("GET", "http://localhost:3000/api/nhanvien/read.php", true);
  
    // Gửi yêu cầu đến API
    xhr.send();
  });
  
  // Hàm xử lý dữ liệu
  function displayData(data) {
    var resultDiv = document.getElementById("result");
  
    // Hiển thị dữ liệu trong div với id "result"
    data.data.forEach(function (item) {
      resultDiv.innerHTML += `
        <div class="sanpham-item">
          <div class="sanpham-content">
            <h3>${item.Tennv}</h3>
            <h4 style="text-decoration: line-through;">Giá gốc: $5</h4>
            <h4>Giảm còn: $3</h4>
            <div class="thanhtoan-sanpham">
              <button type="submit" name="idgiohang" value="">Giỏ hàng</button>
            </div>
          </div>
        </div>
      `;
    });
  }
  