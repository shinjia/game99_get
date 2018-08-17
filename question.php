<?php

$a = mt_rand(2,9);
$b = mt_rand(2,9);

$pic_a = 'images/' . $a . '.jpg';
$pic_b = 'images/' . $b . '.jpg';



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Game99CAI</title>
</head>

<body>

<h1>九九乘法CAI</h1>
<p><img src="{$pic_a}"><img src="images/mul.jpg"><img src="{$pic_b}"></p>
<p>請輸入答案：
<form method="get" action="answer.php">
<input type="text" name="a" value="{$a}">
<input type="text" name="b" value="{$b}">
<input type="text" name="userinput">
<input type="submit" value="檢查答案">
</form>
</p>
<p>[<a href="question.php">換下一題</a>]</p>

</body>
</html>
HEREDOC;

echo $html;
?>