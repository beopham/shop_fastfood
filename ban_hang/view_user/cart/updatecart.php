<?php 

?>
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="khung-giohang">
        <h2> <center>Giỏ Hàng </center> </h2>
        <form action="index.php?act=updatecart" method="post">
        <table class="table table-striped table-hover table-reponsive bang-giohang ">
    <tr> 
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
           
         </tr>

<?php
  $tong = 0;
  global $img_path;
foreach ($_SESSION["cart"] as $suacart) {
        $hinh = $img_path . $suacart[2];
        $ttien = $suacart[3] * $suacart[4];
        $tong += $ttien;
   
        echo '
		     <tr id="giohang">
				<td><img src="' .$hinh .'" alt="" height="100px"></td>
			<td>' . $suacart[1] .'</td>
			<td>' .number_format($suacart[3],0,',','.').'</td>
        <td><input type="text" class="form-control" name="soluong" value="' . $suacart[4] .'"> </td>
      
			<td>' .number_format($ttien,0,',','.').' </td>
		
		   </tr>';
       
    }
    echo '  
	   <tr>
		  <td colspan="4">Tổng Tiền</td>
		<td>' .number_format($tong,0,',','.').' </td>
	   
  
		</tr>';?>
      <input type="hidden" name="idcart" value="<?php if(isset($idcart) && $idcart) echo $idcart ; ?>">
      <!-- <input type="hidden" name="idsp" value="<?php if(isset($cart[0])&& ($cart[0])) echo $cart[0] ; ?>"> -->
      <input type="hidden" name="soluong" value="<?php if(isset($cart[4])&& ($cart[4])) echo $cart[4] ; ?>">

    </table>
       <input type="submit" value="Cập Nhập" class="btn btn-primary quaylaimh" name="capnhap-donhang">
     
        </form>
      </div>
 
    </div>
  </div>
</div>
