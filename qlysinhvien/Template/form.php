<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php" ?>
</head>
<body>

<div class="container">
	<div class="row">
        <div class="col-lg-3">
            <?php include "nav.php" ?>
        </div>
        <div class="col-lg-9">
            <div class="row pt-5">
                <div class="col-md-8">
                	<legend>Thêm Cán Bộ</legend>
                        <form action="index.php?task=themsinhvien" method="post" class="form-group" >
                        	<label for="hoten"> Họ tên</label>
                            <input type="text" name="hoten" id="hoten" class="form-control">
                            <label for="namsinh">Lớp</label>
                            <input type="text" name="lop" id="qq"class="form-control">
                            <label for="diem"> Điểm</label>
                            <input type="number" name="diem" id="hsluong" min="0" max="10" class="form-control">
                            <input type="submit" value="Save" name="submit" class="form-control">
                        </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>