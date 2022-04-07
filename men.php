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

        .men-container {
            padding-bottom: 20px;
        }

        .men-container .sub-heading {
            font-size: 16px;
            font-style: italic;
            opacity: 0.6;
        }

        .men-menu{
            background-color: #ececec;
            padding: 4% 0;
        }

        .men-menu-box {
            width: 48%;
            margin: 1%;
            padding: 2%;
            /* float: left; */
            background-color: #ccc;
            border-radius: 15px;
            box-shadow:  5px 5px 18px #bebebe,
                        -5px -5px 18px #ffffff;
        }

        .men-menu-img {
            width: 22%;
            float: left;
        }

        .men-menu-desc{
            width: 70%;
            /* float: left; */
            margin-left: 8%;
        }

        .men-price{
            font-size: 1.2rem;
            margin: 2% 0;
        }
        .men-detail{
            font-size: 1rem;
            color: #747d8c;
        }
    </style>
        
</head>

<body>
    <?php include("header.php");?>
    <div>
    <section>
        <div class="men-container">
            <h2 class="text-center">Sản Phẩm</h2>
            <p class="text-center sub-heading">Quần Áo Nam</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex men-menu-box">
                <div class="men-menu-img">
                    <img src="./assets/img/aonam1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="men-menu-desc">
                    <h4>Title 1</h4>
                    <p class="men-price">1<sup>đ</sup></p>
                    <p class="men-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>

            <div class="d-flex men-menu-box">
                <div class="men-menu-img">
                    <img src="./assets/img/aonam1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="men-menu-desc">
                    <h4>Title 2</h4>
                    <p class="men-price">1<sup>đ</sup></p>
                    <p class="men-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex men-menu-box">
                <div class="men-menu-img">
                    <img src="./assets/img/aonam1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="men-menu-desc">
                    <h4>Title 3</h4>
                    <p class="men-price">1<sup>đ</sup></p>
                    <p class="men-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>

            <div class="d-flex men-menu-box">
                <div class="men-menu-img">
                    <img src="./assets/img/aonam1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="men-menu-desc">
                    <h4>Title 4</h4>
                    <p class="men-price">1<sup>đ</sup></p>
                    <p class="men-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex men-menu-box">
                <div class="men-menu-img">
                    <img src="./assets/img/aonam1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="men-menu-desc">
                    <h4>Title 5</h4>
                    <p class="men-price">1<sup>đ</sup></p>
                    <p class="men-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>

            <div class="d-flex men-menu-box">
                <div class="men-menu-img">
                    <img src="./assets/img/aonam1.jpg" alt="Name" class="img-responsive img-curve">
                </div>

                <div class="men-menu-desc">
                    <h4>Title 6</h4>
                    <p class="men-price">1<sup>đ</sup></p>
                    <p class="men-detail">Made in China Cotton.</p><br>
                    <a href="#" class="btn btn-primary">Order</a>
                </div>
            </div>
    </div>
        </div>
    </section>

    </div>
   
    <div>
        <?php include("footer.php") ?>
    </div>
    
</body>

</html>