<?php
session_start(); // Bắt đầu session

// Kiểm tra nếu người dùng chưa đăng nhập thì chuyển hướng về trang đăng nhập
if (!isset($_SESSION['user_id'])) {
    header('Location: dangnhap.html');
    exit();
}

?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css" />
    <style>
    </style>
  </head>
  <body>
    <!--Header-->
    <script src="script.js"></script>
    <!--home-->
    <div id="head">
      <div id="quick" title="Trang chủ">
        <a href="trangchu.php">
            <img src="./icon/quick.png" alt="trang chu">
        </a>
    </div>
    
      <div class="muc_1" style="background-color: gold;">
        <a class="demuc" href="trangchu.php">
          <img id="game1" src="./icon/home.png" alt="game" />
          <br />
          <span class="title"> Trở về </span>
        </a>
      </div>
      <div class="mid">
        <!--search-->
        <div class="search">
          <form id="search-form">
            <input type="text" id="nhap_vao" placeholder="Tìm Kiếm" />
          </form>
          <!--Game-->
          <div class="main">
            <div class="muc_1" class="main">
              <a class="demuc" href="trochoi.php">
                <img id="game1" src="./icon/Game.png" alt="game" />
                <br />
                <span class="title"> Trò chơi </span>
              </a>
            </div>
          </div>
          <!--community-->
          <div class="muc_1">
            <a class="demuc" href="congdong.php">
              <img id="game1" src="./icon/community.png" alt="game" />
              <br />
              <span class="title"> Cộng đồng </span>
            </a>
          </div>
          <!--timetable-->
          <div class="muc_1">
            <a class="demuc" href="lichtrinh.php">
              <img id="game1" src="./icon/timetable.png" alt="game" />
              <br />
              <span class="title"> Lịch trình </span>
            </a>
          </div>
          <!--Liên hệ-->
          <div class="muc_1">
            <a class="demuc" href="lienhe.php">
              <img id="game1" src="./icon/phone.png" alt="game" />
              <br />
              <span class="title"> Liên hệ </span>
            </a>
          </div>
          <!--thong báo-->
          <div class="muc_2" title="Thông báo">
            <a class="demuc0" href="#" onclick="toggleNotification()">
              <img id="game1" src="./icon/chuong.png" alt="Thông báo" />
            </a>
            <div id="notification-box" class="hidden">
              <p>Thông báo 1</p>
              <p>Thông báo 2</p>
              <p>Thông báo 3</p>
            </div>
          </div>
          <div><!-- <div id="search-results"></div> --></div>
        </div>
        <div class="muc_5" title="Tài Khoản">
         <a class="demuc5" href="tk.php">
            <img id="game5" src="./icon/tk.png" alt="game" />
         </a>
        </div>

    </div>
        <!--sign up -->
        <!-- <a href="./dangky.html" class="dang_ky">Đăng ký</a> -->
      </div>
    </div>
    <hr />
    <fieldset id="diem_danh">
      <legend>Điểm danh</legend>
      <p id="ngayThang"></p> <!-- Vị trí hiển thị ngày tháng -->
      <p id="soNgayLienTiep"></p> <!-- Vị trí hiển thị số ngày liên tiếp -->
      <button id="diemDanhBtn"><b> Điểm danh </b></button>
    </fieldset>
    <script src="script.js"></script>
    <script src="index.js"></script>
    <script src="thong_bao.js"></script>

  </body>
</html>

