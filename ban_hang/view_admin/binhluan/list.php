<div class="row">
  <div class="col-md-12">
    <div class="khung-noidung">
      <marquee behavior="alternate" Direction="right">
        <h2>Chào Mừng Admin Đến Với Trang Danh Sách Bình Luận</h2>
      </marquee>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="thanhchinh">
      <h2 class="text-chinh">Danh Sách Bình Luận</h2>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="khungbang">
      <table class="table table-striped table-bordered table-hover table-reponsive bang">
        <tr>
         
          <td>
            <h5>Mã Bình Luận </h5>
          </td>
          <td>
            <h5>Mã Sản Phẩm </h5>
          </td>
          <td>
            <h5>Mã Người Bình Luận</h5>
          </td>
          <td>
            <h5>Tên Người Bình Luận</h5>
          </td>
          <td>
            <h5>Nội Dung Bình Luận</h5>
          </td>
          <td>
            <h5>Ngày Bình Luận</h5>
          </td>
          <td>
            <h5>Hành Động</h5>
          </td>
          
        </tr>

        <?php 
        foreach ($danhsachbinhluan as $binhluan) 
        {
            extract($binhluan);
            $suabl="index.php?act=suabl&IDBL=".$IDBL;
            $xoabl="index.php?act=xoabl&IDBL=".$IDBL;
            echo '<tr>
           
             <td>'.$IDBL.'</td>
             <td>'.$IDPRO.'</td>
             <td>'.$IDUSER.'</td>
             <td>'.$TENBINHLUAN.'</td>
             <td>'.$NOIDUNG.'</td>
             <td>'.$NGAYBINHLUAN.'</td>
             <td>
             <a href="'.$suabl.'"class="btn btn-danger"><i class="fa fa-pencil " aria-hidden="true"></i></a> |   <a href="'.$xoabl.'" class="btn btn-warning"><i class="fa fa-trash-o " aria-hidden="true"></i></a>
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