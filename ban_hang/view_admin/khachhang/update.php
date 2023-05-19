<?php 
    if(is_array($kh))
    {
        extract($kh);
    }

?>
<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Cập Nhập Khách Hàng</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Cập Nhập Khách Hàng</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=updatekh">
        <div class="khung-form">
            <input type="hidden" name="idkh" value="<?php if(isset($IDKH)&& ($IDKH>0)) echo $IDKH ; ?>">
            <label for="" class="text-form" > Họ Và Tên Khách Hàng</label>
            <input type="text" name="hovaten" class="form-control" value="<?= $NAMEKH ?>" />
            <label for="" class="text-form" > Số Điện Thoại</label>
            <input type="text" name="sdt" class="form-control" value="<?= $SDT ?>" />
            <label for="" class="text-form" > Địa Chỉ</label>
            <input type="text" name="diachi" class="form-control" value="<?= $DIACHI ?>" />
            <label for="" class="text-form" > Tài Khoản</label>
            <input type="text" name="tk" class="form-control" value="<?= $TAIKHOAN ?>" />
            <label for="" class="text-form" > Mật Khẩu</label>
            <input type="text" name="mk" class="form-control" value="<?= $MATKHAU ?>" />
            <input type="submit" name="capnhapkhachhang" value="Cập Nhập" class="btn btn-danger the-nhap" />
            <input type="reset" value="reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=listdanhmuc"  class="btn btn-secondary the-nhap">Danh Sách Khách Hàng</a>
        </div>
        <?php 
             if(isset( $thongbao)&&($thongbao!=""))
            {
                echo $thongbao;
            }
           ?>
    </form>
    </div>
</div>  
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
