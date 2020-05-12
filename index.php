<?php
define("repository_url", "https://api.github.com/repos/Kaniyama-t/SchoolInfoSys1");
define("commits_url", "https://api.github.com/repos/Kaniyama-t/SchoolInfoSys1/commits");
define("tags_url", "https://api.github.com/repos/Kaniyama-t/SchoolInfoSys1/tags");

$localload_flag = FALSE;
$local_load = array(
    repository_url => FALSE,
    commits_url => FALSE,
    tags_url => FALSE
);

function get_json_from_api($method, $url)
{
    $option = stream_context_create(
        array(
            'http' => array(
                'method' => $method,
                'header' => 'User-Agent: KaniInfoSys1_GetStatusAPP'
            )
        )
    );
    $src = file_get_contents($url, FALSE, $option);
    $local_load[$url] = ($src == FALSE);

    // ファイル名生成
    $filename = str_replace('https://api.github.com/', 'GithubAPI_', $url);
    $filename = 'tmp/' . str_replace('/', '_', $filename) . '.json';

    if ($local_load[$url] == TRUE) {
        global $localload_flag;
        $localload_flag = TRUE;
        $json = file_get_contents($filename);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        return json_decode($json, true);
    } else {
        $src = mb_convert_encoding($src, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $p = file_put_contents($filename, $src);
        return json_decode($src, true);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>情シス1 授業課題デプロイ場所</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 5em 10em;
        }

        @media only screen and (max-device-width: 480px) {
            body {
                margin: 2em 1em;
            }
        }
    </style>
</head>
<h1>Deploy Space for Lecture that "Information Systems 1"</h1>
<div class="w3-card-4">

    <?php $repo = get_json_from_api('GET', repository_url); ?>

    <a href="https://github.com/Kaniyama-t/SchoolInfoSys1/">
        <header class="w3-container w3-blue">
            <h2>
                <i class="fa fa-github"></i>
                Kaniyama-t/SchoolInfoSys1
            </h2>
        </header>
    </a>

    <div class="w3-container">
        <a href="https://github.com/Kaniyama-t/SchoolInfoSys1/"><img alt=".github/workflows/main.yml" src="https://github.com/Kaniyama-t/SchoolInfoSys1/workflows/CI/badge.svg?<?php echo date("YmdHis"); ?>" /></a>
        <br /><br />
        <?= $repo['description'] ?>
        <br /><br />

        <?php
        if ($localload_flag == TRUE) {
            print('<div class="w3-panel w3-pale-yellow w3-border">
                            <h3>古い情報です</h3>
                            APIの仕様等で情報が取得できないため，キャッシュより情報を表示しています．最新の情報は<a href="https://github.com/Kaniyama-t/SchoolInfoSys1/">Github</a>をご確認下さい．
                            <br /><br /></div>');
        }
        ?>

        <!-----------------------------------------------------------------
                 /LATEST *LECTURE* COMMIT/ 
            ------------------------------------------------------------------->

        <div class="w3-panel w3-pale-green w3-leftbar w3-border-green"><br />
            <b>[Latest Lecture Commit]</b><br />
            <?php $tags = get_json_from_api('GET', tags_url); ?>
            <?php $tags_commit = get_json_from_api('GET', $tags[0]['commit']['url']); ?>

            <h4>
                <a href="https://github.com/Kaniyama-t/SchoolInfoSys1/releases/tag/<?= $tags[0]['name'] ?>"><?= $tags[0]['name'] ?></a>
            </h4>
            <br />
            Date：<?= $tags_commit['commit']['committer']['date'] ?>
            <br />
            Message：<?= $tags_commit['commit']['message'] ?>
            <br /><br />
        </div>

        <!-----------------------------------------------------------------
                 /LATEST COMMIT/ 
            ------------------------------------------------------------------->

        <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue"><br />
            <b>[Latest Commit]</b><br />
            <?php $commit = get_json_from_api('GET', commits_url); ?>
            <h4>
                <a href="<?= $commit[0]['html_url'] ?>"><?= $commit[0]['sha'] ?></a>
            </h4>
            <br />
            Date：<?= $commit[0]['commit']['committer']['date'] ?>
            <br />
            Message：<?= $commit[0]['commit']['message'] ?>
            <br /><br />
        </div>
    </div>

    <h5 class="w3-container w3-blue">
        Files
    </h5>
    <ul class="w3-ul">
        <?php
        $dir = "./";
        $filelist = glob($dir . '*.php');

        foreach ($filelist as $file) {

            if (is_file($file)) {
                $file_name = substr($file, 2);
                print('<li class="w3-bar w3-hover-gray"><a href="./' . $file_name . '">');
                //print('<i class="fa fa-file-code-o" class="w3-bar-item w3-circle w3-hide-small" style="width:85px"></i>');
                print('<img src="src/php.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">');
                print('<div class="w3-bar-item">');

                print('<span class="w3-large">' . substr($file, 2) . '</span>');
                print('<br />');
                print('<span>[TBD] Latest Commit Message</span>');
                print('</div>');
                print('</a></li>');

                //print("<a href=\"./".substr($file,2)."\">".substr($file,2)."</a>");
                //echo nl2br("\n");
            }
        }
        ?>
    </ul>

    <h5 class="w3-container w3-blue">License</h5>
    <ul>
        <li><a href="https://www.flaticon.com/free-icon/php_187682">Php free icon : Designed by Freepik and distributed by Flaticon</a></li>
    </ul>
    <br /><br />
</div>

</html>