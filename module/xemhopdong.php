<?php include '../session.php'; ?>
<?php
	$sql = "SELECT hd.mahopdong, hd.macb, c.hoten, c.ngaysinh, c.gioiTinh, c.email, c.emailkhac, c.didong, c.quequan, c.noiohientai, c.dantoc, c.tongiao, c.socmnd, c.ngaycapcmnd, c.noicapcmnd, hd.matruong, t.tentruong, (SELECT b.tenbomon FROM bomon b WHERE c.mabomon = b.id ) as bomon, (SELECT bl.hesoluong FROM bacluong bl WHERE bl.mabacluong = c.mabacLuong) as hesoluong , (SELECT bl.phucap FROM bacluong bl WHERE bl.mabacluong = c.mabacLuong) as phucap , hd.tenhopdong, hd.chucvu, hd.loaihopdong, hd.ngayky, hd.tungay, hd.denngay, hd.trichycnoidung  FROM hopdong hd, truong t, canbo c WHERE hd.matruong = t.matruong AND hd.macb = c.macb AND hd.mahopdong = '{$_GET['id']}'";
	$query = $con->query($sql);
	$row = $query->fetch_assoc();
?>
<!DOCTYPE html>
	<head>
		<title>Hợp đồng lao động</title>
		<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<div style="float: right; margin-right: 20px; margin-bottom: 20px; margin-top: 20px">
				<button class="btn btn-primary"; onclick="printContent('print')"><i class="fa fa-print"></i> In hợp đồng</button>
			</div>
		<div id="print">
			<div class="container">
			<div class="header">
				<div><h3>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h3></div>
				<div class="ctn1"><h4>Độc lập - Tự do - Hạnh phúc</h4></div>
				<div><h4>-------</h4></div>
				<div><h3>HỢP ĐỒNG LAO ĐỘNG</h3></div>
			</div>
			<div class="content">
				<div><p style="font-style: italic;">Căn cứ bộ luật lao động ngày 20 tháng 11 năm 2019;</p></div>
				<div><p style="font-style: italic;">Căn cứ vào nhu cầu của các Bên</p></div>
				<div><p>Hôm nay, ngày <?php $timestamp = strtotime($row['ngayky']); echo date("d", $timestamp); ?> tháng <?php $timestamp = strtotime($row['ngayky']); echo date("m", $timestamp); ?> năm <?php $timestamp = strtotime($row['ngayky']); echo date("yy", $timestamp); ?>, tại Đơn vị: <?php echo $row['tentruong']?>, chúng tôi gồm:</p></div>
				<div><p style="font-weight: bold;">Bên A: Người sử dụng lao động</p></div>
				<div><p>Đơn vị: <?php echo $row['tentruong']?></p></div>
				
				<div><p>Điện thoại: 0909090909</p></div>
				<div><p>Đại diện: Hiệu trưởng A Chức vụ: Hiệu trưởng Quốc tịch: Việt Nam</p></div>
				<div><p style="font-weight: bold;">Bên B: : Người lao động</p></div>
				<div><p>Ông/bà: <?php echo $row['hoten']?></p></div>
				<div><p>Quốc tịch: Việt Nam</p></div>
				<div><p>Ngày sinh: <?php echo $row['ngaysinh']?></p></div>
				<div><p>Nơi sinh: <?php echo $row['quequan']?></p></div>
				<div><p>Địa chỉ thường trú: <?php echo $row['quequan']?></p></div>
				<div><p>Địa chỉ tạm trú: <?php echo $row['noiohientai']?></p></div>
				<div><p>Số CMND/CCCD: <?php echo $row['socmnd']?> Cấp ngày: <?php echo $row['ngaycapcmnd']?></p></div>
				<div><p>Tại: <?php echo $row['noicapcmnd']?></p></div>
				<div><p style="font-style: italic;">Cùng thoả thuận ký kết Hợp đồng lao động (HĐLĐ) và cam kết làm đúng những điều khoản sau đây:</p></div>
				<div><p style="font-weight: bold;">Điều 1: Công việc, địa điểm làm việc và thời hạn của Hợp đồng</p></div>
				<div><p>Loại hợp đồng: <?php echo $row['loaihopdong']?></p></div>
				<div><p>Từ ngày: <?php echo $row['tungay']?> Đến ngày: <?php echo $row['denngay']?></p></div>
				<div><p>- Địa điểm làm việc: <?php echo $row['tentruong']?></p></div>
				<div><p>- Bộ phận công tác:</p></div>
				<div><p>+ Bộ môn: <?php echo $row['bomon']?></p></div>
				<div><p>+ Chức danh chuyên môn (vị trí công tác): <?php echo $row['chucvu']?></p></div>
				<div><p>- Nhiệm vụ công việc như sau:</p></div>
				<div><p>+ Thực hiện công việc theo đúng chức danh chuyên môn của mình dưới sự quản lý, điều hành của Ban Giám đốc (và các cá nhân được bổ nhiệm hoặc ủy quyền phụ trách).</p></div>
				<div><p>+ Phối hợp cùng với các bộ phận, phòng ban khác trong Người sử dụng lao động để phát huy tối đa hiệu quả công việc.</p></div>
				<div><p>+ Hoàn thành những công việc khác tùy thuộc theo yêu cầu kinh doanh của Người sử dụng lao động và theo quyết định của Ban Giám đốc (và các cá nhân được bổ nhiệm hoặc ủy quyền phụ trách).</p></div>
				<div><p style="font-weight: bold;">Điều 2: Lương, phụ cấp, các khoản bổ sung khác</p></div>
				<div><p>- Lương căn bản: <?php $luong = $row['hesoluong'] * 1300000; echo number_format($luong, 0, '', ',') . " VND"; ?></p></div>
				<div><p>- Phụ cấp: <?php $phucap = $row['phucap'] * 500000; echo number_format($phucap, 0, '', ',') . " VND"; ?></p></div>
				<div><p>- Các khoản bổ sung khác: tùy quy định cụ thể của Đơn vị</p></div>
				<div><p>- Hình thức trả lương: Tiền mặt hoặc chuyển khoản.</p></div>
				<div><p>- Thời hạn trả lương: Được trả lương vào ngày 05 của tháng.</p></div>
				<div><p>- Chế độ nâng bậc, nâng lương: Người lao động được xét nâng bậc, nâng lương theo kết quả làm việc và theo quy định của Người sử dụng lao động.</p></div>
				
				<div><p style="font-weight: bold;">Điều 3: Thời giờ làm việc, nghỉ ngơi, bảo hộ lao động, BHXH, BHYT, BHTN</p></div>
				<div><p>- Thời giờ làm việc: 8 giờ/ngày, 40 giờ/tuần, Nghỉ hàng tuần: T7, CN</p></div>
				<div><p>- Từ ngày Thứ 2 đến ngày Thứ 6 hàng tuần:</p></div>
				<div><p>+ Buổi sáng : Từ 7h-12h </p></div>
				<div><p>+ Buổi chiều: Từ 13h-5h </p></div>
				<div><p>- Chế độ nghỉ ngơi các ngày lễ, tết, phép năm:</p></div>
				<div><p>+ Người lao động được nghỉ lễ, tết theo luật định; các ngày nghỉ lễ nếu trùng với ngày nghỉ thì sẽ được nghỉ bù vào ngày trước hoặc ngày kế tiếp tùy theo tình hình cụ thể mà Ban lãnh đạo Đơn vị sẽ chỉ đạo trực tiếp.</p></div>
				<div><p>+ Người lao động đã ký HĐLĐ chính thức và có thâm niên công tác 12 tháng thì sẽ được nghỉ phép năm có hưởng lương (01 ngày phép/01 tháng, 12 ngày phép/01 năm); trường hợp có thâm niên làm việc dưới 12 tháng thì thời gian nghỉ hằng năm được tính theo tỷ lệ tương ứng với số thời gian làm việc.</p></div>
				<div><p>- Thiết bị và công cụ làm việc sẽ được Đơn vị cấp phát tùy theo nhu cầu của công việc.</p></div>
				<div><p>- Điều kiện an toàn và vệ sinh lao động tại nơi làm việc theo quy định của pháp luật hiện hành.</p></div>
				<div><p>- Bảo hiểm xã hội, bảo hiểm y tế và bảo hiểm thất nghiệp: Theo quy định của pháp luật.</p></div>
				<div><p style="font-weight: bold;">Điều 4: Đào tạo, bồi dưỡng, các quyền lợi và nghĩa vụ liên quan của người lao động</p></div>
				<div><p>- Đào tạo, bồi dưỡng: Người lao động được đào tạo, bồi dưỡng, huấn luyện tại nơi làm việc hoặc được gửi đi đào tạo theo quy định của Đơn vị và yêu cầu công việc.</p></div>
				<div><p>- Khen thưởng: Người lao động được khuyến khích bằng vật chất và tinh thần khi có thành tích trong công tác hoặc theo quy định của Đơn vị.</p></div>
				<div><p>- Các khoản thỏa thuận khác gồm: tiền cơm trưa, thưởng mặc định, hỗ trợ xăng xe, điện thoại, nhà ở, trang phục…, theo quy định của Đơn vị.</p></div>
				<div><p>- Nghĩa vụ liên quan của người lao động:</p></div>
				<div><p>+ Tuân thủ hợp đồng lao động.</p></div>
				<div><p>+ Thực hiện công việc với sự tận tâm, tận lực và mẫn cán, đảm bảo hoàn thành công việc với hiệu quả cao nhất theo sự phân công, điều hành (bằng văn bản hoặc bằng miệng) của Ban Giám đốc (và các cá nhân được Ban Giám đốc bổ nhiệm hoặc ủy quyền phụ trách).</p></div>
				<div><p>+ Hoàn thành công việc được giao và sẵn sàng chấp nhận mọi sự điều động khi có yêu cầu.</p></div>
				<div><p>+ Nắm rõ và chấp hành nghiêm túc kỷ luật lao động, an toàn lao động, vệ sinh lao động, phòng cháy chữa cháy, văn hóa Đơn vị, nội quy lao động và các chủ trương, chính sách của Đơn vị.</p></div>
				<div><p>+ Trong trường hợp được cử đi đào tạo thì nhân viên phải hoàn thành khoá học đúng thời hạn, phải cam kết sẽ phục vụ lâu dài cho Đơn vị sau khi kết thúc khoá học và được hưởng nguyên lương, các quyền lợi khác được hưởng như người đi làm.</p></div>
				<div><p>Nếu sau khi kết thúc khóa đào tạo mà nhân viên không tiếp tục hợp tác với Đơn vị thì nhân viên phải hoàn trả lại 100% phí đào tạo và các khoản chế độ đã được nhận trong thời gian đào tạo..</p></div>
				<div><p>+ Bồi thường vi phạm vật chất: Theo quy định nội bộ cuả Đơn vị và quy định cuả pháp luật hiện hành;</p></div>
				<div><p>+ Có trách nhiệm đề xuất các giải pháp nâng cao hiệu quả công việc, giảm thiểu các rủi ro. Khuyến khích các đóng góp này được thực hiện bằng văn bản.</p></div>
				<div><p>+ Thuế TNCN, nếu có: do người lao động đóng. Đơn vị sẽ tạm khấu trừ trước khi chi trả cho người lao động theo quy định.</p></div>
				
				<div><p style="font-weight: bold;">Điều 5: Nghĩa vụ và quyền lợi của Người sử dụng lao động</p></div>
				<div><p style="font-weight: bold;font-style: italic;">1.  Nghĩa vụ :</p></div>
				<div><p>- Thực hiện đầy đủ những điều kiện cần thiết đã cam kết trong HĐLĐ để Người lao động đạt hiệu quả công việc cao. Bảo đảm việc làm cho Người lao động theo HĐLĐ đã ký.</p></div>
				<div><p>- Thanh toán đầy đủ, đúng hạn các chế độ và quyền lợi cho người lao động theo hợp đồng lao động, thỏa ước lao động tập thể (nếu có);</p></div>
				<div><p style="font-weight: bold;font-style: italic;">2. Quyền lợi:</p></div>
				<div><p>- Điều hành Người lao động hoàn thành công việc theo HĐLĐ (bố trí, điều chuyển công việc cho Người lao động theo đúng chức năng chuyên môn).</p></div>
				<div><p>- Có quyền chuyển tạm thời lao động, ngừng việc, thay đổi, tạm hoãn, chấm dứt HĐLĐ và áp dụng các biện pháp kỷ luật theo quy định của Pháp luật hiện hành và theo nội quy của Đơn vị trong thời gian HĐLĐ còn giá trị.</p></div>
				<div><p>- Có quyền đòi bồi thường, khiếu nại với cơ quan liên đới để bảo vệ quyền lợi của mình nếu Người lao động vi phạm Pháp luật hay các điều khoản của HĐLĐ.</p></div>
				
				<div><p style="font-weight: bold;">Điều 6: Những thỏa thuận khác</p></div>
				<div><p>………………………………………………........................................................................
