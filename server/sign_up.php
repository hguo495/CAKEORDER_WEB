<?php

require_once('database.php');

$conn = db_connect();

// 获取表单数据
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm-password']);
$email = htmlspecialchars($_POST['email']);
// $first_name = htmlspecialchars($_POST['first-name']);
// $last_name = htmlspecialchars($_POST['last-name']);
// $address = htmlspecialchars($_POST['address']);

// 检查密码是否一致
if ($password !== $confirm_password) {
    die("Error: Password and confirm password do not match.");
}

// 加密密码
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 启动事务
$conn->begin_transaction();

try {
    // 插入用户表（`user`）
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $user_id = $conn->insert_id; // 获取插入用户的 ID

    // 插入客户表（`customers`）
    // $stmt = $conn->prepare("INSERT INTO customer (first_name, last_name, e_mail, address, user_id) VALUES (?, ?, ?, ?, ?)");
    // $stmt->bind_param("ssssi", $first_name, $last_name, $email, $address, $user_id);
    // $stmt->execute();

    // 提交事务
    $conn->commit();
    header("Location: success.php");

    echo "Registration successful!";
    exit();
} catch (Exception $e) {
    // 回滚事务
    $conn->rollback();
    die("Error: " . $e->getMessage());
} finally {
    $stmt->close();
    $conn->close();
}
?>
