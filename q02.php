<?php

class Telebe{
 
  public $ad;
  public $soyad;
  public $telebe    ;
     
 
    
  public function __construct($ad,$soyad){
      $this->ad = $ad;
      $this->soyad = $soyad;

      $this->telebe = "";
      $this->qarsila();
      
  }
    
  public function qarsila(){
          $this->telebe .=  "Salam $this->ad $this->soyad!"; 

          return $this;      
      }    
  
 
    
  
 

  public function qeydiyyataAl()
  {
      
      $this->telebe .=  "Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" ;
          
      return $this; 
  }
 

  public function melumatlandir()
  {
     return $this->telebe;
  }
}
 
$telebe01 = new Telebe("Memmed","Hesenov");

 
echo $telebe01 -> qeydiyyataAl() -> melumatlandir();
/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
?>