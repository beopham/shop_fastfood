-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2022 lúc 11:38 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `IDBILL` int(30) NOT NULL,
  `NAMEBILL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `BILLDIACHI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BILLSDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BILLPTTT` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 THANH TOÁN TRỰC TIẾP 2 CHUYỂN KHOẢN 3 THANH TOÁN ONLINE',
  `NGAYDATHANG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TONGBILL` int(100) NOT NULL DEFAULT 0,
  `BILLTTDH` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 ĐƠN HÀNG MỚI 1 ĐANG XỬ LÝ 2 ĐANG GIAO HÀNG 3 ĐÃ GIAO HÀNG',
  `CHAPNHANTEN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CHAPNHANDIACHI` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CHAPNHANSDT` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IDUSER` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`IDBILL`, `NAMEBILL`, `BILLDIACHI`, `BILLSDT`, `BILLPTTT`, `NGAYDATHANG`, `TONGBILL`, `BILLTTDH`, `CHAPNHANTEN`, `CHAPNHANDIACHI`, `CHAPNHANSDT`, `IDUSER`) VALUES
(61, 'Phạm Văn Minh', 'Tp Đà Nẵng', '0124585241', 1, '09:29:02am 28/11/2022', 50000, 0, '', '', '', 86),
(62, 'Phạm Văn Minh', 'Tp Đà Nẵng', '0124585241', 1, '09:29:30am 28/11/2022', 80000, 0, '', '', '', 86),
(63, 'Phạm Văn Minh', 'Tp Đà Nẵng', '0124585241', 2, '05:50:46pm 02/12/2022', 80000, 0, '', '', '', 86),
(64, 'Phạm Văn Nam', 'Tp Đà Nẵng', '0905641235', 2, '05:13:13pm 04/12/2022', 100000, 0, '', '', '', 85);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `IDBL` int(20) NOT NULL,
  `NOIDUNG` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `IDPRO` int(20) NOT NULL,
  `IDUSER` int(20) NOT NULL,
  `NGAYBINHLUAN` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TENBINHLUAN` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`IDBL`, `NOIDUNG`, `IDPRO`, `IDUSER`, `NGAYBINHLUAN`, `TENBINHLUAN`) VALUES
(16, 'ngon quá ??', 62, 10, '01:55:10pm 05/11/2022', 'Phạm Văn Nam'),
(17, 'cơm rất tuyệt', 60, 8, '01:56:05pm 05/11/2022', 'Nguyễn Lê Như Huyền'),
(19, 'great', 58, 8, '02:47:15pm 05/11/2022', 'Nguyễn Lê Như Huyền'),
(74, 'ngon', 99, 86, '08:30:51pm 30/11/2022', 'Phạm Văn Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `IDCART` int(30) NOT NULL,
  `IDKH` int(30) NOT NULL,
  `IDSP` int(30) NOT NULL,
  `IMG` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NAMECART` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `PRICE` int(100) NOT NULL,
  `SOLUONG` int(30) NOT NULL,
  `TONG` int(100) NOT NULL,
  `IDBILL` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`IDCART`, `IDKH`, `IDSP`, `IMG`, `NAMECART`, `PRICE`, `SOLUONG`, `TONG`, `IDBILL`) VALUES
(67, 86, 55, 'anh12.jpg', ' Hamburger Phô Mai Bò', 50000, 1, 50000, 61),
(68, 86, 93, 'anh44.png', ' Bánh mì kẹp', 80000, 1, 80000, 62),
(69, 86, 93, 'anh44.png', ' Bánh mì kẹp', 80000, 1, 80000, 63),
(70, 85, 93, 'anh44.png', ' Bánh mì kẹp', 80000, 1, 80000, 64),
(71, 85, 98, 'anh49.jpg', ' Hamburger Sốt Thái', 20000, 1, 20000, 64);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `IDDM` int(30) NOT NULL,
  `NAME` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`IDDM`, `NAME`) VALUES
(59, 'Berverage'),
(56, 'Chips'),
(53, 'Hamburger'),
(58, 'Pizza'),
(54, 'Salad'),
(55, 'Snack Food'),
(57, 'Soup');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKH` int(30) NOT NULL,
  `TAIKHOAN` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ROLE` int(4) NOT NULL DEFAULT 0 COMMENT '0 là khách hàng 1 là admin',
  `NAMEKH` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`IDKH`, `TAIKHOAN`, `MATKHAU`, `DIACHI`, `SDT`, `ROLE`, `NAMEKH`) VALUES
(85, 'admin123**', 'admin123456789', 'Tp Đà Nẵng', '0905641235', 1, 'Phạm Văn Nam'),
(86, 'minh123456', 'minh12345678', 'Tp Đà Nẵng', '0124585241', 0, 'Phạm Văn Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSP` int(30) NOT NULL,
  `NAMESP` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `PRICE` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IMG` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `LUOTXEM` int(30) NOT NULL,
  `IDDM` int(30) NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IDSP`, `NAMESP`, `PRICE`, `IMG`, `MOTA`, `LUOTXEM`, `IDDM`) VALUES
