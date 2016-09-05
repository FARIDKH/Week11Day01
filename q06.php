<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/
    
    $ilkvaxt = new DateTime("2016-01-01");
    $sonvaxt = new DateTime("2015-01-01");
    $diff = $ilkvaxt->diff($sonvaxt);
    print_r($diff)
     

 ?>