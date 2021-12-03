<?php
abstract class bola{
    public $jariJari;
    public $pi = 3.14;
  
    public function __construct($jariJari){
        $this->jariJari = $jariJari;
    }

   abstract public function hitung_bola();
}

interface detail_bola{
	 public function nilai_bola();
}
  
class Voli extends bola implements detail_bola{
   public function hitung_bola(){
	   $x = 4*$this->jariJari * $this->jariJari * $this->pi;
     return "Luas Permukaan Bola Voli adalah $x";
   }
   
   public function nilai_bola(){
	   return "<br> Menghitung Luas Permukaan Bola Voli <br>";
	   }
}

class basket extends bola implements detail_bola{
   public function hitung_bola(){
		$x = 4*$this->jariJari * $this->jariJari * $this->pi;
     return "Luas Permukaan Bola Basket adalah $x";
   }
   
   public function nilai_bola(){
	   return "<br> Menghitung Luas Permukaan Bola Basket <br>";
	   }
}

function cetak_detail_bola($objek_detail){
	 return $objek_detail->nilai_bola();
}

$bola_Voli = new Voli(14);
echo $bola_Voli->hitung_bola();
echo cetak_detail_bola($bola_Voli);
echo "<hr>";

$bola_basket = new basket(18);
echo $bola_basket->hitung_bola();
echo cetak_detail_bola($bola_basket);

echo "<hr>";
echo " TI (B) nama kelompok  :" ;
echo "<br>";
echo " Ridwan adi pratama"  ;
echo "<br>";
echo "Farikh F"  ;
echo "<br>";
echo "M.nurizki"  ;
echo "<br>";
echo "elki ismuhamdan" ;
echo "<br>";
echo  "rafsanjani" ;
?>
