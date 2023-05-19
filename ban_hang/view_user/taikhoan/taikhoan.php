<?php
if (isset($_SESSION['taikhoan'])) {
    extract($_SESSION['taikhoan']); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="khungchuchay">
					<marquee behavior="alternate" Direction="right">
						<h4>
                        Chào Mừng
                        <?= $NAMEKH ?>
                    </h4>
						<h4>Bạn Đã Đăng Nhập Thành Công</h4> </marquee>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="khungtaikhoan">
					<div>
						<h3>Tài Khoản Của Bạn</h3> </div>
					<ul class="nav flex-column">
						<li class="nav-item"> <a class="nav-link" href="index.php?act=taikhoan">Thông Tin Tài Khoản</a> </li>
						<li class="nav-item"> <a class="nav-link" href="index.php">Mua Hàng</a> </li>
						<li class="nav-item"> <a class="nav-link" href="index.php?act=capnhaptaikhoan">Cập Nhập Tài Khoản</a> </li>
						<li class="nav-item"> <a class="nav-link" href="index.php?act=mybill">Đơn Hàng Đã Mua</a> </li>
						<li class="nav-item"> <a class="nav-link" href="index.php?act=thoat">Đăng Xuất</a> </li>
						<?php if ($ROLE == 1) { ?>
							<li class="nav-item"> <a class="nav-link" href="index.php?act=quatrangadmin">Truy Cập Trang Admin</a> </li>
							<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="khungtaikhoan">
					<h3><center>Thông Tin Tài Khoản</center></h3>
					<ul class="nav flex-column">
						<li class="nav-item">
							<div class="ttcn"> Họ Và Tên:
								<?= $NAMEKH ?>
							</div>
						</li>
						<li class="nav-item">
							<div class="ttcn"> Địa Chỉ:
								<?= $DIACHI ?>
							</div>
						</li>
						<li class="nav-item">
							<div class="ttcn"> Số Điện Thoại:
								<?= $SDT ?>
							</div>
						</li>
			
						<li class="nav-item">
							<div class="ttcn"> Tài Khoản:
								<?= $TAIKHOAN ?>
							</div>
						</li>
						<li class="nav-item">
							<div class="ttcn"> Mật Khẩu:
								<?= $MATKHAU ?>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>
