<?php
$Chude = $_POST['Chude'];
$email = $_POST['email'];
$body  = $_POST['body'];
if (isset($_POST['btngui']) && $_POST['email']) {
    //goi doan kêt nối
    // require "db.php";
    // //thu hien truy van
    // $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    // // xu ly ket qua
    include "send_mail.php";
    if (sendEmailForAccountActive($email, $Chude, $body)) {
    }





    //luu vao csdl
    // $sql = "INSERT INTO users(Chude, email, body) VALUES('$Chude', '$email', '$body')";
    // mysqli_query($conn, $sql);
    // // gui email
    // include "send_mail.php";
    // if (sendEmailForAccountActive($email)) {
    //     echo " Gui thu thanh cong";
    // } else {
    //     echo "Xin loi he thong dang ban! Vui long thu lai sau";
    // }
}
