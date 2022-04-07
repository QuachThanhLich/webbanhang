<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <?php include('cdn.php') ?>
</head>
<style>
    .row {
        justify-content: center;
        margin-bottom: 20px;
    }

    .btnCont {
        width: 38%;
        display: inline-flex;
        flex-direction: column;
        justify-content: flex-end;
        float: right;
    }

    .btnCont .list {
        margin: 0 0 10px auto;
        display: inline-flex;
        justify-content: flex-end;
        border: 1px solid #ced4da;
    }

    .btnCont .list a {
        background: #000000;

        position: relative;
        padding: 14px 15px 13px 30px;
        border-right-width: 0;
        width: auto;
        font-weight: bold;
        color: #ffffff;
    }

    .btnCont .list a::before {
        content: '';
        height: auto;
        background-color: transparent;
        position: absolute;
        top: -1px;
        right: -10px;
        bottom: auto;
        left: auto;
        z-index: 1;
        border-width: 26px;
        border-color: transparent;
        border-style: solid;
        border-right: 0;
        border-left: 10px solid #ffffff;
    }

    .btnCont .list a::after {
        position: absolute;
        top: -1px;
        right: -9px;
        bottom: auto;
        left: auto;
        display: block;
        border-width: 26px;
        border-color: transparent;
        border-style: solid;
        border-right: 0;
        border-left: 10px solid #000000;
        content: "";
        z-index: 1;
    }

    .btnCont .list a:last-child::before,
    .btnCont .list a:last-child::after {
        display: none
    }

    .btnCont .list a:hover {
        text-decoration: none;
        color: #000000;
        background: #ffffff;
    }

    .btnCont .list a:hover::after {
        position: absolute;
        top: -1px;
        right: -9px;
        bottom: auto;
        left: auto;
        display: block;
        border-width: 26px;
        border-color: transparent;
        border-style: solid;
        border-right: 0;
        border-left: 10px solid #ffffff;
        content: "";
        z-index: 1;
    }

    .btnCont .list a:last-child:hover::before,
    .btnCont .list a:last-child:hover::after {
        text-decoration: none;
        color: #000000;
        background: #ffffff;
        z-index: 0;
        /* border-left: 1px solid #ced4da; */
    }

    .text-danger {
        margin-top: 100px;
        display: block;
        width: 100%;
        border: 1px solid #ced4da;
        font-weight: 400;
        padding: 20px;
        font-size: 1.8rem;
    }

    .information .btn {
        max-width: 300px;
        width: 100%;
        margin: 0 0 0 auto;
    }

    .information .btn a {
        display: block;
        text-align: center;
        color: #000;
        border: 1px solid #000;
        padding: 13px 10px;
    }

    .information .btn a:hover {
        text-decoration: none;
        color: #ffffff;
        background: #000000;
        transition: .3s;
    }
</style>

<body>
    <?php include('header.php') ?>
    <main>
        <div class="container">
            <div class="pro">
                <div class="row mbot-3">
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">Sản phẩm</h2>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">Đơn giá</h2>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">Số lượng</h2>
                    </div>
                    <div class="col-sm-2">
                        <h2 class="text-center cart-title">Tổng cộng</h2>
                    </div>
                    <div class="col-sm-2">
                    </div>
                <div class="col-md-8">
                    <div class="list">
                        <a href='checkout.php'>Xem đơn hàng</a>
                        <a href='index.php'>Địa chỉ</a>
                        <a href='delcart.php?item=all'>Xác nhận đơn</a>
                    </div>
                    <div class="information">
                        <p class="title">
                            Tổng đơn hàng :
                        </p>
                        <div class="box">
                            <p class="tex01">
                                Tạm tính :
                            </p>
                            <p class="text02">Thuế</p>
                            <p class="text03">tổng :</p>
                            <p class="btn">
                                <a href="#">Tiến hành thanh toán</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 class='text-danger'>Giỏ hàng trống</h1>
                    <a class='btn btn-primary' href='index.php'>Tiếp tục mua</a>
                </div>
            </div>
        </div>
        <?php include('footer.php') ?>
    </main>
</body>

</html>