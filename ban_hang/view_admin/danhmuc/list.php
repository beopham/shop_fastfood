<div class="row">
  <div class="col-md-12">
    <div class="khung-noidung">
      <marquee behavior="alternate" Direction="right">
        <h2>Chào Mừng Admin Đến Với Trang Danh Sách Danh Mục</h2>
      </marquee>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="thanhchinh">
      <h2 class="text-chinh">Danh Sách Danh Mục</h2>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="khungbang">
      <table class="table table-striped table-bordered table-hover table-reponsive bang">
        <tr>
         
          <td>
            <h4>Mã Danh Mục </h4>
          </td>
          <td>
            <h4>Tên Danh Mục</h4>
          </td>
          <td>
            <h4> <a href="index.php?act=danhmuc" class="btn btn-info nut-themdanhmuc "><i class="fa fa-plus-square" aria-hidden="true"></i></a></h4>
          </td>
        </tr>

        <?php 
        foreach ($danhsachdanhmuc as $danhmuc) 
        {
            extract($danhmuc);
            $suadm="index.php?act=suadm&IDDM=".$IDDM;
            $xoadm="index.php?act=xoadm&IDDM=".$IDDM;
            echo '<tr>
           
             <td>'.$IDDM.'</td>
             <td>'.$NAME.'</td>
             <td>
             <a href="'.$suadm.'"class="btn btn-danger"><i class="fa fa-pencil " aria-hidden="true"></i></a> |   <a href="'.$xoadm.'" class="btn btn-warning"><i class="fa fa-trash-o " aria-hidden="true"></i></a>
             </td>
           </tr>';
        }
        ?>
      </table>
      <a href="index.php?act=sanpham" class="btn btn-dark ">Thêm Sản Phẩm</a>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>