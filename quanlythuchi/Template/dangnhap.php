<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'header.php';
	?>
</head>
<body>
	<div class="col-3 border  border-info bg-light  container pt-4 mt-5">
		<form action="index.php?task=ok" method="POST">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
	            <label for="pwd">Password:</label>
	            <input type="password" class="form-control" name="password">
	            <button type="submit" class="btn btn-primary container" name="login">Submit</button>
        	</div>
		</form>
	</div>

</body>
</html>