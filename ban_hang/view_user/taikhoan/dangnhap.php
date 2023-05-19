<div class="container">
    
<div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="khungdn" >
                <form action="index.php?act=dangnhap" method="POST">
                    <h2 class="text-center">
                        Đăng Nhập
                    </h2>

                    <input type="text" name="tk" class="form-control thanh-dk" placeholder="Nhập Tài Khoản" minlength="10" required />
                    <div class="thanh-mk">
                    <input id="pass" type="password" name="mk" class="form-control thanh-dk" minlength="10" placeholder="Nhập Mật Khẩu" required />
                    <i class="fa fa-eye" onclick="mat()" aria-hidden="true"></i>    
                </div>
                   
                    <input type="submit" value="Đăng Nhập" name="dangnhap" class="btn btn-danger nut-dangky" />
                    <input type="reset" value="Reset" class="btn btn-secondary" />
                    <span class="quenmk"><a class="quenmk-chu chu-quenmk" href="index.php?act=quenmk">Quên Mật Khẩu</a> Hoặc <a class="chu-quenmk" href="index.php?act=dangky">Đăng Ký</a></span>
               
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
