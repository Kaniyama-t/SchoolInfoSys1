<?php
$fh=  fopen("test.txt","rt");
if ($fh) {
while (($t = fgets($fh)) !== FALSE) {
print $t."<BR>";
}
fclose($fh);
}
else {
print "ファイルのオープンに失敗しました";
}
?>
