<?php
include('../../../configuration/connect.php');

if(isset($_POST['themsanpham'])){
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    // Xử lý hình ảnh
    $anhsp = $_FILES['anhsp']['name'];
    $anhsp_tmp = $_FILES['anhsp']['tmp_name'];
    $anhsp = time().'_'.$anhsp;
    // 
    $phukien = $_POST['phukien'];
    $baohanh = $_POST['baohanh'];
    $trangthai = $_POST['trangthai'];
    $mieuta = $_POST['mieuta'];
    $category_id = $_POST['category_id'];
    $spnoibat = $_POST['spnoibat'];

    // Kiểm tra lỗi trước khi thêm sản phẩm
    if(empty($tensp) || empty($giasp) || empty($anhsp) || empty($phukien) || empty($baohanh) || empty($trangthai) || empty($mieuta) || empty($category_id) || empty($spnoibat)){
        echo "Vui lòng điền đầy đủ thông tin";
    }else{
        // Thêm sản phẩm
        $sql_them = "INSERT INTO tbl_product(tensp, giasp, anhsp, phukien, baohanh, trangthai, mieuta, category_id, spnoibat) 
        VALUES ('".$tensp."', '".$giasp."', '".$anhsp."', '".$phukien."', '".$baohanh."', '".$trangthai."', '".$mieuta."', '".$category_id."', '".$spnoibat."')";
        mysqli_query($conn,$sql_them);

        // Di chuyển hình ảnh vào thư mục uploads
        move_uploaded_file($_FILES['anhsp']['tmp_name'], 'uploads/'.$anhsp);

        header('location: ../../index.php?action=quanlysanpham&query=them');
    }
}
?>