<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php"; ?>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-3">
            <?php include "nav.php"; echo "hong xau gai"; ?>
        </div>

        <div class="col-lg-9">
            <div class="row pt-5">
                <div class="col-md-8">
                    <fieldset>
                        <?php 
                             ($row = $data->fetch_assoc()); {
                            
                          ?>
                        <legend>Sửa Cán Bộ</legend>
                          
                        <form action="index.php?task=sua&id=<?php echo $row['id']; ?>" method="POST" class="form-group" >
                            <label for="hoten"> Ho ten</label>
                            <input type="text" name="hoten" value="<?php echo $row['hoten'];?>" class="form-control">
                            
                            <label for="diem"> Ngày Sinh</label>
                            <input type="text" name="ngaysinh" placeholder="Nhập tác giả bài hát !" value="<?php echo $row['ngaysinh'] ?>" class="form-control">
                            <label for="namsinh">Quê quán</label>
                            <input type="text" name="quequan" value="<?php echo $row['quequan'];?>" id="qq"class="form-control">
                            <label for="diem"> Hệ số Lương</label>
                            <input type="number" value="<?php echo $row['hesoluong'];?>" name="hesoluong" step="0.01" class="form-control">
                            <input type="submit" value="Update" class="form-control">
                        </form>
                    <?php 
                        } 

                    ?>
                    </fieldset>
                </div>
                <div class="col-md-4"> right collumn 4</div>
            </div>

        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript -->
<script src="js/bootstrap.bundle.js"></script>

</body>

</html>