<htm>
    <header>
        <?php
        include 'header.php';
        include 'nav.php';

        ?>
    </header>
    <body>
    <div class="container col-md-6 border btn-light mt-5 " >
        <div class="container col-6">
            <form action="index.php?task=Chi" method="post" ">
            <div class="form-group">
                <?php
                echo  "<h6 class='text-right mt-1' >Còn lại : ".$tt."</h6>"
                ?>
            </div>
            <div class="form-group">
                <label>Số tiền:</label>
                <input type="text" class="form-control" name="sotien">
            </div>
            <div class="form-group">
                <label for="pwd">Mô tả:</label>
                <input type="text" class="form-control" name="mota">
            </div>
            <div class="form-group">
                <label for="pwd">Nhóm:</label>
                <select name="idnhomchi" id="" class="col -12">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>


                        <?php
                        echo "<option  value='$row[idnhomchi]'>$row[ten]</option>";
                        ?>

                        <?php
                    };

                    ?>
                </select>
            </div>
            <div class="form-group text-right">
                <input type="submit" class="btn btn-info" name="submit" value="Nhập">

            </div>
            </form>
        </div>
    </div

    </body>

</htm>