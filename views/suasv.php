<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa sinh viên</title>
	<link rel="stylesheet" type="text/css" href="css/suasv.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="hi"><h1>Sửa thông tin sinh viên</h1></div>
			<div class="nhomtext"><a href="index.php">Quay lại trang quản lý sinh viên</a></div>
			<div class="nhomtext">Tên sinh viên: <input type="text" name="tensv" value="<?php echo $datalay[0]['ten_sv'] ?>"></div>
			<div class="nhomtext">Ngày sinh: <input type="date" name="date" value="<?php echo $datalay[0]['date'] ?>"></div>
			<div class="nhomtext">Giới tính: <input type="text" name="gt" value="<?php echo $datalay[0]['gt'] ?>"></div>
			<div class="nhomtext"> Lớp:
				<select name='lop'>
					<?php 
						foreach ($data as $value ) {
							if ($value['ma_lop']==$datalay[0]['ma_lop']) {
							?>
							<option value="<?php echo $value['ma_lop'] ?>" selected ><?php echo $value['ten_lop'] ?></option>
							<?php
						} else {
							?>
							<option value="<?php echo $value['ma_lop'] ?>" ><?php echo $value['ten_lop'] ?></option>
							<?php
						}
					}
					 ?>
				</select>
			</div>		
			<div class="nhomnut"><input type="submit" name="nutsua" value="Sửa" class="nutsua"></div>
		</form>
	</div>
</body>
</html>