<!DOCTYPE html>
<html>
<head>
	<title>Danh sách sản phẩm</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="index.php?task=dn"><input type="submit" name="submit" value="Them"></a>Thêm danh sách
	<h2>Danh sách sản phẩm theo tên NSX</h2>
	<form action="index.php?task=xemdanhsach" method="POST">
		<table border="1">
			<tr>
				<th>STT</th>
				<th>Ten san pham</th>
				<th>Ten NSX</th>
				<th>Ngay san xuat</th>
				<th>Khuyen mai</th>
				<th>Sua</th>
				<th>Xoa</th>
			</tr>
			
				<?php 
					$i= 0;
					while ($row = $result->fetch_assoc()) {
						$i++;
						?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row['tensp'] ?></td>
						<td><?php echo $row['tennsx'] ?></td>
						<td><?php echo $row['ngaysx'] ?></td>
						<td><?php echo $row['khuyenmai'] ?></td>
						<td><a href="index.php?task=sua&id=<?php echo $row['mansx'] ?>">Edit</a></td>
						<td><a href="index.php?task=xoa&id=<?php echo $row['mansx'] ?>">Xoa</a></td>
					</tr>
						<?php
					}
				?>
		</table>
	</form>

</body>
</html>