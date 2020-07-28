<html>
<head>
<title>file1</title>
</head>
<body>
<b> 更新ボタンで更新してください。<br>[現在時刻==> 乱数]のデータがファイルに追加されます。</b><p>
<?php
    $filename = "./temp/file1.text";
    $fh = @fopen($filename, "a");
    //追加書き込みモードで開く(＠でエラー制御)
    if ($fh){
        $msg = date("Y/m/d H: i: s")."==> ";
        $msg.= rand(1, 9999)."\n";
        fputs($fh, $msg);//書き出し
        fclose($fh);//ファイルを閉じる
    }else{
        print"ファイルの書き込みのオープンに失敗しました";
    }
?>
</p></body>
</html>
