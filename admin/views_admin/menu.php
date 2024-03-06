<div class ="menu">
<?php
if(isset($_GET['action'])){
   $tam =$_GET['action'];

}else{
    $tam ='';
}
if($tam =='quanlysanpham')
{

    include("module/quanlysanpham/them.php");
    include("module/quanlysanpham/lietke.php");
}else{
    include("module/dashboard.php");
}

?>
</div>
<div class="main">



</div>