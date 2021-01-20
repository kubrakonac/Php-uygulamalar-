<?php
function TersVeBuyugeCevir(&$gruplar) // Gelen dizideki elemanları büyük harflere
                                      // ve terse çeviren fonksiyonumuzu tanımlıyoruz. 
{                            
  
  for($i = 0; $i<count($gruplar); $i++)  // Gelen dizi uzunluğunda dönen for döngümüzü 
                                         // yazıyoruz.
  {
    $gruplar[$i] = strtoupper($gruplar[$i]); // Dizinin her elemanını büyük harfe çeviriyoruz.
    $gruplar[$i] = strrev($gruplar[$i]);     // Dizinin her elemanını ters hale döndürüyoruz.
  }
}

  // Gruplar dizisini oluşturuyoruz.
$gruplar = array("Gece Yolculari","Mor ve Otesi","Gripin","Athena","Duman","Yukset Sadakat");

echo "Gruplar Dizisi : \n";  // Gruplar Dizisi yazdırıyoruz.
print_r($gruplar);  // Gruplar dizisinin ilk halini yazdırıyoruz. 

TersVeBuyugeCevir($gruplar);  // Ters ve büyüğe çeviren fonksiyonumuzu çağırıyoruz.

echo "Gruplar Dizisinin Son Hali : \n";  // Gruplar Dizisinin Son Hali yazdırıyoruz.
print_r($gruplar);    // Gruplar dizisinin son halini yazdırıyoruz.
?>