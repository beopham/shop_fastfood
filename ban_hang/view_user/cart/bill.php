<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="khung-tt-khachhang">
                <h3><center>Thông Tin Khách Hàng</center></h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="khung-tt-khachhang">
            <h3><center>Phương Thức Thanh Toán</center></h3>
            </div>
        </div>

 
    </div>
    <form action="index.php?act=billconfirm" method="post">
    <div class="row">
        <?php 
             if(isset($_SESSION["taikhoan"]))
             {
                $name=$_SESSION["taikhoan"]['NAMEKH'];
                $diachi=$_SESSION["taikhoan"]['DIACHI'];
 
                $sdt=$_SESSION["taikhoan"]['SDT'];
             }
             else
             {
                $name="";
                $diachi="";
                $email="";
                $sdt="";
             }

           ?>
    <div class="col-md-6">
              
                <div class="class-khung-thongtin-kh">
                <label for=""><h5>Người Đặt Hàng </h5></label>
                <input type="text" name="name" class="form-control thanh-ttkh" value="<?= $name?>">
                <label for=""><h5>Địa Chỉ </h5></label>
                <input type="text" name="diachi" class="form-control thanh-ttkh" value="<?= $diachi?>">
                <label for=""><h5>Số Điện Thoại </h5></label>
                <input type="text" name="sdt" class="form-control thanh-ttkh" value="<?= $sdt?>">
                </div>
      
            </div>
            <div class="col-md-6">
            <div class="pttt">
                  
                  <div class="chon-pttt form-check " >
                   <span> Thanh Toán Trực Tiếp <input required type="radio" value="1" class="form-check-input" name="pttt" > </span>
                   <br>
                   <span> Chuyển Khoản<input type="radio" required value="2" class="form-check-input" name="pttt"> </span>
                   <br>
                   <span> Thanh Toán Online<input type="radio" required class="form-check-input" value="3" name="pttt"> </span>
                  </div>
                  <div class="khungnganhang">
                <div class="re1">
<img src="https://saobacdau.vn/Data/Sites/1/News/774/logo-shb.jpg" class="anhnganhang" alt="">
                </div>
                <div class="re2">
                <img src="https://inkythuatso.com/uploads/images/2021/09/logo-vietcombank-inkythuatso-10-10-41-18.jpg" class="anhnganhang" alt="">
                    </div>
                    <div class="re3">
                    <img src="https://inkythuatso.com/uploads/images/2021/09/logo-vietinbank-inkythuatso-10-13-22-06.jpg" class="anhnganhang" alt="">
                    </div>

                    <div class="re1">
                    <img src="https://bankcredit.vn/wp-content/uploads/2022/09/hinh-2222-1.jpg" class="anhnganhang" alt="">
</div>
<div class="re2">
<img src="http://www.vpbank.com.vn/-/media/vpbank-latest/8aboutvpbank/gioi-thieu-chung/general-introduction/logo2-02.jpg" class="anhnganhang" alt="">
    </div>
    <div class="re3">
    <img src="https://inkythuatso.com/uploads/images/2021/09/logo-techcombank-inkythuatso-10-15-11-46.jpg" class="anhnganhang" alt="">
    </div>
                </div>
                </div>


           
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="pttt">
                  <div class="thanh-tt-1">
                    <h5><center>Phương Thức Thanh Toán</center></h5>
                  </div>
                  <div class="chon-pttt form-check " >
                   <span> Thanh Toán Trực Tiếp <input required type="radio" value="1" class="form-check-input" name="pttt" > </span>
                   <br>
                   <span> Chuyển Khoản<input type="radio" required value="2" class="form-check-input" name="pttt"> </span>
                   <br>
                   <span> Thanh Toán Online<input type="radio" required class="form-check-input" value="3" name="pttt"> </span>
                  </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-12">
            <div class="tt-giohang">
            <div class="thanh-tt-1">
                    <h5><center>Thông Tin Giỏ Hàng</center></h5>
                  </div>
                  <div class="bang-cart">
                    <table class="table table-striped table-hover table-reponsive bang-giohang-bill">
                       <?php 

                            viewcart(0);
                            ?>
                    </table>
                    <a  href="index.php?act=themgiohang " class="btn btn-primary quaylaimh">Quay Lại Mua Hàng</a>
                    <!-- <a  href="index.php?act=billconfirm " class="btn btn-primary quaylaimh">Đồng  ý Đặt Hàng</a> -->
                    
                    <input type="submit" value="Đồng Ý Đặt Hàng" name="nut-dathang" class="btn btn-danger">
                    
                    <!-- <a href="index.php?act=tinhtrangdangnhap" class="btn btn-danger">Đồng Ý Đặt Hàng</a> -->
                  </div>
            </div>
        </div>
    </div>
    </form>
</div>