………………………………………………........................................................................
………………………………………………..</p></div>
				<div><p style="font-weight: bold;">Điều 7: Điều khoản thi hành</p></div>
				<div><p>- Những vấn đề về lao động không ghi trong hợp đồng lao động này thì áp dụng quy định cuả thỏa ước tập thể, trường hợp chưa có thỏa ước thì áp dụng quy định của pháp luật lao động.</p></div>
				<div><p>- Hợp đồng này được lập thành 2 bản có giá trị pháp lý như nhau, mỗi bên giữ 1 bản và có hiệu lực kể từ ngày ký.</p></div>
				<div><p>- Khi ký kết các phụ lục hợp đồng lao động thì nội dung của phụ lục cũng có giá trị như các nội dung cuả bản hợp đồng này.</p></div>
			</div>
			<div class="footer">
				<ul class="footer_content">
					<li>
						<div>
							<div><h3> NGƯỜI LAO ĐỘNG</h3></div>
							<div><p style="font-style: italic; margin-left: 25px;">(Ký, ghi rõ họ tên)</p></div>
							<div><p style="font-style: italic; margin-left: 25px; margin-top: 40px"><?php echo $row['hoten']?></p></div>
						</div>
					</li>
					<li>
						<div class="right_footer">
							<div><h3>NGƯỜI SỬ DỤNG LAO ĐỘNG</h3></div>
							<div><p style="font-style: italic; margin-left: 70px;">(Ký, ghi rõ họ tên)</p></div>
							<div><p style="font-style: italic; margin-left: 70px; margin-top: 40px">Hiệu trưởng</p></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		</div>
		<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
	</body>
</html>
<style>
.container{
	margin-left: 25%;
	width:50%;
}
.header{
	text-align:center;
}
.content{
	float:left;
}
.footer {
	width:100%;
}
.footer_content{
	float:left;
	width:100%;
}
.footer_content ul{
	float: left;
    padding: 0px;
    margin: 0px;
    width: 100%;
}
.footer_content li{
	float: left;
    width: 45%;
    display: inline-block;
    list-style: none;
}
.right_footer{
	margin-left: 5%;
}

</style>