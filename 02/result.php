<?php
/*____________________________________
echo $_POST['surname'];
echo $_POST['name']. "<br>";
echo $_POST['rdo'] . "<br>";
echo $_POST['adress']. "<br>";
echo $_POST['tell'] . "-";
echo $_POST['tell2'] . "-";
echo $_POST['tell3']. "<br>";
echo $_POST['mail'] . "@";
echo $_POST['mail2'] . "<br>";
echo $_POST['cbx'] . "<br>";
echo $_POST['slt'] . "<br>";
echo $_POST['question'] . "<br>";
_______________________________________
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $rdo = $_POST["rdo"];
    $adress = $_POST["adress"];
    $tell = $_POST["tell"];
    $tell2 = $_POST["tell2"];
    $tell3 = $_POST["tell3"];
    $mail = $_POST["mail"];
    $mail2 = $_POST["mail2"];
    $cbx = $_POST["cbx"];
    $slt = $_POST["slt"];
    $question = $_POST["question"];
    /*$question = nl2br($question);*/

}
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="test.css">
<meta charset="utf-8">

<body>

    <div id = "flame">

        <h1>送信確認画面</h1>

        <div id = "name_left">姓名</div>
        <div id = "name_right">
            <?php echo $surname . '&nbsp;&nbsp;' . $name; ?>
        </div>
        <div class="clear_box"></div>

        <div id = "name_left">性別</div>
        <div id = "name_right">
            <?php

            /*男性*/

            if ($_POST["rdo"] == 0) { //男性なら
                print "男性";
                }

           /*女性*/

           elseif ($_POST["rdo"] == 1) { //女性なら
                 print "女性";
                }

             /*不明*/
            /*elseif ($_POST["rdo"] == 2) { //不明なら

                print "不明";
            }*/
            else {
                print "不明";
            }

         ?>



         </div>
            <div class="clear_box"></div>

</body>
</head>
</html>