<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Danh Mục</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Thêm Mới Danh Mục</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=danhmuc">
        <div class="khung-form">
            <label for="" class="text-form" >Tên Loại</label>
            <input type="text" name="tenloai" required class="form-control" />
            <input type="submit" name="themdanhmuc" value="Thêm Mới" class="btn btn-danger the-nhap" />
            <input type="reset" value="Reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=listdanhmuc"  class="btn btn-secondary the-nhap">Danh Sách Danh Mục</a>
        </div>
        <?php 
             if(isset( $thongbao)&&($thongbao!=""))
            {
                echo $thongbao;
            }
           ?>
 <?php 
             if(isset($thongbaonhapsai1)&&($thongbaonhapsai1!=""))
            {
                echo $thongbaonhapsai1;
            }
           ?>
    </form>
    </div>
</div>  
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
