<?php
/* https://www.w3schools.com/php/php_mysql_insert.asp */
require("php/cmsdb.php");             /* 載入MySQL連結程式 */
//$name = $_POST['category_name'];      /* 取得輸入資料, 類別名稱 */
$sql = "INSERT INTO categories (name) VALUES ('$_POST[category_name]')"; /* 請自行補充SQL指令 */

if ($conn->query($sql) === TRUE) {
    header("location:list_category.php"); // 轉頁
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
