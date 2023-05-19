<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="camon">
                  <h3>Cảm ơn</h3>
            </div>
            <div class="camonquykhach1">
                <marquee behavior="" direction="">
                <h4>Cảm Ơn Qúy Khách Đã Mua Hàng</h4>
                </marquee>
          
            </div>
        </div>
    </div>
<?php 
           if(isset($bill) && (is_array($bill)))
           {
            extract($bill);
           }
           $PTTT=laytpptt($bill['BILLPTTT']);
?>
    <div class="row">
        <div class="col-md-10">
            <div class="camon">
                  <h3>Thông Tin Đơn Hàng</h3>
            </div>
           
            <div class="camonquykhach">
                <ul>
                    <li> Mã Đơn Hàng : <?= $bill['IDBILL']  ?></li>
                    <li> Ngày Đặt Đơn Hàng : <?= $bill['NGAYDATHANG']  ?></li>
                    <li> Tổng Đơn Hàng : <?=  number_format($bill['TONGBILL'],0,',','.') ?></li>
                    <li> Phương Thức Thanh Toán : <?= $PTTT ?></li>
                </ul>
               
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="khungttdh">
                  <h4>Thông Tin Đặt Hàng</h4>
            </div>
            <div class="khungttdh-nguoi">
                <ul>
                    <li>Người Đặt Hàng : <?= $bill['NAMEBILL']  ?></li>
                    <li>Địa Chỉ:<?= $bill['BILLDIACHI']  ?> </li>
                    <li>Số Điện Thoại:<?= $bill['BILLSDT']  ?></li>
                </ul>
                 <!-- <div>Người Đặt Hàng :<span class="ttnd"> <?= $bill['NAMEBILL']  ?> </span></div>
                 <div>Địa Chỉ:  <span class="ttnd1"><?= $bill['BILLDIACHI']  ?></span></div>
                 <div>Số Điện Thoại  <span class="ttnd2"><?= $bill['BILLSDT']  ?></span></div> -->
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
        <div class="camon">
                  <h3>Thông Tin Giỏ Hàng</h3>
        </div>
        <div class="khung-confirm-bang">
           <table class="table table-striped table-hover bang-ttgh">

                        <?php 
                            show_ctdh($billchitiet);
                        ?>

           </table>
        </div>
        </div>
    </div> 
</div>