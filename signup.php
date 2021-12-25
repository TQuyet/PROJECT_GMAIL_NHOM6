<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <title>Signup</title>
</head>

<body class="text-left form-left">
    <main class="form-signup">
        <img class="mb-3" src="assets/img/google.jpg" alt="" width="75" height="24">
        <h2>Tạo tài khoản Google</h2>
        <h4>Tiếp tục tới Gmail</h4>
        <div class="container row">
            <div style="padding: 0px" class="col-md-6">
                <div class="form-floating">
                    <input type="Ho" name="txtHo" class="form-control" id="floatingInput" placeholder="firstname" require>
                    <label for="floatingInput">Họ</label>
                </div>
            </div>
            <div style="padding-right: 0px" class="col-md-6">
                <div class="form-floating">
                    <input type="Ten" name="txtTen" class="form-control" id="floatingInput" placeholder="name" require>
                    <label for="floatingInput">Tên</label>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px" class="form-floating">
            <input type="email" name="txtgmail" class="form-control" id="floatingInput" placeholder="gmail" require>
            <label for="floatingInput">Tên người dùng</label>
        </div>
        <a style="margin-left:10px">Bạn có thể sử dụng chữ cái, số và dấu chấm.</a>
        <div style="padding-top: 20px;" class="pass container row">
            <div style="padding: 0px" class="col-md-6">
                <div class="form-floating">
                    <input type="password" name="txtmatkhau" class="form-control" id="pass" placeholder="matkhau" require>
                    <label for="floatingInput">Mật khẩu</label>
                </div>
            </div>
            <div style="padding-right: 0px" class="col-md-6">
                <div class="form-floating">
                    <input type="password" name="txtxacnhan" class="form-control" id="pass" placeholder="xacnhan" require>
                    <label for="floatingInput">Xác nhận</label>
                </div>
            </div>
            <a style="margin-left:10px; padding: 0">Sử dụng 8 ký tự trở lên và kết hợp chữ cái, chữ số và biểu tượng.</a>
        </div>
        <input style="margin-top: 20px" type="checkbox" onclick="myFunction()">   Hiện mật khẩu
        <div style="margin-top:30px" class="container row">
                <div class="tao col-md-6">
                    <a href="login.php" class="spann" style="color:dodgerblue; text-decoration:none" >Đăng nhập</a>
                    
                </div>
                <div class="tao col-md-6 mb-5" >
                    <button name="btnSignup" class="bnt" style="background-color: dodgerblue;" > <span style="color:aliceblue;">Đăng kí</span></button>
                </div>
            </div>
    </main>

    <script src="/signup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>