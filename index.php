<html>
    <head>
        <title>情シス1 授業課題デプロイ場所</title>
    </head>
    <h1>情シス1 授業課題デプロイ場所</h1>
    <?php
        $dir = "./";
        $filelist = glob($dir . '*.php');

        foreach ($filelist as $file) {
        
            if (is_file($file)) {
                print("<a href=\"./".substr($file,2,0)."\">".substr($file,2,0)."</a>");
                echo nl2br("\n");
            }
        }
    ?>
</html>