<?php 
	
//   Neticesi aşağıdakılar olan funksiya yazın

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/
function foo(){
    $numargs = func_num_args();
    $arg_list = func_get_args();
    if($numargs){
        
    }else{
        echo "Bos";
    }
    
    for ($i = 0; $i < $numargs; $i++) {
        echo "arg $i, " . $arg_list[$i] . "\n";
    }
    
    
    
}

foo('salam','necesiz','salamsalam');







?>