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
                    <fieldset>
                        <legend>Sửa Sinh vien</legend>
                        <form action="index.php?task=update&id=<?php echo $data['id']; ?>" method="post" class="form-group" >
                        	<label for="hoten"> Ho ten</label>
                            <input type="text" name="hoten" id="hoten" value="<?php echo $data['hoten'];?>" class="form-control">
                            <label for="namsinh">Lop</label>
                            <input type="text" name="lop" value="<?php echo $data['lop'];?>" id="qq"class="form-control">
                            <label for="diem"> Diem</label>
                            <input type="number" name="diem" id="ns" value="<?php echo $data['diem'];?>" class="form-control">
                            <label for="diem"> Năm sinh</label>
                            <input type="number" name="namsinh" id="ns" value="<?php echo $data['namsinh'];?>" class="form-control">
                            <input type="submit" name="submit" value="Update" class="form-control">
                        </form>
                    </fieldset>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>