<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x; // 5 cixaacaq 
echo "<br />";
echo $x+++$x++; // 11 cixacaq , cunki $x++  +  $x++ bele baxanda sag terefde uje sol terefdeartib 6 olur ve sonra ozunu artirib 7 eliyir.
echo "<br />";
echo $x; // $x+++$x++ da sag terefdeki artmisdi deye ekrana 7 cixir.
echo "<br />";
echo $x---$x--; // $x-- - $x-- 7 - 6 = 1
echo "<br />";
echo $x ; // 5 cixacaq cunki $x-- - $x--  sag terefdeki 6 dyerin return eliyib deyeri azaldir.





//2-ci
    
var_dump(0123 == 123); //0123 say sistemine gore 83 du. 83 != 123
var_dump('0123' == 123); 
var_dump('0123' === 123); // datatype lar beraber deil deye false



//3-cü
$x = true and false;
var_dump($x); // and left assosicative liye malikdir ona gore true verecek


//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$31";
var_dump($x); // ???

 ?>