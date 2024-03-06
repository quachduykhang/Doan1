<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tin tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/tt.css">
    <style>
        .admin-tintuc {
            padding: 3ch;
            height: 100%;
        }

        .news-ad-tt {
            display: flex;
            padding: 20px;
            padding-right: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin: 10px;
            justify-content: center;
        }

        .news-ad-tt img {
            max-width: 100%;
            width: 50vh;
            height: 50vh;
            background-size: cover;
            background-position: center;
            object-fit: cover;
            box-shadow: 0px 0px 3px rgb(0, 0, 0);
        }

        .news-info {
            padding: 0 3ch;
            width: 100vh;
        }

        .meta-ad-tt {
            display: flex;
            justify-content: center;
        }

        .meta-ad-tt a {
            text-decoration: none;
            list-style: none;
            padding-right: 2ch;
            color: black;
        }
    </style>
</head>

<body>

    <div class="admin-tintuc">
        <div>
            <a href="Quanlytintuc/created.php" class="bi bi-plus-square-fill" style="font-size: 3ch; text-decoration: none;"> Thêm tin tức</a>
        </div>
        <div class="header-admin-tintuc">
            <h1>Tin tức</h1>
        </div>
        <!-- News Section -->
        <div id="result">
            <!-- Dữ liệu từ API sẽ được hiển thị ở đây -->
        </div>
        <script>
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

                xhr.open("GET", "http://localhost:3000/api/Tintuc/read.php", true);
                xhr.send();
            });
            var coursesApi = "http://localhost:3000/api/Tintuc/delete.php";

function deletetintuc(Ma_tt) {
    var options = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ Ma_tt: Ma_tt }) // Json mã sản phẩm
    };

    fetch(coursesApi + '/' + Ma_tt, options)
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
                var resultDiv = document.getElementById("result");

                // Hiển thị dữ liệu trong div với id "result"
                data.data.forEach(function (item) {
                    resultDiv.innerHTML += `
                        <div id="news-section-ad-tt">
                            <div class="news-ad-tt">
                                <img src="../images/img-tintuc/${item.Hinhanh}" alt="News 1">
                                <div class="news-info">
                                    <h2>Tiêu đề: ${item.Tieude}</h2>
                                    <p>Mô tả: ${item.Mota}</p>
                                    <h4 class="date-ad-tt">${item.Ngay}</h4>
                                    <div class="meta-ad-tt">
                                        <a class="bi bi-person-circle" href="#">${item.Tennv}</a>
                                        <a class="bi bi-hand-thumbs-up-fill" href="#"> ${item.luotthich}</a>
                                        <a class="bi bi-eye-fill" href="#"> ${item.luotxem} Views</a>
                                    </div>
                                </div>
                                <div class="chucnang-ad-tt">
                                    <a class="bi bi-pencil-square" href=""></a>
                                    <button class='delete-btn' data-id="${item.Ma_tt}">Xóa</button>
                                </div>
                            </div>
                        </div>
                    `;
                });
            
            const bt =document.querySelectorAll('.delete-btn');
    console.log(bt.length);
       if(bt)
        {
          for(let i=0;i<bt.length;i++){
            bt[i].addEventListener("click",()=>
              {
                console.log(bt[i].getAttribute("data-id"));
               if (confirm("Bạn có chắc chắn muốn xóa tin tức ?")) {
            
                  deletetintuc(bt[i].getAttribute("data-id"));
    }
       });
    }
}
            }
        </script>
    </div>
</body>

</html>
