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
</style>
<div>
    
    <a href="Quanlysanpham/creat.php">thêm sản phẩm</a>
</div>
<div class="container">
    <div class="table-container" id="result">
        <!-- Dữ liệu sản phẩm sẽ được thêm vào đây từ JavaScript -->
    </div>
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

        xhr.open("GET", "http://localhost:3000/api/product/read.php", true);
        xhr.send();
    });

    var coursesApi = "http://localhost:3000/api/product/delete.php";
// Hàm xóa




document.addEventListener("DOMContentLoaded", function () {
    fetchData();
});

var coursesApi = "http://localhost:3000/api/product/delete.php";

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

function deleteProduct(Ma_sp, row) {
    var obj = { Ma_sp: Ma_sp };
    var myJSON = JSON.stringify(obj);

    $.ajax({
        url: coursesApi,
        type: "POST",
        data: myJSON,
        success: function (data) {
            message(data.message, data.status);
            if (data.status == true) {
                $(row).fadeOut();
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            console.error('Error:', xhr.status, textStatus, errorThrown);
        }
    });
}

$(document).on("click", ".delete-btn", function () {
    if (confirm("Do you really want to delete?")) {
        var Ma_sp = $(this).data("id");
        var row = $(this).closest(".product-table");

        deleteProduct(Ma_sp, row);
    }
});



function displayData(data) {
    var resultDiv = document.getElementById("result");
    resultDiv.innerHTML = ""; // Clear existing content

    data.data.forEach(function (item) {
        resultDiv.innerHTML += `
            <div class="product-table">
                <a href="index.php?id=${item.Ma_sp}">
                    <img class="product-image" src="../images/hinhanh/${item.Hinhanhsp}" alt="Product Image">
                </a>
                <div class="info-quanly-sp">
                    <h2>${item.Tensp}</h2>
                    <h4 style="text-decoration: line-through;">${item.Gia}.000vnd</h4>
                    <h4>${item.Giamgia}.000vnd</h4>
                </div>
                <div class="chucnang-quanly-sp">
                    <button class = edit-btn' data-eid='"+ ${item.Ma_sp} +"'> Edit </button>
                    <button class='delete-btn ' data-id='"+${item.Ma_sp} + "'>Xóa</button>
                </div>
                
            </div>
        `;
    });
}
</script>

