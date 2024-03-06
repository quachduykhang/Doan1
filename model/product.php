<?php
  class product{
      private $conn;

    public $Ma_sp;
    public $Ma_dm;
    public $Tensp;
    public $Gia;
    public $Giamgia;
    public $Hinhanhsp;
    public $Motasp;
    public $Thoigianban;
    public $Thoigiancapnhat;

    
    //kết nối db
    public function __construct($db) {
        $this->conn = $db;
    }

    //Đọc data
     public function read(){
        $query = " SELECT * FROM tb_sanpham ORDER BY Ma_sp DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
     }
    //Show data 
    public function show(){
      $query = " SELECT * FROM tb_sanpham Where Tensp LIKE '%{Tennv}%'  LIMIT 1 ";

      $stmt = $this->conn->prepare($query);
      $stmt ->bindParam(1,$this->Tensp);
      $stmt->execute();
     
   
      $row =$stmt->fetch(PDO::FETCH_ASSOC);
      
      $this->Ma_dm =$row['Ma_dm'];
      $this->Tensp =$row['Tensp'];
      $this->Gia =$row['Gia'];
      $this->Giamgia =$row['Giamgia'];
      $this->Hinhanhsp =$row['Hinhanhsp'];
      $this->Motasp =$row['Motasp'];
      $this->Thoigianban =$row['Thoigianban'];
      $this->Thoigiancapnhat =$row['Thoigiancapnhat'];

   }
   // hàm thêm
   public function create(){
    $query = "INSERT INTO tb_sanpham SET Ma_dm=:Ma_dm, Tensp=:Tensp, Gia=:Gia, Giamgia=:Giamgia, Hinhanhsp=:Hinhanhsp, Motasp=:Motasp, Thoigianban=:Thoigianban, Thoigiancapnhat=:Thoigiancapnhat";

    $stmt =$this->conn->prepare($query);

      $this->Ma_dm= htmlspecialchars(strip_tags($this->Ma_dm));
      $this->Tensp =htmlspecialchars(strip_tags($this->Tensp));
      $this->Gia =htmlspecialchars(strip_tags($this->Gia));
      $this->Giamgia =htmlspecialchars(strip_tags($this->Giamgia));
      $this->Hinhanhsp =htmlspecialchars(strip_tags($this->Hinhanhsp));
      $this->Motasp =htmlspecialchars(strip_tags($this->Motasp));
      $this->Thoigianban =htmlspecialchars(strip_tags($this->Thoigianban));
      $this->Thoigiancapnhat =htmlspecialchars(strip_tags($this->Thoigiancapnhat));

      $stmt->bindParam(':Ma_dm',$this->Ma_dm);
      $stmt->bindParam(':Tensp',$this->Tensp);
      $stmt->bindParam(':Gia',$this->Gia);
      $stmt->bindParam(':Giamgia',$this->Giamgia);
      $stmt->bindParam(':Hinhanhsp',$this->Hinhanhsp);
      $stmt->bindParam(':Motasp',$this->Motasp);
      $stmt->bindParam(':Thoigianban',$this->Thoigianban);
      $stmt->bindParam(':Thoigiancapnhat',$this->Thoigiancapnhat);
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }
   //hàm update
   public function update(){
    $query = "UPDATE tb_sanpham SET Ma_dm=:Ma_dm, Tensp=:Tensp, Gia=:Gia, Giamgia=:Giamgia, Hinhanhsp=:Hinhanhsp, Motasp=:Motasp, Thoigianban=:Thoigianban, Thoigiancapnhat=:Thoigiancapnhat
    WHERE Ma_sp=:Ma_sp";

    $stmt =$this->conn->prepare($query);

      $this->Ma_dm= htmlspecialchars(strip_tags($this->Ma_dm));
      $this->Tensp =htmlspecialchars(strip_tags($this->Tensp));
      $this->Gia =htmlspecialchars(strip_tags($this->Gia));
      $this->Giamgia =htmlspecialchars(strip_tags($this->Giamgia));
      $this->Hinhanhsp =htmlspecialchars(strip_tags($this->Hinhanhsp));
      $this->Motasp =htmlspecialchars(strip_tags($this->Motasp));
      $this->Thoigianban =htmlspecialchars(strip_tags($this->Thoigianban));
      $this->Thoigiancapnhat =htmlspecialchars(strip_tags($this->Thoigiancapnhat));
      $this->Ma_sp =htmlspecialchars(strip_tags($this->Ma_sp));
     

      $stmt->bindParam(':Ma_dm',$this->Ma_dm);
      $stmt->bindParam(':Tensp',$this->Tensp);
      $stmt->bindParam(':Gia',$this->Gia);
      $stmt->bindParam(':Giamgia',$this->Giamgia);
      $stmt->bindParam(':Hinhanhsp',$this->Hinhanhsp);
      $stmt->bindParam(':Motasp',$this->Motasp);
      $stmt->bindParam(':Thoigianban',$this->Thoigianban);
      $stmt->bindParam(':Thoigiancapnhat',$this->Thoigiancapnhat);
      $stmt->bindParam(':Thoigiancapnhat',$this->Thoigiancapnhat);
      $stmt->bindParam(':Ma_sp',$this->Ma_sp);
      
      
      if($stmt->execute()){
      return true;
     } 
     printf("Error %s. \n" ,$stmt->error);
     return false;
   }
     //hàm delete
     public function delete(){
      $query = "DELETE FROM tb_sanpham WHERE Ma_sp=:Ma_sp";
  
      $stmt =$this->conn->prepare($query);
  
  
       
        $stmt->bindParam(':Ma_sp',$this->Ma_sp);
        
        
        if($stmt->execute()){
        return true;
       } 
       printf("Error %s. \n" ,$stmt->error);
       return false;
     }

  }
?>