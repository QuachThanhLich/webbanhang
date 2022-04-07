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
    .row{
        margin-top:30px;
    }
    .haru{
        border :1px solid #fff;
        border-radius :10px
    }
    .haru ul{
        margin-top :5px;
    }
    .haru ul li{
        list-style-type : none;
        display: inline-block;
        margin-right :20px;
    }
    .icon{
        display:block;
        width: 15px;
        height:15px;

    }
</style>
<body>
<footer class="container py-5">
        <div class="row">
            <div class="col-4 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
            </div>
            <div class="col-4 col-md">
                <h5>Simple is the best</h5>
                <p style="font-size: 12px;"> 275 Cách Mạng Tháng 8 Phường 12 Quận 10 TP Hồ Chí Minh</p>

                <p style="font-size: 12px; "> 090933131</p>
                <p style="font-size: 12px;"> lienhe@team5shop.com</p>
                <div class="haru">
                    <ul class="list-unstyled text-small">
                        <li><a class="icon" href ="#"><img src="./assets/img/ic_fb.svg"></a></li>
                        <li><a class="icon" href ="#"><img src="./assets/img/ic_gg.svg"></a></li>
                        <li><a class="icon" href ="#"><img src="./assets/img/ic_ins.svg"></a></li>
                        <li><a class="icon" href ="#"><img src="./assets/img/ic_pinterest.svg"></a></li>
                        <li><a class="icon" href ="#"><img src="./assets/img/ic_ytb.svg"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4 col-md">
                <h5>HỖ TRỢ KHÁCH HÀNG</h5>
                <ul class="list-unstyled text-small">
                    <li><a style="font-size: 15px; class="text-muted" href="changeproduct.php">Chính sách đổi trả</a></li>
                    <li><a style="font-size: 15px; class="text-muted" href="">Chính sách giao hàng</a></li>
                    <li><a style="font-size: 15px; class="text-muted" href="">Hình thức thanh toán</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>