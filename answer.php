<?php

$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0; 
$userinput = isset($_GET['userinput']) ? $_GET['userinput'] : 0;

$ans = $a * $b;

// 增加檢查的程式 (有點隨便)
if($userinput==$ans)
{
	$msg = '答對了！';
}
else
{
	$msg = '可惜，答案不對';
}


$n1 = floor($ans / 10);  // 十位數
$n2 = $ans % 10;   // 個位數

$pic1 = 'images/' . $n1 . '.jpg';
$pic2 = 'images/' . $n2 . '.jpg';

// 增加答案的判斷 (一位數時)
if($ans<10)
{
	$str1 = '';
	$str2 = '<img src="images/' . $n2 . '.jpg">';
}
else
{
	$str1 = '<img src="images/' . $n1 . '.jpg">';
	$str2 = '<img src="images/' . $n2 . '.jpg">';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Game99CAI</title>
</head>

<body>

<h1>九九乘法CAI</h1>
<p>你的輸入是 {$userinput}。{$msg}</p>
<p>{$str1}{$str2}</p>
<hr />
<p>[<a href="question.php">再試一題</a>]</p>

<hr>
<p>查看變數</p>
<p>{$a} 乘以 {$b} 的答案是 {$ans}</p>
n1 = {$n1}<br>
n2 = {$n2}
</body>
</html>
HEREDOC;

echo $html;
?>