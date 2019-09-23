
<?php
session_start();
?>
<html>
<head>
  <title>Trang đăng nhập</title>
  <meta charset="utf-8">
</head>
<body>
<?php
 // $username = strip_tags($username);
    // $username = addslashes($username);
    // $password = strip_tags($password);
    // $password = addslashes($password);
    // if ($username == "" || $password =="") {
    //   echo "username hoặc password bạn không được để trống!";
    // }else{
    //   $sql = "select * from user where username = '$username' and password = '$password' ";
    //   $query = mysqli_query($conn,$sql);
    //   $num_rows = mysqli_num_rows($query);
    //   if ($num_rows==0) {
    //     echo "tên đăng nhập hoặc mật khẩu không đúng !";
    //   }else{
    //     //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này

    $conn = mysqli_connect('localhost','root','','antoanweb');
    mysqli_set_charset($conn,'utf8');
    if (isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST["password"];

      if ($username == "" || $password =="") {
      echo "username hoặc password bạn không được để trống!";
    }else{
      $sql = "select * from user where username = '$username' and password = '$password' ";
      $query = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($query);
      if ($num_rows==0) {
        echo "tên đăng nhập hoặc mật khẩu không đúng !";
      }else{

        $_SESSION['username'] = $username;
                header('Location: index.php');
      }
      }          
  }
?>
  <form method="POST" action="login.php">
  <fieldset>
      <legend>Đăng nhập</legend>
        <table>
          <tr>
            <td>Username</td>
            <td><input type="text" name="username" size="30"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" size="30"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"> <input name="submit" type="submit" value="Đăng nhập"></td>
          </tr>
        </table>
  </fieldset>
  </form>
</body>
</html>
