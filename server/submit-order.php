<?php
session_start();


// 检查用户是否登录
if (!isset($_SESSION['valid_user'])) {
    header("Location: login.php"); // 未登录跳转到注册页面
    exit();
}
require_once('database.php');
$conn = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flavor = $_POST['flavor'] ?? null;
    $size = $_POST['size'] ?? null;
    $price = $_POST['price'] ?? null;

    // 确保所有字段都有值
    if ($flavor && $size && $price) {
        $sql = "INSERT INTO orders (flavor, size, price) VALUES ('$flavor', '$size', '$price')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // 插入成功
            $id = mysqli_insert_id($conn);
            header("Location: order-success.php");
            exit();
        } else {
            echo "<p>Error inserting order: " . mysqli_error($conn) . "</p>";
        }
    } else {
        // 修改提示信息和返回按钮
        echo '
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;">
        <p style="font-size: 20px; margin-bottom: 20px;">The connection to the database is continuing, please return to the MENU。</p>
        <a href="menu.php" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; font-size: 18px;">Return Menu</a>
    </div>';}
    }
 else {
    header("Location: index.php"); // 非 POST 请求跳转
    exit();
}
?>
