<?php
    if(isset($_POST['btnSignup'])){
        header("location:signup.php");
    }

    $user1 = $_POST['txtHo'];
    $user2 = $_POST['txtTen'];
    $email = $_POST['txtgmail'];
    $pass1 = $_POST['txtmatkhau'];
    $pass2 = $_POST['txtxacnhan'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'taikhoan');
    if(!$conn){
        die("Kết nối thất bại");
    }
    $sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email' OR tendangnhap='$user1 + $user2'";


    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Email đã tồn tại";
        header("location: signup.php?error=$error");
    }else{
        $pass_md5 = md5($pass1);
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql02 = "INSERT INTO db_nguoidung (tendangnhap, email, matkhau) VALUES('$user', '$email', '$pass_hash')";
        $result02 = mysqli_query($conn,$sql02);

        if($result02 == true){
            header("location:login.php");
        }else{
            $error = "Can not insert record, Please check ....";
            header("location: signup.php?error=$error");
        }
    }

    mysqli_close($conn);
?>
