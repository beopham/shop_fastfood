<div class="container ">
  <div class="row dong0ctdhs ">
    <div class="col-md-9 dong-ctsp" >
      <div class="khung-chitietsp ">
        <div class="text-spct">
          <h2>
            <center>Chi Tiết Sản Phẩm</center>
          </h2>
        </div> 

      
     
        <?php 
              extract($hienthichitietsp);
              $img=$img_path.$IMG;
              echo '
              <div class="khunganh-ctsp">
              <img class="anh-ctsp"  src="'.$img.'" >

              <form action="index.php?act=themgiohang" method="post">
              <input type="hidden" name="idsp" value="'.$IDSP.'">
               <input type="hidden" name="namesp" value="'.$NAMESP.'">
               <input type="hidden" name="img" value="'.$IMG.'">
               <input type="hidden" name="gia" value="'.$PRICE.' ">
               <input type="submit"  name="them-giohang" class="btn btn-danger nut-ctdh nut-muahang" value="Add To Cart">
              </form>
              </div>';
              
              echo ' 
					
					<div class="khungmotactsp">
          <span class="mota-sp">Tên Sản Phẩm : '.$NAMESP.'</span>
          <span  class="mota-sp">Giá : '.number_format($PRICE,0,',','.').'</span>
          <span  class="mota-sp">Mô Tả :'.$MOTA.'</span> 
          </div>

        
          ';
            ?>
             
      </div>

    </div>
    <div class="col-md-3">
        <div class="khung-qcctdh">
          <video height="100%" width="100%" controls>

          <source type="video/mp4" src="../img/ctdh.mp4">
          </video>
        </div>
    </div>
  </div>
  <!-- <span class="mota-sp">Tên Sản Phẩm : '.$NAMESP.'</span>
          <span  class="mota-sp">Giá : '.number_format($PRICE,0,',','.').'</span>
          <span  class="mota-sp">Mô Tả :'.$MOTA.'</span> 
					</div>
          <form action="index.php?act=themgiohang" method="post">
             <input type="hidden" name="idsp" value="'.$IDSP.'">
              <input type="hidden" name="namesp" value="'.$NAMESP.'">
              <input type="hidden" name="img" value="'.$IMG.'">
              <input type="hidden" name="gia" value="'.$PRICE.' ">
              <input type="submit"  name="them-giohang" class="btn btn-danger nut-ctdh nut-muahang" value="Add To Cart">
             </form>  -->

  <div class="row" id="binhluan">
   <div class="col-md-9 dong-ctsp">
    <div class="khung-chitietsp">
    <div class="text-spct">
          <h2>
            <center>Bình Luận Sản Phẩm</center>
          </h2>
        </div>
        <div class="noi-dungbl ">

        </div>
    </div>
   </div>
   <div class="col-md-3">
    <div class="khungyyy">
    <!-- <img src="../img/lit.jpg" height="100%" width="100%" alt=""> -->
    </div>

   </div>

   </div>
  
 
  
  <div class="row ">
    <div class="col-md-9 dong-ctsp">
      <div class="khung-chitietsp-2 " >
        <div class="text-spct" >
          <h2 >
           Sản Phẩm Cùng Loại
          </h2>
        </div> 
        <?php 
                foreach ($sanpham_cungloai as $sanpham_cungloai) {
                  extract($sanpham_cungloai);
                  $linksp="index.php?act=chitietsanpham&IDSP=".$IDSP;
                echo ' 
					
					<li>
						<a href="'.$linksp.'" class="mu">'.$NAMESP.'</a>
					</li>';
                }

?>

      </div>
    </div>
    <div class="col-md-3">
      <div class="khung-ctdgdgd">
         <!-- <video  controls height="100%" width="100%">
          <source src="../img/ask.mp4" type="video/mp4">
         </video> -->
       <img src="../img/ramos.jpg" height="100%" width="100%" alt="">
      </div>
    </div>
  </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#binhluan").load("../view_user/binhluan/formbinhluan.php", {
        idpro: <?= $IDSP ?>
      });
    });
  </script>

</div>