<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="khungcapnhap">
                <h3><center> Cập Nhập Tài Khoản</center> </h3>
                <?php 
                  if (isset( $_SESSION['taikhoan']) && is_array($_SESSION['taikhoan'])) 
                  {
                      extract( $_SESSION['taikhoan']);   
                  }
                  ?>
                <form action="index.php?act=capnhaptaikhoan" method="post">
                    <label for="">Tài Khoản</label>
                    <input type="text" name="tk" class="form-control thanh-capnhap" value="<?= $TAIKHOAN ?>" />
                    <label for="">Mật Khẩu</label>
                    <div class="thanh-mk">
                    <input id="pass" type="password" name="mk" class="form-control thanh-capnhap" value="<?= $MATKHAU ?>" />
                    <i class="fa fa-eye mat-capnhap" onclick="mat()" aria-hidden="true"></i>
                    </div>    
                    <label for="">Họ Và Tên</label>
                    <input type="text" name="hovaten" class="form-control thanh-capnhap" value="<?= $NAMEKH ?>" />
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="diachi" class="form-control thanh-capnhap" value="<?= $DIACHI ?>" />
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="sdt" class="form-control thanh-capnhap" value="<?= $SDT ?>" />

                    <input type="hidden" name="idkh" value="<?= $IDKH ?>" />
                    <input type="submit" name="capnhap" value="Cập Nhập" class="btn btn-danger" />
            
                    <a href="index.php?act=taikhoan" class="btn btn-secondary">Quay Lại Trang Tài Khoản</a>
                </form>
                <p>
                    <center>
                        <?php 
                           if(isset( $thongbao)&&($thongbao!=""))
                          {
                              echo $thongbao;
                          }
                         ?>
                    </center>
                </p>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script type="text/javascript">
    var x=true;
function mat()
{
    if(x)
    {
        document.getElementById('pass').type="text";
        x=false;
    }
    else
    {
        document.getElementById('pass').type="password";
        x=true;
    }

}
</script>
