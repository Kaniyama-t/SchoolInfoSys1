<html>
<head>
<title>配列関数の問題プログラム</title>
</head>
<body>
<?php
$items = array();
foreach ($_POST as $key => $value){
    if ('newitem' != $key && 'button' != $key && 'vote' != $key){
        $items[$key] = $value;
    }
    if ('vote'== $key){
        $countupkey= $value;
    }
}
if (!empty($_POST['newitem'])){
    $items[$_POST['newitem']] = 1;
}
if (!empty($countupkey)){
    ++$items[$countupkey];
}
arsort($items);
?>
<form method="post" action="subject11.php">
    <?php foreach($items AS $key=>$count){ ?>
        <input type="hidden" name="<?= $key ?>" value="<?= $count ?>" />
        <input type="radio" name="vote" value="<?=$key ?>" /><?= $key ?>(<?= $count ?>票)<br/>
    <?php } ?>
    新規項目
    <input type="text" name="newitem" />
    <input type="submit" name="button" value="投票" />
</form>
</body>
</html>
