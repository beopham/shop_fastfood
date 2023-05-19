<?php 
function themtaikhoan($namekh, $diachi, $sdt, $taikhoan,$matkhau)
{
    $sql = "INSERT INTO khachhang(NAMEKH,DIACHI,SDT,TAIKHOAN,MATKHAU)
    VALUES ('$namekh','$diachi','$sdt','$taikhoan','$matkhau')";
    pdo_execute($sql);
}

function checktaikhoan($taikhoan,$matkhau)
{
     $sql = "SELECT * FROM khachhang  WHERE TAIKHOAN = '".$taikhoan."' AND MATKHAU ='".$matkhau."' ";
     $dm = pdo_query_one($sql);
     return $dm;
}
function quenmk($email)
{
     $sql = "SELECT * FROM khachhang  WHERE SDT ='".$email."'";
     $dm = pdo_query_one($sql);
     return $dm;
}
function capnhaptaikhoan($idkh,$namekh, $diachi, $sdt, $taikhoan,$matkhau)
{
    
    $sql = "UPDATE khachhang SET NAMEKH='" . $namekh . "' ,DIACHI='" . $diachi . "',SDT='" . $sdt . "',TAIKHOAN='" . $taikhoan . "',MATKHAU ='" . $matkhau . "' WHERE IDKH=" . $idkh  ;
    
    pdo_execute($sql);
}
function hienthidanhsachkhachhang()
{
    $sql = "SELECT * FROM khachhang ORDER BY IDKH asc";
    $danhsachkhachhang = pdo_query($sql);
    return  $danhsachkhachhang;
}
function xoakh($idkh)
{
    $sql = "DELETE FROM khachhang WHERE IDKH=".$idkh ;
    pdo_execute($sql);
}
function suakh($idkh)
{
    $sql = "SELECT * FROM khachhang  WHERE IDKH=" . $idkh;
    $kh = pdo_query_one($sql);
    return $kh;
}
function    capnhapkh($idkh, $namekh,  $diachi ,$sdt,   $taikhoan ,   $matkhau )
{
    $sql = "UPDATE khachhang SET NAMEKH='" . $namekh .  "' ,DIACHI='" . $diachi .  "' ,SDT='" . $sdt .  "',TAIKHOAN='" . $taikhoan .  "' ,MATKHAU='" . $matkhau .  "'   WHERE IDKH=" .$idkh;

    pdo_execute($sql);
}
?>