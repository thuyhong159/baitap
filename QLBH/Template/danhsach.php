<!DOCTYPE html>
<html>
<head>
	<title>Danh sach bai hat</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Danh sach bai hat</h2>
	<div>
		<a href="index.php?task=themdanhsach"><input type="submit" name="submit" value="Them"></a>
</div>

	<form method="POST" action="index.php?task=xemdanhsach">
		<table border="1" padding="10px">
			<tr>
				<th>STT</th>
				<th>Tên bài hát</th>
				<th>Tác giả</th>
				<th>Thể loại</th>
				<th>Thời gian</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
				<?php 
					$i=0;
					while ($row= $result->fetch_assoc()) {
						$i++;
				?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['tenbh'] ?></td>
				<td><?php echo $row['tacgia'] ?></td>
				<td><?php echo $row['theloai'] ?></td>
				<td><?php echo $row['thoigian']?></td>
				<td><a href="index.php?task=sua&id=<?php echo $row['id'];?>">Edit</a></td>
				<td><a href="index.php?task=delete&id=<?php echo $row['id']?>">Xoa</a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</form>
	
</body>
</html>