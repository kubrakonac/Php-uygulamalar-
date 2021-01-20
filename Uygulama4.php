<?php
function TersVeBuyugeCevir(&$gruplar) // Gelen dizideki elemanlarý büyük harflere
                                      // ve terse çeviren fonksiyonumuzu tanýmlýyoruz. 
{                            
  
  for($i = 0; $i<count($gruplar); $i++)  // Gelen dizi uzunluðunda dönen for döngümüzü 
                                         // yazýyoruz.
  {
    $gruplar[$i] = strtoupper($gruplar[$i]); // Dizinin her elemanýný büyük harfe çeviriyoruz.
    $gruplar[$i] = strrev($gruplar[$i]);     // Dizinin her elemanýný ters hale döndürüyoruz.
  }
}

  // Gruplar dizisini oluþturuyoruz.
$gruplar = array("Gece Yolculari","Mor ve Otesi","Gripin","Athena","Duman","Yukset Sadakat");

echo "Gruplar Dizisi : \n";  // Gruplar Dizisi yazdýrýyoruz.
print_r($gruplar);  // Gruplar dizisinin ilk halini yazdýrýyoruz. 

TersVeBuyugeCevir($gruplar);  // Ters ve büyüðe çeviren fonksiyonumuzu çaðýrýyoruz.

echo "Gruplar Dizisinin Son Hali : \n";  // Gruplar Dizisinin Son Hali yazdýrýyoruz.
print_r($gruplar);    // Gruplar dizisinin son halini yazdýrýyoruz.
?>