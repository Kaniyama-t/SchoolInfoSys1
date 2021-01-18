<html>
<head><title>ろぐいんぺーじもどき</title></head>
<body>
    <form action="cookie_logon2.php" method="POST">
        <input type="text" name="user" value="<?= (isset($_COOKIE['userID'])) ? $_COOKIE['userID'] : "" ?>" placeholder="ユーザ名" /> <br />
        <input type="password" name="user" value="" placeholder="パスワード"/> <br />
        <input type="submit" value="ログイン" />
    </form>
</body>
</html>
