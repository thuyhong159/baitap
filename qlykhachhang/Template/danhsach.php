<!DOCTYPE html>
<html>
<head>
	<title>Danh sach khach hang</title>
	<meta charset="utf-8">
</head>
<body>
	
	<h2>Danh sach khach hang</h2>
	<a href="index.php?task=formthem"><input type="submit" name="submit" value="Them"></a>
	<form action="index.php?task=xemdanhsach" method="POST">
		<table border="1">
			<tr>
				<th>STT</th>
				<th>Ho ten</th>
				<th>Ngay sinh</th>
				<th>Dia chi</th>
				<th>Tuoi</th>
				<th>Email</th>
				<th>Sua</th>
				<th>Xoa</th>
			</tr>
			<tr>
				<?php 
					$i=0;
					while ($row= $result->fetch_assoc()) {
						$i++;
						?>

						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $row['hoten'] ?></td>
							<td><?php echo $row['ngaysinh'] ?></td>
							<td><?php echo $row['diachi'] ?></td>
							<td><?php echo $row['tuoi'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><a href="index.php?task=sua&id=<?php echo $row['id'] ?>">Edit</a></td>
							<td><a href="index.php?task=delete&id=<?php echo $row['id'] ?>">Delete</a></td>
						</tr>
						<?php
					}
				?>
			</tr>
		</table>
	</form>
</body>
</html>