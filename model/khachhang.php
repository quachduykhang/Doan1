<?php
  class khachhang{
    private $conn;

    public $Ma_kh;
    public $Matkhau;
    public $Email;
    public $Hoten;
    public $Namsinh;
    public $Gioitinh;
    public $Sodt;
    public $Hinhanh;
    public $Diem;
    public $Diachi;

    
    //kết nối db
    public function __construct($db) {
        $this->conn = $db;
    }
    // Đọc dữ liệu
    public function read(){
        $query = " SELECT * FROM tb_khachhang ORDER BY Ma_kh ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
     }

    //login
  /*  public function login($email, $password) {
      $login = "SELECT * FROM `tb_khachhang` WHERE `Email`=? AND `Matkhau`=?";
      $stmt = $this->conn->prepare($login);
      $stmt->bind_param('1', $this->Email, $this->Matkhau);
      $stmt->execute();
      $result = $stmt->get_result();
    } 
 */
      //Show data tìm kiếm
    public function show(){
        $query = " SELECT * FROM tb_khachhang Where Ma_kh=? LIMIT 1 ";
  
        $stmt = $this->conn->prepare($query);
        $stmt ->bindParam(1,$this->Ma_kh);
        $stmt->execute();
       
     
        $row =$stmt->fetch(PDO::FETCH_ASSOC);
        
        $this->Matkhau =$row['Matkhau'];
        $this->Email =$row['Email'];
        $this->Hoten =$row['Hoten'];
        $this->Namsinh =$row['Namsinh'];
        $this->Gioitinh =$row['Gioitinh'];
        $this->Sodt =$row['Sodt'];
        $this->Hinhanh =$row['Hinhanh'];
        $this->Diem=$row['Diem'];
        $this->Diachi =$row['Diachi'];
  
     }
     //thêm
     public function create(){
      $query = "INSERT INTO tb_khachhang SET Matkhau=:Matkhau, Email=:Email, Hoten=:Hoten, Namsinh=:Namsinh, Gioitinh=:Gioitinh, Sodt=:Sodt, Hinhanh=:Hinhanh, Diem=:Diem , Diachi=:Diachi";
  
      $stmt =$this->conn->prepare($query);
  
        $this-> Matkhau= htmlspecialchars(strip_tags($this->Matkhau));
        $this->Email =htmlspecialchars(strip_tags($this->Email));
        $this->Hoten =htmlspecialchars(strip_tags($this->Hoten));
        $this->Namsinh =htmlspecialchars(strip_tags($this->Namsinh));
        $this->Gioitinh =htmlspecialchars(strip_tags($this->Gioitinh));
        $this->Sodt =htmlspecialchars(strip_tags($this->Sodt));
        $this->Hinhanh =htmlspecialchars(strip_tags($this->Hinhanh));
        $this->Diem =htmlspecialchars(strip_tags($this->Diem));
  
        $stmt->bindParam(':Matkhau',$this->Matkhau);
        $stmt->bindParam(':Email',$this->Email);
        $stmt->bindParam(':Hoten',$this->Hoten);
        $stmt->bindParam(':Namsinh',$this->Namsinh);
        $stmt->bindParam(':Gioitinh',$this->Gioitinh);
        $stmt->bindParam(':Sodt',$this->Sodt);
        $stmt->bindParam(':Hinhanh',$this->Hinhanh);
        $stmt->bindParam(':Diem',$this->Diem);
        $stmt->bindParam(':Diachi',$this->Diachi);
        
        if($stmt->execute()){
        return true;
       } 
       printf("Error %s. \n" ,$stmt->error);
       return false;
     }
     //update 
     public function update(){
      $query = "UPDATE tb_khachhang SET Matkhau=:Matkhau, Email=:Email, Hoten=:Hoten, Namsinh=:Namsinh, Gioitinh=:Gioitinh, Sodt=:Sodt, Hinhanh=:Hinhanh, Diem=:Diem , Diachi=:Diachi
      WHERE Ma_kh=:Ma_kh";
  
      $stmt =$this->conn->prepare($query);
  
        $this->Matkhau= htmlspecialchars(strip_tags($this->Matkhau));
        $this->Email =htmlspecialchars(strip_tags($this->Email));
        $this->Hoten =htmlspecialchars(strip_tags($this->Hoten));
        $this->Namsinh =htmlspecialchars(strip_tags($this->Namsinh));
        $this->Gioitinh =htmlspecialchars(strip_tags($this->Gioitinh));
        $this->Sodt =htmlspecialchars(strip_tags($this->Sodt));
        $this->Hinhanh =htmlspecialchars(strip_tags($this->Hinhanh));
        $this->Diem =htmlspecialchars(strip_tags($this->Diem));
        $this->Diachi =htmlspecialchars(strip_tags($this->Diachi));
        $this->Ma_kh =htmlspecialchars(strip_tags($this->Ma_kh));

       
  
        $stmt->bindParam(':Matkhau',$this->Matkhau);
        $stmt->bindParam(':Email',$this->Email);
        $stmt->bindParam(':Hoten',$this->Hoten);
        $stmt->bindParam(':Namsinh',$this->Namsinh);
        $stmt->bindParam(':Gioitinh',$this->Gioitinh);
        $stmt->bindParam(':Sodt',$this->Sodt);
        $stmt->bindParam(':Hinhanh',$this->Hinhanh);
        $stmt->bindParam(':Diem',$this->Diem);
        $stmt->bindParam(':Diachi',$this->Diachi);
        $stmt->bindParam(':Ma_kh',$this->Ma_kh);
        
        
        if($stmt->execute()){
        return true;
       } 
       printf("Error %s. \n" ,$stmt->error);
       return false;
     }
     //hàm delete
     public function delete(){
      $query = "DELETE FROM tb_khachhang WHERE Ma_kh=:Ma_kh";
  
      $stmt =$this->conn->prepare($query);
  
  
       
        $stmt->bindParam(':Ma_kh',$this->Ma_kh);
        
        
        if($stmt->execute()){
        return true;
       } 
       printf("Error %s. \n" ,$stmt->error);
       return false;
     }
  }


?>