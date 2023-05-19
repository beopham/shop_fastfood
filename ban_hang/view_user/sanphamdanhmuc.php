<div class="container">
	<!-- <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"> <a href="trangchu.php" class="a-bread">Home</a> </li>
			<li class="breadcrumb-item">
				<a href="Hamburger.php" class="a-bread">
					<?= $namedm ?>
				</a>
			</li>
		</ol>
	</nav> -->
	<h1 class="h1-burger "><?= $namedm ?></h1>
	<br>

	<div class="row">
		<?php 
               foreach ($danhsachsanpham as $sanpham) {
                extract($sanpham);
                $linksp="index.php?act=chitietsanpham&IDSP=".$IDSP;
                $hinh=$img_path.$IMG;
              //    echo '
              //    <div class="col-md-3 col-sm-6 col-12">
              //    <div class="khoi-cot4 khoicot4-sp">
              //    <a href="'.$linksp.'"><img src="'.$hinh.'" class="anh-cot4"></a>
              //      <div class="description">
              //      <a class="linksp-h3" href="'.$linksp.'"> <h3>'.$NAMESP.'</h3></a>
              //      <h4>'.$PRICE.' <sup>đ</sup>
              //      </h4>
                  
              //        <a href="#">Read More</a>
              //      </div>
              //    </div>
              //  </div>';


               echo '
             <div class="col-md-3 col-sm-6 col-12">
             <div class="khoi-cot4 khoicot4-sp">
             <a href="'.$linksp.'"><img src="'.$hinh.'" class="anh-cot4"></a>
             <div class="description">
             <a class="linksp-h3" href="'.$linksp.'"> <h3>'.$NAMESP.'</h3></a>
             <h4 style="color: white;">' .number_format($PRICE,0,',','.').' <sup>đ</sup>

             </h4>
             <form action="index.php?act=themgiohang" method="post">
             <input type="hidden" name="idsp" value="'.$IDSP.'">
              <input type="hidden" name="namesp" value="'.$NAMESP.'">
              <input type="hidden" name="img" value="'.$IMG.'">
              <input type="hidden" name="gia" value="' .$PRICE.' ">
              <input type="submit"  name="them-giohang" class="form-control nut-muahang" value=" Thêm Vào Giỏ Hàng">
             </form>
               </div>
             </div>
           </div>
         ';
        
               }    
            ?>
     </div>

     <!-- <div class="row">
      <div class="col-md-12">
           <div class="khungtkkkk">
<span>    <i class="fa fa-phone-square" aria-hidden="true"></i>
      <span class="htttk">Hỗ trợ / Mua hàng:  </span>     <span style="color: red;" > 0933 800 190</span> </span>
        
           </div>
      </div>
     </div>

     <div class="row">
      <div class="col-md-12">
           <div class="khungtkkkk1">
              <marquee behavior="" direction="">
                <h1 class="kass">Good Food Limited</h1>
                <img class="kki" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2kSJlzprgH4EG0kULCDTex90ByNUS9rKuMA&usqp=CAU" alt="">
              </marquee>
           </div>
      </div>
     </div> -->


     <div class="row">
      <div class="col-md-4">
        <div class="khung-deli">
             <video controls height="100%" width="100%"> 
              <source src="../img/deli1.mp4" type="video/mp4">
             </video>
        </div>
      </div>
      <div class="col-md-4">
      <div class="khung-deli">
      <video controls height="100%" width="100%"> 
              <source src="../img/deli2.mp4" type="video/mp4">
             </video>
</div>
      </div>
      <div class="col-md-4">
      <div class="khung-deli">
      <video controls height="100%" width="100%"> 
              <source src="../img/deli3.mp4" type="video/mp4">
             </video>
</div>
      </div>
     </div>
</div>
<!-- <?php 
          foreach ($sanphamchotrangchu as $sanpham) {
            extract($sanpham);
            $linksp="index.php?act=chitietsanpham&IDSP=".$IDSP;
            $hinh=$img_path.$IMG;
             echo '
             <div class="col-md-3 col-sm-6 col-12">
             <div class="khoi-cot4 khoicot4-sp">
             <a href="'.$linksp.'"><img src="'.$hinh.'" class="anh-cot4"></a>
             <div class="description">
             <a class="linksp-h3" href="'.$linksp.'"> <h3>'.$NAMESP.'</h3></a>
             <h4 style="color: white;">' .number_format($PRICE,0,',','.').' <sup>đ</sup>

             </h4>
             <form action="index.php?act=themgiohang" method="post">
             <input type="hidden" name="idsp" value="'.$IDSP.'">
              <input type="hidden" name="namesp" value="'.$NAMESP.'">
              <input type="hidden" name="img" value="'.$IMG.'">
              <input type="hidden" name="gia" value="' .$PRICE.' ">
              <input type="submit"  name="them-giohang" class="form-control nut-muahang" value=" Thêm Vào Giỏ Hàng">
             </form>
               </div>
             </div>
           </div>
         ';
        
          }
          
        ?> -->