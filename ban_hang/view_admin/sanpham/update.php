<?php 
    if(is_array($sanpham))
    {
        extract($sanpham);
    }
    $hinhpath="../upload/".$IMG;
    if(is_file($hinhpath))
    { 
        $hinh="<img src='".$hinhpath."' height='100px'  width='100px' >" ;
    }
    else
    {
      echo 'Không Có Hình Ảnh';
    }
?>
<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Cập Nhập Sản Phẩm</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Cập Nhập Sản Phẩm</h2>
        </div>
    </div>
</div>
<div class="row">
<form method="POST" action="index.php?act=updatesp" enctype="multipart/form-data">
        <div class="khung-form">
        <label for="" class="text-form" >Tên Danh Mục</label>
         <select name="iddm" class="form-select ">
  <option value="0" selected>Tất Cả</option>
  <?php 
               foreach ($danhsachdanhmuc as $danhmuc) 
               {
                  extract($danhmuc);
                  if($iddm==$idsp)
                  {
                    echo '<option  value='.$IDDM.' selected>'.$NAME.' </option>';
                  }
                  else
                  {
                    echo '<option  value='.$IDDM.'>'.$NAME.' </option>';
                  }
                  
              } 

            ?>
  </select> 
            <label for="" class="text-form" >Tên Sản Phẩm</label>
            <input type="text" name="tensp" class="form-control"value="<?= $NAMESP ?>" />
            <label for="" class="text-form" >Giá</label>
            <input type="text" name="giasp" class="form-control" value="<?= $PRICE ?>" />
            <label for="" class="text-form" >Hình</label>
            <br>
            <input type="file" name="hinh" >
            <?= $hinh?>;
            <br>
            <label for="" class="text-form" >Mô Tả</label>
             <textarea name="motasp" class="form-control" cols="30" rows="5"  /><?= $MOTA?></textarea>
             <input type="hidden" name="idsp" value="<?=$IDSP?>">
             <input type="submit" name="capnhapsp" value="Cập Nhập" class="btn btn-danger the-nhap" />
            <input type="reset" value="Reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=listsp"  class="btn btn-secondary the-nhap">Danh Sách</a>
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
