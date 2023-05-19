<?php 
function thembinhluan($noidung ,$idpro, $iduser,  $tenbinhluan, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(NOIDUNG,IDPRO,IDUSER,NGAYBINHLUAN,TENBINHLUAN)
    VALUES ('$noidung','$idpro','$iduser','$ngaybinhluan','$tenbinhluan')";
    pdo_execute($sql);
}
function hienthibinhluan($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE IDPRO='".$idpro."' ORDER BY IDBL ASC" ;
    $danhsach = pdo_query($sql);
    return  $danhsach;
}
function danhsachbinhluan()
{
    $sql = "SELECT * FROM binhluan ORDER BY IDBL asc";
    $danhsachbinhluan = pdo_query($sql);
    return  $danhsachbinhluan ;
}
function xoabl($idbl)
{
    $sql = "DELETE FROM binhluan WHERE IDBL=".$idbl ;
    pdo_execute($sql);
}
function suabl($idbl)
{
    $sql = "SELECT * FROM binhluan  WHERE IDBL=" . $idbl;
    $bl = pdo_query_one($sql);
    return $bl;
}
function capnhapbl($idbl, $noidung)
{
    $sql = "UPDATE binhluan SET NOIDUNG='" . $noidung .  "' WHERE IDBL=" .$idbl;

    pdo_execute($sql);
}
?>