<html>

<head>
    <title>実行演算子</title>
</head>

<body>
    <?php 
        $filelist = `ls -la`; //ファイルの一覧コマンド
        echo "<pre>¥n$filelist</pre>¥n";
        $nitiji= `date`;
        echo"日付：$nitiji<br>¥n"; 
    ?>
</body>

</html>