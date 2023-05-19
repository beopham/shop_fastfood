<?php
function themsanpham($tensp, $giasp, $hinh, $motasp, $iddm)
{
    $sql = "INSERT INTO sanpham(NAMESP,PRICE,IMG,MOTA,IDDM)
    VALUES ('$tensp','$giasp','$hinh','$motasp','$iddm')";
    pdo_execute($sql);
}
function xoasp($idsp)
{
    $sql = "DELETE FROM sanpham WHERE IDSP=" . $idsp;
    pdo_execute($sql);
}
function suasp($idsp)
{
    $sql = "SELECT * FROM sanpham  WHERE IDSP=" . $idsp;
    $dm = pdo_query_one($sql);
    return $dm;
}
function chitietsp($idsp)
{
    $sql = "SELECT * FROM sanpham  WHERE IDSP=" . $idsp;
    $sp = pdo_query_one($sql);
    return $sp;
}
function hienthidanhsachsp($keyword = "", $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1 ";
    if ($keyword != "")
    {
        $sql .= "and NAMESP LIKE '%" . $keyword . "%'";
    }
    if ($iddm > 0)
    {
        $sql .= "and IDDM ='" . $iddm . "'";
    }
    $sql .= "ORDER BY IDDM ASC";
    $danhsachsanpham = pdo_query($sql);
    return $danhsachsanpham;
}
function hienthidanhsachsp_chotrangchu()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY IDDM ASC LIMIT 0,1000 ";
    $danhsachsanpham = pdo_query($sql);
    return $danhsachsanpham;
}
function capnhapsp($idsp, $iddm, $tensp, $giasp, $motasp, $hinh)
{
    if ($hinh != "")
    {
        $sql = "UPDATE sanpham SET  IDDM='" . $iddm . "' ,NAMESP='" . $tensp . "' ,PRICE='" . $giasp . "',MOTA='" . $motasp . "',IMG='" . $hinh . "' WHERE IDSP=" . $idsp;
    }
    else
    {
        $sql = "UPDATE sanpham SET IDDM='" . $iddm . "' ,NAMESP='" . $tensp . "' ,PRICE='" . $giasp . "',MOTA='" . $motasp . "' WHERE IDSP=" . $idsp;
    }

    pdo_execute($sql);
}


function laysanphamcungloai($IDDM,$idsp)
{
    $sql = "SELECT * FROM sanpham WHERE IDDM ='.$IDDM.'  AND IDSP <>".$idsp;;
    $danhsachsanpham = pdo_query($sql);
    return $danhsachsanpham;

}
function tendanhmuc($iddm)
{
   if($iddm>0)
   {
    $sql = "SELECT * FROM danhmuc  WHERE IDDM=" . $iddm;
    $danhmuc = pdo_query_one($sql);
    extract($danhmuc);
    return $NAME;
   }
   else
   {
    return "";
   }
   
}


?>
