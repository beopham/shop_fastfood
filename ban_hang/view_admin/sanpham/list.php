<div class="row">
  <div class="col-md-12">
    <div class="khung-noidung">
      <marquee behavior="alternate" Direction="right">
        <h2>Chào Mừng Admin Đến Với Trang Danh Sách Sản Phẩm</h2>
      </marquee>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="thanhchinh">
      <h2 class="text-chinh">Danh Sách Sản Phẩm</h2>
    </div>
  </div>
</div>
<form action="index.php?act=listsp" method="post">
  <input type="text" name="keyword" class="form-control thanhtk-dm" placeholder="Tìm Kiếm Theo Tên Sản Phẩm">
  <select name="iddm" class="form-select thanhdm" >
  <option value="0" selected>Tất Cả</option>
  <?php 
               foreach ($danhsachdanhmuc as $danhmuc) 
               {
                  extract($danhmuc);
                  echo '<option  value='.$IDDM.'>'.$NAME.' </option>';
              }

            ?>
  </select>
  <input type="submit" value="Tìm Kiếm" name="nhap-dm" class="btn btn-secondary nut-tkdm">
</form>
<div class="row">
  <div class="col-md-12">
    <div class="khungbang">
      <table class="table table-striped table-bordered table-hover bang">
        <tr>
          
          <td>
            <h5>Mã Danh Mục </h5>
          </td>
          <td>
            <h5>Tên Sản Phẩm</h5>
          </td>
          <td>
            <h5>Giá</h5>
          </td>
          <td>
            <h5>Hình</h5>
          </td>
          <td>
            <h5>Mô Tả</h5>
          </td>
          

          <td class="cot-hanhdong">
            <a href="index.php?act=sanpham" class="btn btn-info nut-themdanhmuc"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
          </td>
        </tr>

        <?php 
        foreach ($danhsachsanpham as $sanpham) 
        {
            extract($sanpham);
            $PRICE=number_format($sanpham['PRICE'],0,',','.');
            $suasp="index.php?act=suasp&IDSP=".$IDSP;
            $xoasp="index.php?act=xoasp&IDSP=".$IDSP;
            $hinhpath="../upload/".$IMG;
            if(is_file($hinhpath))
            { 
                $hinh="<img src='".$hinhpath."' height='100px'  width='100px' >" ;
            }
            else
            {
              echo 'Không Có Hình Ảnh';
            }
            echo '<tr>
            
             <td>'.$IDDM.'</td>
             <td>'.$NAMESP.'</td>
             <td>'.$PRICE.'</td>
             <td>'.$hinh.'</td>
             <td> <p>'.$MOTA.'</p></td>  
             <td class="cot-hanhdong">
             <a href="'.$suasp.'"class="btn btn-danger"><i class="fa fa-pencil " aria-hidden="true"></i></a> |   <a href="'.$xoasp.'" class="btn btn-warning"><i class="fa fa-trash-o " aria-hidden="true"></i></a>
             </td>
           </tr>';
        }
        ?>
      </table>
   
    </div>
  </div>  
</div>
      </div>
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>