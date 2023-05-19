<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Sản Phẩm</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Thêm Mới Sản Phẩm</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=sanpham" enctype="multipart/form-data">
        <div class="khung-form khung-formsp">
        <label for="" class="text-form" >Danh Mục</label>
           <select class="form-select" name="iddm" required>
            <option  value="" selected>Chọn Danh Mục</option>
            <?php 
               foreach ($danhsachdanhmuc as $danhmuc) 
               {
                  extract($danhmuc);
                  echo '<option  value='.$IDDM.'>'.$NAME.' </option>';
              }

            ?>
              
           </select>   
           
        <label for=""  class="text-form" >Tên Sản Phẩm</label>
            <input type="text" name="tensp" class="form-control" required />
            <label for="" class="text-form" >Giá</label>
            <input type="text" name="giasp" class="form-control"required />
            <label for="" class="text-form" >Hình</label>
            <br>
            <input required type="file" name="hinh" >
            <br>
            <label for="" class="text-form" >Mô Tả</label>
             <textarea name="motasp" class="form-control" cols="30" required rows="5" ></textarea>
            <input type="submit" name="themsp" value="Thêm Mới" class="btn btn-danger the-nhap" />
            <input type="reset" value="Reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=listsp"  class="btn btn-secondary the-nhap">Danh Sách Sản Phẩm</a>
          <p class="tbtsp"> <?php 
             if(isset($thongbao)&&($thongbao!=""))
            {
                echo   $thongbao;
            }
           ?>
            <?php 
             if(isset(  $thongbaonhapsaichu)&&(  $thongbaonhapsaichu!=""))
            {
                echo   $thongbaonhapsaichu;
            }
           ?>
            <?php 
             if(isset(  $thongbaonhapsai2)&&(  $thongbaonhapsai2!=""))
            {
                echo   $thongbaonhapsai2;
            }
           ?>
         
            <?php 
             if(isset(  $thongbaonhapsai1)&&(  $thongbaonhapsai1!=""))
            {
                echo   $thongbaonhapsai1;
            }
           ?>
            <?php 
             if(isset(  $thongbaonhapsai8000)&&(  $thongbaonhapsai8000!=""))
            {
                echo   $thongbaonhapsai8000;
            }
           ?>
           <?php 
             if(isset($thongbaonhapsai5)&&( $thongbaonhapsai5!=""))
            {
                echo   $thongbaonhapsai5;
            }
           ?>
            <?php 
             if(isset($thongbaonhapsaisdt)&&($thongbaonhapsaisdt!=""))
            {
                echo   
                $thongbaonhapsaisdt;
            }
           ?>

            <?php 
             if(isset($thongbaonhapsai8)&&( $thongbaonhapsai8!=""))
            {
                echo   $thongbaonhapsai8;
            }
           ?>
             <?php 
             if(isset($thongbaonhapsai9)&&( $thongbaonhapsai9!=""))
            {
                echo   $thongbaonhapsai9;
            }
           ?>
              <?php 
             if(isset($thongbaonhapsai50)&&( $thongbaonhapsai50!=""))
            {
                echo   $thongbaonhapsai50;
            }
           ?>
             <?php 
             if(isset( $thongbao23)&&(  $thongbao23!=""))
            {
                echo   $thongbao23;
            }
           ?>
           
        </div>

      
      
    </form>
    </div>
</div>  
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
