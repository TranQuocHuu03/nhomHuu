<?php
    // lấy dữ liệu cần xóa
    include "connect.php";
    $id=$_GET['delete'];
    $_fileHA=$_GET['image'];
    $xoa_sql="DELETE FROM sanpham WHERE id=$id";
    if(mysqLi_query($conn, $xoa_sql)){
        unlink($_fileHA);
        header("location:product.php");
    }
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu

    
?>