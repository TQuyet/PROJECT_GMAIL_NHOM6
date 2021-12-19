<?php
session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

</head>


<body class="text-center">
    <main class="form-login">
        <form action="index.php" method="post">
                
            <img class="mb-3" src="assets/img/google.jpg" alt="" width="75" height="24">

            <h3>Đăng nhập</h3>
            <p>Tiếp tục với gmail</p>
            <div class="form-floating">
                <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
                <label  for="floatingInput">Nhập mật khẩu của bạn</label>
            </div>
            <h6 class="emailsdt" style="color:dodgerblue" style="text-align: left;">Bạn quên địa chỉ email?</h6>
            

           
            
            <div class="container row">
                <div class="tao col-md-6">
                    <span class="spann me-3 mt-5" style="color:dodgerblue" >Bạn quên mật khẩu ?</span>
                    
                </div>
                <div class="tao col-md-6" >
                    <button name="btnLogin" class="bnt" style="background-color: dodgerblue;" > <span style="color:aliceblue;">Tiếp theo</span></button>
                </div>
            </div>
            
        </form>

    </main>
</body>

</html>