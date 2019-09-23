<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="utf-8"></meta>
	<title>thong tin</title>
	<style type="text/css">
		.container{
			margin: 0 auto;
			margin-left: 400px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 30px">
			<div class="col-md-3"></div>
			<div class="col-md-9">
				<h3></h3>
	<form method="Post" action="thongtin.php">

		<label >Nhập chuỗi 1:</label> <input type="text" name="hoten" value=""><br>
		<label>Nhập chuỗi 2:</label>
		<input type="text" name="diachi" value=""><br>
		<input type="submit" name="luulai" value="Lưu lại">
	</form>
	<?php
		if (isset($_POST['luulai'])) {

			echo "<h3>Thông tin bạn vừa nhập là:</h3>";

			$ht=$_POST['hoten'];
			$dc=$_POST['diachi'];

			$dodai1=strlen($ht);
			$dodai2=strlen($dc);
			if (ord($ht)==123) {
				$htnew=substr( $ht, 2, $dodai1-4 );
				$xetthongbao=substr( $htnew, 0, 5 );
					if ($xetthongbao=='alert') {
						echo "<script>$htnew</script>";
					}else{
						$dodainew1=strlen($htnew);
						$vitridaucong=strpos( $htnew,'+');
						$vitridautru=strpos( $htnew,'-');
						$vitridaunhan=strpos( $htnew,'*');
						$vitridauchia=strpos( $htnew,'/');
						if ($vitridaucong==true) {
							$vetruoc=substr( $htnew, 0, $vitridaucong );
							$vesau=substr( $htnew, $vitridaucong+1, $dodainew1-$vitridaucong );
							$pheptinh=$vetruoc+$vesau;
							echo "Chuỗi 1: $pheptinh<br>";
						}else{
							if ($vitridautru==true) {
							$vetruoc=substr( $htnew, 0, $vitridautru );
							$vesau=substr( $htnew, $vitridautru+1, $dodainew1-$vitridautru );
							$pheptinh=$vetruoc-$vesau;
							echo "Chuỗi 1: $pheptinh<br>";
							}else{
								if ($vitridaunhan==true) {
									$vetruoc=substr( $htnew, 0, $vitridaunhan );
									$vesau=substr( $htnew, $vitridaunhan+1, $dodainew1-$vitridaunhan );
									$pheptinh=$vetruoc*$vesau;
									echo "Chuỗi 1: $pheptinh<br>";
								}else{
									if ($vitridauchia==true) {
										$vetruoc=substr( $htnew, 0, $vitridauchia );
										$vesau=substr( $htnew, $vitridauchia+1, $dodainew1-$vitridauchia );
										$pheptinh=$vetruoc/$vesau;
										echo "Chuỗi 1: $pheptinh<br>";
									}
								}
							}
						}

					}
				
				
				
			}else{
				echo "Chuỗi 1: $ht<br>";
			}
			if (ord($dc)==123) {
				$dcnew=substr( $dc, 2, $dodai2-4 );
				$xetthongbao=substr( $dcnew, 0, 5 );
					if ($xetthongbao=='alert') {
						echo "<script>$dcnew</script>";
					}else{
						$dodainew2=strlen($dcnew);
				$vitridaucong=strpos( $dcnew,'+');
				$vitridautru=strpos( $dcnew,'-');
				$vitridaunhan=strpos( $dcnew,'*');
				$vitridauchia=strpos( $dcnew,'/');
				if ($vitridaucong==true) {
					$vetruoc=substr( $dcnew, 0, $vitridaucong );
					$vesau=substr( $dcnew, $vitridaucong+1, $dodainew2-$vitridaucong );
					$pheptinh=$vetruoc+$vesau;
					echo "Chuỗi 2: $pheptinh<br>";
				}else{
					if ($vitridautru==true) {
					$vetruoc=substr( $dcnew, 0, $vitridautru );
					$vesau=substr( $dcnew, $vitridautru+1, $dodainew2-$vitridautru );
					$pheptinh=$vetruoc-$vesau;
					echo "Chuỗi 2: $pheptinh<br>";
					}else{
						if ($vitridaunhan==true) {
							$vetruoc=substr( $dcnew, 0, $vitridaunhan );
							$vesau=substr( $dcnew, $vitridaunhan+1, $dodainew2-$vitridaunhan );
							$pheptinh=$vetruoc*$vesau;
							echo "Chuỗi 2: $pheptinh<br>";
						}else{
							if ($vitridauchia==true) {
								$vetruoc=substr( $dcnew, 0, $vitridauchia );
								$vesau=substr( $dcnew, $vitridauchia+1, $dodainew2-$vitridauchia );
								$pheptinh=$vetruoc/$vesau;
								echo "Chuỗi 2: $pheptinh<br>";
							}
						}
					}
				}

					}
				
				
				
			}else{
				echo "Chuỗi 2: $dc<br>";
			}
//<script>alert("thog báo");</script>
			
		}
	?>
	<h3 style="margin-top: 125px">Demo by Nguyễn Trọng Tài CNTTK14C</h3>
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>
</body>
</html>