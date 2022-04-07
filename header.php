<div>
<style>
      .submenu {
        position: absolute !important;
        left: 100%;
        top: 0;
      }
      @media only screen and (max-width: 991px) {
        .submenu {
        position: absolute !important;
        left: 160px;
        top: 45px;
      }
      }
      .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/doanwnc"><img src="https://pubcdn.ivymoda.com/images/logo.png"></a>
        <a class="navbar-brand" href="/doanwnc">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sản phẩm
                </a>
                <div class="dropdown-menu mainmenu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown2" href="category.php">Tất cả sản phẩm</a>
                  <a class="dropdown-item" href="men.php">Quần Áo Nam</a>
                  <a class="dropdown-item" href="women.php">Quần Áo Nữ</a>
                  <a class="dropdown-item" href="sale.php">SALE</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hướng dẫn
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="changeproduct.php">Đổi trả sản phẩm</a>
                  <a class="dropdown-item" href="shoppingguide.php">Hướng dẫn mua hàng</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Liên hệ</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-lg-0 mr-2" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="btn btn-outline-warning my-2 my-lg-0" type="submit">
              <a href="cart.php" class="fa-solid fa-cart-shopping"></a>
            </button>
            <button class="btn btn-outline-warning my-2 my-lg-0" type="submit">
              <a href="login.php" class="fa-solid fa-circle-user"></a>
            </button>
          </form>
        </div>
      </nav>
</div>