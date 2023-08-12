<?php
	declare(strict_types = 1);
	include 'includes/class-autoload.php';
?>

<DOCTYPE html>
<html lang="en" dir="itr">
	<head>
		<meta charset="utf-8">
		<title> Calculate </title>
	</head>

	<body>
		<form action='includes/calc.php' method="post">
			<p><b> Calculater </b></p>
			<input type="number" name="num1" placeholder="First number">
			<select name="oper">
				<option value="add"> Addition </option>
				<option value="sub"> Substuction </option>
				<option value="div"> Division </option>
				<option value="mul"> Multiplication </option>
			</select>
			<input type="number" name="num2" placeholder="Second number">
			<button type="submit" name="submit"> Calculate </button>
		</form>
	</body>
</html>