(55, 'Hamburger Phô Mai Bò', '50000', 'anh12.jpg', 'Hamburger pho mát hay Burger phô mai là một loại hamburger với topping là pho mát. Theo truyền thống, miếng pho mát thường được đặt bên trên miếng thịt. Người ta thường cho thêm pho mát vào miếng thịt bò xay đang nấu trong thời gian ngắn, điều này tạo điều kiện cho pho mát tan chảy.', 0, 53),
(57, 'Hamburger New York', '50000', 'anh13.jpg', 'Bánh Hamburger là một loại thức ăn dùng bánh mì tròn kẹp một lát thịt lớn ở giữa (thịt được xay và thông thường hay sử dụng thịt bò), kèm thêm một số loại rau như: salad, cà chua và một số gia vị khác. Đây là một món ăn phổ biến, bình dân và tiện lợi thường được sử dụng trong cuộc sống hàng ngày và trong các cuộc liên hoan của người Mỹ.', 0, 53),
(58, 'Hamburger Thịt Nguội', '50000', 'anh14.jpg', 'Hamburger thịt nguội chía núi chắc chắn sẽ không làm bạn thất vọng khi thưởng thức bởi màu đỏ thực phẩm tạo màu sắc đẹp mắt cho món thịt nguội, thêm vào đó là vị dai dai, giòn giòn khi thưởng thức thịt nguội có trong chiếc bánh hamburger.', 0, 53),
(59, 'Hamburger Thịt Bò Phô Mai', '45000', 'anh15.jpg', 'Hamburger thịt nguội chía núi chắc chắn sẽ không làm bạn thất vọng khi thưởng thức bởi màu đỏ thực phẩm tạo màu sắc đẹp mắt cho món thịt nguội, thêm vào đó là vị dai dai, giòn giòn khi thưởng thức thịt nguội có trong chiếc bánh hamburger.', 0, 53),
(60, 'Rau Xào Đậu Hủ', '20000', 'anh16.png', 'Đậu hũ xào rau củ chắc hẳn là một trong những món chay được nhiều người yêu thích bởi hương vị thơm ngon', 0, 54),
(61, 'Nộm hoa chuối', '50000', 'anh17.png', 'Nộm hoa chuối là một món ăn ngon, dân dã và được rất nhiều người yêu thích. Với hàng trăm phiên bản chế biến, nhìn chung nộm hoa chuối rất dễ làm, chỉ cần bạn nắm bắt được cách giữ hoa chuối không bị thâm đen là được.', 0, 54),
(62, 'Cà Chua Xào', '90000', 'anh18.png', 'Cà Chua Xào là thực phẩm xanh không thể thiếu trong các bữa ăn hàng ngày, cà chua củ chứa nhiều chất dinh dưỡng giúp cơ thể phát triển rất tốt. cà chua xào ngũ sắc là sự kết hợp từ các loại cà chuacủ mang nhiều màu sắc lại với nhau làm nên hương vị đặc trưng của cà chua củ cùng với đó là hấp dẫn thị giác với màu sắc đa dạng', 0, 54),
(63, 'Trái Cây ', '35000', 'anh19.png', 'Trái Cây là thực phẩm xanh không thể thiếu trong các bữa ăn hàng ngày, trái cây củ chứa nhiều chất dinh dưỡng giúp cơ thể phát triển rất tốt. Trái cây củ xào ngũ sắc là sự kết hợp từ các loại trái cây mang nhiều màu sắc lại với nhau làm nên hương vị đặc trưng của trái cây củ cùng với đó là hấp dẫn thị giác với màu sắc đa dạng', 0, 54),
(64, 'Đùi Gà ', '50000', 'anh20.png', 'Món đùi gà tỏi chiên bơ là sự kết hợp hoàn hảo giữa các nguyên liệu như đường, tỏi, ớt, hành,.. và đặc biệt là bơ nguyên liệu chính làm cho món ăn trở nên thơm ngon kết hợp với chút vị cay cay của ớt. Thịt gà bên trong mềm, bên ngoài giòn tan .', 0, 55),
(65, 'Phô Mai Que', '15000', 'anh21.png', 'Phô mai que là một món được làm chủ yếu từ phô mai cắt thành dạng thanh dài, tẩm bột và chiên xù. Ở Hoa Kỳ món này được gọi là Mozzarella stick, do nó được làm từ một loại phô mai Mozzarella của Ý, và được phục vụ như là món khai vị tại các nhà hàng, ở Bắc Mỹ thì nó chủ yếu được bán trong các \"quán nhậu\" .', 0, 55),
(66, 'Chuối Nướng', '65000', 'anh22.png', 'Chuối nếp nướng là loại bánh bắt nguồn từ miền Tây, nơi có nhiều chuối và dừa. Món bánh đã được người dân tại đây làm ra từ những nguyên liệu đơn giản và dễ kiếm. Đặc điểm của món bánh này là nhân chính là chuối, được bọc bên ngoài bởi một lớp xôi nếp, và sau cùng gói ngoài bằng một lớp lá chuối. Do vậy bánh sẽ có hình hơi dẹt và dày mình, thon thon như quả chuối.', 0, 55),
(67, 'Cánh Gà', '60000', 'anh23.png', 'Cánh gà chiên bơ tỏi là một món ăn có hương vị đậm đà thơm ngon. Thành phần trong bơ giúp cánh gà sau khi chiên phũ đều một lớp vỏ ngoài vàng óng đẹp mắt, kết hợp cùng với tỏi tạo nên mùi hương khó cưỡng .', 0, 55),
(70, 'Khoai Tây Chiên', '15000', 'anh24.png', 'Khoai tây chiên là khoai tây chiên giòn cắt thành sợi hoặc hình que.\r\n\r\nKhoai tây chiên được phục vụ nóng, mềm hoặc giòn được dùng kèm trong bữa trưa hay bữa tối hoặc riêng lẻ như một món ăn nhẹ và thường có mặt trên thực đơn của thực khách trong cửa hàng đồ ăn nhanh, quán rượu và quán bar.', 0, 56),
(72, 'Khoai Lang Lắc', '20000', 'anh25.png', 'Khoai lang lắc là món ăn vặt được rất nhiều người yêu thích, đặc biệt là học sinh và sinh viên.Khoai lang được kết hợp với nhiều hương vị khác nhau, mang lại cảm giác thú vị, hấp dẫn khi ăn.', 0, 56),
(73, 'Bánh Pía Khoai Môn', '20000', 'banhpia.jpg', 'Bánh pía nhân khoai môn không còn quá xa lạ với chúng ta, nhưng bạn có thể hoàn toàn làm bánh pía khoai môn tại nhà mà không cần phải mua ngoài hàng.\r\n\r\nBánh pía khoai môn thơm và dẻo, vỏ bánh tách lớp tan ngay trong khoang miệng bạn sẽ cảm thấy xứng đáng với thành quả làm ra.', 0, 56),
(74, 'Bánh Khoai Tôm', '20000', 'bánh-tom-khoai-mon-thumbnail-1.jpg', 'Đây là món bánh có thể làm để ăn vặt hoặc cho vào thực đơn món chính hàng ngày của gia đình. Bánh tôm khoai môn có cách chế biến đơn giản và các nguyên liệu dễ mua như tôm, khoai môn, bột năng,...\r\n\r\nKhoai môn chiên vàng giòn rụm kết hợp với thịt tôm dai ngon tươi mới làm cho món bánh này trở nên hấp dẫn, nhất là đối với các bạn nhỏ.', 0, 56),
(76, 'Cà Ri Ấn Độ', '150000', 'anh28.png', 'Cari gà là món ăn có nguồn gốc từ Ấn Độ nhưng cũng phổ biến ở nhiều nước trên thế giới, trong đó có Việt Nam. Cari Ấn Độ được yêu thích bởi hương vị thơm ngon và lạ miệng. Nhìn chung, so với món cari gà của chúng ta, cách nấu cari Ấn Độ hơi phức tạp. Món ăn có sự hòa trộn của nhiều thảo mộc và gia vị đặc trưng trong ẩm thực người Ấn.', 0, 57),
(77, 'Canh Cá Chình', '180000', 'lau-ca-chinh-500.jpg', 'Canh chua cá chình là món ăn đem lại nhiều dưỡng chất, và giúp giải nhiệt trong những ngày hè nóng gắt. Vì vậy, đây là món ăn được ưa chuộng, và không thể thiếu trên mâm cơm người Việt.', 0, 57),
(78, 'Soup Thái', '80000', 'anh30.png', 'Cà rốt, khoai lang, và cà ri Thái là một sự kết hợp hoàn hảo trong mùa, bơ hạnh nhân  tạo nên  vị ngọt của súp, vị chủ đạo vẫn là vị cay của món Thái.', 0, 57),
(80, 'Canh Cá Cay Hong Kong', '50000', 'anh31.png', 'Đây là món khá bổ dưỡng, và lạ miệng, rất phù hợp cho những người mệt mỏi, kém ăn. Cũng là một món gợi ý cho các bà mẹ nội trợ muốn thay đổi thực đơn cho con yêu. Bạn hãy nhanh chóng thêm món súp thịt bò này vào thực đơn của gia đình nhé để góp phần làm cho bữa ăn của gia đình bạn trở nên phong phú và đa dạng hơn rất nhiều.', 0, 57),
(82, 'Pizza Thịt Bò', '50000', 'anh81.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(83, 'Pizza Ấn Độ', '20000', 'anh82.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(84, 'Pizza Gà', '20000', 'anh89.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(85, 'Pizza Sốt Cà Chua', '50000', 'anh83.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(86, ' Nước Mận', '50000', 'anh32.png', 'Nước ép mận trị táo bón: Quả mận tươi, nước ép mận giúp kích thích tiêu hóa, ngăn ngừa táo bón. Loại nước ép này còn có tác dụng nhuận tràng đối với những người đang gặp các triệu chứng rối loạn tiêu hóa', 0, 59),
(87, 'Nước Táo', '20000', 'tao.jpg', 'Nước ép táo giàu chất chống oxy hóa như polyphenol và flavonoid nên rất có lợi cho trái tim của bạn.\r\n\r\nNgoài ra, nước ép táo cũng có chứa nhiều kali, một trong những khoáng chất có vai trò quan trọng đối với sức khỏe tim mạch. Uống nước ép táo mỗi ngày có thể giúp bạn tăng cường chức năng của tim mạch.', 0, 59),
(88, 'Nước Dâu', '20000', 'anh35.png', 'Nước ép dâu tây rất giàu vitamin C rất tốt cho sức khỏe. Nước ép dâu tây không chỉ có tác dụng giải nhiệt, đẹp da mà còn thanh lọc cơ thể tốt khi cơ thể hấp thụ nhiều dầu mỡ. Dâu tây chứa bao gồm nước (91%), carbohydrate (7,7%), chất béo (0,3%) và protein (0,7%).', 0, 59),
(89, 'Nước Đào', '20000', 'anh34.png', ' Nước ép đào cũng cung cấp hàm lượng đáng kể các vitamin và khoáng chất như canxi, magiê, kali, lưu huỳnh và kẽm. Nước ép đào cũng sở hữu các hợp chất chống ôxy hóa như lutein, lycopene và beta carotene giúp tăng cường sức khỏe tổng thể.', 0, 59),
(92, 'Hamburger Bò', '50000', 'anh42.png', '	\r\nHamburger thịt nguội chía núi chắc chắn sẽ không làm bạn thất vọng khi thưởng thức bởi màu đỏ thực phẩm tạo màu sắc đẹp mắt cho món thịt nguội, thêm vào đó là vị dai dai, giòn giòn khi thưởng thức thịt nguội có trong chiếc bánh hamburger.', 0, 53),
(93, 'Bánh mì kẹp', '80000', 'anh44.png', 'Tiếng giòn rụm nghe rất vui tai từ lớp vỏ kết hợp với nhân bánh đậm đà quyện cùng cái tươi mát, cay nồng của rau thơm từ ổ bánh mì kẹp thịt sẽ làm ai thưởng thức cũng phải mê mẩn.\r\n', 0, 53),
(94, 'Hamburger Hải Sản', '80000', 'anh45.png', 'Nhân bánh burger hải sản có thể là một số loại như tôm, cá, cua, … Tùy theo sở thích, nhu cầu mà người tiêu dùng lựa chọn, giúp đem lại cảm giác tuyệt vời nhất khi ăn. Không chỉ là một loại nguyên liệu này, mà bạn có thể mix từ 2 đến 3, thậm chí là nhiều hơn các loại hải sản.', 0, 53),
(95, 'Hamburger Than Tre', '120000', 'anh46.jpg', 'Tinh than tre trong ứng dụng làm bánh cho sản phẩm có màu đen tuyền rất bắt mắt. Do đó, hiện nay nó được sử dụng như một chất tạo màu đen tuyền thú vị cho những món bánh ngon như: bánh cuộn, bánh bông lan, hamburger...\r\nThỉnh thoảng làm mới món hamburger với tinh than tre cũng là một cách kích thích ăn uống cho trẻ', 0, 53),
(96, 'Hamburger Bò Mỹ', '50000', 'anh47.png', 'Hamburger pho mát hay Burger phô mai là một loại hamburger với topping là pho mát. Theo truyền thống, miếng pho mát thường được đặt bên trên miếng thịt. Người ta thường cho thêm pho mát vào miếng thịt bò xay đang nấu trong thời gian ngắn, điều này tạo điều kiện cho pho mát tan chảy.', 0, 53),
(97, 'Hamburger New York Big', '80000', 'anh48.png', 'Bánh Hamburger là một loại thức ăn dùng bánh mì tròn kẹp một lát thịt lớn ở giữa (thịt được xay và thông thường hay sử dụng thịt bò), kèm thêm một số loại rau như: salad, cà chua và một số gia vị khác. Đây là một món ăn phổ biến, bình dân và tiện lợi thường được sử dụng trong cuộc sống hàng ngày và trong các cuộc liên hoan của người Mỹ.', 0, 53),
(98, 'Hamburger Sốt Thái', '20000', 'anh49.jpg', 'Bánh Hamburger là một loại thức ăn dùng bánh mì tròn kẹp một lát thịt lớn ở giữa (thịt được xay và thông thường hay sử dụng thịt bò), kèm thêm một số loại rau như: salad, cà chua và một số gia vị khác. Đây là một món ăn phổ biến, bình dân và tiện lợi thường được sử dụng trong cuộc sống hàng ngày và trong các cuộc liên hoan của người Mỹ.', 0, 53),
(99, 'Hamburger Singapore', '20000', 'anh110.jpg', 'Bánh Hamburger là một loại thức ăn dùng bánh mì tròn kẹp một lát thịt lớn ở giữa (thịt được xay và thông thường hay sử dụng thịt bò), kèm thêm một số loại rau như: salad, cà chua và một số gia vị khác. Đây là một món ăn phổ biến, bình dân và tiện lợi thường được sử dụng trong cuộc sống hàng ngày và trong các cuộc liên hoan của người Mỹ.', 0, 53),
(100, 'Ngũ Sắc', '20000', 'anh49.png', 'Rau củ là thực phẩm xanh không thể thiếu trong các bữa ăn hàng ngày, rau củ chứa nhiều chất dinh dưỡng giúp cơ thể phát triển rất tốt. Rau củ xào ngũ sắc là sự kết hợp từ các loại rau củ mang nhiều màu sắc lại với nhau làm nên hương vị đặc trưng của rau củ cùng với đó là hấp dẫn thị giác với màu sắc đa dạng.', 0, 54),
(101, 'Rau Ngũ Vị', '20000', 'anh50.png', 'Rau củ là thực phẩm xanh không thể thiếu trong các bữa ăn hàng ngày, rau củ chứa nhiều chất dinh dưỡng giúp cơ thể phát triển rất tốt. Rau củ xào ngũ sắc là sự kết hợp từ các loại rau củ mang nhiều màu sắc lại với nhau làm nên hương vị đặc trưng của rau củ cùng với đó là hấp dẫn thị giác với màu sắc đa dạng.', 0, 54),
(102, 'Salad Cà Chua', '20000', 'anh51.jpg', 'Salad/Rau xa lát, xà lách trộn là một loại món ăn có nguồn gốc từ các nước châu Âu, đây là món hỗn hợp theo phương pháp trộn lẫn bao gồm nhiều nguyên liệu khác nhau và có nhiều loại khác nhau; chủ yếu là chế biến từ rau sống và các loại xà lách, mì, cây họ đậu, trứng, thịt, hải sản .', 0, 54),
(103, 'Salad Bò Trộn', '25000', 'anh52.jpg', 'Salad thịt bò là món ăn giải nhiệt hiệu quả cho ngày nắng nóng. Hương vị tươi mát của salad hòa cùng thịt bò mềm dai thơm ngon đã tạo nên một món ăn cực kì hấp dẫn. Đây cũng là một món ăn được rất nhiều chị em quan tâm tìm kiếm công thức.', 0, 54),
(104, 'Đậu Tây Xào', '20000', 'anh53.jpg', 'Trong đậu que chứa nhiều loại vitamin, khoáng chất, chất béo tốt cho cơ thể và ít calo. Bên cạnh đó, loại nguyên liệu này không chứa cholesterol, đậu que còn có hàm lượng chất xơ và protein cao. Một bữa ăn với đậu que có thể cung cấp lượng protein cho thể trong ngày.\r\n', 0, 54),
(105, 'Bí Xào', '35000', 'anh54.png', 'Bí đỏ là một thực phẩm rất được mọi người ưa thích, bởi hương vị thơm ngon, ngọt và rất dễ ăn. Vì thế bí đỏ được chế biến thành các món ăn khác nhau, trong số đó có món bí đỏ xào tỏi.', 0, 54),
(106, 'Salad Mexico', '20000', 'anh55.jpg', 'Salad giáng sinh Mexico là sự kết hợp một loạt các loại trái cây và rau quả lành mạnh, bao gồm hạt lựu, táo, cam, củ cải đường, củ đậu và rau diếp. Nó được thưởng thức với một loại sốt kem, ngọt và thơm tự làm từ kem chua, nước cam tươi và mật ong bổ sung hương vị cho các nguyên liệu khiến chúng trở nên ngon miệng hơn. ', 0, 54),
(107, 'Kim Chi', '20000', 'anh56.jpg', 'Kim chi một món ăn chính trong ẩm thực tại bán đảo Triều Tiên, là một món ăn truyền thống gồm các loại rau muối và lên men, chẳng hạn như bắp cải napa và củ cải Hàn Quốc, được chế biến với nhiều lựa chọn gia vị khác nhau bao gồm gochugaru, hành lá, tỏi, gừng và jeotga.', 0, 54),
(108, 'Khoai Tây Chiên', '20000', 'anh57.jpg', 'Khoai tây chiên là khoai tây chiên giòn cắt thành sợi hoặc hình que.Khoai tây chiên được phục vụ nóng, mềm hoặc giòn được dùng kèm trong bữa trưa hay bữa tối hoặc riêng lẻ như một món ăn nhẹ và thường có mặt trên thực đơn của thực khách trong cửa hàng đồ ăn nhanh, quán rượu và quán bar.', 0, 55),
(109, 'Bánh Mực', '20000', 'anh58.jpg', 'Bánh bột mực là tất nhiên có nguyên liệu làm bánh từ bột mực. Nguồn gốc chủ yếu là từ vùng biển phía Bắc, nơi dồi dào nguồn nguyên liệu mực tươi ngon. Có rất nhiều cách để làm ra bánh bột mực, cũng có thể dùng bánh bột mực để chế biến thành các món ăn khác như bánh bột mực tẩm bột chiên xù, bánh bột mực nướng .', 0, 55),
(110, 'Bánh Donut Bảy Màu', '20000', 'anh59.jpg', 'Bánh donut là một loại bánh ngọt rán hoặc nướng để ăn tráng miệng hay ăn vặt. Đây là loại bánh rất nổi tiếng và phổ biến ở nhiều nước phương Tây, có thể được mua trong cửa hàng hoặc tự làm ở nhà. Thường bánh có dạng hình vòng nhồi nhân bên trong hoặc không nhồi nhân bên trong. Bánh thường được phủ nhiều loại kem socola và trang trí bằng hạt đường, hạt cốm .', 0, 55),
(111, 'Mỳ Ý', '35000', 'anh60.jpg', 'Mì ý là một loại thực phẩm thường được làm từ bột mì không men trộn với nước hoặc trứng và được tạo hình thành dạng tấm hoặc các hình dạng khác nhau, sau đó được làm chín bằng cách luộc hoặc nướng. Bột gạo hoặc các loại cây họ đậu như đậu hoặc đậu lăng, đôi khi được sử dụng thay cho bột mì để tạo ra một hương vị hấp dẫn .Mì ống là thực phẩm chủ yếu của ẩm thực Ý.', 0, 55),
(112, 'Nhộng Xào', '50000', 'anh61.jpg', 'Nhộng mông lung hành là món ăn đơn giản đậm chất hương quê Việt Nam . Vị beo béo của con mồi được tẩm ướp có vị trí hòa trong cái tươi non và hương thơm đặc trưng của hành, khiến món ăn vô cùng hấp dẫn luôn. Khi thức thưởng có thể ăn kèm với cơm nóng nè, chắc chắn bạn sẽ muốn ăn mãi không thôi.', 0, 55),
(113, 'Cơm Chiên Dương Châu', '35000', 'anh62.jpg', 'Cơm chiên dương châu là món ăn khá nổi tiếng và có nguồn gốc xuất hiện khá lâu năm tại Trung Quốc. Có nhiều mẩu truyện liên quan đến món ăn truyền thống này là, vị nhà vua nhà Tùy khi đi vi hành qua Dương Châu thì đã truyền bá món cơm chiên trứng vô cùng yêu thích của mình đến vùng đất này.', 0, 55),
(114, 'Sushi', '50000', 'anh63.jpg', 'Susi là một món ăn Nhật Bản gồm cơm trộn giấm (shari) kết hợp với các nguyên liệu khác (neta). Neta và hình thức trình bày sushi rất đa dạng, nhưng nguyên liệu chính mà tất cả các loại sushi đều có là shari. Neta phổ biến nhất là hải sản. Thịt sống cắt lát gọi riêng là sashimi.', 0, 55),
(115, 'Bánh Bơ Nướng', '20000', 'anh64.png', 'Bánh bơ là một loại bánh được chế biến với quả bơ là thành phần chính, cùng các nguyên liệu làm bánh đặc trưng khác. Bơ thường được nghiền nát, hoặc có thể cho vào hỗn hợp bột nhão, để làm món phủ (topping) của bánh hoặc để nguyên như vậy và đặt lên trên cùng. Các biến thể của món này bao gồm bánh quả bơ sống, bánh brownie bơ và bánh phô mai bơ .', 0, 55),
(116, 'Hotdog Khoai Tây', '20000', 'kt17-800x500.jpg', 'Thử ngay món hotdog khoai tây cho những ngày cuối tuần cùng gia đình. Hotdog với lớp vỏ khoai tây giòn rụm, bên trong là lớp phô mai béo ngậy.\r\n\r\nĐã vậy còn kết hợp với xúc xích dai giòn, cắn vào là cả 3 nguyên liệu chính tan ngay trên đầu lưỡi, khi ăn kèm với tương ớt, tương cà và mayonnaise là hết sẩy.', 0, 56),
(117, 'Khoai Lang Nướng', '20000', 'anh67.jpg', 'Đến nay, khi đã có lò vi sóng tiện dụng thì nướng khoai lang bằng than củi vẫn là phổ biến và được nhiều người sử dụng. Một buổi tối trời hơi se se lạnh, quây quần bên bếp than thưởng thức những củ khoai lang nóng hổi, thơm phức thì quả thật tuyệt vời quá phải không nào.', 0, 56),
(118, 'Gnocchi', '20000', 'anh68.jpg', 'Gnocchi khi làm xong vô cùng thơm với phần khoai tây nóng hổi, khoai bùi bùi mềm mềm kết hợp với phần bột dai dai, khi ăn chấm kèm tương ớt và tương cà thì chẳng mấy chốc mà vơi', 0, 56),
(119, 'Bánh Khoai Phô Mai', '40000', 'bánh-rán-khoai-mon-pho-mai-thumbnail-1.jpg', 'Bánh rán mềm, bột bánh bở và thơm, nhân bánh dẻo, không quá ngọt và không gây ngấy. Bạn thậm chí còn có thể kết hợp phô mai để làm cho bánh trở nên béo ngậy mà vẫn thơm ngon không kém.\r\n\r\n', 0, 56),
(120, 'Khoai Tây Lốc Xoáy', '20000', 'anh70.jpg', 'Khoai tây lốc xoáy còn được gọi là khoai tây xoắn hoặc khoai tây chiên lốc xoáy, là một món ăn đường phố phổ biến ở Hàn Quốc, Đó là một củ khoai tây nguyên miếng được cắt xoắn ốc được chiên giòn trên xiên que, được tẩm nhiều gia vị khác nhau như hành tây, phô mai hoặc mật ong. Một số có kèm xúc xích nối ở giữa.', 0, 56),
(121, 'Bánh Khoai Môn Chiên Xù', '10000', 'anh71.jpg', 'Bánh khoai môn chiên xù có lớp vỏ ngoài vàng giòn tan, nhân bên trong có thể là nhân ngọt hoặc nhân mặn bao gồm thịt, nấm nêm nếm đậm đà... Lớp nhân được vo tròn rồi lăn qua bột chiên xù, sau đó chiên một lượt là bánh đã cực kì giòn vàng.', 0, 56),
(122, 'Bánh Khoai Mì Khoai Môn', '30000', 'banhmikhoai.jpg', 'Đúng vậy! Bạn có thể dùng khoai môn để làm bánh mì. Từng lớp bánh mì màu tím xen kẽ nhau rất đẹp mắt, kết cấu của bánh cũng mềm và đầy đặn hơn khi kết hợp với khoai môn.\r\n\r\nBánh mì khoai môn không quá khô khan mà ruột bánh mềm, nở đều và có vị ngọt chứ không nhạt. Món bánh mì ngọt này sẽ khiến bạn mê ngay từ lần đầu ăn thử.', 0, 56),
(123, 'Bánh Khoai Dừa', '30000', 'anh73.jpg', 'Món bánh khoai lang sữa dừa sau khi hoàn thành có màu vàng nâu vô cùng đẹp mắt luôn. Khi thưởng thức, bạn sẽ cảm nhận được mùi thơm ngọt ngào của sữa, bơ cùng vị béo ngậy thơm ngon từ sữa dừa, bùi bùi của khoai lang và dẻo dẻo của kẹo Marshmallow. Vị bánh rất tuyệt vời mà không hề bị ngấy nè.', 0, 56),
(124, 'Canh Rong Biển', '20000', 'anh74.jpg', 'Canh rong biển là một món canh của người Hàn Quốc, có cách nấu đơn giản mà giá trị dinh dưỡng lại cao. Trong canh có chứa lượng lớn canxi và i-ốt cao có tác dụng bồi bổ cho các mẹ sau khi sinh. Theo quan niệm dân gian, người Hàn ăn canh rong biển vào sinh nhật với ý nghĩa thêm được tuổi mới và có được may mắn cả năm.', 0, 57),
(125, 'Canh Đậu Hũ Thịt', '30000', 'anh75.jpg', 'Món canh đậu hũ non giá hẹ thịt băm đã hoàn thành rồi. Món canh thơm, nóng hổi với đậu hũ non mềm, béo, tan trong miệng, thịt xay thấm gia vị cùng giá, hẹ giòn ngọt, bổ dưỡng.', 0, 57),
(126, 'Canh Cua', '20000', 'anh76.jpg', 'Cua là thực phẩm mang tính hàn lại được nấu cùng một số loại rau như mồng tơi, rau muống... Do vậy, món ăn này rất thích hợp để dùng cho những ngày hè oi bức. Ngoài ra khi sử dụng canh cua đồng bạn còn hạn chế một số tình trạng như đổ mồ hôi, cơ thể uể oải hay chân tay không linh hoạt do mệt mỏi.', 0, 57),
(127, 'Cháo Lòng', '20000', 'anh77.jpg', 'Cháo lòng là món cháo được nấu theo phương thức nấu cháo thông thường, trong sự kết hợp với nước dùng ngọt làm từ xương lợn hay nước luộc lòng lợn, và nguyên liệu chính cho bát cháo không thể thiếu các món phủ tạng lợn luộc, dồi. Cháo lòng tương đối phổ thông thậm chí khá bình dân trong ẩm thực Việt Nam, được bán rộng rãi tại các cửa hàng lòng lợn trong cả nước.', 0, 57),
(128, 'Canh Nấm', '30000', 'anh78.jpg', 'Nấm và hạt sen là 2 nguyên liệu vừa tốt cho sức khỏe mà lại rất thơm ngon và dễ ăn. Nếu biết kết hợp 2 loại thực phẩm này với nhau thì giá trị dinh dưỡng mà món ăn mang lại sẽ rất cao.Hương vị đậm đà của nước dùng, bùi bùi của hạt sen và ngọt thanh của nấm đã tạo nên một món ăn mà ai đã từng thử qua cũng khó có thể nào quên được.', 0, 57),
(129, 'Súp Mì', '60000', '20-minute-thai-peanut-chicken-ramen-1-700x1050_6889b51948394738aff4d6e249a09614_2048x2048.jpg', 'Súp Mì Ramen gà đậu phộng 30 phút kiểu Thái này dành cho một bữa tối ấm cúng, tốt cho sức khỏe và chế biến cực kỳ nhanh chóng, sử dụng nguyên liệu, thức ăn bổ dưỡng, tốt cho sức khỏe. Nó rất dịu ngọt, khoái khẩu cho người thích ăn cay, bổ dưỡng với rau, thịt gà nạc và mì ramen. Sự lựa chọn hoàn hảo cho một đêm lạnh lẽo của mùa đông, sau một ngày dài bận rộn.\r\n\r\n', 0, 57),
(130, 'Súp Bò', '30000', 'supraubo.jpg', 'Đây là món khá bổ dưỡng, và lạ miệng, rất phù hợp cho những người mệt mỏi, kém ăn. Cũng là một món gợi ý cho các bà mẹ nội trợ muốn thay đổi thực đơn cho con yêu. Bạn hãy nhanh chóng thêm món súp thịt bò này vào thực đơn của gia đình nhé để góp phần làm cho bữa ăn của gia đình bạn trở nên phong phú và đa dạng hơn rất nhiều.', 0, 57),
(131, 'Súp Cua', '40000', 'supcua.jpg', 'Xúp cua là món ăn thật quen thuộc và bình dân bởi tính phổ biến, dễ thực hiện, không mất nhiều thời gian nấu nướng mà xúp lại rất ngon và dễ ăn. Ngoài ra món xúp này thường được chọn là món khai vị nóng trong các bữa tiệc. Đây là món hải sản hấp dẫn dùng để khai vị cho các bữa tiệc.', 0, 57),
(135, 'Pizza Thập Cẩm', '90000', 'anh85.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(136, 'Pizza Thịt Bò', '80000', 'anh86.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(137, 'Pizza Trứng', '90000', 'anh87.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(138, 'Pizza Ốc Hải Sản', '120000', 'anh88.jpg', 'Pizza hải sản là loại bánh pizza được chế biến với nguyên liệu chính là hải sản.Nhiều loại nguyên liệu hải sản ở dạng tươi sống, đông lạnh hoặc đóng hộp có thể được sử dụng trên bánh pizza hải sản. Một số chuỗi cửa hàng pizza bán lẻ cũng như các nhà hàng nhỏ cung cấp pizza cho người tiêu dùng .', 0, 58),
(139, 'Pizza Thịt Nướng', '200000', 'anh89.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(140, 'Pizza Venice', '120000', 'anh90.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(141, 'Pizza New York ', '130000', 'pz.jpg', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(142, 'Pizza Thai', '20000', 'image-produit-509-0.jfif', 'Bánh Pizza còn được người Việt Nam phát âm một cách quen thuộc là “bánh bi da”, là một loại bánh có hình tròn dẹt nổi tiếng khắp nơi trên thế giới. Nguyên liệu chính để tạo nên một chiếc bánh pizza là bột mỳ, nước và nấm lên men được ủ ít nhất 1 ngày. Bánh pizza được tạo nên từ việc nhào nặn bột mỳ thành hình tròn dẹt rồi đem nướng chín trong lò.', 0, 58),
(143, 'Nước Chanh Dây', '20000', 'chanhday.jpg', 'Chanh dây hay còn gọi là chanh leo là loại trái cây nhiệt đới rất giàu chất dinh dưỡng, lại dễ chế biến thành nước uống giúp thanh lọc cơ thể. Một trái chanh dây tuy nhỏ bé nhưng có chứa rất nhiều vitamin, khoáng chất, các chất chống oxy hóa… có lợi cho sức khỏe của bạn. ', 0, 59),
(144, 'Nước Cam', '12000', 'nuoccam.jpg', 'Uống nước cam giúp cải thiện hệ miễn dịch: Nước ép cam và trái cây họ cam quýt chứa nhiều vitamin C, giúp tăng khả năng miễn dịch, chống lại bệnh cúm, cảm lạnh.', 0, 59),
(145, 'Nước Dưa Leo', '15000', 'nuocdl.jpg', 'Dưa leo có chứa hầu hết các loại vitamin và khoáng chất như vitamin C, vitamin B1, B2, B6, canxi, kẽm, kali, sắt, magie, phốt pho,… Chỉ cần uống nước ép dưa leo là bạn cũng có thể bổ sung dinh dưỡng thiết yếu cho cơ thể mà không cần ăn nhiều thực phẩm. ', 0, 59),
(146, 'Nước Chanh Muối', '20000', 'anh95.jpg', 'Chanh muối có tác dụng giảm chướng bụng, tăng cường chuyển hóa thức ăn, trị đầy hơi, khó tiêu vô cùng hiệu quả.\r\nTác dụng trị cảm, ho hiệu quả\r\nVỏ có nhiều tinh dầu, giúp làm thông cổ họng, có thể chế biến thành kẹo chanh muối.', 0, 59),
(147, 'Nước Cà Chua', '15000', 'nuoccachua.jpg', 'Cà chua là loại quả có tác dụng giải nhiệt hiệu quả đồng thời giúp bạn phòng chống một số bệnh. Ngoài việc đem lại nguồn dinh dưỡng dồi dào, cà chua còn là người bạn đồng hành trong công cuộc làm đẹp da .', 0, 59),
(148, 'Nước Dưa Hấu', '15000', 'ndh.jpg', 'Nước ép dưa hấu chứa khá nhiều vitamin A có khả năng chống lại nhiều tác hại từ ánh nắng mặt trời, điều tiết được lượng dầu không cần thiết trên khuôn mặt và giúp thu nhỏ lỗ chân lông, chống lão hóa ở da… rất cần thiết cho sự phát triển của tất cả các mô cơ, kể cả da và tóc.', 0, 59),
(149, 'Nước Bí Đao', '15000', 'nuocbidao.png', 'Bí đao là một loại thực phẩm vô cùng tốt cho sức khỏe. Không những dùng để nấu canh, xào,luộc,…mà còn giúp ích rất nhiều cho việc làm đẹp\r\n\r\n  và là một loại thức uống bổ dưỡng giúp giảm cân, giảm mỡ bụng một cách an toàn và thanh lọc cơ thể. ', 0, 59),
(150, 'Nước Dừa', '15000', 'sd.jpg', 'Nước dừa là chất lỏng, trong, chứa trong quả dừa. Khi quả dừa già đi, nước dừa được thay thế bởi cùi dừa và không khí. Quả dừa non chứa rất ít cùi dừa, và lớp cùi này mỏng, rất mềm và khá tron', 0, 59);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`IDBILL`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`IDBL`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`IDCART`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `IDSP` (`IDSP`),
  ADD KEY `IDBILL` (`IDBILL`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`IDDM`),
  ADD UNIQUE KEY `UQ_NAME` (`NAME`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSP`),
  ADD KEY `FK_SANPHAM_IDDM` (`IDDM`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `IDBILL` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `IDBL` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `IDCART` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `IDDM` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKH` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSP` int(30) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`IDKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`IDSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`IDBILL`) REFERENCES `bill` (`IDBILL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SANPHAM_IDDM` FOREIGN KEY (`IDDM`) REFERENCES `danhmuc` (`IDDM`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
