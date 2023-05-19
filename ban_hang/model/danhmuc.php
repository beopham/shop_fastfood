<?php 
function themdanhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc (name)
    VALUES ('$tenloai')";
   pdo_execute($sql);
}
function xoa($iddm)
{
    $sql = "DELETE FROM danhmuc WHERE IDDM=".$iddm ;
    pdo_execute($sql);
}
function sua($iddm)
{
    $sql = "SELECT * FROM danhmuc  WHERE IDDM=" . $iddm;
    $dm = pdo_query_one($sql);
    return $dm;
}
function hienthidanhsach()
{
    $sql = "SELECT * FROM danhmuc ORDER BY IDDM asc";
    $danhsachdanhmuc = pdo_query($sql);
    return $danhsachdanhmuc;
}
function capnhap($iddm,$tenloai )
{
    $sql = "UPDATE danhmuc SET NAME='" . $tenloai . "' WHERE IDDM=" .$iddm;

    pdo_execute($sql);
}
?>