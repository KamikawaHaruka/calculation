<?php
//値を習得
if (isset($_POST["numA"]) && isset($_POST['numB']) ){
$a = $_POST['numA'];
$b = $_POST['numB'];
$ope = $_POST['operation'];

//セレクトボックスによって処理を変える
switch($ope){
	case "+":
	$answer = $a+$b;
		break;	
	case "-":
	$answer = $a-$b;
		break;
	case "×":
	$answer = $a*$b;
		break;
	case "÷":
	$answer = $a/$b;
		break;
		default;
		break;
}
//計算結果を表示
print "結果:".($a.$ope.$b."=".$answer."\n");
}
?>