<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .employee-card {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .employee-card img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
    }

    .employee-card .nhanvien {
        flex-grow: 1;
    }

    .nhanvien a {
        text-decoration: none;
        color: #333;
    }

    .icons i {
        margin-right: 5px;
    }
</style>
<!-- Add a delete button in the "Thao tác" column -->



<div class="container">
    <div class="add-employee">
        <h2>Thêm nhân viên</h2>
        <a href="index.php?id=8" class="bi bi-person-add" style="font-size: 10ch; text-decoration: none;"></a>
    </div>

    <div class="employee-section">
        <h1>Nhân viên</h1>
        <table>
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Chức vụ</th>
                    <th>Mã</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody id="result">
                <!-- Dữ liệu từ API sẽ được hiển thị ở đây -->
            </tbody>
        </table>
    </div>
</div>

<script>
 var coursesApi = "http://localhost:3000/api/nhanvien/delete.php";

function deleteProduct(Ma_nv) {
    var options = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ Ma_nv: Ma_nv }) // Json mã sản phẩm
    };

    fetch(coursesApi + '/' + Ma_nv, options)
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

        xhr.open("GET", "http://localhost:3000/api/nhanvien/read.php", true);
        xhr.send();
    });

    // Event listener for delete buttons



    // Hàm xử lý dữ liệu và hiển thị
    function displayData(data) {
        var resultTbody = document.getElementById("result");

        // Hiển thị dữ liệu trong tbody với id "result"
        data.data.forEach(function (item) {
            resultTbody.innerHTML += `
                <tr>
                    <td>
                        <div class="employee-card">
                            <img src="../images/bg/user.jpg" alt="user-male-circle"/>
                            <div class="nhanvien">
                                <a href="chitietnv.php">
                                    <h2>${item.Tennv}</h2>
                                    <p>${item.Gioitinh}</p>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>${item.chucvu}</td>
                    <td>${item.Ma_nv}</td>
                    
               <td>
               <a href="Quanlynhanvien/chitietnv.php">xem chi tiết</a>
              <button class='delete-btn' data-ma-nv="${item.Ma_nv}"> Xóa</button>
              </td>

                </tr>
            `;
        });
        const bt =document.querySelectorAll('.delete-btn');
            console.log(bt.length);
       if(bt)
        {
          for(let i=0;i<bt.length;i++){
            bt[i].addEventListener("click",()=>
              {
                console.log(bt[i].getAttribute("data-ma-nv"));
               if (confirm("Bạn có chắc chắn muốn xóa nhân viên ?")) {
            
                deleteProduct(bt[i].getAttribute("data-ma-nv"));
    }
       });
    }
}
    }
</script>
