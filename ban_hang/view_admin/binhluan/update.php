<?php 
    if(is_array($bl))
    {
        extract($bl);
    }

?>
<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Cập Nhập Bình Luận</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Cập Nhập Bình Luận</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=updatebl">
        <div class="khung-form">
            <input type="hidden" name="idbl" value="<?php if(isset($IDBL)&& ($IDBL>0)) echo $IDBL ; ?>">
            <label for="" class="text-form" >Nội Dung Bình Luận</label>
            <input type="text" name="nd" class="form-control" value="<?= $NOIDUNG ?>" />
            <input type="submit" name="capnhapbl" value="Cập Nhập" class="btn btn-danger the-nhap" />
            <input type="reset" value="reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=binhluan"  class="btn btn-secondary the-nhap">Danh Sách Bình Luận</a>
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
