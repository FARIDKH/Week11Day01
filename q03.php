<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
   <?php 
// forması yuxarıda verilen besit hesablama masını yazın 
    $num1 = $_POST['num01'];
    $num2 = $_POST['num02'];
    $x = "";

	if(isset($_POST['submit'])){
        if(isset($_POST['radioPlus'])){
            $x = $num1 + $num2;
        }
        else if(isset($_POST['radioMinus'])){
            $x = $num1 - $num2;
        }
        else if(isset($_POST['radioMultiply'])){
            $x = $num1 * $num2;
        }
        else if(isset($_POST['radioDivide'])){
            $x = $num1 / $num2;
        }
    }





?>
    <form action="" method="post">
        <input type="number" name="num01">
        <input type="number" name="num02">
        <span>+</span><input type="radio" name="radioPlus">
        <span>-</span><input type="radio" name="radioMinus">
        <span>*</span><input type="radio" name="radioMultiply">
        <span>/</span><input type="radio" name="radioDivide">
        <input type="submit" value="Hesabla" name="submit">
        <p>Netice: <?= $x ?></p>
    </form>
</body>
</html>

