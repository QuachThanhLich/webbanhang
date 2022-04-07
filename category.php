<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SHOP VJPPRO</title>
    <?php include('cdn.php') ?>
    <style>
        .container {
            max-width: 960px;
        }

        /*
 * Custom translucent site header
 */

        .site-header {
            background-color: rgba(0, 0, 0, .85);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px);
        }

        .site-header a {
            color: #999;
            transition: ease-in-out color .15s;
        }

        .site-header a:hover {
            color: #fff;
            text-decoration: none;
        }

        /*
 * Dummy devices (replace them with your own or something else entirely!)
 */

        .product-device {
            position: absolute;
            right: 10%;
            bottom: -30%;
            width: 300px;
            height: 540px;
            background-color: #333;
            border-radius: 21px;
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
        }

        .product-device::before {
            position: absolute;
            top: 10%;
            right: 10px;
            bottom: 10%;
            left: 10px;
            content: "";
            background-color: rgba(255, 255, 255, .1);
            border-radius: 5px;
        }

        .product-device-2 {
            top: -25%;
            right: auto;
            bottom: 0;
            left: 5%;
            background-color: #e5e5e5;
        }


        /*
 * Extra utilities
 */

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

        .flex-equal>* {
            -ms-flex: 1;
            -webkit-box-flex: 1;
            flex: 1;
        }

        @media (min-width: 768px) {
            .flex-md-equal>* {
                -ms-flex: 1;
                -webkit-box-flex: 1;
                flex: 1;
            }
        }

        .overflow-hidden {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php include("header.php");
    //

    function colors()
    {
        $colors = array(
            1 => 'bg-warning',
            2 => 'bg-secondary',
            3 => 'bg-primary',
            4 => 'bg-info'
        );
        return $colors[rand(1, 4)];
    }

    ?>
    <?php

    // lay trong csld ra cai gi thi t ko biet

    for ($i = 0; $i <= 10; $i += 2) {
        echo '<!-- 1 cai div nhu nay la 1 hang 2 cai ao -->
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="'.colors().' mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <!-- 1 cai div nhu nay la 1 cai ao -->
                <div class="my-3 py-3">
                    <h2 class="display-5">Ao nhu nao' . $i . '</h2>
                    <p class="lead">mo ta: ao nay </p>
                    <span>price: $100</span>
                </div>
                <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <!--  -->
            <div class="'.colors().' mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Another headline' . ($i + 1) . '</h2>
                    <p class="lead">And an even wittier subheading.</p>
                    <span>price: $100</span>
                </div>
                <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
        <!-- xong 2 cai -->';
    }

    ?>
  <?php include("footer.php") ?>
</body>

</html>