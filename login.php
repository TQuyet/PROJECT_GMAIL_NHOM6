<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

</head>


<body class="text-center">
    <main style="border-style: groove ; "  class="form-login">
        <form action="process-login.php" method="post">
                
            <img class="mb-3 mt-5" src="assets/img/google.jpg" alt="" width="75" height="24">

            <h3>Đăng nhập</h3>
            <p>Tiếp tục với gmail</p>
            <div class="form-floating ">
                <input  type="email" name="txtpass" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label  for="floatingInput ">Email hoặc số điện thoại</label>
            </div>
            <h6 class="emailsdt" style="color:dodgerblue" style="text-align: left;">Bạn quên địa chỉ email?</h6>
            

            <p class="lbcheck mt-5" style="text-align: left;" >Đây không phải máy tính của bạn? Hãy sử dụng chế độ
                 Khách đăng nhập một cách riêng tư.<a class="timhieuthem" href=" "><strong style=" color:dodgerblue;">Tìm hiểu thêm</strong> </a></p>
            
            <div class="container row">
                <div class="tao col-md-6">
                    <a href="signup.php" class="spann" style="color:dodgerblue; text-decoration:none" >Tạo tài khoản</a>
                    
                </div>
                <div class="tao col-md-6 mb-5" >
                    <button name="btnLoginpass" class="bnt" style="background-color: dodgerblue;" > <span style="color:aliceblue;">Tiếp theo</span></button>
                </div>
            </div>
            
        </form>

    </main>
</body>

</html>