<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Thống Kê</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tksptm">
            <h2>Thống Kê Sản Phẩm Theo Mục</h2>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-md-12">
            <div class="khungbangdh">
                <table class="table table-striped table-hover table-reponsive bangdh">
                    <tr>
                        <th>STT</th>
                        <th>Mã Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <th>Số Lượng</th>
                        <th>Giá Cao Nhất</th>
                        <th>Giá Thấp Nhất</th>
                        <th>Giá Trung Bình</th>
                    </tr>

                    <?php 
                     $i=1;
                         foreach ($danhsachTK as $tk) {
                            extract($tk);
                           
                            echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td> ' .number_format($maxsp,0,',','.').'</td>
                                    <td> ' .number_format($minsp,0,',','.').'</td>
                                    <td> ' .number_format($avgsp,0,',','.').'</td>
                                </tr>';
                                $i++;
                         }
                    ?>
                    
                    
                </table>
            </div>
        </div>
    </div>
  <div class="row">
    <div class="col-md-12">
        <div class="khungbieudo">
        <div id="piechart"> </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh Mục ', 'Số Lượng Sản Phẩm'],
<?php 
$tongdm=count($danhsachTK);
          $i=1;
 $i=1;
 foreach ($danhsachTK as $tk) {
   extract($tk);
   if($i==$tongdm)
          {
            $dauphay="";
          }
          else
          {
            $dauphay=",";
          }
   echo " ['".$tk['tendm']."' ,".$tk['countsp']."]".$dauphay;
              $i++;
 }
?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống Kê Sản Phẩm Theo Danh Mục', 'width':1000, 'height':600};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

        </div>
    </div>
  </div>
</div>  
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
