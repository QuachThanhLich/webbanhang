<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Liên Hệ</title>
  <?php include('cdn.php') ?>
</head>
<style>
.form-inline {
	background: #ffffff;
  margin: 5px;
  padding: 5px 50px 5px 50px;
}

.contact-heading {
  margin-top: 20px;
}

.container-contact{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form .py-3{
	max-width: 567px;
	width: 100%;
	margin: 15px auto 30px;
	border-radius: 5px;
	border: 1px solid #bbc5b129;
}

.text-center{
  text-align: center;
}

.sub-heading{
  font-size: 16px;
  font-style: italic;
  opacity: 0.6;
}

input, textarea{
  width: 100%; 
  padding: 10px;
  outline: 0;
  border: 1px solid #ccc;
  color: #fff;
  background: transparent;
  font-size: 15px;
}
</style>

<body>
  <?php include('header.php')?>
  <div class="contact-heading">
    <h1 class="text-center">Liên Hệ Chúng Tôi</h1>
    <p class="text-center sub-heading">Hãy để lại thông tin bên dưới !</p>
  </div>

  <div class="container-contact">
      <form action="">
        <div class="form-group">
          <label for="ten">Tên</label>
          <input type="text" id="ten" class="form-control">
        </div>

        <div class="form-group">
          <label for="sdt">Số Điện Thoại</label>
          <input type="text" id="sdt" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" class="form-control">
        </div>

        <div class="form-group">
          <label for="message">Câu hỏi của Bạn</label>
          <textarea class="form-control" id="message" cols="40" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
<?php include('footer.php') ?>
</body>
</html>