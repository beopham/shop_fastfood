<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="khung-giohang">
        <h2> <center>Giỏ Hàng </center> </h2>
        <form action="index.php?act=capnhapbill" method="post">
        <table class="table table-striped table-hover table-reponsive bang-giohang ">
         
          <?php  
            viewcart(1);
            ?>
        </table>
       <a  href="index.php?act=index.php " class="btn btn-primary quaylaimh">Quay Lại Mua Hàng</a>
       <a href="index.php?act=xoaallgiohang=1" class="btn btn-secondary " >Xóa tất cả giỏ hàng</a> 
       <a href="index.php?act=bill" class="btn btn-danger">Đặt Hàng</a>

      
        </form>
      </div>
 
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <div class="khungsaugiohang">
        
      </div>
    </div>
  </div>
</div>