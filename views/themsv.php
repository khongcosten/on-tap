<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm sinh viên</title>
	<link rel="stylesheet" type="text/css" href="css/themsv.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="tieude"><h1>Thêm sinh viên</h1></div>
			<div class="nhomtext"><a href="index.php">Quay lại quản lí sinh viên</a></div>
			<div class="nhomtext">Tên sinh viên: <input type="text" name="tensv" placeholder="Nhập tên sinh viên"></div>
			<div class="nhomtext">Ngày sinh: <input type="date" name="date"></div>
			<div class="nhomtext">Giới tính: <input type="text" name="gt" placeholder="Nhập giới tính"></div>
			<div class="nhomtext">Tên lớp:
				<select name="lop">
					<?php 
						foreach ($data_lay as $value) {
							?>
							<option value="<?php echo $value['ma_lop'] ?>"><?php echo $value['ten_lop'] ?></option>
							<?php
						}
					 ?>
				</select>
			</div>
			<div class="nhomnut">
				<input type="submit" name="nutthem" value="Thêm" class="nut1">
				<input type="reset" name="nutreset" class="nut1">
			</div>
		</form>
	</div>
</body>
</html>