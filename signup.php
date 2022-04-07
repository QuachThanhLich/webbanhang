<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
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

</style>
<body>
<?php include("header.php") ?>
<div class="form">
  <form class="px-4 py-3 ">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Tên đăng nhâp/Email</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Tên đăng nhâp/Email">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Mật khẩu</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Mật khẩu">
    </div>
    <button type="submit" class="btn btn-primary">Đăng kí</button>
  </form>
  </div>
  </div>
<?php include("footer.php") ?>
</body>
</html>