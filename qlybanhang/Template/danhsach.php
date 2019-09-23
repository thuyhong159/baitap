<!DOCTYPE html>
<html>
<head>
	<title>Danh sach san pham</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="index.php?task=them"><input type="submit" name="submit" value="Them"></a> Them o day!
	
	<h2>Danh sach hien thi</h2>
	<form action="index.php?task=xemdanhsach" method="POST">
		<div>
			<table border="1px">
				<tr>
					<th>STT</th>
					<th>Ten san pham</th>
					<th>Don vi tinh</th>
					<th>So luong</th>
					<th>Don gia</th>
					<th>Thanh tien</th>
					<th>Sua</th>
					<th>Xoa</th>
				</tr>
					<?php 
						$i=0;
						
						while($row= $result->fetch_assoc()) {
							$i++;
							$soluong= $row['soluong'];
							$dongia= $row['dongia'];
							$thanhtien =$soluong *$dongia;
							?>

							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $row['tensp']?></td>
								<td><?php echo $row['dvt']?></td>
								<td><?php echo $row['soluong']?></td>
								<td><?php echo $row['dongia']?></td>
								<td><?php echo $thanhtien ?></td>
								<td><a href="index.php?task=suaSp&id=<?php echo $row['masp'];?>">Edit</a></td>
								<td><a href="index.php?task=xoa&id=<?php echo $row['masp'];?>">Xoa</a></td>
							</tr>
							<?php
						}
					?>
			</table>
		</div>
	</form>
</body>
</html>