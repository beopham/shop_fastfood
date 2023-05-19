<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    

    <link rel="stylesheet" href="../css/style_user.css">

    <title>Trang Chủ</title>
  </head>
  <body style="background-color: white;">
    <nav class="navbar navbar-expand-lg nav-bg fixed-top sticky-top" style="background-color: whitesmoke;">
      <div class="container">
        <a class="navbar-brand ">
          <img src="../img/anh1.png" class="anh1">
        </a>
        <button class="navbar-toggler" style="background-color :#F1F1F1;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0  justify-content-center">
          <li class="nav-item ">
              <a class="nav-link  text-yellow" href="index.php">Page</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link  text-yellow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Product </a>
              <ul class="dropdown-menu"> 
              <?php 
               foreach ($danhsachdanhmuctrangchu as $danhmuc)
                {
               extract($danhmuc);
               $linkdm="index.php?act=danhmucsanpham&IDDM=".$IDDM;
               echo '<li>
               <a class="dropdown-item chu-a nav" href="'.$linkdm.'" >'.$NAME.'</a>
             </li>';
               }
               ?>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-yellow" href="index.php?act=lienhe">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-yellow" href="index.php?act=dangnhap">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-yellow" href="index.php?act=dangky"> Register </a>
            </li>
          </ul>
    
        </div>
          <form class="d-flex" action="index.php?act=danhmucsanpham" method="POST" role="search">
            <input class="form-control me-2" name="keyword" type="search" required placeholder="Search Product" >
            <button class="btn btn-light" name="noidungtk" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <a class="btn btn-light" href="index.php?act=taikhoandangnhap"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="index.php?act=themgiohang" class="btn btn-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <a href="index.php?act=thoat" class="btn btn-light"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </form>
        </div>
    
    </nav>