<?php
class tintuc{
    private $conn;

  public $Ma_tt;
  public $Ma_nv;
  public $Hinhanh;
  public $Tieude;
  public $Mota;
  public $Ngay;
  public $Tennv;
  public $luotthich;
  public $luotxem;

  
  //kết nối db
  public function __construct($db) {
      $this->conn = $db;
  }

  //Đọc data
   public function read(){
      $query = " SELECT * FROM tb_tintuc ORDER BY Ma_tt ASC";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
   }
   public function show(){
    $query = " SELECT * FROM tb_tintuc Where Ma_tt=? LIMIT 1 ";

    $stmt = $this->conn->prepare($query);
    $stmt ->bindParam(1,$this->Ma_tt);
    $stmt->execute();
}
public function create(){
    $query = "INSERT INTO tb_tintuc SET Ma_nv=:Ma_nv, Hinhanh=:Hinhanh, Tieude=:Tieude, Mota=:Mota, Ngay=:Ngay, Tennv=:Tennv, luotthich=:luotthich, luotxem=:luotxem";

    $stmt =$this->conn->prepare($query);

      $this->Ma_nv= htmlspecialchars(strip_tags($this->Ma_nv));
      $this->Hinhanh =htmlspecialchars(strip_tags($this->Hinhanh));
      $this->Tieude =htmlspecialchars(strip_tags($this->Tieude));
      $this->Mota =htmlspecialchars(strip_tags($this->Mota));
      $this->Ngay =htmlspecialchars(strip_tags($this->Ngay));
      $this->Tennv =htmlspecialchars(strip_tags($this->Tennv));
      $this->luotthich =htmlspecialchars(strip_tags($this->luotthich));
      $this->luotxem =htmlspecialchars(strip_tags($this->luotxem));

      $stmt->bindParam(':Ma_nv',$this->Ma_nv);
      $stmt->bindParam(':Hinhanh',$this->Hinhanh);
      $stmt->bindParam(':Tieude',$this->Tieude);
      $stmt->bindParam(':Mota',$this->Mota);
      $stmt->bindParam(':Ngay',$this->Ngay);
      $stmt->bindParam(':Tennv',$this->Tennv);
      $stmt->bindParam(':luotthich',$this->luotthich);
      $stmt->bindParam(':luotxem',$this->luotxem);
   
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }
   //hàm update
   public function update(){
    $query = "UPDATE tb_tintuc SET Ma_nv=:Ma_nv, Hinhanh=:Hinhanh, Tieude=:Tieude, Mota=:Mota, Ngay=:Ngay, Tennv=:Tennv, luotthich=:luotthich, luotxem=:luotxem
    WHERE Ma_tt=:Ma_tt";

    $stmt =$this->conn->prepare($query);

      $this->Ma_nv= htmlspecialchars(strip_tags($this->Ma_nv));
      $this->Hinhanh =htmlspecialchars(strip_tags($this->Hinhanh));
      $this->Tieude =htmlspecialchars(strip_tags($this->Tieude));
      $this->Mota =htmlspecialchars(strip_tags($this->Mota));
      $this->Ngay =htmlspecialchars(strip_tags($this->Ngay));
      $this->Tennv =htmlspecialchars(strip_tags($this->Tennv));
      $this->luotthich =htmlspecialchars(strip_tags($this->luotthich));
      $this->luotxem =htmlspecialchars(strip_tags($this->luotxem));
      $this->Ma_tt =htmlspecialchars(strip_tags($this->Ma_tt));
     

      $stmt->bindParam(':Ma_nv',$this->Ma_nv);
      $stmt->bindParam(':Hinhanh',$this->Hinhanh);
      $stmt->bindParam(':Tieude',$this->Tieude);
      $stmt->bindParam(':Mota',$this->Mota);
      $stmt->bindParam(':Ngay',$this->Ngay);
      $stmt->bindParam(':Tennv',$this->Tennv);
      $stmt->bindParam(':luotthich',$this->luotthich);
      $stmt->bindParam(':luotxem',$this->luotxem);
      $stmt->bindParam(':Ma_tt',$this->Ma_nv);
     
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }


   //xóa
   public function delete(){
    $query = "DELETE FROM tb_tintuc WHERE Ma_tt=:Ma_tt";
    $stmt =$this->conn->prepare($query);
    $stmt->bindParam(':Ma_tt',$this->Ma_tt);
      
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }

}

?>