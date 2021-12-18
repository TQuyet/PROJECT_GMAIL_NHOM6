<?php
    
    session_start();

    
    if(isset($_POST['btnSignInpass'])){
        $email = $_POST['txtpass'];
        
       

        
        $conn = mysqli_connect('localhost','root','','dhtl_danhba');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        
        $sql = "SELECT * FROM db_nguoidung WHERE email = '$email'";
        

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            
            $_SESSION['isLoginOK'] = $email;
            header("location: pass.php"); 
        }else{
            $error = "Bạn nhập thông tin Email hoặc số điện thoại chưa chính xác";
            header("location: login.php?error=$error"); 
        }

        
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>