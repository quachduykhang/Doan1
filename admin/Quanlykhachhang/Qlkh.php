<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kh.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Quản lý Shop</title>
</head>

<body>

    <div class="container">
        
        <div class="maincontent">
            <div class="Font">
                <div class="FontBackground">KHÁCH HÀNG</div>
                <div class="table-container">
                <div>
                <a href="index.php?id=7"><img src="../images/logo/add.png" alt="" srcset="" width="40px" height="40px"></a>
        </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Mã khách hàng</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Họ Và Tên</th>
                                <th>Năm sinh</th>
                                <th>Giới tính</th>
                                <th>Số điện thoại</th>
                                <th>Hình ảnh</th>
                                <th>Điểm</th>
                                <th>Địa chỉ</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody id="result">
                            <!-- Dữ liệu từ API sẽ được hiển thị ở đây -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
   // Hàm xử lý sự kiện xóa
  
   
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

            xhr.open("GET", "http://localhost:3000/api/Khachhang/read.php", true);
            xhr.send();
        });
        var coursesApi="http://localhost:3000/api/Khachhang/delete.php";

        function deletekhachhang(Ma_kh) {
              var options = {
                   method: 'DELETE',
                    headers: {
                      'Content-Type': 'application/json'
                  },
        body: JSON.stringify({ Ma_kh: Ma_kh }) // Json mã sản phẩm
    };
    fetch(coursesApi + '/' + Ma_kh, options)
        .then(function (response) {
            // kiểm tra network 
            if (!response.ok) {
                throw new Error('Network không ổn định');
            }
           
            return response.json();
        })
        .then(function (data) {
          
            console.log(data.message);
        })
        .catch(function (error) {
           
            console.error('Error:', error.message);
        });
}

        // Hàm xử lý dữ liệu và hiển thị
        function displayData(data) {
            var resultTbody = document.getElementById("result");
            resultTbody.innerHTML = ''; // Clear existing content before appending

            // Hiển thị dữ liệu trong tbody với id "result"
            data.data.forEach(function (item) {
                resultTbody.innerHTML += `
                    <tr>
                        <td>${item.Ma_kh}</td>
                        <td>${item.Matkhau}</td>
                        <td>${item.Email}</td>
                        <td>${item.Hoten}</td>
                        <td>${item.Namsinh}</td>
                        <td>${item.Gioitinh}</td>
                        <td>${item.Sodt}</td>
                        <td> <img src="../images/avatar/${item.Hinhanh}" alt="Avatar Image" style="width: 50px; height: 50px;"></td>
                        <td>${item.Diem}</td>
                        <td>${item.Diachi}</td>
                        <td>
                            <a href="#">sửa</a>
                            <button class='delete-btn' data-id="${item.Ma_kh}">Xóa</button>
                        </td>
                    </tr>
                `;
            });
       

        // Lưu trữ dữ liệu vào localStorage
        window.addEventListener('beforeunload', function () {
            var resultTbody = document.getElementById("result");
            localStorage.setItem('employeeData', resultTbody.innerHTML);
        });

        // Khôi phục dữ liệu từ localStorage sau khi trang web được mở lại
        window.addEventListener('DOMContentLoaded', function () {
            var resultTbody = document.getElementById("result");
            resultTbody.innerHTML = localStorage.getItem('employeeData') || '';
        });
        const bt =document.querySelectorAll('.delete-btn');
        console.log(bt.length);
         if(bt)
           {
              for(let i=0;i<bt.length;i++){
                  bt[i].addEventListener("click",()=>
              {
                     console.log(bt[i].getAttribute("data-id"));
                     if (confirm("Bạn có chắc chắn muốn xóa sản phẩm ?")) {
                        deletekhachhang(bt[i].getAttribute("data-id"));
    }
       });
    }
}
}
    </script>
</body>

</html>
