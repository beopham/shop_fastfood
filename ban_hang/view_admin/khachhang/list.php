<div class="row">
  <div class="col-md-12">
    <div class="khung-noidung">
      <marquee behavior="alternate" Direction="right">
        <h2>Chào Mừng Admin Đến Với Trang Danh Sách Khách Hàng</h2>
      </marquee>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="thanhchinh">
      <h2 class="text-chinh">Danh Sách Khách Hàng</h2>
    </div>
  </div>
</div>
<!-- <form action="index.php?act=listsp" method="post">
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
</form> -->

<div class="row">

<div class="col-md-12">

  <div class="khungbang">
      <table class="table table-striped table-bordered table-hover table-reponsive bang">
        <tr>
         
          <td>
            <h5>Mã Khách Hàng </h5>
          </td>
          <td>
            <h5>Tên Khách Hàng</h5>
          </td>
          <td>
            <h5>Số Điện Thoại</h5>
          </td>
          <td>
            <h5>Địa Chỉ</h5>
          </td>
          <td>
            <h5>Tài Khoản</h5>
          </td>
          <td>
            <h5>Mật Khẩu</h5>
          </td>
          
          <td>
            <h5>Ủy Quyền</h5>
          </td>
          <td>
           <h4>Hành Động </h4>
          </td>
        </tr>

        <?php 
        foreach ($danhsachkhachhang as $khachhang) 
        {
            extract($khachhang);
            $suakh="index.php?act=suakh&IDKH=".$IDKH;
            $xoakh="index.php?act=xoakh&IDKH=".$IDKH;
            echo '<tr>
           
             <td>'.$IDKH.'</td>
             <td>'.$NAMEKH.'</td>
             <td>'.$SDT.'</td>
             <td>'.$DIACHI.'</td>
             <td>'.$TAIKHOAN.'</td>
             <td>'.$MATKHAU.'</td>
           
             <td>'.$ROLE.'</td>
             <td>
             <a href="'.$suakh.'"class="btn btn-danger"><i class="fa fa-pencil " aria-hidden="true"></i></a> |   <a href="'.$xoakh.'" class="btn btn-warning"><i class="fa fa-trash-o " aria-hidden="true"></i></a>
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