<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Assignment-4</title>
</head>

<body>
    <section class="top skewed flex-container font-formatted-1">
        <div class="title">
            <h1>PHP ASSIGNMENT-4 <div class="divider"></div>
            </h1>
        </div>
    </section>

    <div class="flex-container">
        <h1 class="font-formatted-1" style="font-size: 2rem;color: var(--blue)">OPERATION'S OUTPUT</h1>
    </div>

    <div class="output flex-container ">
        <div class="flex-item">
            <?php
            if (isset($_POST['submit'])) {
                if ($_POST['md5']) {
                    echo "<div>MD5 hash: ", md5($_POST['md5']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for MD5<div>\n";
                }

                if ($_POST['number-format-1']) {
                    if ($_POST['number_format-2']) {
                        echo "<div>Number Format: ", number_format($_POST['number-format-1'], $_POST['number_format-2']), "</div>\n";
                    } else {
                        echo "<div>Number Format: ", number_format($_POST['number-format-1']), "</div>\n";
                    }
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }

                if ($_POST['ord']) {
                    echo "<div>ASCII of the first character is: ", ord($_POST['ord']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for ASCII code</div>\n";
                }

                if ($_POST['rtrim-1']) {
                    if ($_POST['rtrim-2']) {
                        echo "<div>STRING AFTER Right-trim: ", rtrim($_POST['rtrim-1'], $_POST['rtrim-2']), "</div>\n";
                    } else {
                        echo "<div>STRING AFTER Right-trim: ", rtrim($_POST['rtrim-1']), "</div>\n";
                    }
                } else {
                    echo "<div>ENTER DATA\n for trimming to right</div>\n";
                }

                if ($_POST['strreplace-1']) {
                    if ($_POST['strreplace-2']) {
                        echo "<div>STRING AFTER REPLACE: ", str_replace($_POST['strreplace-1'], $_POST['strreplace-2']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }

                if ($_POST['strlen']) {
                    echo "<div>STRING LENGTH IS: ", strlen($_POST['strlen']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for calculating String length</div>\n";
                }

                if ($_POST['strcasecmp-1']) {
                    if ($_POST['strcasecmp-2']) {
                        echo "<div>STRING COMPARISON: ", strcasecmp($_POST['strcasecmp-1'], $_POST['strcasecmp-2']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }
                if ($_POST['strrpos-1']) {
                    if ($_POST['strrpos-2']) {
                        echo "<div>STRING POSITION: ", strrpos($_POST['strrpos-1'], $_POST['strrpos-2']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA</div>\n";
                }

                if ($_POST['substr-1']) {
                    echo "<div>STRING AFTER SUBSTRING: ", substr($_POST['substr-1'], $_POST['substr-2'], $_POST['substr-3']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA</div>";
                }

                if ($_POST['strtolower']) {
                    echo "<div>ENTERED STRING IN LOWER CASE: ", strtolower($_POST['strtolower']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for converting string to lower case.\n</div>";
                }

                if ($_POST['bintohex']) {
                    echo "<div>ENTERED STRING'S hexadecimal value: ", bin2hex($_POST['bintohex']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for converting to hexadecimal</div>\n";
                }

                if ($_POST['chop-1']) {
                    echo "<div>STRING AFTER CHOPPING: ", chop($_POST['chop-1'], $_POST['chop-2']), "</div>\n";
                } else {
                    echo "<div>ENTER DATA for chopping</div>\n";
                }
            }
            ?>

        </div>

    </div>

    <section class="footer flex-container font-formatted-1">
        <p>SUBMITTED BY: Tushar Goswami<br>SECTION: M <br>ROLL.NO: 50</p>
    </section>
</body>

</html>