---Bảng khách hàng-----
CREATE TABLE `tb_khachhang` (
  `Ma_kh` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Matkhau` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Hoten` varchar(255) DEFAULT NULL,
  `Namsinh` date DEFAULT NULL,
  `Gioitinh` bit(1) DEFAULT NULL,
  `Sodt` int(11) DEFAULT NULL,
  `Hinhanh` varchar(200) DEFAULT NULL,
  `Diem` int(11) DEFAULT NULL,
  `Diachi` varchar(255) DEFAULT NULL
 
);

INSERT INTO `tb_khachhang`(`Ma_kh`, `Matkhau`, `Email`, `Hoten`, `Namsinh`, `Gioitinh`, `Sodt`,`Hinhanh`, `Diem`, `Diachi`) VALUES
(001,'111','maideptrai@gmail.com','Lương Thị Thanh Mai','2003-09-15','0','0375002936','avatar1.jpg' ,'100', '40/8 Đ. Ấp Bắc, Phường 13, Tân Bình, Thành phố Hồ Chí Minh, Việt Nam'),
(002, '111','daucatmoi@gmail.com','Nguyễn Trúc Thanh','2003-08-15','0','0371629394','avatar2.jpg','100','V7XH+MJR, QL60, Lương Hoà, Châu Thành, Trà Vinh, Việt Nam'),
(003,'111','khangbebe@gmail.com','Quách Dũy Khang','2003-08-15','0', '0362439921','avatar3.jpg','150','Giao lộ, Đ. Châu Văn Liêm, Khóm 3, Tp. Cà Mau, Cà Mau, Việt Nam'),
(004,'111','traihotran@gmail.com','Trần Thanh Minh','2003-08-15','0','0367846284','avatar4.jpg','150','Phường 10, Tp. Đà Lạt, Lâm Đồng, Việt Nam'),
(005,'111' ,'phong@gmail.com','Đinh Kiến Phong','2003-08-15','0', '0246294283','avatar5.jpg', '150','5/10 Đường 84 Cao Lỗ, Phường 4, Quận 8, Thành phố Hồ Chí Minh 73018, Việt Nam'),
(006,'111' ,'leemaikeo@gmail.com','Linh Lee','2003-08-15','0', '0274736927','avatar6.jpg', '150', '1397 Hoàng Văn Thụ, Phường 4, Tân Bình, Thành phố Hồ Chí Minh, Việt Nam'),
(007, '111','nhinhinhnham@gmail.com','Ngô Ngọc Nhi','2003-08-15','0', '0359263723', 'avatar7.jpg', '150','PH8V+8GR, Khuất Văn Bức, Tân Kiên, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam'),
(008, '111','tamtam@gmail.com','Bùi Thị Tâm','2003-08-15' ,'0','0262346432', 'avatar8.jpg','150', 'Đường 3/2, Thành phố Vũng Tầu, Bà Rịa - Vũng Tàu, Việt Nam'),
(009,'111','yen123@gmail.com', 'Lê Yến','2003-08-15','0', '0716372816','avatar9.jpg','150',  'C564+JGR, QL51B, Phường 12, Thành phố Vũng Tầu, Bà Rịa - Vũng Tàu, Việt Nam'),
(010, '111','quanquan@gmail.com','Trần Minh Quân','2003-08-15', '0', '0484728837','avatar10.jpg', '150','126 Đường Số 17A, Bình Trị Đông B, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam'),
(011,'111' ,'haonamday@gmail.com','Hạo Nam','2003-08-15','0', '0327352333', 'avatar11.jpg','150', '20a Đường Số 8, Tân Tạo A, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam'),
(012,'111' ,'dungxauxi@gmail.com','Lý Dũng','2003-08-15',  '0','0972722342','avatar2.jpg', '150','4CF4+JR7, Đường tỉnh 787, Hưng Thuận, Trảng Bàng, Tây Ninh, Việt Nam'),
(013,'111','phanphat@gmail.com', 'Phát Phan','2003-08-15', '0', '0237238862','avatar2.jpg','150', 'RFXH+96Q, ĐT824, Mỹ Hạnh Nam, Đức Hòa, Long An, Việt Nam'),
(014,'111','hue1201@gmail.com', 'Vân Huệ','2003-08-15', '0', '0287362728','avatar2.jpg', '150','Lại Hùng Cường, Vĩnh Lộc B, Bình Chánh, Thành phố Hồ Chí Minh, Việt Nam'),
(015,'111' ,'mycute@gmail.com','Mai Thị Kim My','2003-08-15','0', '0876563432','avatar2.jpg','150',  '157 Đ. Cô Bắc, Phường Cô Giang, Quận 1, Thành phố Hồ Chí Minh, Việt Nam'),
(016,'111' ,'diepkhongxau@gmail.com','Hồ Diệp','2003-08-15', '0','0546372773', 'avatar2.jpg', '150','MPVC+79G, Đ. Nguyễn Hữu Thọ, Phước Kiển, Nhà Bè, Thành phố Hồ Chí Minh, Việt Nam'),
(017,'111' ,'ylaem@gmail.com','Như Ý', '2003-08-15', '0', '0765676232','avatar2.jpg','150',' Đ. Nguyễn Hữu Thọ, Phước Kiển, Nhà Bè, Thành phố Hồ Chí Minh, Việt Nam'),
(018,'111' ,'kimsane@gmail.com','Kim Sa', '2003-08-15', '0','012340987','avatar2.jpg', '150','Km 3, QL28, Hàm Liêm, Hàm Thuận Bắc, Bình Thuận, Việt Nam'),
(019,'111' ,'hoangsominh@gmail.com','Hoàng Minh', '2003-08-15','0','0678076541','avatar2.jpg','150',  'QW9C+QR, Phước Thiền, Nhơn Trạch, Đồng Nai, Việt Nam'),
(020,'111' ,'namanh11@gmail.com','Nam Anh','2003-08-15','0',  '0456760672', 'avatar2.jpg','150','772 Đ. Trần Hưng Đạo, Phường 5, Quận 5, Thành phố Hồ Chí Minh, Việt Nam');


