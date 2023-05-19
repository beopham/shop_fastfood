<?php 
    if(is_array($dm))
    {
        extract($dm);
    }

?>
<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Cập Nhập Danh Mục</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Cập Nhập Danh Mục</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=updatedm">
        <div class="khung-form">
            <label for="" class="text-form" >Tên Loại</label>
            <input type="hidden" name="iddm" value="<?php if(isset($IDDM)&& ($IDDM>0)) echo $IDDM ; ?>">
            <input type="text" name="tenloai" class="form-control" value="<?= $NAME ?>" />
            <input type="submit" name="capnhapdanhmuc" value="Cập Nhập" class="btn btn-danger the-nhap" />
            <input type="reset" value="reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=listdanhmuc"  class="btn btn-secondary the-nhap">Danh Sách</a>
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
