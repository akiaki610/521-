<?php
session_start();

$correct_password = "521dsun";  // パスワード

if (isset($_POST["password"])) {
    if ($_POST["password"] === $correct_password) {
        session_regenerate_id(true);  // セッションID再生成（セキュリティ向上）
        $_SESSION["login"] = true;
        header("Location: secret.php");
        exit;
    } else {
        echo "パスワードが違います。<a href='loginpeg.html'>戻る</a>";
        exit;
    }
} else {
    header("Location: loginpeg.html"); // 直接アクセスされた場合
    exit;
}
?>