-----Bảng danh mục ----
CREATE TABLE `tb_danhmuc` (
  `Ma_dm` int PRIMARY KEY AUTO_INCREMENT,
  `Tendm` varchar(255) DEFAULT NULL,
  `Hinhanh` Varchar(255) DEFAULT NULL,
);
-----Dữ liệu danh mục---------
INSERT INTO `tb_danhmuc`(`Ma_dm`,`Tendm`,`Hinhanh`) VALUES
(1001, 'Áo'),
(1002, 'Quần'),
(1003, 'Chân váy'),
(1004, 'Set đồ'),
(1005, 'Đầm'),
(1006, 'Túi'),
(1007, 'Nón'),
(1008, 'Giày'),
(1009, 'Dép'),
(1010, 'Trang sức'
);


----Bảng Sản phẩm----
CREATE TABLE `tb_sanpham` (
  `Ma_sp` int PRIMARY KEY AUTO_INCREMENT,
  `Ma_dm` int int(11) DEFAULT NULL  ,
  `Tensp` varchar(100) DEFAULT NULL,
  `Gia` float DEFAULT NULL,
  `Giamgia` float DEFAULT NULL,
  `Hinhanhsp` varchar(100) DEFAULT NULL,
  `Motasp` longtext,
  `Thoigianban` date,
  `Thoigiancapnhat` date
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

INSERT INTO `tb_sanpham` (`Ma_sp`, `Ma_dm`, `Tensp`, `Gia`, `Giamgia`, `Hinhanhsp`, `Motasp`, `Thoigianban`, `Thoigiancapnhat`) VALUES
(3001,1003,'Áo bánh bèo 1 ','200.000','170.000','aobanhbeo.jpg','Mô tả sản phẩm: Mềm mại, dễ chịu và ai mặc cũng xink','2023-05-21','2023-05-23'),
(3002,1003,'Áo bánh bèo có ren ','300.000','250.000','aobanhbeocorem.jpg','Nữ tính, xinh đẹp xuất sắc','2023-05-21','2023-05-23'),
(3003,1003,'Áo bánh bèo chấm đen ','210.000','180.000','aobanhbeochamden.jpg','còn chiếc áo nào đep hơn không?','2023-05-21','2023-05-23'),
(3004,1003,'Áo công sở nữ  ','250.000','200.000','aocongso.jpg','áo phong cách nhà quý sờ tộc','2023-05-21','2023-05-23'),
(3005,1002,'Áo thun nam nữ  ','200.000','150.000','aodearphanquang.jpg','áo thun quốc dân 0 có gì để nói','2023-05-21','2023-05-23'),
(3006,1003,'Áo kiểu Hàn Quốc  ','320.000','300.000','aohanquoc.jpg','áo chỉ có tại hàn quắc','2023-05-21','2023-05-23'),
(3007,1003,'Áo khoác đen  ','400.000','350.000','aokhoacden.jpg','áo giày, chất vải 0 xù, dễ dùng','2023-05-21','2023-05-23'),
(3008,1001,'Áo sơ mi đi biển  ','200.000','150.000','aosomidibien.jpg','thích hợp cho mùa hè đi biển','2023-05-21','2023-05-23'),
(3009,1001,'Áo sơ mi lưới tím  ','340.000','300.000','aosomiluoitim.jpg','áo xinh đep đi học đi chơi','2023-05-21','2023-05-23'),
(3010,1002,'Áo thun TOMM  ','200.000','160.000','aothuntomm.jpg','áo thun quốc dân thứ 2222222222222222','2023-05-21','2023-05-23'),
(3011,1002,'Áo xám trắng  ','250.000','200.000','aoxamdennam.jpg','áo xám hàn xẻng có 102','2023-05-21','2023-05-23'),
(3012,1002,'Áo xám đen  ','250.000','210.000','aoxamnam.jpg','áo xám nam mỏng mát ','2023-05-21','2023-05-23'),
(3013,1008,'Chân váy dài  ','310.000','250.000','chanvaydai.jpg','chân váy phù hợp cho các chị gái chứ con trai thì 0','2023-05-21','2023-05-23'),
(3014,1008,'Chân váy jean dài  ','300.000','240.000','chanvayjeanday.jpg','như chân váy dài','2023-05-21','2023-05-23'),
(3015,1008,'Chân váy jean ngắn  ','200.000','190.000','chanvayjeanngan.jpg','váy ngắn xinh đẹp, chủ shop còn mê','2023-05-21','2023-05-23'),
(3016,1008,'Chân váy ngắn  ','280.000','250.000','chanvayngan1.jpg','chủ tiệm cũng mê chân váy này, đẹp khỏi bàn','2023-05-21','2023-05-23'),
(3017,1008,'Chân váy tennis  ','200.000','170.000','chanvaytennis.jpg','chân váy quốc dân,khách hàng tự oánh giá ','2023-05-21','2023-05-23'),
(3018,1006,'Đầm vải voan  ','500.000','450.000','damvaivoan.jpg','đầm sinh nhật, dự tiệc, kỉ yếu......','2023-05-21','2023-05-23'),
(3019,1001,'Áo polo trắn  ','300.000','280.000','polotrang.jpg','áo polo thanh lịch quý phái','2023-05-21','2023-05-23'),
(3020,1005,'Quần da nữ  ','300.000','290.000','quandanu.jpg','quần mang phong cách tráy như fi fai','2023-05-21','2023-05-23'),
(3021,1005,'Quần jean nam  ','300.000','280.000','quanjeannam.jpg','quần jean quốc dân ','2023-05-21','2023-05-23'),
(3022,1005,'Quần jean  ','300.000','280.000','quanjeans.jpg','quần jean nhập khẩu từ hàn quắc','2023-05-21','2023-05-23'),
(3023,1005,'Quần short nam  ','200.000','160.000','quanshort.jpg','quần short lấy sỉ 180k rồi lời có 20k thôi, xin đừng áp voucher','2023-05-21','2023-05-23'),
(3024,1005,'Quần tây  ','470.000','450.000','quantay.jpg','quần đẹp, sang trọng','2023-05-21','2023-05-23'),
(3025,1005,'Quần xám  ','470.000','450.000','quanxam.jpg','quần đẹp, thoáng mát, thoải mái, tặng kèm tất','2023-05-21','2023-05-23'),
(3026,1009,'Set đồ nam 1  ','800.000','700.000','setdonamhanquoc.jpg','set đồ siêu xinh','2023-05-21','2023-05-23'),
(3027,1010,'Set váy nữ 1  ','700.000','650.000','setvaynu.jpg','set váy bán chạy nhất, chỉ duy nhất 1 shop bán','2023-05-21','2023-05-23'),
(3028,1001,'Áo sơ mi đen  ','280.000','240.000','somiden.jpg','áo sơ mi lịch sự','2023-05-21','2023-05-23'),
(3029,1001,'Áo sơ mi đen xanh nam  ','350.000','340.000','somidennam.jpg','áo sơ mi đen sử dụng mọi trường hợp','2023-05-21','2023-05-23'),
(3030,1006,'Váy hồng bồng bềnh  ','400.000','380.000','vayhongcongchua.jpg','váy bồng bềnh, mềm mịn, thoải mái, nhưng sẽ hơi ngứa','2023-05-21','2023-05-23'),
(3031,1007,'Váy trắng bánh bèo  ','500.000','450.000','vaytrang.jpg','váy mềm mịn, xink','2023-05-21','2023-05-23'),
(3032,1007,'Váy tím mộng mer  ','550.000','500.000','vaytimmongmo.jpg','váy nhập khẩu, bên trong là vải voan tơ nên rất mềm mịn','2023-05-21','2023-05-23'),
(3033,1001,'Áo khoác dù trắng  ','400.000','550.000','aokhoacdu.jpg','chất liệu da, ấm áp','2023-05-21','2023-05-23'),
(3034,1001,'Áo khoác len ','500.000','450.000','aokhoaclen.jpg','chất liệu nỉ bông, mềm mịn','2023-05-21','2023-05-23'),
(3035,1001,'Áo kiểu ','500.000','450.000','aokieu.jpg','áo đẹp, xink','2023-05-21','2023-05-23'),
(3036,1001,'Áo kiểu cổ trái tim  ','400.000','450.000','aokieucotim.jpg','áo tay dài, thoải mái','2023-05-21','2023-05-23'),
(3037,1001,'Áo kiểu tay dài trắng tinh  ','300.000','450.000','aokieutaydai.jpg','tôn dáng, xinh xắn','2023-05-21','2023-05-23'),
(3038,1008,'Cao gót đen đính nơ  ','800.000','950.000','caogotden.jpg','mang thoải mái,êm chân','2023-05-21','2023-05-23'),
(3039,1008,'Cao gót xinh xắn 3 màu  ','500.000','450.000','caogotxinhxan.jpg','da mềm, xink','2023-05-21','2023-05-23'),
(3040,1005,'Đầm đen sang trọng  ','500.000','450.000','damden.jpg','chất vải lụa cao cấp','2023-05-21','2023-05-23'),
(3041,1005,'Đầm xanh tay dài ','500.000','450.000','damxanh.jpg','chất len cao cấp, tôn dáng','2023-05-21','2023-05-23'),
(3042,1009,'Dép xỏ ngón mùa hè  ','250.000','300.000','depxongon.jpg','dép nhiều màu, xink','2023-05-21','2023-05-23'),
(3043,1010,'Đồng hồ cao cấp ','700.000','850.000','donghomaunau.jpg','sang trọng, quý phái','2023-05-21','2023-05-23'),
(3044,1008,'Cao gót đế vuông   ','500.000','450.000','giaycaogotdevuong.jpg','thoải mái, nhẹ','2023-05-21','2023-05-23'),
(3044,1008,'Cao gót đính đá lấp lánh  ','500.000','550.000','giaycaogotdinhda.jpg','sang trọng, dễ phối','2023-05-21','2023-05-23'),
(3045,1008,'Giày đen đế bệt  ','500.000','450.000','giaydendebet.jpg','nhẹ nhàng, xink','2023-05-21','2023-05-23'),
(3046,1008,'Giày kiểu màu bạc ','500.000','450.000','giaykieumaubac.jpg','dễ mang, xink','2023-05-21','2023-05-23'),
(3047,1008,'Giày thể thao basic  ','400.000','450.000','giaythethao.jpg','năng động, đơn giản','2023-05-21','2023-05-23'),
(3048,1010,'Kẹp tóc xinh xắn  ','500.000','450.000','keptocxinhxan.jpg','đa dạng, xink','2023-05-21','2023-05-23'),
(3049,1001,'Cardigan tím mộng mơ  ','500.000','450.000','khoaclentim.jpg',' mềm mịn, xink','2023-05-21','2023-05-23'),
(3050,1010,'Lắc tay đính đá full ','700.000','850.000','lactayda.jpg','lấp lánh, sang trọng','2023-05-21','2023-05-23'),
(3051,1010,'Lắc tay đính ngôi sao  ','500.000','450.000','lactayngoisao.jpg','dễ thương, xink','2023-05-21','2023-05-23'),
(3052,1002,'Quần jean basic  ','400.000','450.000','quanjeanbasic.jpg','đơn giản, thoải mái','2023-05-21','2023-05-23'),
(3053,1008,'Giày sandal trắng  ','500.000','450.000','sandaltrang.jpg','da mềm mịn, xink','2023-05-21','2023-05-23'),
(3054,1001,'Sơ mi kiểu sang trọng ','500.000','450.000','somikieu.jpg','sang trọng, tinh khiết, thoải mái','2023-05-21','2023-05-23'),
(3055,1001,'Sơ mi trắng sữa ','500.000','450.000','somitrangsua.jpg','đơn giản, xink','2023-05-21','2023-05-23'),
(3056,1004,'Váy dạ tiệc cao cấp ','500.000','750.000','vaydatiechong.jpg','váy mềm mịn, sang trọng, quý phái','2023-05-21','2023-05-23'),
(3057,1004,'Váy dạ tiệc bánh bèo  ','500.000','450.000','vaykieuhongnhat.jpg','váy mềm mịn, xink xắn','2023-05-21','2023-05-23'),
(3058,1004,'Váy dạ tiệc đính hoa  ','500.000','650.000','vaykieuvang.jpg','váy mềm mịn, xink','2023-05-21','2023-05-23'),
(3059,1004,'Váy trắng bánh bèo xòe ','500.000','450.000','vaykieuxoe.jpg','vải mềm mịn, xink','2023-05-21','2023-05-23'),
(3060,1004,'Váy trắng bánh bèo tinh khiết  ','500.000','450.000','vaytrangtinhkhiet.jpg','váy mềm mịn, xink','2023-05-21','2023-05-23'),
(3061,1004,'Váy trắng bánh bèo cổ tim xòe tà ','500.000','450.000','vaytrangxoe.jpg','váy mềm mịn, xink','2023-05-21','2023-05-23'),
(3062,1004,'Váy tenis xám   ','500.000','450.000','vayxamngan.jpg','váy mềm mịn, xink xắn, đáng yêu','2023-05-21','2023-05-23'),
(3063,1001,'Áo hồng xòe  ','400.000','450.000','vaytrang.jpg','váy dễ thương, xink','2023-05-21','2023-05-23');


-----Bảng Khuyến mãi----
CREATE TABLE `tb_khuyenmai` (
  `Ma_km` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Ma_dm` int(11) DEFAULT NULL,
  `Tenkm` varchar(50) DEFAULT NULL,
  `Diem` int(11) DEFAULT NULL,
  `Giamgia` float DEFAULT NULL,
  `Ma_loai` int(11) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

------Bảng Nhân viên------------
 CREATE TABLE `tb_nhanvien` (
  `Ma_nv` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Tennv` varchar(255) DEFAULT NULL,
  `Matkhau` varchar(255) DEFAULT NULL,
  `Namsinh` date DEFAULT NULL,
  `Gioitinh`bit(1) DEFAULT NULL,
  `Sodt` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `Hinhanh` varchar(200) DEFAULT NULL,
  `Chucvu` varchar(255) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;
INSERT INTO `tb_nhanvien`(`Ma_nv`, `Tennv`, `Matkhau`, `Namsinh`, `Gioitinh`, `Sodt`, `diachi`, `Hinhanh`, `Chucvu`) VALUES 

(1,'Nguyễn Minh Anh', '111', '1990-05-15', 1, '123456789', 'Quận 1, TP.HCM', 'anh1.jpg', 'Nhân viên'),
(2,'Trần Bảo', '123', '1985-08-22', 0, '0987654321', 'Quận 2, TP.HCM', 'anh2.jpg', 'Nhân viên'),
(3,'Lê Văn Minh', 'mmb', '1999-02-10', 1, '0456789123', 'Quận 3, TP.HCM', 'anh3.jpg', 'Nhân viên'),
(4,'Phạm Trung Hiếu', 'anhdepzai', '1999-11-30', 0, '0234567890', 'Quận 4, TP.HCM', 'anh4.jpg', 'Nhân viên'),
(5,'Minh Nguyễn', 'miklammb', '1995-07-18', 1, '0345678901', 'Quận 5, TP.HCM', 'anh5.jpg', 'Nhân viên'),
(6,'Nguyễn Anh', 'kakaka', '2000-09-25', 0, '0678901234', 'Quận 6, TP.HCM', 'anh6.jpg', 'Nhân viên'),
(7,'Mai Lương', 'maine123', '2002-03-08', 1, '0789012345', 'Quận 7, TP.HCM', 'anh7.jpg', 'Nhân viên'),
(8,'Ngô Thanh Mai', 'maidepzai111', '1993-12-05', 0, '0890123456', 'Quận 8, TP.HCM', 'anh8.jpg', 'Quản lý'),
(9,'Phạm Văn Hai', 'mothaiba', '1986-04-20', 1, '0901234567', 'Quận 9, TP.HCM', 'anh9.jpg', 'Nhân viên'),
(10,'Hồ Anh Khải', 'khaidepzai', '2000-10-15', 0, '0123987456', 'Quận 10, TP.HCM', 'anh10.jpg', 'Quản lý'),
(11,'Nguyễn Văn Linh', 'linda123', '2003-06-28', 1, '0567890123', 'Quận 11, TP.HCM', 'anh11.jpg', 'Nhân viên'),
(12,'Trần Văn Minh', 'ratvanminh123', '1996-01-14', 0, '0789012345', 'Quận 12, TP.HCM', 'anh12.jpg', 'Quản lý'),
(13,'Lê Thị Nom', 'nomnom111', '1984-08-02', 1, '0345678901', 'Quận Bình Thạnh, TP.HCM', 'anh13.jpg', 'Nhân viên'),
(14,'Phạm Văn Phát', 'anhdaylaphatdepzai', '1997-04-18', 0, '0567890123', 'Quận Tân Bình, TP.HCM', 'anh14.jpg', 'Quản lý'),
(15,'Hồ Như Quỳnh', 'nhuquynhday123', '1990-11-20', 1, '0678901234', 'Quận Tân Phú, TP.HCM', 'anh15.jpg', 'Nhân viên'),
(16,'Nguyễn Rin', 'emrinne', '2000-05-22', 0, '0890123456', 'Quận Gò Vấp, TP.HCM', 'anh16.jpg', 'Quản lý'),
(17,'Trần Văn Sáng', '12345', '2001-09-10', 1, '0123456789', 'Quận Thủ Đức, TP.HCM', 'anh17.jpg', 'Nhân viên'),
(18,'Lê Thị Thương', 'emthuongday', '1988-02-28', 0, '0234567890', 'Quận Bình Thanh, TP.HCM', 'anh18.jpg', 'Quản lý'),
(19,'Phạm Văn Nga', 'ngaxinkgai', '2003-07-15', 1, '0456789012', 'Quận 5, TP.HCM', 'anh19.jpg', 'Nhân viên'),
(20,'Hoàng Nhật Hoàng', 'nhathoang123', '1986-12-01', 0, '0567890123', 'Quận 10, TP.HCM', 'anh20.jpg', 'Quản lý');
----- Bảng tin tức------
CREATE TABLE `tb_tintuc`(
    `Ma_tt` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`Ma_nv` int(11) DEFAULT NULL,
    `Hinhanh` varchar(50) DEFAULT NULL,
    `Tieude` VARCHAR(255) DEFAULT NULL,
    `Mota` LONGTEXT DEFAULT NULL,
    `Ngay` DATE DEFAULT NULL,
    `Tennv` VARCHAR(50) DEFAULT NULL,
    `Luotthich` VARCHAR(255),
    `Luotxem` VARCHAR(255)   
);
INSERT INTO `tb_tintuc`(`Ma_tt`, `Ma_nv`, `Hinhanh`, `Tieude`, `Mota`, `Ngay`, `Tennv`, `Luotthich`, `Luotxem`) VALUES 


(1, 1,'hinh1.jpg', 'Năm nay, Tay áo càng dài rộng càng mốt', 'Thời trang đúng là thứ trở mặt còn nhanh hơn thời tiết! Bất cứ thứ gì hôm qua còn là mốt, hôm nay có thể không nhận được “sủng ái” nữa. Ngược lại, có những thứ mới vài hôm trước tưởng chẳng ra sao, hôm nay đã bao nhiêu người muốn mặc. Kiểu áo tay dài và rộng nhìn qua có chút bất hợp lý có lẽ là một trong những item thời trang như vậy.', '2024-01-16', 'Nguyễn Minh Anh', '100', '500'),
(2, 2,'hinh2.jpg', '10 items đại diện cho phong cách thời trang Geek Chic', 'Phong cách thời trang Geek Chic – hay còn gọi là phong cách mọt sách, là một trong những phong cách thú vị bạn nên thử áp dụng.Phong cách thời...', '2024-01-15', 'Trần Bảo', '120', '600'),
(3, 3,'hinh3.jpg', 'Áo kẻ ngang chưa bao giờ lo lỗi mốt', 'Không phải tự nhiên mà áo kẻ ngang lại chiếm được cảm tình của các bạn trẻ đến thế Striped Tee hay còn với tên gọi thuần việt là áo kẻ...', '2024-01-14', 'Lê Văn Minh', '80', '450'),
(4, 4,'hinh4.jpg', 'LÝ DO KHIẾN BỘ SƯU TẬP CỦA SHOP TRỞ THÀNH XU HƯỚNG', 'Bộ sưu tập này gợi lại ký ức tuổi thơ của các bạn trẻ về hình ảnh chú mèo méo đáng yêu, thông minh và tình cảm. Với sự cá tính, phá cách và nhiệt huyết của các bạn trẻ thế hệ gen Z, tụi mình tin rằng DORAEMON Collection sẽ trở nên phổ biến và được ưa chuộng rộng rãi.', '2024-01-13', 'Phạm Trung Hiếu', '150', '700'),
(5, 10,'hinh5.jpg', 'LÝ DO KHIẾN BỘ SƯU TẬP CỦA SHOP TRỞ THÀNH XU HƯỚNG', 'Gu thời trang tối giản chưa bao giờ lỗi thời đối với các bạn trẻ yêu thích sự năng động và phóng khoáng. Với mong muốn đem đến các bạn những item Streetwear cao cấp, sang trọng nhưng lại giản dị, nhiều mẫu áo thun trơn được với thiết kế tối giản luôn được Lì Ven ra mắt trong suốt nhiều năm qua.', '2024-01-12', 'Hồ Anh Khải', '90', '550'),
(6, 11,'hinh6.jpg', 'KHÁM PHÁ 5 TONE MÀU ĐÓN HÈ CÙNG LEVENTS', 'Nhận thấy phản ứng tích cực của khách hàng khi áo thun baby tee xuất hiện, nhiều thương hiệu thời trang tại Việt Nam đã bắt đầu tung ra thị trường các bộ sưu tập baby tee mang phong cách riêng. Để thu hút sự chú ý của các bạn trẻ gen Z, họ ưu tiên sử dụng tone màu tươi sáng kết hợp với các họa tiết, in, thêu cùng chất liệu vượt trội.', '2024-01-11', 'Nguyễn Văn Linh', '110', '600'),
(7, 12,'hinh7.jpg', 'THỜI TRANG THẬP NIÊN 90 VÀ NHỮNG OUTFIT TỪNG LÀM MƯA LÀM GIÓ', 'Thập niên 90 có thể nói là một thời kỳ đỉnh cao của ngành công nghiệp thời trang Việt Nam. Bởi trong giai đoạn này, Việt Nam được chứng kiến sự đổi mới và phát triển của nền kinh tế, văn hóa – xã hội, góp phần tạo nên sự đa dạng, phong phú hơn trong lối ăn mặc của người Việt', '2024-01-10', 'Trần Văn Minh', '130', '650'),
(8, 13,'hinh8.jpg', 'XU HƯỚNG THỜI TRANG CHO PHÁI ĐẸP QUA CÁC THỜI KỲ ', 'Những chiếc chân váy xòe dáng rộng và áo sơ mi là những item được phụ nữ của thời đại này ưa chuộng và theo đuổi nhờ thiết kế thanh lịch. Sự bồng bềnh của những chiếc váy đem lại một cảm giác mềm mại, nhẹ nhàng làm nổi bật nét nữ tính của phái đẹp', '2024-01-09', 'Lê Thị Nom', '70', '400'),
(9, 14,'hinh9.jpg', 'MỆNH THỦY HỢP VỚI MÀU GÌ VÀ BÍ QUYẾT DIỆN ĐỒ THEO MỆNH HỢP TREND', 'Xét theo nhân tướng học, phần lớn những người mệnh thủy đều sở hữu khuôn mặt bầu bĩnh, đầy đặn. Chính lý do này khiến người mệnh thủy trẻ lâu và tràn đầy sức sống hơn những mệnh còn lại. Nam nữ mệnh Thủy có chiều cao tương đối cùng với sắc da hồng hào nên ở họ luôn toát ra nguồn năng lượng tích cực lan tỏa đến mọi người xung quanh', '2024-01-08', 'Phạm Văn Phát', '100', '500'),
(10, 15,'hinh10.jpg', 'PHONG CÁCH ROCK LÀ GÌ? BỎ TÚI 7 CÁCH MIX ĐỒ CỰC CHẤT', 'Phong cách rock là gì? Chắc hẳn đây là tên gọi không còn quá xa lạ với những bạn trẻ yêu thích style trẻ trung, phá cách và có phần khá “gai góc”. Rock style được hình thành từ sự kết hợp giữa nét cổ điển và phong cách hiện đại, tạo nên lối ăn mặc cá tính nhưng vẫn đảm bảo sự thanh lịch và sang trọng.', '2024-01-07', 'Hồ Như Quỳnh', '120', '600'),
(11, 19,'hinh11.jpg', 'Năm nay, Tay áo càng dài rộng càng mốt 2024', 'Mô tả tin tức 11...', '2024-01-06', 'Phạm Văn Nga', '80', '450'),
(12, 20,'hinh12.jpg', 'BST MỚI', 'Giáng sinh qua rồi cùng đón chào năm mới....', '2024-01-05', 'Hoàng Nhật Hoàng', '150', '700'),
(13, 1,'hinh13.jpg', 'Đón chào năm mới', 'Chi nhánh mới sắp khai trương tại Thảo điền Q2', '2024-01-04', 'Nguyễn Minh Anh', '90', '550'),
(14, 2,'hinh14.jpg', 'Tết đến xuân về', 'Hãy cùng shop sắm bộ đồ tết để đi ngao du cùng với gia đình nào...', '2024-01-03', 'Trần Bảo', '110', '600'),
(15, 3,'hinh15.jpg', 'Happy New Year', 'Chào mừng năm mới cùng shop với nhiều sản phẩm mới siêu hót', '2024-01-02', 'Lê Văn Minh', '130', '650'),
(16, 6,'hinh16.jpg', 'Hot News', 'Sản phẩm mới có 1 không 2 đây sắp được review bởi KOL...', '2024-01-01', 'Nguyễn Anh', '70', '400'),
(17, 9,'hinh17.jpg', 'Ra mắt sản phẩm mới !!!', 'Shop cho các BST mới mẻ đáp ứng sở thích các giới trẻ hiện nay...', '2023-12-31', 'Phạm Văn Hai', '100', '500'),
(18, 11,'hinh18.jpg', 'Đón năm mới cùng shop KBM', 'Chào mừng năm mới, tết đến xuân về...', '2023-12-30', 'Nguyễn Văn Linh', '120', '600'),
(19, 11,'hinh19.jpg', 'Chuẩn bị giao thừa', 'Mua sắm đồ tại shop nhận ngay các phần quà may mắn mang về cho gia đình thôi nàoooo', '2023-12-29', 'Nguyễn Văn Linh', '80', '450'),
(20, 12,'hinh20.jpg', 'Còn vài ngày nữa thôi là đón giao thừa', 'Khách hàng thân thiết của chúng tôi hãy đón nhận các phần quà đặc sắc khi đến shop mua BST mới....', '2023-12-28', 'Trần Văn Minh', '150', '700')


----Bảng đặt hàng------
CREATE TABLE `tb_dathang` (
  `Ma_dh` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Ma_nv` int(11) DEFAULT NULL,
  `Hoten` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Sodt` int(11) DEFAULT NULL,
  `Diachi` varchar(255) DEFAULT NULL,
  `Ngaydathang` date DEFAULT NULL,
  `Giodat` time DEFAULT NULL,
  `Ghichu` varchar(255) DEFAULT NULL
 
);
------Bảng chi tiết đặt hàng---------

CREATE TABLE `tb_chitietdathang` (
  `Ma_dh` int(11) DEFAULT NULL,
  `Ma_sp` int(11) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;



-----Chỉ mục cho bảng----------
----
--BẢNG TIN TỨC-----
ALTER TABLE `tb_tintuc`
  ADD KEY `Ma_nv` (`Ma_nv`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `tb_dathang`
  ADD KEY `Ma_nv` (`Ma_nv`),
  ADD KEY `Hoten` (`Hoten`);

--
-- Chỉ mục cho bảng `chi tiết đặt hàng`
--
ALTER TABLE `tb_chitietdathang`
  ADD KEY `Ma_sp` (`Ma_sp`),
  ADD KEY `Ma_dh` (`Ma_dh`);

--
-- Chỉ mục cho bảng `Sản phẩm`
--
ALTER TABLE `tb_sanpham`
  ADD KEY `Ma_dm` (`Ma_dm`);

--
-- Chỉ mục cho bảng `Khuyến mãi` 
--
ALTER TABLE `tb_khuyenmai`
  ADD KEY `Ma_dm` (`Ma_dm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Đặt hàng` 
--
ALTER TABLE `tb_dathang`
  MODIFY `Ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--

--

-- AUTO_INCREMENT cho bảng `Nhân viên`
--
ALTER TABLE `tb_nhanvien`
  MODIFY `Ma_nv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `Khuyến mãi` 
--
ALTER TABLE `tb_khuyenmai`
  MODIFY `Ma_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
--
-- AUTO_INCREMENT cho bảng `Tin tức`
--
ALTER TABLE `tb_tintuc`
  MODIFY `Ma_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--


--
-- AUTO_INCREMENT cho bảng `Sản phẩm`
--
ALTER TABLE `tb_sanpham`
  MODIFY `Ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Tin tức` xong
--
ALTER TABLE `tb_tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`Ma_nv`) REFERENCES `tb_nhanvien` (`Ma_nv`);

--
-- Các ràng buộc cho bảng `Đặt hàng` chưa được
--
ALTER TABLE `tb_dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`Ma_nv`) REFERENCES `tb_nhanvien` (`Ma_nv`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`Hoten`) REFERENCES `tb_khachhang` (`Hoten`);

--
-- Các ràng buộc cho bảng `Chi tiết đơn hàng` 
--
ALTER TABLE `tb_chitietdonhhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`Ma_sp`) REFERENCES `tb_sanpham` (`Ma_sp`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`Ma_dh`) REFERENCES `tb_dathang` (`Ma_dh`);

--
-- Các ràng buộc cho bảng `Sản phẩm`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `tb_sanpham_ibfk_1` FOREIGN KEY (`Ma_dm`) REFERENCES `tb_danhmuc` (`Ma_dm`);

--
-- Các ràng buộc cho bảng `vouchers` xong
--
ALTER TABLE `tb_khuyenmai`
  ADD CONSTRAINT `tb_khuyenmai_ibfk_1` FOREIGN KEY (`Ma_dm`) REFERENCES `tb_danhmuc` (`Ma_dm`);
COMMIT;
