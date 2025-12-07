<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: loginpeg.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>521運転会-関係者情報</title>
</head>
<body>
<h1>test</h1>
<p>ログイン成功した人だけ見れます。</p>
</body>
</html>
