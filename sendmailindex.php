<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylest.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Soạn thư</title>
</head>

<body>
    <div class="container bootdey">
        <div class="email-app">
            <main>
                <p class="text-center">Thư mới</p>
                <form action="process-sendmail.php" method="post">
                    <div class="form-row mb-3">
                        <label for="to" class="col-2 col-sm-1 col-form-label">Đến :</label>
                        <div class="col-10 col-sm-11">
                            <input type="email" name="email" class="form-control" id="to" placeholder="Nhấp nhập địa chỉ ...">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <label for="cc" class="col-2 col-sm-1 col-form-label">Chủ đề :</label>
                        <div class="col-10 col-sm-11">
                            <input type="text" name="Chude" class="form-control" id="cc" placeholder="Nhấp để nhập chủ đề ...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11 ml-auto">
                            <div class="toolbar" role="toolbar">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-bold"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-italic"></span>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <span class="fa fa-underline"></span>
                                    </button>
                                </div>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-trash-o"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-paperclip"></span>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                        <span class="fa fa-tags"></span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
                                        <a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <textarea class="form-control" id="message" name="body" rows="12" placeholder="Nhấn để nhập ... "></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btngui" class="btn btn-success"></input>
                                <a href="index.php"> Trở lại</a>
                            </div>
                        </div>
                    </div>
                </form>

            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>