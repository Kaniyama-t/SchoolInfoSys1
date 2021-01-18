<html>
<head>
<title>file2</title>
</head>
<body>
<?php
$filename="./tmp/file1.txt";
 if (file_exists($filename)){
$fh=@fopen($filename, "r");
 //読み取りモードで  開く(＠でエラー制御)
if ($fh){
while(!feof($fh)){
$temp=fgets($fh);
if ($temp > ""){
echo str_replace("\n" , "<br>" , "★$temp");
 }
}
fclose($fh);
}
else{
print"ファイルの読み込みのオープンに失敗しました";
}
}
?>
</body>
</html>
