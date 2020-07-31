<!-- ［結果の表示］
subject08.php
わたしは，xxxyyyです。
性別は，zzです。
年齢は，ssです。 -->

<?php
    if(
        isset($_POST["lastname"]) &&
        isset($_POST["firstname"]) &&
        isset($_POST["gender"]) &&
        isset($_POST["age"])        
    ){
        print("わたしは".$_POST["lastname"].$_POST["firstname"]."です．<br />");
        if($_POST["gender"] == "man"){
            print("性別は，男性です．<br />");
        }else{
            print("性別は，女性です．<br />");
        }
        print("年齢は，".$_POST["age"]."です．");
    }else{
        print("入力されていない項目が有ります．<br /><a href='./subject08.html'>入力画面へ戻る</a>");
    }
?>