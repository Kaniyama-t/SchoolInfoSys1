<html>
    <head>
        <title>情シス1 授業課題デプロイ場所</title>
    </head>
    <h1>情シス1 授業課題デプロイ場所</h1>
    <hr />
    <h3>Github Repository</h3>
        <h4><a href="https://github.com/Kaniyama-t/SchoolInfoSys1">Kaniyama-t/SchoolInfoSys1</a></h4>
        最終更新のアップロード状況：<a href="https://github.com/Kaniyama-t/SchoolInfoSys1/"><img alt=".github/workflows/main.yml" src="https://github.com/Kaniyama-t/SchoolInfoSys1/workflows/CI/badge.svg?<?php echo date("YmdHis");?>" /></a><br />
        <?php 
            $url = "https://api.github.com/repos/Kaniyama-t/SchoolInfoSys1/commits";
            $githubsrc = file_get_contents($url);
            $githubsrc = mb_convert_encoding($githubsrc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
            $array = json_decode( $githubsrc , true );
            echo "最終更新：[".$array[0]['committer']['date']."]".$array[0]['commit']['message'];
        ?>
    <hr />
    <h3>ファイル一覧</h3>
    <?php
        $dir = "./";
        $filelist = glob($dir . '*.php');

        foreach ($filelist as $file) {
        
            if (is_file($file)) {
                print("<a href=\"./".substr($file,2)."\">".substr($file,2)."</a>");
                echo nl2br("\n");
            }
        }
    ?>
</html>