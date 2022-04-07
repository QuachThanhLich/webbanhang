<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>SHOP VJPPRO</title>
    <?php include('cdn.php') ?>
    <style>
        .text-center {
            text-align: center;
            margin-top: 10px;
        }

        .women-container .sub-heading {
            font-size: 16px;
            font-style: italic;
            opacity: 0.6;
        }

        .women-menu{
            background-color: #ececec;
            padding: 4% 0;
        }

        .women-menu-box {
            width: 48%;
            margin: 1%;
            padding: 2%;
            /* float: left; */
            background-color: #ccc;
            border-radius: 15px;
            box-shadow:  5px 5px 18px #bebebe,
                        -5px -5px 18px #ffffff;
        }

        .women-menu-img {
            width: 22%;
            float: left;
        }

        .women-menu-desc{
            width: 70%;
            /* float: left; */
            margin-left: 8%;
        }

        .women-price{
            font-size: 1.2rem;
            margin: 2% 0;
        }
        .women-detail{
            font-size: 1rem;
            color: #747d8c;
        }
    </style>
        
</head>

<body>
    <!-- header -->
    <?php include("header.php");?>
    <!-- end header -->
    
    <!-- menu -->
    <section>
        <div class="women-container">
            <h2 class="text-center">Sản Phẩm</h2>
            <p class="text-center sub-heading">Quần Áo Nữ</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex women-menu-box">
                <div class="women-menu-img">
                    <img src="./assets/img/aonu1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="women-menu-desc">
                    <h4>Title 1</h4>
                    <p class="women-price">1<sup>đ</sup></p>
                    <p class="women-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>

            <div class="d-flex women-menu-box">
                <div class="women-menu-img">
                    <img src="./assets/img/aonu1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="women-menu-desc">
                    <h4>Title 2</h4>
                    <p class="women-price">1<sup>đ</sup></p>
                    <p class="women-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex women-menu-box">
                <div class="women-menu-img">
                    <img src="./assets/img/aonu1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="women-menu-desc">
                    <h4>Title 3</h4>
                    <p class="women-price">1<sup>đ</sup></p>
                    <p class="women-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>

            <div class="d-flex women-menu-box">
                <div class="women-menu-img">
                    <img src="./assets/img/aonu1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="women-menu-desc">
                    <h4>Title 4</h4>
                    <p class="women-price">1<sup>đ</sup></p>
                    <p class="women-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex women-menu-box">
                <div class="women-menu-img">
                    <img src="./assets/img/aonu1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="women-menu-desc">
                    <h4>Title 5</h4>
                    <p class="women-price">1<sup>đ</sup></p>
                    <p class="women-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>

            <div class="d-flex women-menu-box">
                <div class="women-menu-img">
                    <img src="./assets/img/aonu1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="women-menu-desc">
                    <h4>Title 6</h4>
                    <p class="women-price">1<sup>đ</sup></p>
                    <p class="women-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end menu -->

    <!-- footer -->
    <?php include("footer.php") ?>
    <!-- end footer -->
</body>
</html>