<!-- ログイン画面でパスワードを入力して、./temp/pass.txtのパスワードと一致した場合は「ログイン成功」と表示し，間違った場合は「ログイン失敗」と表示するページを作成しなさい。 -->

<html>
    <head>
        <title>subject10.php</title>
    </head>
    <body>
        <?php
            $filename="./tmp/pass.txt";
            if(
                isset($_POST["password"])
            ){
                $fh = @fopen($filename, "r");
                if(fgets($fh) == $_POST["password"]){
                    print("<script>alert('ログイン成功');</script>");
                }else{
                    print("<script>alert('ログイン失敗');</script>");
                }
            }else{
                print("パスワードを入力してください．<br />");
                print("<form action='subject10.php' method='POST'>\n");
                print("<input type='password' name='password' /> パスワード\n");
                print("<input type='submit' value='送信' />\n");
                print("</form>");
            }
        ?>
    </body>
</html>
