<?php 
//1.Ededin faktorialini hesablayan Class yazin//

class Factorial{
    
    public $num;
    public $factorial = 1;
    
    function __construct(){
        for ($x=$this->num; $x>=1; $x--) {
            $factorial = $factorial * $x;
            echo $x."</br>";
        }
    }
    
    
    
}    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="">
        <input type="number" name="number">
        <input type="submit" name="submit">
    </form>
    
    <?php 
    
    if(isset($_GET['submit'])){
        $x = new Factorial();
        $x->givenNumber = $_GET['number'];
       
    }
    
    ?>
    <p><?= $x->factorial ?></p>
</body>
</html>