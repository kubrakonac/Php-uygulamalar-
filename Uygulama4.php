<?php
function TersVeBuyugeCevir(&$gruplar) // Gelen dizideki elemanlar� b�y�k harflere
                                      // ve terse �eviren fonksiyonumuzu tan�ml�yoruz. 
{                            
  
  for($i = 0; $i<count($gruplar); $i++)  // Gelen dizi uzunlu�unda d�nen for d�ng�m�z� 
                                         // yaz�yoruz.
  {
    $gruplar[$i] = strtoupper($gruplar[$i]); // Dizinin her eleman�n� b�y�k harfe �eviriyoruz.
    $gruplar[$i] = strrev($gruplar[$i]);     // Dizinin her eleman�n� ters hale d�nd�r�yoruz.
  }
}

  // Gruplar dizisini olu�turuyoruz.
$gruplar = array("Gece Yolculari","Mor ve Otesi","Gripin","Athena","Duman","Yukset Sadakat");

echo "Gruplar Dizisi : \n";  // Gruplar Dizisi yazd�r�yoruz.
print_r($gruplar);  // Gruplar dizisinin ilk halini yazd�r�yoruz. 

TersVeBuyugeCevir($gruplar);  // Ters ve b�y��e �eviren fonksiyonumuzu �a��r�yoruz.

echo "Gruplar Dizisinin Son Hali : \n";  // Gruplar Dizisinin Son Hali yazd�r�yoruz.
print_r($gruplar);    // Gruplar dizisinin son halini yazd�r�yoruz.
?>