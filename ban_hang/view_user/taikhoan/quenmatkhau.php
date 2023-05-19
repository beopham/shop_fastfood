<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="khungquenmk" style=" background-color:#E6E5E1;">
                <h3>Quên Mật Khẩu</h3>
                <?php 
                    if (isset( $_SESSION['taikhoan']) && is_array($_SESSION['taikhoan'])) 
                    {
                        extract( $_SESSION['taikhoan']);   
                    }
                ?>
                <form action="index.php?act=quenmk" method="post">
                    <label for="">Number Phone</label>
                    <input type="text" name="sdt" class="form-control thanh-capnhap" placeholder="Enter Number Phone" minlength="9" />
                    <input type="submit" name="gui" value="Gửi" class="btn btn-danger" />
                    <a href="index.php?act=dangnhap" class="btn btn-secondary">Quay Lại Trang Đăng Nhập</a>
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
