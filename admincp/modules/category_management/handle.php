<!-- <?php
include('../../../configuration/connect.php');

if(isset($_POST['tendanhmuc']) && isset($_POST['thutu'])){
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    
    
    if ($conn) {
        $sql_them = "INSERT INTO tbl_category (name_list, sequence) VALUES ('$tenloaisp', '$thutu')";
        mysqli_query($conn, $sql_them);

        header('Location: ../../index.php?action=quanlydanhmucsanpham');
        
    }elseif(isset($_POST['suadanhmuc'])){

    }else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_category WHERE category_id = '$id'";
        mysqli_query($conn, $sql_xoa);
        header('Location: ../../index.php?action=quanlydanhmucsanpham');
    }
}
?> -->

<?php
session_start();
if($_SESSION['email']== "admin123@gmail.com" && $_SESSION['pass'] == "admin123"){
    $category_id=$_GET['category_id'];
    // include_once '../../configuration/connect.php';
    $sql = "delete from tbl_category where category_id='$category_id'";
    $query = mysqli_query($conn,$sql);
    header('location:../../index.php?action=quanlydanhmucsanpham');
}
else header('location:index.php');
?>