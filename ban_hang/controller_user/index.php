<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../global/global.php";
include "../model/taikhoan.php";
include '../model/cart.php';
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
$sanphamchotrangchu = hienthidanhsachsp_chotrangchu();
$danhsachdanhmuctrangchu = hienthidanhsach();
include "../view_user/header.php";

if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case "trangchu":
            include "index.php";
            break;
        case "chitietsanpham":
            if (isset($_GET["IDSP"]) && $_GET["IDSP"] > 0) {
                $idsp = $_GET["IDSP"];
                $hienthichitietsp = chitietsp($idsp);
                extract($hienthichitietsp);
                $sanpham_cungloai = laysanphamcungloai($IDDM, $idsp);
                // $sanphamcungloai=laysanphamcungloai($idsp,$IDDM);
                include "../view_user/chitietsanpham.php";
            } else {
                include "../view_user/home.php";
            }
          
            break;
        // hàm tìm kiếm theo sản phẩm và load sản phẩm theo danh mục
        case "danhmucsanpham":
            if (isset($_POST["keyword"]) && $_POST["keyword"] != "") {
                $keyword = $_POST["keyword"];
            } else {
              
                $keyword = "";
              
            }
            if (isset($_GET["IDDM"]) && $_GET["IDDM"] > 0) {
                $iddm = $_GET["IDDM"];
            } else {
                $iddm = 0;
                
            }
            // if (!isset($_POST["keyword"]) && $_POST["keyword"] != "") {
            //     $keyword = $_POST["keyword"];
            // } else {
            //     header('location:index.php');
            //     $keyword = "";
              
            // }
            // if (!isset($_GET["IDDM"]) && $_GET["IDDM"] > 0) {
            //     $iddm = $_GET["IDDM"];
            // } else {
            //     header('location:index.php');
            //     $iddm = 0;
                
            // }


            $danhsachsanpham = hienthidanhsachsp($keyword, $iddm);

            $namedm = tendanhmuc($iddm);
            include "../view_user/sanphamdanhmuc.php";
            break;
        case 'quatrangadmin':
            header('location:../controller_admin/index.php');
         
            break;
            
        case "dangky":
            if (isset($_POST["dangky"]) && $_POST["dangky"] != "") {
               
                $namekh = $_POST["hovaten"];
                $diachi = $_POST["diachi"]; 
                $sdt = $_POST["sdt"];
                $taikhoan = $_POST["tk"];
                $matkhau = $_POST["mk"];
                if((!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$namekh)) && (!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$diachi)) )
                {
                 $thongbaoca2='<p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Họ Và Tên</p>
                      <p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Địa Chỉ</p>';
                }
                if((!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$namekh)) && (!preg_match("/^([0-9]{10})$/",$sdt)))
                {
                 $thongbaoca2='<p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Họ Và Tên</p>

                      <p>Bạn Phải Nhập Kí Tự Số Khi Nhập Số Điện Thoại</p>';
                }  
                if((!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$diachi)) && (!preg_match("/^([0-9]{10})$/",$sdt)))
                {
                 $thongbaoca2='
                      <p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Địa Chỉ</p>
                      <p>Bạn Phải Nhập Kí Tự Số Khi Nhập Số Điện Thoại</p>';
                }
               if((!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$namekh)) && (!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$diachi)) && (!preg_match("/^([0-9]{10})$/",$sdt)))
               {
                $thongbaoca2='<p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Họ Và Tên</p>
                     <p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Địa Chỉ</p>
                     <p>Bạn Phải Nhập Kí Tự Số Khi Nhập Số Điện Thoại</p>';
               }
            
                // if(is_numeric($namekh) && is_numeric($diachi))
                // {
                //  $thongbaoca2='<p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Họ Và Tên;
                //                <p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Địa Chỉ';
                // }
                
                // if((!preg_match("/^[A-Za-z_\.]{6,32}$/",$namekh)) && (!preg_match("/^[A-Za-z_\.]{6,32}$/",$diachi)) && (!preg_match("/^[A-Za-z_\.]{6,32}$/",$diachi)))

                // {
                //     $thongbaoca2='<p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Họ Và Tên</p>
                //     <p>Bạn Phải Nhập Kí Tự Chữ Khi Nhập Địa Chỉ</p>
                //     <p>Bạn Phải Nhập Kí Tự Số Khi Nhập Số Điện Thoại</p>';
                // }
                else if(!preg_match("/^([0-9]{10})$/",$sdt))
                {
                    $thongbaonhapsai2='Số điện thoại không đúng';
                }
               if(strlen($sdt)>10)
               {
                $thongbaonhapsai3='Số Điện Thoại Lớn Hơn 10 kí tự';
               }
               else if(strlen($sdt)<10)
               {
                $thongbaonhapsai3='Số Điện Thoại Nhỏ Hơn 10 kí tự';
               }
               else if(!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$namekh)) {
                $thongbaonhapsai='Bạn Phải Nhập Kí Tự Chữ Khi Nhập Họ Và Tên';
                }
       
                else if(!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$diachi)) {
                    $thongbaonhapsai1='Bạn Phải Nhập Kí Tự Chữ Khi Nhập Địa Chỉ';
                    }
        
             
                
            else{
                themtaikhoan($namekh,$diachi,$sdt,$taikhoan,$matkhau);
                $thongbao =
                    "Bạn Đã Đăng Ký Thành Công,Vui Lòng Đăng Nhập Để Mua Hàng ";
            }   
     
            }

            include "../view_user/taikhoan/dangky.php";

            break;
        case "dangnhap":
            if (isset($_POST["dangnhap"]) && $_POST["dangnhap"]) {
                $taikhoan = $_POST["tk"];
                $matkhau = $_POST["mk"];
                $checktaikhoan = checktaikhoan($taikhoan, $matkhau);
                if (is_array($checktaikhoan)) {
                    $_SESSION["taikhoan"] = $checktaikhoan;
                    header("location:index.php?act=taikhoan");
                } else {
                    $thongbao = "Tài Khoản Không Tồn Tại";
                }
            }

            include "../view_user/taikhoan/dangnhap.php";
            break;
        case 'taikhoan':
            include "../view_user/taikhoan/taikhoan.php";
            break;
        case "capnhaptaikhoan":
            if (isset($_POST["capnhap"]) && $_POST["capnhap"]) {
                $idkh = $_POST["idkh"];
                $namekh = $_POST["hovaten"];
                $diachi = $_POST["diachi"];
                $sdt = $_POST["sdt"];
              
                $taikhoan = $_POST["tk"];
                $matkhau = $_POST["mk"];
                capnhaptaikhoan(
                    $idkh,
                    $namekh,
                    $diachi,
                    $sdt,
                    $taikhoan,
                    $matkhau
                );
                $_SESSION["taikhoan"] = checktaikhoan($taikhoan, $matkhau);
                $thongbao = "Bạn Đã Cập Nhập Thông Tin Thành Công ";
             
            }
            include "../view_user/taikhoan/capnhaptaikhoan.php";
            break;
        case "quenmk":
            if (isset($_POST["gui"]) && $_POST["gui"]) {
                $email = $_POST["sdt"];
                $quenmk = quenmk($email);
                if (is_array($quenmk)) {
                    $thongbao = "Mật Khẩu Của Bạn Là " . $quenmk["MATKHAU"];
                } else {
                    $thongbao = "Số Điện Thoại Này Không Tồn Tại";
                }
            }
            include "../view_user/taikhoan/quenmatkhau.php";
            break;
       
        case "thoat":
            session_unset(); // xóa tất cả
            header("location:index.php");
            break;
        case "pizza":
            include "../view_user/pizza.php";
            break;
        case "taikhoandangnhap":
            //include '../view_user/taikhoan/dangkychinh.php';
            if (isset($_SESSION["taikhoan"]) && is_array($_SESSION["taikhoan"])) {
                header("location:index.php?act=taikhoan");
            }
               else
               {
                header("location:index.php?act=dangnhap");
               }
            break;
        // Trang giỏ hàng
        case "themgiohang":
            if (isset($_POST["them-giohang"]) && $_POST["them-giohang"]) {
                $idsp = $_POST["idsp"];
                $namesp = $_POST["namesp"];
                $img = $_POST["img"];
                $gia = $_POST["gia"];
                $Soluong = 1;
                $i = 0;
                $theodoisl = 0;
                $tongtien = $Soluong * $gia;
                if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0) {
                    foreach ($_SESSION["cart"] as $cart) {
                        if ($cart[0] == $idsp) {
                            $Soluong += $cart[4];
                            $theodoisl = 1;
                            $_SESSION["cart"][$i][4] = $Soluong;
                            break;
                        }
                        $i++;
                    }
                }
                if ($theodoisl == 0) {
                    $cart = [$idsp, $namesp, $img, $gia, $Soluong,$tongtien];
                    array_push($_SESSION["cart"], $cart);
                }
            }
            include "../view_user/cart/viewcart.php";
            break;
        case 'xoaallgiohang=1':
            header('location:index.php?act=themgiohang');

    unset($_SESSION["cart"]);

            break;
        case 'congcart':
            if(isset($_GET['congcart']))
            {
                $idcong=$_GET['congcart'];
                $Soluong = 1;
                $i = 0;
                foreach ($_SESSION["cart"] as $cart)
                 {
                 if($cart[0]!=$idcong)
                 {
                    // $cart = [$idsp, $namesp, $img, $gia, $Soluong,$tongtien];
                    // array_push($_SESSION["cart"], $cart);

                    $carttang[]=array('IDSP'=>$cart[0],'NAMECART'=>$cart[2],'IMG'=>$cart[1],'PRICE'=>$cart[3],'SOLUONG'=>$cart[4]);
                    $_SESSION["cart"]=$carttang;
                }
                 else
                 {
                    $tangsoluong=$cart[4]+1;
                    if($cart[4]<100)
                    {
                        $carttang[]=array('IDSP'=>$cart[0],'NAMECART'=>$cart[2],'IMG'=>$cart[1],'PRICE'=>$cart[3],'SOLUONG'=>$tangsoluong);
                    }
                    else
                    {
                        $carttang[]=array('IDSP'=>$cart[0],'NAMECART'=>$cart[2],'IMG'=>$cart[1],'PRICE'=>$cart[3],'SOLUONG'=>$cart[4]);
                    }
                    $_SESSION["cart"]=$carttang;
                 }
                }
                header('location:index.php?act=themgiohang');
            }
            break;
        case 'suacart':
            if (isset($_GET["idcart"])&& $_GET["idcart"] >0) {
              
                $suacart = suacart($_GET["idcart"]);        
            }
   
            include '../view_user/cart/updatecart.php';
            break;

            
        // case "suadm":
        //     if (isset($_GET["IDDM"]) && $_GET["IDDM"] > 0) {
        //         $dm = sua($_GET["IDDM"]);
        //     }

        //     include "../view_admin/danhmuc/update.php";
            break;
        case "xoacart":
            if (isset($_GET["idcart"])) {
                array_splice($_SESSION["cart"], $_GET["idcart"], 1);
                
             }
             else {
                $_SESSION["cart"] = [];
            }
             header("location:index.php?act=viewcart");
            break;
        case 'updatecart':
            if(isset($_POST['capnhap-donhang']) &&($_POST['capnhap-donhang']))
            {
                    $idcart=$_POST['idcart'];
                    $soluongupdate=$_POST['soluong'];
               
                    capnhapcart($idcart,$soluongupdate);
                }
                
            include "../view_user/cart/viewcart.php";
            break;
        case "viewcart":
            include "../view_user/cart/viewcart.php";

            break;
            case "bill":
                include "../view_user/cart/bill.php";
    
                 break;
    
             case 'billconfirm':
                if(isset($_POST['nut-dathang']) && ($_POST['nut-dathang']))
                {
                    if(isset($_SESSION['taikhoan']))
                    {
                        $iduser=$_SESSION['taikhoan']['IDKH'];
                        $name=$_POST['name'];
                        $diachi=$_POST['diachi'];
                        $sdt=$_POST['sdt'];
                        $pttt=$_POST['pttt'];
                        date_default_timezone_set("Asia/Ho_Chi_Minh");
                        $ngaydathang=date("h:i:sa d/m/Y");
                        $tongdonhang=tongdonhang();
    
                        $idbill= thembill( $iduser,$name,$diachi, $sdt,$pttt,$ngaydathang, $tongdonhang);
                        // $cart = [$idsp, $namesp, $img, $gia, $Soluong,$tongtien];
                        foreach ($_SESSION["cart"] as $cart) {
                          insert_cart($_SESSION['taikhoan']['IDKH'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                        }   
                        $_SESSION["cart"]=[];     
                    }
                    else
                    {
                         $thongbaodn='Bạn Chưa Đăng Nhập Hãy Đăng Nhập Để Mua Hàng';
                         header('location:index.php?act=dangnhap');
                    }
                    // $name=$_POST['name'];
                    // $diachi=$_POST['diachi'];
                    // $sdt=$_POST['sdt'];
                    // $pttt=$_POST['pttt'];
                    // date_default_timezone_set("Asia/Ho_Chi_Minh");
                    // $ngaydathang=date("h:i:sa d/m/Y");
                    // $tongdonhang=tongdonhang();

                    // $idbill= thembill( $iduser,$name,$diachi, $sdt,$pttt,$ngaydathang, $tongdonhang);
                    // // $cart = [$idsp, $namesp, $img, $gia, $Soluong,$tongtien];
                    // foreach ($_SESSION["cart"] as $cart) {
                    //   insert_cart($_SESSION['taikhoan']['IDKH'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    // }   
                    // $_SESSION["cart"]=[];            
                 }
                $bill=loadone_bill( $idbill);
                $billchitiet=load_cart($idbill);
                include "../view_user/cart/confirm.php";
                break;
         case 'mybill':
            $listbill=loadALL_bilL($_SESSION['taikhoan']['IDKH']);
            include '../view_user/cart/mybill.php';
            break;
            case 'lienhe':
                include '../view_user/lienhe.php';
                break;
          
        default:
      
            include "../view_user/home.php";
            break;
    }
} else {
    include "../view_user/home.php";
}
include "../view_user/footer.php";
?>


