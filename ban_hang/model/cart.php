<!-- <input type="number" name=""  value="<?=' . $cart[4] .' ?>"> -->

<?php

function viewcart($del)
{
    
    $tong = 0;
    global $img_path;
    $i = 0;
    if ($del == 1) {
        $xoasp_cot1 = '<td><b>Thao Tác</b></td>';
        $xoasp_cot3 = "<td></td>";
    } else {
        $xoasp_cot1 = "";
        $xoasp_cot3 = "";
    }
    echo '<tr>
           <td>
             <b>Hình</b>
           </td>
           <td>
             <b>Tên Sản Phẩm</b>
           </td>
           <td>
             <b>Giá</b>
           </td>
           <td>
             <b>Số Lượng</b>
           </td>
           <td>
             <b>Tổng Tiền</b>
           </td>
           ' .$xoasp_cot1.'
         </tr>';
    foreach ($_SESSION["cart"] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_cot2 ='<td> <a class="btn btn-primary" href="index.php?act=xoacart&idcart='.$i .'"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>';
        } else {
            $xoasp_cot2 = "";
        }
        echo '
		     <tr id="giohang">
				<td><img src="' .$hinh .'" alt="" width="100px" height="100px" ></td>
			<td>' . $cart[1] .'</td>
			<td>' .number_format($cart[3],0,',','.').'</td>
            <td>
             '. $cart[4] .' 
            </td>
      
			<td>' .number_format($ttien,0,',','.').' </td>
			' .$xoasp_cot2 .'
		   </tr>';
        $i++;
    }
    echo '  
	   <tr>
		  <td colspan="4">Tổng Tiền</td>
		<td>' .number_format($tong,0,',','.').' </td>
		' .$xoasp_cot3 .'
		</tr>';
}

function suacart($idcart)
{
    $sql = "SELECT * FROM CART  WHERE IDCART=" . $idcart ;
    $suacart = pdo_query_one($sql);
    return $suacart;
}


function capnhapcart ($idcart,$soluongupdate )
{
    $sql = "UPDATE CART SET SOLUONG='".$soluongupdate."' WHERE IDCART=".$idcart ;

    pdo_execute($sql);
}

function show_ctdh($bill)
{
    $tong = 0;
    global $img_path;
    $i = 0;
    echo '<tr>
           <td>
             <b>Hình</b>
           </td>
           <td>
             <b>Tên Sản Phẩm</b>
           </td>
           <td>
             <b>Giá</b>
           </td>
           <td>
             <b>Số Lượng</b>
           </td>
           <td>
             <b>Tổng Tiền</b>
           </td>
       
         </tr>';
    foreach ($bill as $cart) {
        $hinh = $img_path . $cart["IMG"];
        //  $ttien=$cart['PRICE']*$cart['SOLUONG'];
        $tong += $cart["TONG"];
        echo '
					<tr id="giohang">
						<td>
							<img src="' .
            $hinh .'" alt="" height="100px" width="100px">
							</td>
							<td>' .
            $cart["NAMECART"] .
            '</td>
							<td>' .
            $cart["PRICE"] .
            '</td>
							<td>' .
            $cart["SOLUONG"] .
            '</td>
              <td>' .
            $cart["TONG"] .
            '</td>
						</tr>';
        $i++;
    }
    echo '  
						<tr>
							<td colspan="4">Tổng Tiền</td>
							<td>' .
        $tong .
        '</td>
						</tr>';
}
function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION["cart"] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function thembill(
    $iduser,
    $name,
    $diachi,
    $sdt,
  
    $pttt,
    $ngaydathang,
    $tongdonhang
) {
    $sql = "INSERT INTO BILL(IDUSER,NAMEBILL,BILLDIACHI,BILLSDT,BILLPTTT,NGAYDATHANG,TONGBILL)
    VALUES ('$iduser','$name','$diachi','$sdt','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart(
    $IDKH,
    $IDSP,
    $IMG,
    $NAMECART,
    $PRICE,
    $SOLUONG,
    $TONG,
    $IDBILL
) {
    $sql = "INSERT INTO CART(IDKH,IDSP,IMG,NAMECART,PRICE,SOLUONG,TONG,IDBILL)
    VALUES ('$IDKH','$IDSP','$IMG',' $NAMECART','$PRICE','$SOLUONG','$TONG','$IDBILL')";
    return pdo_execute($sql);
}
function loadone_bill($idbill)
{
    $sql = "SELECT * FROM BILL WHERE IDBILL=" . $idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}
function load_cart($idbill)
{
    $sql = "SELECT * FROM CART WHERE IDBILL=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

function hienthibill($iduser)
{
    $sql = "SELECT * FROM BILL WHERE IDUSER=" . $iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadALL_bilL($iduser)
{
    $sql = "SELECT * FROM BILL WHERE IDUSER=" . $iduser;
    $bill = pdo_query($sql);
    return $bill;
}
function layttdh($n)
{
    switch ($n) {
        case "0":
            $tt = "Đơn Hàng Mới";

            break;
        case "1":
            $tt = "Đang Xử Lý";

            break;
        case "2":
            $tt = "Đang Giao Hàng";

            break;
        case "3":
            $tt = "Đã Giao Hàng";

            break;
        default:
            $tt = "Đơn Hàng Mới";

            break;
    }
    return $tt;
}
function laytpptt($n)
{
    switch ($n) {
 
        case "1":
            $tt = "Thanh Toán Trực Tiếp";

            break;
        case "2":
            $tt = "Chuyển Khoản";

            break;
        case "3":
            $tt = "Thanh Toán Online";

            break;
        default:
            $tt = "Đơn Hàng Mới";

            break;
    }
    return $tt;
}
function load_soluongcart($idbill)
{
    $sql = "SELECT * FROM CART WHERE IDBILL=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function danhsachbill( $iduser=0 )
{
    $sql = "SELECT * FROM BILL WHERE 1";

    if ($iduser > 0) $sql .= "AND IDUSER=" . $iduser;
    // if ($kyw !="") $sql .= "AND IDBILL like '%". $kyw."%'";
        $sql .= " ORDER BY IDBILL ASC ";
    $danhsachbill = pdo_query($sql);
    return $danhsachbill;
}


function xoadh($iddh)
{
    $sql = "DELETE FROM BILL WHERE IDBILL=".$iddh ;
    pdo_execute($sql);
}
function suadh($iddh)
{
    $sql = "SELECT * FROM BILL WHERE IDBILL=".$iddh ;
    $dm = pdo_query_one($sql);
    return $dm;
}
function capnhapdh( $idbill,$tenbill,$diachibill,$sdtbill,$ttdh)
{
    $sql = "UPDATE BILL SET NAMEBILL='" . $tenbill . "',BILLDIACHI='" . $diachibill . "',BILLSDT='" . $sdtbill . "',BILLTTDH='" . $ttdh . "' WHERE IDBILL=".$idbill;

    pdo_execute($sql);
}
function thongkebang()
{
   $sql = "SELECT danhmuc.IDDM as madm,danhmuc.NAME as tendm, count(sanpham.IDSP) AS countsp,min(sanpham.PRICE) AS minsp,max(sanpham.PRICE) AS maxsp,avg(sanpham.PRICE) AS avgsp ";
   $sql .= " FROM sanpham LEFT JOIN danhmuc ON danhmuc.IDDM=sanpham.IDDM ";
   $sql .= " GROUP BY danhmuc.IDDM ORDER BY danhmuc.IDDM ASC ";

  $danhsachTK = pdo_query($sql);
  return $danhsachTK;

}
?>


