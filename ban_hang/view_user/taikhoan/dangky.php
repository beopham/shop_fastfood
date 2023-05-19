
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="khungdk" >
                <form action="index.php?act=dangky" method="POST" >
                    <h2 class="text-center">
                        Đăng Ký
                    </h2>
                    <input type="text" name="hovaten" id="hovaten" class="form-control thanh-dk" placeholder="Nhập Họ Và Tên" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" />
                    <input type="text" name="diachi" class="form-control thanh-dk" placeholder="Nhập Địa Chỉ" required />
                    <input type="tel" name="sdt" class="form-control thanh-dk" placeholder="Nhập Số Điện Thoại" required />
                    <input type="text" name="tk" minlength="10" class="form-control thanh-dk" placeholder="Nhập Tài Khoản" required />
                    <div class="thanh-mk">
                    <input type="password" name="mk" id="pass" minlength="10" class="form-control thanh-dk" placeholder="Nhập Mật Khẩu" required />
                    <i class="fa fa-eye" onclick="mat()" aria-hidden="true"></i>        
                    </div>
                    <input type="submit" value="Đăng Ký" name="dangky" class="btn btn-danger nut-dangky" />
                    <input type="reset" value="Reset" class="btn btn-secondary" />
                </form>
                <p>
                    <center>
                        <?php 
                             if(isset($thongbaonhapsai)&&($thongbaonhapsai!=""))
                            {
                                echo    $thongbaonhapsai;
                            }
                       
                           ?>
                    </center>
                </p>
                <p>
                    <center>
                        <?php 
                             if(isset($thongbaonhapsai1)&&($thongbaonhapsai1!=""))
                            {
                                echo   $thongbaonhapsai1;
                            }
                       
                           ?>
                    </center>
                </p>
                <p>
                    <center>
                        <?php 
                             if(isset($thongbaoca2)&&($thongbaoca2!=""))
                            {
                                echo $thongbaoca2;
                            }
                       
                           ?>
                    </center>
                </p>
                <p>
                    <center>
                        <?php 
                             if(isset($thongbaoca45)&&($thongbaoca45!=""))
                            {
                                echo $thongbaoca45;
                            }
                       
                           ?>
                    </center>
                </p>
                <p>
                    <center>
                        <?php 
                             if(isset($thongbaonhapsai2)&&($thongbaonhapsai2!=""))
                            {
                                echo     $thongbaonhapsai2;
                            }
                       
                           ?>
                    </center>
                </p>
    
                <p>
                    <center>
                        <?php 
                             if(isset(  $thongbaonhapsai3)&&(  $thongbaonhapsai3!=""))
                            {
                                echo   $thongbaonhapsai3;
                            }
                       
                           ?>
                    </center>
                </p>
              
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
        <div class="col-md-3"></div>
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



