<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"rel="stylesheet"/>
    <script src="https://use.fontawesome.com/7dfeb3a071.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500" rel="stylesheet">
   <link rel="stylesheet" href="../css/stylelich.css"> 
   <link rel="stylesheet" href="../css/style_admin.css" />
    
    <title>Trang Chủ Admin</title>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }
      /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
  </head>
  <body onload="startTime()">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php?act=danhmuc">Danh Mục</a>
      <a href="index.php?act=sanpham">Sản Phẩm</a>
      <a href="index.php?act=khachhang">Khách Hàng</a>
      <a href="index.php?act=binhluan">Bình Luận</a>
      <a href="index.php?act=donhang">Đơn Hàng</a>
      <a href="index.php?act=thongke">Thống Kê</a>
    </div>

    <div id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-light fixed-top sticky-top">
              <div class="container">
                <a class="navbar-brand" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </a>
                <a class="navbar-brand" href="index.php">Trang Chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?act=listdanhmuc">Danh Mục</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?act=listsp">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?act=khachhang">Khách Hàng</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?act=binhluan">Bình Luận</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?act=donhang">Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?act=thongke">Thống Kê</a>
                    </li>

                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>