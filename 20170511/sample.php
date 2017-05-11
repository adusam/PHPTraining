<h1>5月11日</h1>
<h2>関数</h2>
<h3>sample 1</h3>
<?php
function writeMsg() {
    echo "Hello World!";
}
writeMsg();
?>

<h3>sample 2</h3>
<?php
function familyName($fname) {
    echo $fname . " yamada";
}
familyName("yuuki");
?>

<h3>sample 3</h3>
<?php
function familyNameYear($fname, $year) {
    echo $fname . " yamada が生まれた年は " . $year ;
}
familyNameYear("yuuki", "1975");
?>

<h3>sample 4</h3>
<?php
function setHeight($minheight = 50) {
    echo "高さは " . $minheight . "<br />";
}
setHeight(100);
setHeight();
?>

<h3>sample 5</h3>
<?php
function sum($x, $y) {
    return $x + $y;
}
echo "5 + 5 = " . sum(5, 5) . "<br />";
?>


<h2>get form</h2>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>フォームからデータを受け取る</title>
    </head>
    <body>
        <h4>フォームデータの送信</h4>
        <form action="sample.php" method="get">
            <input type="text" name="comment">
            <input type="submit" value="送信">
            <br />
            <?php
            if (!empty($_GET)){
                $comment = $_GET["comment"];
                echo $comment;
            }
            ?>
        </form>
    </body>
</html>

<h2>post form</h2>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>フォームからデータを受け取る</title>
    </head>
    <body>
        <h4>フォームデータの送信</h4>
        <form action="sample.php" method="post">
            <input type="text" name="comment2">
            <input type="submit" value="送信">
            <br />
            <?php
            if (!empty($_POST)){
                $comment = $_POST["comment2"];
                echo $comment;
            }
            ?>
        </form>
    </body>
</html>
