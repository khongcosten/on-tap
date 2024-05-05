<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quan ly sinh vien</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<p>
		HIỂN THỊ TẤT CẢ SINH VIÊN
	</p>
	<a href="index.php?action=themsv">Thêm sinh viên</a>
	<table>
		<tr>
			<th>Ma sinh vien</th>
			<th>Ten sinh vien</th>
			<th>Ngay sinh</th>
			<th>Gioi tinh</th>
			<th>Ma lop</th>
			<th>Thao tác</th>
		</tr>
		<?php 
				foreach ($data as $value ) {
					?>
		<tr>
			
					<td><?php echo $value['ma_sv']; ?></td>
					<td><?php echo $value['ten_sv']; ?></td>
					<td><?php echo $value['date1'] ;?></td>
					<td><?php echo  $value['gt'] ;?></td>
					<td><?php echo $value['ma_lop']; ?></td>
					<td class="thaotac">
						<a class="sua" href="index.php?action=suasv&ma_sv=<?php echo $value['ma_sv'] ?>" >Sửa</a>
						<a class="sua" href="index.php?action=xoasv&ma_sv=<?php  echo $value['ma_sv'] ?>">Xóa</a>
					</td>

		</tr>
					<?php
				}
			 ?>
		
	</table>
	<p>HIỂN THỊ SINH VIÊN GIỚI TÍNH NỮ</p>
	<table>
		<tr>
			<th>Ma sinh vien</th>
			<th>Ten sinh vien</th>
			<th>Ngay sinh</th>
			<th>Gioi tinh</th>
			<th>Ma lop</th>
		</tr>
		<?php 
				foreach ($datanu as $value ) {
					?>
		<tr>
			
					<td><?php echo $value['ma_sv']; ?></td>
					<td><?php echo $value['ten_sv']; ?></td>
					<td><?php echo $value['date1'] ;?></td>
					<td><?php echo  $value['gt'] ;?></td>
					<td><?php echo $value['ma_lop']; ?></td>
		</tr>
					<?php
				}
			 ?>
		
	</table>	
	<p>HIỂN THỊ SINH VIÊN DƯỚI 20 TUỔI</p>
	<table>
		<tr>
			<th>Ma sinh vien</th>
			<th>Ten sinh vien</th>
			<th>Ngay sinh</th>
			<th>Gioi tinh</th>
			<th>Ma lop</th>
		</tr>
		<?php 
				foreach ($data20 as $value ) {
					?>
		<tr>
			
					<td><?php echo $value['ma_sv']; ?></td>
					<td><?php echo $value['ten_sv']; ?></td>
					<td><?php echo $value['date1'] ;?></td>
					<td><?php echo  $value['gt'] ;?></td>
					<td><?php echo $value['ma_lop']; ?></td>
		</tr>
					<?php
				}
			 ?>
		
	</table>	
</body>
</html>