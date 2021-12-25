<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail.com</title>
</head>

<body>
    <!--Header-->
    <div class="container-fluid">

        <div id="header">
            <nav style="width: 100%;" class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="h-left">
                        <button class="accordion">

                            <span class="material-icons">menu</span>

                        </button>

                        <a href="index.html">
                            <img src="assets/img/Gmail-logo.png" alt="" /></a>
                        <a class="navbar-brand" href="index.html">Gmail</a>
                    </div>
                    <div class="h-search me-auto">
                        <form action="">
                            <button class="search-btn">
                                <span class="material-icons">search</span>
                            </button>
                            <input style="outline: none;" type="text" placeholder="Tìm kiếm trong thư" />
                            <button class="tune-btn">
                                <span class="material-icons">tune</span>
                            </button>
                        </form>
                    </div>
                    <div class="h-right">
                        <span he class="material-icons">help</span>
                        <span class="material-icons">settings</span>
                        <span class="material-icons">apps</span>
                        <span class="material-icons">account_circle</span>
                    </div>
                </div>
            </nav>
        </div>

        <hr>
        <!--Header-->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div id="Sidebar">
                    <div class="sidebar-left ">
                        <div class="sidebar-lefttop">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" style=" box-shadow: 1px 2px #888888;  background-color: white; margin-bottom: 15px ;border-radius: 50px; font-size: 20px;margin-left: 10px;padding-right: 15px;padding-left: 0px; ">
                                <img style="border-radius: 50%;width: 50px;" src="assets/img/soanthu.png" alt="">
                                Soạn thư
                            </button>
                            <ul style="list-style-type: none;overflow-y: scroll; overflow-x: hidden" class="menusidebar">
                                <li>
                                    <a href="#" style="color: black;  "><span class="material-icons">
                                            move_to_inbox
                                        </span> Hộp thư đến
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="color: black; "><span class="material-icons">
                                            star
                                        </span>
                                        Có gắn dấu sao</a>
                                </li>
                                <li>
                                    <a href="#" style="color: black;  "><span class="material-icons">
                                            watch_later
                                        </span>
                                        Đã tạm ẩn</a>
                                </li>
                                <li>
                                    <a href="#" style="color: black;  "><span class="material-icons">
                                            send
                                        </span>
                                        Đã gửi</a>
                                </li>
                                <li>
                                    <a href="#" style="color: black;  "><span class="material-icons">
                                            description
                                        </span>Thư nháp
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="color: black; "><span class="material-icons">
                                            label
                                        </span>[Gmail]/Spam</a>
                                </li>

                                <a class="dropdown-btn" href="#">Tiện ích mở rộng
                                    <i class="fa fa-caret-down"></i>
                                    <div class="dropdown-container">
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <a href=" #" style="color: black; margin-left: 0px;">
                                                    <span class="material-icons">
                                                        sms
                                                    </span>
                                                    Trò chuyện
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        schedule_send
                                                    </span>
                                                    Đã lên lịch
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        markunread
                                                    </span>Tất cả thư
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        new_releases
                                                    </span>Thư rác
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        delete
                                                    </span> Thùng rác
                                                </a>
                                            </li>
                                </a>
                            </ul>
                            <li>
                                <a class="dropdown-btn" href="#">
                                    <i class="fa fa-caret-down"></i><span class="material-icons">
                                        label
                                    </span> Danh mục
                                    <div class="dropdown-container">
                                        <ul style="list-style-type: none">
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        people
                                                    </span>Mạng xã hội
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        error
                                                    </span>Nội dung cập nhật
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        question_answer
                                                    </span>Diễn đàn
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" style="color: black;"><span class="material-icons">
                                                        local_offer
                                                    </span>Quảng cáo
                                                </a>
                                            </li>
                                        </ul>
                                </a>
                            </li>
                            <li>
                                <a href="#" style="color: black;">
                                    <span class="material-icons">
                                        settings
                                    </span>
                                    Quản lý nhãn
                                </a>
                            </li>
                            <li>
                                <a href="#" style="color: black;">
                                    <span class="material-icons">
                                        add
                                    </span>
                                    Tạo nhãn mới
                                </a>
                            </li>
                        </div>
                    </div>
                    <hr>
                    <div class="sidebar-leftbottom">
                        <div role="complementary">
                            <h6>Meet</h6>
                            <ul style="list-style-type: none">
                                <li>
                                    <a href="#">
                                        <span class="material-icons">
                                            videocam
                                        </span>
                                        Cuộc họp mới
                                        <a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="material-icons">
                                            keyboard
                                        </span>
                                        Tham gia cuộc họp
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <h6>Hangouts</h6>
                            <a href="#" style="margin-left: 30px;"><span class="material-icons ">
                                    account_box
                                </span> My name</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Main-->
        <div class="col-md-8">
            <div id="Main">
                <div class="main-bar">
                    <span class="material-icons">check_box_outline_blank</span>
                    <span class="material-icons">refresh</span>
                    <span class="material-icons">more_vert</span>
                </div>
                <hr style="margin:0">
                <div class="btn-bar" role="group">
                    <button class="btn btn-default">
                        <span class="material-icons">move_to_inbox</span><a>Chính</a></button>
                    <button class="btn btn-default">
                        <span class="material-icons">people</span><a>Mạng Xã Hội</a></button>
                    <button class="btn btn-default">
                        <span class="material-icons">local_offer</span><a>Quảng Cáo</a></button>
                </div>
                <hr style="margin:0">
            </div>
        </div>
    </div>
    <div class="col-md-1">
        <div class="right-sidebar ">
            <ul style="list-style: none;">
                <li>
                    <button>
                        <span class=" material-icons">
                            event
                        </span>
                    </button>
                </li>
                <li>
                    <button>
                        <span class="material-icons">
                            batch_prediction
                        </span>
                    </button>
                </li>
                <li>
                    <button>
                        <span class="material-icons">
                            task_alt
                        </span>
                    </button>
                </li>
                <li>
                    <button>
                        <span class="material-icons">
                            account_circle
                        </span>
                    </button>
                </li>
                <hr>
                <li>
                    <button>
                        <span class=" material-icons">
                            add
                        </span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal" style="  background-color: none  ">
        <div class="modal-dialog" style="position:fixed; bottom:0px;right:65px ;width: 400px;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thư mới</h4>
                    <button type="button">
                        <span class="min">_</span>

                    </button>
                    <button type="button">
                        <span class="max">[ ]</span>

                    </button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="">
                        <input style=" border:none;outline: none;" type="text" placeholder="Người nhận"></input>
                    </form>
                    <form action="">
                        <input style=" border:none;outline: none;" type="text" placeholder="Chủ đề"></input>
                    </form>
                    <form action="">
                        <input style="width: 100%; height: 270px; border:none;outline: none;" type="text"></input>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button">Gửi</button>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
        jQuery(document).ready(function($) {
            $(document).on('click', '.min', function() {
                $(this).closest('.modal').find('.content').slideUp();
                $(this).closest('.modal').animate({
                    'left': 0,
                    'bottom': 0
                });
            });

            $(document).on('click', '.max', function() {
                $(this).closest('.modal').find('.content').slideDown();
                $(this).closest('.modal').animate({
                    'left': '20px',
                    'bottom': '50%'
                });
            });

            $(document).on('click', '.close', function() {
                $(this).closest('.modal').fadeOut();
            });
        });
    </script>
    <script>
        // $("#myModal").modal({
        //     backdrop: false
        // });
        /*dropdown */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>