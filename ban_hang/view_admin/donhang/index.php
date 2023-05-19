
    <div class="row">
        <div class="col-md-12">
            <div class="thanhdh">
                <h2>Đơn Hàng</h2>
            </div>
        </div>
    </div>
  

    <div class="row">
        <div class="col-md-12">
            <div class="khungbangdh">
                <table class="table table-bordered table-striped table-hover bangdh">
                    <tr>
                        <th>STT</th>
                        <th>Mã Đơn Hàng</th>
                        <th>Khách Hàng</th>
                        <th>Số Lượng</th>
                        <th>Tổng Tiền</th>
                        <th>Tình Trạng Đơn Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php 
                          $i=1;
                          foreach ($danhsachbill as $bill)
                           {

                             extract($bill);
                             $suadh="index.php?act=suadh&IDBILL=".$IDBILL;
                             $xoadh="index.php?act=xoadh&IDBILL=".$IDBILL;
                             $BILL= number_format($bill['TONGBILL'],0,',','.');
                             $TTDH=layttdh($bill['BILLTTDH']);
                             $count=load_soluongcart($bill['IDBILL']);
                              $kh='<p>'.$bill["NAMEBILL"].'</p>
                              <p>'.$bill["BILLDIACHI"].'</p>
                              <p>'.$bill["BILLSDT"].'</p>';

                             echo '<tr>
                                       <td>'.$i.'</td>
                                       <td>'.$bill['IDBILL'].'</td>
                                       <td>'.$kh.'</td>
                                        <td>'.$count.'</td>
                                        <td>'.$BILL.'</td>
                                        <td>'. $TTDH.'</td>
                                        <td>'.$bill['NGAYDATHANG'].'</td>
                                        <td><a href="'.$suadh.'"class="btn btn-danger"><i class="fa fa-pencil " aria-hidden="true"></i></a> |   <a href="'.$xoadh.'" class="btn btn-warning"><i class="fa fa-trash-o " aria-hidden="true"></i></a></td>
                             </tr>';

                             $i++;
                          }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
