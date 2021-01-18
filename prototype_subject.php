    <h5 class="w3-container w3-blue">
        Subjects
    </h5>

    <ul class="w3-ul">
        <?php
        $dir = "./";
        $filelist = glob($dir . '*.php');

        foreach ($filelist as $file) {
            
            $subjects = [];
            if()

            if (is_file($file)) {
                $file_name = substr($file, 2);
            }
        ?>
                <li class="w3-bar w3-hover-gray"><a href="./' . $file_name . '">
                <i class="fa fa-file-code-o" class="w3-bar-item w3-circle w3-hide-small" style="width:85px"></i>
                <img src="src/php.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
               '<div class="w3-bar-item">

                <span class="w3-large"><?= substr($file, 2) ?></span>
                <br />
                <span>[TBD] Latest Commit Message</span>
                </div>
                </a></li>
        <?php
            }
        }
        ?>

    </ul>
