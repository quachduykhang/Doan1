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
        box-shadow: 0 3px #AAAAAA;
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

    .chucnang-quanly-sp {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
    }

    .chucnang-quanly-sp a {
        padding: 10px;
        background-color: #999999;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        transition: 0.3s;
    }

    .chucnang-quanly-sp a:hover {
        text-shadow: 0 3px #AAAAAA;
    }
    .button-xoa {
        background-color: antiquewhite;
    }
    .delete-btn{
        background-color: #999999;
    }
    .add{
        padding:18px;
    }
</style>
<div class="add">
    
    <a href="index.php?id=6"><img src="../images/logo/add.png" alt="" srcset="" width="40px" height="40px"></a>
</div>
<div class="container">
    <div class="table-container" id="result">
        <!-- Dữ liệu sản phẩm sẽ được thêm vào đây từ JavaScript -->
    </div>
</div>

<script>
   
   document.addEventListener("DOMContentLoaded", function () {
    fetchData();
});



var coursesApi = "http://localhost:3000/api/product/delete.php";

function deleteProduct(Ma_sp) {
    var options = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ Ma_sp: Ma_sp }) // Json mã sản phẩm
    };

    fetch(coursesApi + '/' + Ma_sp, options)
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
function fetchData() {
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
}

document.addEventListener("DOMContentLoaded", function () {
    fetchData();
});

// Lắng nghe sự kiện khi người dùng nhấp vào liên kết
document.querySelector('a[data-ma-sp]').addEventListener('click', function(event) {
  // Ngăn chặn hành vi mặc định của liên kết
  event.preventDefault();

  // Lấy giá trị Ma_sp từ thuộc tính data-ma-sp
  const maSp = this.getAttribute('data-ma-sp');

  // Tạo URL API với Ma_sp
  const apiUrl = `http://localhost:3000/api/product/read.php${Ma_sp}`;

  // Gửi yêu cầu API và xử lý kết quả
  fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      // Xử lý dữ liệu trả về từ API, có thể là chuyển hướng đến trang chi tiết sản phẩm hoặc hiển thị thông tin sản phẩm, tùy thuộc vào yêu cầu của bạn
      console.log(data);
    })
    .catch(error => console.error('Error fetching data:', error));
});



function displayData(data) {
    var resultDiv = document.getElementById("result");
    resultDiv.innerHTML = ""; // Clear existing content

    data.data.forEach(function (item) {
        resultDiv.innerHTML += `
            <div class="product-table">
            <a href="index.php?id=9" data-ma-sp="${item.Ma_sp}">

                    <img class="product-image" src="../images/hinhanh/${item.Hinhanhsp}" alt="Product Image">
                </a>
                <div class="info-quanly-sp">
                    <h2>${item.Tensp}</h2>
                    <h4 style="text-decoration: line-through;">${item.Gia}.000vnd</h4>
                    <h4>${item.Giamgia}.000vnd</h4>
                </div>
                <div class="chucnang-quanly-sp">
                    <a href="Quanlysanpham/updatesp.php"> Sửa sản phẩm</a>
                    <button class='delete-btn' data-id="${item.Ma_sp}">Xóa</button>
                </div>
                
            </div>
        `;
        console.log()
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
            
                  deleteProduct(bt[i].getAttribute("data-id"));
    }
       });
    }
}
}

</script>

