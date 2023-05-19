<?php 
session_start();

include '../../model/pdo.php';
include '../../model/taikhoan.php';
include '../../model/binhluan.php';
 $idpro =$_POST['idpro'];
 $dsbl= hienthibinhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/ban_hang/css/style_user.css">
  <link rel="stylesheet" href="/ban_hang/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/ban_hang/bootstrap/css/bootstrap.min.css">
   
  </head>
<body>
<div class="container">
<div class="row dong-ctsp">
    <div class="col-md-9">
      <div class="khung-chitietsp-bl ">
        <div class="text-spct">
          <h2>
            <center>Bình Luận Sản Phẩm</center>
          </h2>
        </div>
        <div class="noi-dungbl ">
        <table class="table table-striped table-hover bang-binhluan">
        <tr>
              <td> Tên </td>
              <td> Nội Dung </td>
              <td> Thời Gian Bình Luận </td>
            </tr>
        <?php 
             foreach($dsbl as $bl) {
                 extract($bl);
              echo '
                   <tr>
                     <td>'.$TENBINHLUAN.'</td>
                     <td>'.$NOIDUNG.'</td>
                      <td>'.$NGAYBINHLUAN.'</td>
                      </tr>'
                      ;
             }
        ?>
        
</table>
      

</div>
       
<div class="khung-gui-binhluan">
<form action=" <?=$_SERVER['PHP_SELF'];?>" method="post">
<input type="hidden" name="idpro" value="<?= $idpro ?>">    
<input type="text" name="noidung-bl" class="form-control thanh-binhluan" style=" width: 800px;">
    <input type="submit" value="Gửi Bình Luận" name="nut-bl" class="btn btn-primary nut-gui-bl">
</form>
<?php 
if(isset($_POST['nut-bl']) && ($_POST['nut-bl']))
{
//  if(isset($_SESSION['taikhoan']) && is_array($_SESSION['taikhoan']))
//  {
  $noidung=$_POST['noidung-bl'];
  $iduser=$_SESSION['taikhoan']['IDKH'];
  $tenbinhluan=$_SESSION['taikhoan']['NAMEKH'];
  $idpro =$_POST['idpro'];
  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $ngaybinhluan=date("h:i:sa d/m/Y");
  thembinhluan($noidung ,$idpro, $iduser, $tenbinhluan, $ngaybinhluan);
  header("location:" .$_SERVER['HTTP_REFERER']);
//  }
   
//  else
//  {
//   echo ' bạn pgari đăng nhập';
//  }
}

?>

        </div>
      </div>
    </div> 

    <div class="col-md-3">
    <div class="khungyyy">
    <img src="../img/lit.jpg" height="100%" width="100%" alt="">
    </div>

   </div>
</div>
    </div>

<script type="text/javascript" src="/ban_hang/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>



      
<script type="text/javascript" src="/ban_hang/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>