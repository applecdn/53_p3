<?php
  session_start();
  require_once("pdo.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>咖啡商品展示系統</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand">
        <img src="./images/logo.png" class="logo mx-3" alt="">
        <span>咖啡商品展示系統</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto my-2" style="max-height: 100px;">
          <li class="nav-item">
            <?php echo $_SESSION["AUTH"]["role"] == 0 ? '<a class="nav-link" href="create_product.php">上架商品</a>' : ''; ?>
          </li>
          <li class="nav-item">
            <?php echo $_SESSION["AUTH"]["role"] == 0 ? '<a class="nav-link" href="member_list.php">會員管理</a>' : ''; ?>
          </li>
          <li class="nav-item">
            <?php echo isset($_SESSION["AUTH"]) ? '<a class="nav-link btn btn-outline-warning" href="logout.php">登出</a>' : ''; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 86px">
    <div class="pt-3 pb-5">
      <div class="row justify-content-between align-items-center">
        <h5 class="text-white border-start font-weight-bolder">會員管理</h5>
        <div class="row justify-content-around align-items-center text-white py-3 w-25">
          <input type="number" value="60" id="timeInput" class="form-control w-25">
          <button id="setTimeBtn" class="btn btn-sm btn-outline-light">設定</button>
          <span id="countdown">60秒</span>
          <button id="resetTimeBtn" class="btn btn-sm btn-outline-light">重新計時</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/script.js"></script>

</html>