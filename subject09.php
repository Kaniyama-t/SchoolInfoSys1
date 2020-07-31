<!--
    パスワードの登録画面でパスワード登録をして、その内容をファイル./temp/pass.txtに保存するページを作成しなさい。
-->
<html>
    <head>
        <title>subject09.php</title>
    </head>
    <body>
        <?php
            $filename="./tmp/pass.txt";
            if(isset($_POST["password"])){
                $fh = @fopen($filename, "w");
                $fh = @fputs($fh, $_POST["password"]);
                print("設定しました<br /><br />pass.txt：<br />");
                $fh = @fopen($filename, "r");
                print(fgets($fh));
            }else{
                print("パスワードを登録してください．<br />");
                print("<form action='subject09.php method='POST'>\n");
                print("<input type='password' name='password' /> 登録するパスワード\n");
                print("<input type='submit' value='送信' />\n");
                print("</form>");
            }
        ?>
    </body>
</html>