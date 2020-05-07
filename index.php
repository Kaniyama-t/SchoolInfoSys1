<html>
    <head>
        <title>情シス1 授業課題デプロイ場所</title>
    </head>
    <h1>情シス1 授業課題デプロイ場所</h1>
    <?php
        $dir = "/var/www/schoolis1";
        $filelist = glob($dir . '*.php');

        foreach ($filelist as $file) {
        
            if (is_file($file)) {
                print($file);
                echo nl2br("\n");
            }
        }
    ?>
</html>