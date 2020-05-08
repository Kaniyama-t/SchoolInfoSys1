<html>

<head>
    <title>実行演算子</title>
</head>

<body>
    <?php 
        $filelist = `ls -la | grep '.php$'`; //ファイルの一覧コマンド
        echo "<pre>¥n$filelist</pre>".PHP_EOL;
        $nitiji= `date`;
        echo "日付：$nitiji<br>".PHP_EOL;; 
    ?>
</body>

</html>