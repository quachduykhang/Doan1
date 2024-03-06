<?php
class nhanvien{
    private $conn;

  public $Ma_nv;
  public $Tennv;
  public $Matkhau;
  public $Namsinh;
  public $Gioitinh;
  public $Sodt;
  public $diachi;
  public $Hinhanh;
  public $chucvu;

  
  //kết nối db
  public function __construct($db) {
      $this->conn = $db;
  }
// Đọc dữ liệu
public function read(){
    $query = " SELECT * FROM tb_nhanvien ORDER BY Ma_nv DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;

}
//SHOW NHÂN VIÊN
public function show(){
    $query = " SELECT * FROM tb_nhanvien Where Ma_nv=? LIMIT 1 ";

    $stmt = $this->conn->prepare($query);
    $stmt ->bindParam(1,$this->Ma_nv);
    $stmt->execute();
}
public function create(){
    $query = "INSERT INTO tb_nhanvien SET Tennv=:Tennv, Matkhau=:Matkhau, Namsinh=:Namsinh, Gioitinh=:Gioitinh, Sodt=:Sodt, diachi=:diachi, Hinhanh=:Hinhanh , chucvu=:chucvu";

    $stmt =$this->conn->prepare($query);

      $this->Tennv= htmlspecialchars(strip_tags($this->Tennv));
      $this->Matkhau =htmlspecialchars(strip_tags($this->Matkhau));
      $this->Namsinh =htmlspecialchars(strip_tags($this->Namsinh));
      $this->Gioitinh =htmlspecialchars(strip_tags($this->Gioitinh));
      $this->Sodt =htmlspecialchars(strip_tags($this->Sodt));
      $this->diachi =htmlspecialchars(strip_tags($this->diachi));
      $this->Hinhanh =htmlspecialchars(strip_tags($this->Hinhanh));
      $this->chucvu =htmlspecialchars(strip_tags($this->chucvu));

      $stmt->bindParam(':Tennv', $this->Tennv);
      $stmt->bindParam(':Matkhau', $this->Matkhau);
      $stmt->bindParam(':Namsinh', $this->Namsinh);
      $stmt->bindParam(':Gioitinh', $this->Gioitinh);
      $stmt->bindParam(':Sodt', $this->Sodt);
      $stmt->bindParam(':diachi', $this->diachi);
      $stmt->bindParam(':Hinhanh', $this->Hinhanh);
      $stmt->bindParam(':chucvu', $this->chucvu);
      $stmt->bindParam(':Matkhau', $this->Matkhau);
     
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }
   public function update(){
    $query = "UPDATE tb_nhanvien SET Tennv=:Tennv, Matkhau=:Matkhau, Namsinh=:Namsinh, Gioitinh=:Gioitinh, Sodt=:Sodt, Sodt=:Sodt, diachi=:diachi, Hinhanh=:Hinhanh , chucvu=:chucvu
    WHERE Ma_nv=:Ma_nv";

    $stmt =$this->conn->prepare($query);

      $this->Tennv= htmlspecialchars(strip_tags($this->Tennv));
      $this->Matkhau =htmlspecialchars(strip_tags($this->Matkhau));
      $this->Namsinh =htmlspecialchars(strip_tags($this->Namsinh));
      $this->Gioitinh =htmlspecialchars(strip_tags($this->Gioitinh));
      $this->Sodt =htmlspecialchars(strip_tags($this->Sodt));
      $this->diachi =htmlspecialchars(strip_tags($this->diachi));
      $this->Hinhanh =htmlspecialchars(strip_tags($this->Hinhanh));
      $this->chucvu =htmlspecialchars(strip_tags($this->chucvu));
      $this->Ma_nv =htmlspecialchars(strip_tags($this->Ma_nv));
     

      $stmt->bindParam(':Ma_dm',$this->Tennv);
      $stmt->bindParam(':Tensp',$this->Matkhau);
      $stmt->bindParam(':Gia',$this->Namsinh);
      $stmt->bindParam(':Giamgia',$this->Gioitinh);
      $stmt->bindParam(':Hinhanhsp',$this->Sodt);
      $stmt->bindParam(':Motasp',$this->diachi);
      $stmt->bindParam(':Thoigianban',$this->Hinhanh);
      $stmt->bindParam(':Thoigiancapnhat',$this->chucvu);
      $stmt->bindParam(':Thoigiancapnhat',$this->Ma_nv);
     
      
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }
   //hàm delete
   public function delete(){
    $query = "DELETE FROM tb_nhanvien WHERE Ma_nv=:Ma_nv";

    $stmt =$this->conn->prepare($query);


     
      $stmt->bindParam(':Ma_nv',$this->Ma_nv);
      
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }
}
?>