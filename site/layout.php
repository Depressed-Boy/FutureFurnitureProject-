<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureFurnitureProject</title>
    <link rel="stylesheet" href="/FutureFurnitureProject/content/css/hf.css">
    <link rel="stylesheet" href="/FutureFurnitureProject/content/css/trang-chinh.css">
    <link rel="stylesheet" href="/FutureFurnitureProject/content/css/san-pham.css">
    <script src="/FutureFurnitureProject/content/js/hf.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!--------------------- header --------------------->
    <header id="initial-header">
      <div class="header-top-wrapper">
        <div class="header-top">
          <div class="header-top-customer">
            <p><i class="fa-solid fa-phone-volume"></i> Hotline: 0123456</p>
            <a href="#">Giới thiệu</a>
            <a href="#">Chăm sóc khách hàng</a>
          </div>
          <div class="header-top-login">
           <?php if(isset($_SESSION['user'])): ?>
           <?php $user=$_SESSION['user'];?>
              <a 
                href="profile.php"><?php echo $user['ten_kh']?>
              </a>
              <a href="dangxuat.php">Đăng xuất</a>
              <?php else: ?>
                <a href="dangnhap.php">Đăng nhập</a>
                |
                <a href="dangky.php">Đăng ký</a>
              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="header-bottom-wrapper">
        <div class="header-bottom">
          <div class="header-bottom-toggle">
            <a href="#"
              ><i class="fa-solid fa-bars" style="color: black"></i
            ></a>
          </div>
          <div class="header-bottom-logo">
            <a href="/FutureFurnitureProject/index.php"><img src="/FutureFurnitureProject/content/images/Logo.png" alt=""/></a>
          </div>
          <div class="header-bottom-nvbar">
            <ul>
              <li>
                <a href="/FutureFurnitureProject/site/San_pham/index.php"
                  >SẢN PHẨM
                  
                </a>
              </li>
              <li>
                <a href="#"
                  >PHÒNG KHÁCH
                  
                </a>
              </li>

              <li>
                <a href="#"
                  >PHÒNG ĂN
                  
                </a>
              </li>
              <li>
                <a href="#"
                  >PHÒNG NGỦ
                  
                </a>
              </li>
              <li>
                <a href="#"
                  >PHÒNG TẮM
                  
                </a>
              </li>
              <li><a href="#">TRANG TRÍ</a></li>
            </ul>
          </div>
          <div class="header-bottom-search">
            <div class="search-icon" id="searchIcon">
              <i class="fa-solid fa-magnifying-glass" style="color: black"></i>
            </div>
            <!-- Search icon, you can use any icon or an image -->
            <div class="search-box" id="searchBox">
              <input type="text" placeholder="Tìm kiếm..." />
            </div>
          </div>
          
          <div class="header-bottom-cart">
            <a href="#"
              ><i class="fa-solid fa-cart-shopping" style="color: black"></i
            ></a>
          </div>
        </div>
      </div>

      
    </header>


    <header id="sticky-header">

      <div class="header-bottom-wrapper">
        <div class="header-bottom">
          <div class="header-bottom-toggle">
            <a href="#"
              ><i class="fa-solid fa-bars" style="color: black"></i
            ></a>
          </div>
          <div class="header-bottom-logo">
            <a href="/FutureFurnitureProject/index.php"><img src="/FutureFurnitureProject/content/images/Logo.png" alt=""/></a>
          </div>
          <div class="header-bottom-nvbar">
            <ul>
              <li>
                <a href="#"
                  >SOFA
                  
                </a>
              </li>
              <li>
                <a href="#"
                  >PHÒNG KHÁCH
                  
                </a>
              </li>

              <li>
                <a href="#"
                  >PHÒNG ĂN
                  
                </a>
              </li>
              <li>
                <a href="#"
                  >PHÒNG NGỦ
                  
                </a>
              </li>
              <li>
                <a href="#"
                  >PHÒNG TẮM
                  
                </a>
              </li>
              <li><a href="#">TRANG TRÍ</a></li>
            </ul>
          </div>
          <div class="header-bottom-search">
            <div class="search-icon" id="searchIcon">
              <i class="fa-solid fa-magnifying-glass" style="color: black"></i>
            </div>
            <!-- Search icon, you can use any icon or an image -->
            <div class="search-box" id="searchBox">
              <input type="text" placeholder="Tìm kiếm..." />
            </div>
          </div>
          
          <div class="header-bottom-cart">
            <a href="#"
              ><i class="fa-solid fa-cart-shopping" style="color: black"></i
            ></a>
          </div>
        </div>
      </div>
      
      
    </header>
            
    <main>
        <?php require $VIEW_NAME; ?>
    </main>

    <!--------------------- Footer ----------------------->
    <footer>
      <div class="footer-wrapper">
        <div class="footer-top">
          <div class="footer-customer">
            <div class="footer-title">
              <p>Chăm sóc khách hàng</p>
            </div>
            <div class="footer-content">
              <p><a href="#">Trung tâm trợ giúp</a></p>
              <p><a href="#">FF-Mail</a></p>
              <p><a href="#">Hướng dẫn mua hàng</a></p>
            </div>
          </div>
          <div class="footer-introduction">
            <div class="footer-title">
              <p>Giới thiệu</p>
            </div>
            <div class="footer-content">
              <p><a href="#">Về chúng tôi</a></p>
              <p><a href="#">Tuyển dụng</a></p>
              <p><a href="#">Điều khoản</a></p>
            </div>
          </div>
          <div class="footer-policy">
            <div class="footer-title">
              <p>Chính sách</p>
            </div>
            <div class="footer-content">
              <p><a href="#">Chính sách liên kết</a></p>
              <p><a href="#">Chính sách bảo hành</a></p>
              <p><a href="#">Chính sách đổi trả</a></p>
            </div>
          </div>
          <div class="footer-infor">
            <div class="footer-title">
              <p>Thông tin liên hệ</p>
            </div>
            <div class="footer-content">
              <p>
                <i class="fa-solid fa-location-dot" style="color: white"></i>
                <a href="#">170 An Dương Vương, Tp. Quy Nhơn</a>
              </p>
              <p>
                <i class="fa-solid fa-phone" style="color: white"></i>
                <a href="#">(0123)456789</a>
              </p>
              <p>
                <i class="fa-solid fa-envelope" style="color: white"></i>
                <a href="#">laptrinhweb@gmail.com</a>
              </p>
            </div>
          </div>
          <div class="footer-qr">
            <img src="/FutureFurnitureProject/content/images/qr.png" alt="" />
          </div>
        </div>
        <hr />
        <div class="footer-bottom">
          <div class="footer-bottom-trademark">
            <pre>
  © 2021 - Bản quyền của Nhà Xinh - thương hiệu thuộc Furniture
  Từ năm 1999 - thương hiệu đăng ký số 284074 Cục sở hữu trí tuệ
            </pre>
          </div>
          <div class="footer-bottom-icon">
            <p>Theo dõi chúng tôi:</p>
            <a href="#"
              ><i
                class="fa-brands fa-square-facebook fa-2xl"
                style="color: white"
              ></i
            ></a>
            <a href="#"
              ><i class="fa-brands fa-youtube fa-2xl" style="color: white"></i
            ></a>
            <a href="#"
              ><i
                class="fa-brands fa-square-instagram fa-2xl"
                style="color: white"
              ></i
            ></a>
          </div>
        </div>
      </div>
    </footer>
    <!--------------------  Footer ---------------------->
</body>
</html>