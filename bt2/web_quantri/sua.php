<?php 
	require_once "connect.php";
	if(isset($_POST['btnsua'])){
		$idSP = $_GET['idSP'];
		$tenSP = $_POST['tenSP'];
		$gia = $_POST['gia'];
		// var_dump($gia);exit();
		if ($_FILES['img']['type']=='') {
			$sql = "UPDATE quanlybanggia SET tenSP='$tenSP',gia='$gia' WHERE idSP='$idSP'";
			mysqli_query($com,$sql);
			?>
			<script type="text/javascript">
              	window.location="http://localhost:8080/Baitap/bt2/web_quantri/quanly.php";
              </script>
			<?php

		}
		else{
		if(($_FILES['img']['type']!="image/gif")&&($_FILES['img']['type']!="image/png")&&($_FILES['img']['type']!="image/jpg")&&($_FILES['img']['type']!="image/jpeg")){
                $message = "File khong dung dinh dang";
              }
              elseif ($_FILES['img']['size']>2000000) {
                $message = "Kich co anh phai nho hon 2MB";
                # code...
              }
              elseif ($_FILES['img']['size']=="") {
                $message = "Ban chua chon anh";
              }
              else{
                $img = $_FILES['img']['name'];
                $link = 'upload/'.$img;
                move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$img);
              }
              $sql = "UPDATE quanlybanggia SET tenSP='$tenSP',gia='$gia',hinhanh='$link' WHERE idSP='$idSP'";
              // var_dump($sql);exit();
              mysqli_query($com,$sql);
              ?>
              <script type="text/javascript">
              	window.location="http://localhost:8080/Baitap/bt2/web_quantri/quanly.php";
              </script>
              <?php
	}
}
 ?>