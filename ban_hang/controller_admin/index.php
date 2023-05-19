<?php
include "../view_admin/header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
if (!isset($_SESSION["taikhoan"])) {
    $_SESSION["taikhoan"] = [];
}
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
      
        case 'quaylaitc':
            include './controller_user/index.php';
            break;
        case "danhmuc":
            //    kiểm tra người dùng có add danh mục hay không
            if (isset($_POST["themdanhmuc"]) && $_POST["themdanhmuc"]) {
                $tenloai = $_POST["tenloai"];
                 if(!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$tenloai)) {
                    $thongbaonhapsai1='Bạn Phải Nhập Kí Tự Chữ Khi Tên Danh Mục';
                    }
                  
                       
                    else{

                        themdanhmuc($tenloai);
                        $thongbao = "Bạn Đã Thêm Danh Mục Thành Công";
                    }
            }

            include "../view_admin/danhmuc/index.php";
            break;

        case "listdanhmuc":
            $danhsachdanhmuc = hienthidanhsach();
            include "../view_admin/danhmuc/list.php";
            break;
        case "xoadm":
            if (isset($_GET["IDDM"]) && $_GET["IDDM"] > 0) {
                xoa($_GET["IDDM"]);
            }
            $danhsachdanhmuc = hienthidanhsach();
            include "../view_admin/danhmuc/list.php";
            break;

        case "suadm":
            if (isset($_GET["IDDM"]) && $_GET["IDDM"] > 0) {
                $dm = sua($_GET["IDDM"]);
            }

            include "../view_admin/danhmuc/update.php";
            break;

        case "updatedm":
            if (isset($_POST["capnhapdanhmuc"]) && $_POST["capnhapdanhmuc"]) {
                $tenloai = $_POST["tenloai"];
                $IDDM = $_POST["iddm"];
           
                    capnhap($IDDM, $tenloai);
                    $thongbao = "Bạn Đã Cập Nhập Danh Mục Thành Công";
                
              
            }
            $danhsachdanhmuc = hienthidanhsach();
            include "../view_admin/danhmuc/list.php";
            break;
        // trang sản phẩm

        case "sanpham":
            //     kiểm tra người dùng có add danh mục hay không
            if (isset($_POST["themsp"]) && $_POST["themsp"]) {
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $motasp = $_POST["motasp"];
                $hinh = $_FILES["hinh"]["name"];

                $target_dir = "../upload/";
       
                $filehinh=$_FILES["hinh"]["tmp_name"];
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if((!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$tensp)) && (!preg_match("/^([0-9]{10})$/", $giasp)) )
                // {
                //     $thongbaonhapsai9='<p>Bạn Phải Nhập Kí Tự Chữ Khi Tên Sản Phẩm</p>
                //                        <p>Số tiền không đúng định dạng</p>';
                // }
             
                if(strlen($tensp)<7)
                  {
                    $thongbaonhapsai5='Tên Sản Phẩm Quá Ngắn';
                  }
                  else if ((!is_numeric($giasp)) &&(!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$tensp)) )
                  {
                      $thongbaonhapsai8000='Bạn Phải Nhập Kí Tự Chữ Khi Tên Sản Phẩm <br>
                      Số tiền không đúng định dạng';
                  }
                  else if(!is_numeric($giasp))
                    {
                        $thongbaonhapsai8='Số tiền không đúng định dạng';
                    }
                   
                  else if(!preg_match("~^[^\s][^0-9-_!@#\$%\^\(\)-\+]{4,}[^\s]$~u",$tensp)) {
                    $thongbaonhapsai1='Bạn Phải Nhập Kí Tự Chữ Khi Tên Sản Phẩm';
                    }
               
                   else if (move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)) {
                        themsanpham($tensp, $giasp, $hinh, $motasp, $iddm);
                        $thongbao = "Bạn Đã Thêm Sản Phẩm Thành Công";
                    }
              
             // }
                
              
                
            }
            $danhsachdanhmuc = hienthidanhsach();
            include "../view_admin/sanpham/index.php";
            break;

        case "listsp":
            if (isset($_POST["nhap-dm"]) && $_POST["nhap-dm"]) {
                $keyword = $_POST["keyword"];
                $iddm = $_POST["iddm"];
            } else {
                $keyword = "";
                $iddm = 0;
            }
            $danhsachdanhmuc = hienthidanhsach();
            $danhsachsanpham = hienthidanhsachsp($keyword, $iddm);
            include "../view_admin/sanpham/list.php";
            break;
        case "xoasp":
            if (isset($_GET["IDSP"]) && $_GET["IDSP"] > 0) {
                xoasp($_GET["IDSP"]);
            }
            $danhsachsanpham = hienthidanhsachsp();
            include "../view_admin/sanpham/list.php";
            break;

        case "suasp":
            if (isset($_GET["IDSP"]) && $_GET["IDSP"] > 0) {
                $sanpham = suasp($_GET["IDSP"]);
            }
            $danhsachdanhmuc = hienthidanhsach();
            include "../view_admin/sanpham/update.php";
            break;

        case "updatesp":
            if (isset($_POST["capnhapsp"]) && $_POST["capnhapsp"]) {
                $idsp = $_POST["idsp"];
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $motasp = $_POST["motasp"];
                $hinh = $_FILES["hinh"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (
                    move_uploaded_file(
                        $_FILES["hinh"]["tmp_name"],
                        $target_file
                    )
                ) {
                    //   echo 'anh '
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                capnhapsp($idsp, $iddm, $tensp, $giasp, $motasp, $hinh);

                $thongbao = "Bạn Đã Cập Nhập Sản Phẩm Thành Công";
            }
            $danhsachdanhmuc = hienthidanhsach();
            $danhsachsanpham = hienthidanhsachsp();
            // $danhsachsanpham = hienthidanhsachsp($keyword, $iddm);
            include "../view_admin/sanpham/list.php";
            break;
        case 'taikhoan':
            include "../view_user/taikhoan/taikhoan.php";
            break;
        // trang khách hàng
        case "khachhang":
            $danhsachkhachhang = hienthidanhsachkhachhang();
            include "../view_admin/khachhang/list.php";
            break;
        case "xoakh":
            if (isset($_GET["IDKH"]) && $_GET["IDKH"] > 0) {
                xoakh($_GET["IDKH"]);
            }
            $danhsachkhachhang = hienthidanhsachkhachhang();
            include "../view_admin/khachhang/list.php";
            break;

        case "suakh":
            if (isset($_GET["IDKH"]) && $_GET["IDKH"] > 0) {
                $kh = suakh($_GET["IDKH"]);
            }

            include "../view_admin/khachhang/update.php";
            break;

        case "updatekh":
            if (
                isset($_POST["capnhapkhachhang"]) &&
                $_POST["capnhapkhachhang"]
            ) {
                $idkh = $_POST["idkh"];
                $namekh = $_POST["hovaten"];
                $diachi = $_POST["diachi"];
                $sdt = $_POST["sdt"];
                $taikhoan = $_POST["tk"];
                $matkhau = $_POST["mk"];
                capnhapkh($idkh, $namekh, $diachi, $sdt, $taikhoan, $matkhau);
            }
            $danhsachkhachhang = hienthidanhsachkhachhang();
            include "../view_admin/khachhang/list.php";
            break;
        case "binhluan":
            $danhsachbinhluan = danhsachbinhluan();
            include "../view_admin/binhluan/list.php";
            break;
        case "xoabl":
            if (isset($_GET["IDBL"]) && $_GET["IDBL"] > 0) {
                xoabl($_GET["IDBL"]);
            }
            $danhsachbinhluan = danhsachbinhluan();
            include "../view_admin/binhluan/list.php";
            break;

        case "suabl":
            if (isset($_GET["IDBL"]) && $_GET["IDBL"] > 0) {
                $bl = suabl($_GET["IDBL"]);
            }

            include "../view_admin/binhluan/update.php";
            break;

        case "updatebl":
            if (isset($_POST["capnhapbl"]) && $_POST["capnhapbl"]) {
                $idbl = $_POST["idbl"];
                $noidung = $_POST["nd"];
                capnhapbl($idbl, $noidung);
            }
            $danhsachbinhluan = danhsachbinhluan();
            include "../view_admin/binhluan/list.php";
            break;
            case "donhang":
                $danhsachbill = danhsachbill(0);
                include "../view_admin/donhang/index.php";
                break;
            
       
        
            // case "listsp":
            //     if (isset($_POST["nhap-dm"]) && $_POST["nhap-dm"]) {
            //         $keyword = $_POST["keyword"];
            //         $iddm = $_POST["iddm"];
            //     } else {
            //         $keyword = "";
            //         $iddm = 0;
            //     }
            //     $danhsachdanhmuc = hienthidanhsach();
            //     $danhsachsanpham = hienthidanhsachsp($keyword, $iddm);
            //     include "../view_admin/sanpham/list.php";
            //     break;

            case "xoadh":
                if (isset($_GET["IDBILL"]) && $_GET["IDBILL"] > 0) {
                    xoadh($_GET["IDBILL"]);
                }
        
                $danhsachbill = danhsachbill();
                include "../view_admin/donhang/index.php";
                break;

                case "suadh":
                    if (isset($_GET["IDBILL"]) && $_GET["IDBILL"] > 0) {
                        $dh = suadh($_GET["IDBILL"]);
                    }
        
                    include "../view_admin/donhang/update.php";
                    break;
                    case "updatedh":
                        if (isset($_POST["capnhapdh"]) && $_POST["capnhapdh"]) {
                            $idbill = $_POST["idbill"];
                            $tenbill = $_POST["tenbill"];
                            $diachibill = $_POST["diachibill"];
                            $sdtbill = $_POST["sodtbill"];
                            $ttdh = $_POST["ttdh"];  
                            capnhapdh( $idbill,$tenbill,$diachibill,$sdtbill,$ttdh);
                        }
                     
                $danhsachbill = danhsachbill();
                include "../view_admin/donhang/index.php";
                        break;
               
           case 'thongke':
            $danhsachTK=thongkebang();
            include '../view_admin/donhang/thongke.php';
            break;

            case 'xoaalltk':
                header('location:index.php?act=khachhang');

                unset($_SESSION["taikhoan"]);
 
                break;
            case 'qualaiuser':
                header('location:../controller_user/index.php');

                break;
        default:
            include "../view_admin/home.php";
            break;
    }
} else {
    include "../view_admin/home.php";
}

include "../view_admin/footer.php";

?>

