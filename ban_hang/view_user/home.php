  <!-- trang slide  -->
  <div class="container lop2" >
      <div class="row ">
        <div class="col-md-3">
           <div class="khung-bang-dm">
            <table class="table table-striped table-hover table-reponsive bang-danh-muc">
            <tr>
              <td> <center><h5>Category</h5> </center> </td>
             </tr> 
             <?php 
               foreach ($danhsachdanhmuctrangchu as $danhmuc)
                {
               extract($danhmuc);
               $linkdm="index.php?act=danhmucsanpham&IDDM=".$IDDM;
                echo '<tr>
                 <td> <a class="chu-danhmuc nav" href="'.$linkdm.'">'.$NAME.'</a></td>
                  </tr>';
               }
             ?>

           
            </table>
           </div>
        </div>
        <div class="col-md-9 ">
        <div class="khungdanhmuc">
          <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <img src="../img/anh103.jpg" alt="Los Angeles" class="d-block anh-slide-dm" style="width:100%"> -->
            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/eatery-food-gift-discount-voucher-design-template-53af5089139656829a0b5092a73a1b43_screen.jpg?ts=1588142052" alt="Los Angeles" class="d-block anh-slide-dm" style="width:100%">
        
          </div>
          <div class="carousel-item">
          <!-- <img src="../img/anh102.png" alt="Chicago" class="d-block anh-slide-dm"style="width:100%"> -->

          <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/green-eatery-food-gift-voucher-design-template-6141a780b935fa68ff54aeffe14b8bca_screen.jpg?ts=1588142048" alt="Chicago" class="d-block anh-slide-dm" style="width:100%">
       
        </div>
          <div class="carousel-item">
            <!-- <video class="d-block anh-slide-dm" style="width:100%">>
              <source src="../img/pizza.mp4" type="video/mp4">
            </video> -->

          <img src="../img/voucer.jpg" alt="New York" class="d-block anh-slide-dm"style="width:100%">
          </div>

          <div class="carousel-item">
          <img src="../img/voucermodern.jpg"  alt="New York1" class="d-block anh-slide-dm"style="width:100%">
          </div>
          
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
        </div>
                    </div>
          
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
           <div class="khungvideo">
 <video class="video" style="width:100%" height="100%" controls >
              <source src="../img/pizza.mp4" type="video/mp4">
            </video>
           </div>
        </div>
        <div class="col-md-6">
           <div class="khungvideo">
           <video class="video" style="width:100%" height="100%" controls >
              <source src="../img/videovoder.mp4" type="video/mp4">
            </video>
           </div>
        </div>
      </div>
      <div class="row cot-2">
        <div class="col-md-4">
          <div class="khoi-sp">
            <img src="../img/anh5.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh col-md-6 position-relative bottom-50 start-50 ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">HamBurGer</h2>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="khoi-sp">
            <img src="../img/anh6.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh-1 col-md-6 position-relative bottom-50 start-50 ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">Salad</h2>
            </a>
          </div>
        </div>
     
        <div class="col-md-4">
          <div class="khoi-sp">
            <img src="../img/anh7.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh col-md-6 position-relative bottom-50 start-50 ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">BerVeragre</h2>
            </a>
          </div>
        </div>
      </div>
      <!-- cột 3 -->
      <div class="row cot-3">
        <div class="col-md-3 col-sm-6">
          <div class="khoi-sp">
            <img src="../img/anh8.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh-1 col-md-6  position-relative bottom-50 start-50 ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">Snack</h2>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="khoi-sp">
            <img src="../img/anh9.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh-1 col-md-6  position-relative bottom-50 start-50 ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">Chips</h2>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="khoi-sp">
            <img src="../img/anh10.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh-1 col-md-6  position-relative bottom-50 start-50  ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">Soup</h2>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="khoi-sp">
            <img src="../img/anh11.jpg " class="anh-cot2 img-fluid">
          </div>
          <div class="khung-the-hover-anh-1 col-md-6 position-relative bottom-50 start-50 ">
            <a href="" class="nav-link position-relative">
              <h2 class="the-h2-khung-hover">Pizza</h2>
            </a>
          </div>
        </div>
      </div>
      <!-- cột-4 -->
      <h1 class="text-center h1-cot-4"> Foods </h1>
      <br>
      <div class="row" >
      <?php 
          foreach ($sanphamchotrangchu as $sanpham) {
            extract($sanpham);
            $linksp="index.php?act=chitietsanpham&IDSP=".$IDSP;
            $hinh=$img_path.$IMG;
             echo '
             <div class="col-md-3 col-sm-6 col-12">
             <div class="khoi-cot4 khoicot4-sp">
             <a href="'.$linksp.'"><img src="'.$hinh.'" class="anh-cot4"></a>
             <div class="description">
             <a class="linksp-h3" href="'.$linksp.'"> <h3>'.$NAMESP.'</h3></a>
             <h4 style="color: white;">' .number_format($PRICE,0,',','.').' <sup>đ</sup>

             </h4>
             <form action="index.php?act=themgiohang" method="post">
             <input type="hidden" name="idsp" value="'.$IDSP.'">
              <input type="hidden" name="namesp" value="'.$NAMESP.'">
              <input type="hidden" name="img" value="'.$IMG.'">
              <input type="hidden" name="gia" value="' .$PRICE.' ">
              <input type="submit"  name="them-giohang" class="form-control nut-muahang" value=" Thêm Vào Giỏ Hàng">
             </form>
               </div>
             </div>
           </div>
         ';
        
          }
          
        ?>
      </div>
      <div class="row">
       <div class="col-md-4">
          <div class="khungnguoidungnx">
            <div class="card">
              <img src="../img/anh106.jpg" alt="" class="card-img-top  anh-khung-nhanxet">
               <div class="card-body">
               <h3 class="card-title">Mrs.Adam</h3>
               <p class="card-text">
               Một địa chỉ quyến rũ và thanh bình. Món dùng ngon như mong đợi. Hóa ra nguyên liệu để làm nên món chay lại có thể đa dạng phong phú, và phương cách chế biến 
               cũng biến hóa khác lạ như vậy, quả là bí ẩn và thú vị
            
               </p>
         
               </div>
            </div>
          </div>
       </div>
       <div class="col-md-4">
       <div class="khungnguoidungnx">
            <div class="card">
              <img src="../img/anh107.jpg" alt="" class="card-img-top  anh-khung-nhanxet-2">
               <div class="card-body">
               <h3 class="card-title">Mrs.Alex</h3>
               <p class="card-text">
               Tôi đã có một trải nghiệm thực sự tuyệt vời tại đây! Thực đơn món chay rất hấp dẫn và thú vị. Đây là bữa tối ngon nhất mà tôi đã có trong thời gian ở Việt Nam và đây cũng là đêm cuối cùng của tôi ở đây 😊. Nhân viên vô cùng thân thiện. Không gian trong nhà được bài trí rất đẹp. Chắc chắn sẽ giới thiệu nơi này đến mọi người!
              </p>
               </div>
            </div>
          </div>
       </div>
       <div class="col-md-4">
       <div class="khungnguoidungnx">
            <div class="card">
              <img src="../img/anh108.jpg" alt="" class="card-img-top  anh-khung-nhanxet-2">
               <div class="card-body">
               <h3 class="card-title">Mrs.Jenifer</h3>
               <p class="card-text">
               Tinh thần, thái độ của anh chị em nhân viên nhà hàng hết sức nhiệt tình, rất tốt và chu đáo, chị Nguyên giám đốc cũng hết sức tận tình với khách hàng. Thức ăn đảm bảo an toàn thực phẩm, các món ăn ngon và đầy đặn, hình thức trang trí cũng rất đẹp.
              </p>
              
               </div>
            </div>
          </div>
       </div>
      </div>
      <h1 class="text-center follow-in" style=" color:black ;">
        <a class="a-instagram" href="https://www.instagram.com/beopham.0911/" style=" color: black;">
          <i class="fa fa-instagram" aria-hidden="true"></i>Follow Chúng Tôi  </a> Trên Instagram
      </h1>
     
    </div>
    <!--       
    cột 11-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh36.jpg" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6Kc-FNi2/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh37.jpg" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6LbgFAXP/"></a>
              <i class="fa fa-instagram ig" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh38.jpg" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6JiKFZzN/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh39.jpg" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6Ij8loU6/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh40.jpg" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6HsqleyI/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh41.jpg" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6G0Elh6l/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
              <img src="../img/anh96.png" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6FyolR9K/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
            <img src="../img/anh97.png" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6E3mFNGy/"></a>
              <i class="fa fa-instagram ig" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
            <img src="../img/anh98.png" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6DrMFn25/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
            <img src="../img/anh99.png" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6CiTFMN4/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
            <img src="../img/anh100.png" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D6Ba5FR6K/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 mt-5">
          <div class="ko90">
            <div class="image">
            <img src="../img/anh101.png" alt="" class="anh78">
              <a href="https://www.instagram.com/p/B2D5-aplqg2/">
                <i class="fa fa-instagram ig" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- lớp 3 cột 12  -->
    <div class="container lop3">
      <div class="row dong12">
        <div class="col-sm-4">
          <div class="cot12">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <h4 style=" color:black">
HỖ TRỢ 24/7 Liên hệ với chúng tôi 24 giờ một ngày, 7 ngày một tuần </h4>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="cot12">
            <i class="fa fa-reply" aria-hidden="true"></i>
            <h4 style=" color:black">
30 NGÀY TRẢ LẠI Chỉ cần trả lại trong vòng 24 ngày để trao đổi. </h4>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="cot12">
            <i class="fa fa-truck" aria-hidden="true"></i>
            <h4 style=" color:black"> 

            MIỄN PHÍ VẬN CHUYỂN Miễn phí vận chuyển cho tất cả các đơn hàng tại TP Đà Nẵng hoặc đơn hàng trên 300.000 </h4>
          </div>
        </div>
      </div>
    </div>





  