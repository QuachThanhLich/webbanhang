<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include('cdn.php') ?>
</head>
<style>
  .form {
	background: #ffffff;

}
.form .py-3{
	max-width: 567px;
	width: 100%;
	margin: 15px auto 30px;
	border-radius: 5px;
	border: 1px solid #bbc5b129;
}
.dropdown-item{
	max-width: 567px;
	width: 100%;
	margin: 0 auto;
	border-radius: 5px;
	border: 1px solid #bbc5b129 !important;
}
.dropdown-item + .dropdown-item{
	margin-top: 15px;
}
</style>
<body>
<?php include("header.php") ?>
  <div class="form">
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Tên đăng nhâp/Email</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Tên đăng nhâp/Email">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Mật khẩu</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Mật khẩu">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Lưu mật khẩu
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
  </form>
  <!-- <div class="dropdown-divider"></div> -->
  <a class="dropdown-item" href="signup.php">Đăng kí</a>
  <a class="dropdown-item" href="#">Quên mật khẩu</a>
</div>
  </div>
<?php include("footer.php") ?>
</body>
</html>
