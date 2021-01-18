<?php
$fh= fopen("test.txt", "at");
if ($fh){
fwrite($fh, "\n●●●追加文字列●●●");
fclose($fh);
}
else{
print "ファイルのオープンに失敗しました";
}
?>
