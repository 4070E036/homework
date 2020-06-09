<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>TOYOTA TAIWAN 豐田汽車</title>
    <meta charset="utf-8">
    <meta name="keywords" content="網頁關鍵字">
    <meta name="description" content="網頁大網">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/layout.js"></script>
</head>

<body>

    <!-- 版頭開始 -->
    <div class="headArea">
        <div class="head-L">
            <a title="TOYOTA CAR" href="./"><img src="images/1.jpg"></a>
        </div><!-- head-L end -->
        <div class="head-R">
            <form action="find.php" method="GET">
                <input type="text" name="keyword" size="30">
                <input type="submit" value="送出" name="keywordSend">
            </form>
        </div><!-- head-R end -->
    </div><!-- headArea End -->
    <!-- 版頭結束 -->

    <!-- 按鈕列開始 -->
    <div class="navbar">
        <a title="車款介紹" class="btn1" href="about.php">車款介紹</a>
        <!-- 產品介紹子選單開始 -->
        <div class="dropdown">
            <button class="dropbtn">購車服務
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <?php
                    require("php/cmsdb.php");
                    $sql = "SELECT * FROM categories ORDER BY id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // 每筆記錄的輸出資料
                        while($row = $result->fetch_assoc()) {
                            echo '<a href="list_product.php?cat='.$row["id"].'">'.$row["name"].'</a>';
                        }
                    } else {
                        echo '<a href="list_product.php">產品類別</a>';
                    }
                    $conn->close();
                ?>
            </div>
        </div>
        <!-- 產品介紹子選單結束 -->
        <a title="品牌新知" class="btn1" href="qalist.php">品牌QA</a>
        <a title="安全/科技" class="btn1" href="news.php">安全/科技</a>
        <a title="車主專區" class="btn1" href="member.php">車主專區</a>
        <a title="智能服務" class="btn1" href="contact.php">智能服務</a>
        <a title="預約試乘" class="btn1" href="contact.php">預約試乘</a>
        <?php
        session_start();
        if ($_SESSION['valid_user']) {
        ?>
            <a title="車主登出" class="btn1" href="logout.php">車主登出(<?php echo $_SESSION['valid_user']; ?>)</a>
        <?php
        } else {
        ?>
        <a title="車主登入" class="btn1" href="login.php">車主登入</a>
        <?php
        }
        ?>
        <!-- 後台管理子選單開始 -->
        <div class="dropdown">
            <button class="dropbtn">品牌新知
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="new_product.php">品牌活動</a>
                <a href="new_category.php">品牌新聞</a>
                <a href="list_category.php">TOYOTA精品</a>
            </div>
        </div>
        <!-- 後台管理子選單結束 -->
    </div><!-- navbar End -->
    <!-- 按鈕列結束 -->


