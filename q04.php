<?php 
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
class Workers {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
    public $arg_list;
	public function addWorker($name,$surname,$position,$birthDate){
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
        $this->birthDate = $birthDate;
        $this->arg_list = func_get_args();
//        $numargs = func_num_args();
//        print_r(sizeof($this->arg_list));
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
	<tr>
		<th>Ad</th>
		<th>Soyad</th>
		<th>Status</th>
		<th>Dogum tarixi</th>
	</tr>
	<?php
    
    
    $worker01 = new Workers;
    $worker01->addWorker("Rovsen","Masalli","Ogru","1997 19 July");
    
    
    
        ?> <tr>
            <?php
                foreach($worker01->arg_list as $key => $value){
                    ?> <td><?=  $value  ?></td> <?php
                }
                
                ?>
        </tr> <?php
    
    
    ?>
    
</table>
</body>
</html>