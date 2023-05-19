<?php 
    if(is_array( $dh))
    {
        extract( $dh);
        $TTDH=layttdh($dh['BILLTTDH']);
    }

?>
<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Cập Nhập Đơn Hàng</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Cập Nhập Đơn Hàng</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=updatedh">
        <div class="khung-form">
            <label for="" class="text-form" >Tên Khách Hàng</label>
            <input type="hidden" name="idbill" value="<?php if(isset($IDBILL)&& ($IDBILL>0)) echo $IDBILL ; ?>">
            <input type="text" name="tenbill" class="form-control" value="<?= $NAMEBILL ?>" />
            <label for="" class="text-form" >Địa Chỉ Khách Hàng</label>
            <input type="text" name="diachibill" class="form-control" value="<?= $BILLDIACHI ?>" />
            <label for="" class="text-form" >Số Điện Thoại Khách Hàng</label>
            <input type="text" name="sodtbill" class="form-control" value="<?= $BILLSDT ?>" />
           
            <label for="" class="text-form" >Trạng Thái Đơn Hàng</label>
            <input type="text" name="ttdh" class="form-control" value="<?=  $TTDH ?>" />
            <input type="submit" name="capnhapdh" value="Cập Nhập" class="btn btn-danger the-nhap" />
            <input type="reset" value="reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=donhang"  class="btn btn-secondary the-nhap">Danh Sách Đơn Hàng</a>
        </div>
      
    </form>
    </div>
</div>  
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
