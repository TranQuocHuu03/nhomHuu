<?php
            include "connect.php";
            if (isset($_POST['save'])) {
              if (isset($_FILES['image'])) {
                if ($_FILES['image']['size'] == 0) {
                  echo "bạn chưa chọn file";
                } else {
                  if (isset($_FILES['image'])) {
                    $file = $_FILES['image'];
                    $tenfile = $file['name'];
                    // move_uploaded_file($file['tmp_name'], $tenfile);
                    move_uploaded_file($file['tmp_name'],   $tenfile);
                    echo "up file success!";
                  }
                }
              }
              if (isset($_POST['save'])) {
                $name = $_POST['namesp'];
                $price = $_POST['price'];
                $descript = $_POST['descript'];
                $image = $tenfile;
                $warranty = $_POST['warranty'];
                $sql = "INSERT INTO sanpham(namesp , price , image, warranty ,descript)
                VALUE('$name','$price' ,'$image','$warranty',' $descript')
                ";
                if(mysqli_query($conn, $sql)){
                  header("location:product.php");
                }
                
              }
            }
            ?>