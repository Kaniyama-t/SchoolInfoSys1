<html>

<head>
    <title> ヒアドキュメントのサンプル</title>
</head>

<body>
    <?php $user =   "詫間太郎";
    $action = "書き込み";
    $errorMS =   <<<EOD
    ユーザ{$user}はアクセス権{$action}を持っていません。<br>
    {$action}権を持つユーザとしてログインしなおしてください。<br>
    EOD; //左端に記入しないとエラー
    ?>
    <?= $errorMS ?>
</body>
</html>