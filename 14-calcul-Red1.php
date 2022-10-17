<?php

if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}?>
<html>
<head>
	
	</style>
</head>
<body>


<form method="post" action="">
<h1>Calculatrice</h1>
<br>
<input name="n1" value="">

<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<input name="n2" value="">
<br>


<br>Resultat: <input type='text' value="<?php echo $ans; ?>"><br>
</form>

</body>
</html>