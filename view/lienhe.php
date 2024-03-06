
<style>
/* Reset styles to remove default browser styles */
body, h1, p, input, textarea, button {
    margin: 0;
    padding: 0;
    border: 0;
}

/* Apply a background color and some spacing to the form */
.form-lienhe {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
    max-width: 600px;
    margin: 0 auto;
}

/* Style the title */
.tieude-lh {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Style the input fields */
.content-lienhe input,
.thongtin-lienhe input,
.phanhoi-lienhe textarea,
.trangthai-lienhe input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style the button */
.lh-submit button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Add some hover effects to the button */
.lh-submit button:hover {
    background-color: #0056b3;
}

/* Optional: Style the form groups for better organization */
.form-group {
    margin-bottom: 20px;
}

/* Optional: Style the textarea */
.phanhoi-lienhe textarea {
    resize: vertical;
    height: 100px;
}

/* Optional: Style the form for smaller screens */
@media (max-width: 480px) {
    .form-lienhe {
        max-width: 100%;
    }
}

</style>

<form action="index.php?pid=13" method="post" class="form-lienhe">

    <div class="lienhe">
        <div class="form-group">
            <h1 class = "tieude-lh"> Liên hệ với chúng tôi </h1>

                        <div class="content-lienhe">
                            <input type="text" name="hoten" id=""  placeholder="* Họ và tên" required>
                            <input type="email" name="email" id="" placeholder="* Email" required>
                        </div>
                        
                        <div class="thongtin-lienhe">
                        <input type="text"  name="sodienthoai" id="" minlength="10" maxlength="10" placeholder="* Số điện thoại" required>
                        <input type="text"  name="diachi" id=""  placeholder="Địa chỉ" > 
                        </div>
                
                        <div class="phanhoi-lienhe">
                            <textarea id="subject" name="noidung" placeholder="* Phản hồi..." required></textarea>
                        </div>
                        <div class="trangthai-lienhe">
                        <input type="text"  name="trangthai" id=""  placeholder="Trạng thái" > 

                        </div>
                        <div class="lh-submit">
                            <button type="submit" name="send"> Gửi</button>        
                        </div>
        </div>
    </div>
</form>
 
