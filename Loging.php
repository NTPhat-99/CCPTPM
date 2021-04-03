<?php


if (isset($_POST["Button"])) {
  $u_name=$_POST["txtname"];
  $u_pass=$_POST["txtpass"];
  $user = "admin";
  $pass = "admin";
    if($u_name == $user && $u_pass ==$pass)
    {
      //echo "khong thanh cong";
      ?>
        <script>alert('Ban Dang Nhap Thanh Cong');</script>

        <?php



    }else {
      ?>
        <script>alert('Sai Tai Khoan Hoac Mat Khau');</script>

        <?php
    }


  // code...
}

?>

<form method="post">
  <label class="lbUserName">
    <p>Username</p>
    <input type="text" name="txtname" placeholder="Enter Username">
  </label>
  <label class="lbPassWord">
    <p>PassWord</p>
    <input type="text" name = "txtpass" placeholder="Enter Password">
  </label>
  <button name="Button" type="submit">Login</button>

</form>
