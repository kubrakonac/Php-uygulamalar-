<?php
function MaxMinBulma($sayilarDizisi) // G�nderilen dizinin Maks ve Min eleman�n� bulan 
                                      // fonksiyonumuzu tan�ml�yoruz.
{                           
  $max = $sayilarDizisi[0]; // Maksimum de�erimizi ba�lang��ta dizinin ilk eleman� se�iyoruz.
  $min = $sayilarDizisi[0]; // Minimum de�erimizide ba�lang��ta dizinin ilk eleman� se�iyoruz.

  for($j = 0; $j<count($sayilarDizisi); $j++) // Dizinin eleman say�s� kadar d�nen 
                                              // for d�ng�m�z� yaz�yoruz.
  {                               
    if($sayilarDizisi[$j] > $max) // E�er bir eleman maksimum de�erden b�y�kse
      $max = $sayilarDizisi[$j];  // Yeni maksimum de�eri o eleman olarak at�yoruz.

    if($sayilarDizisi[$j] < $min) // E�er bir eleman minimum de�erden k���kse
      $min = $sayilarDizisi[$j];  // Yeni minimum de�eri o eleman olarak at�yoruz.
  }

  echo "\nMaksimum Degerimiz : ".$max;  // Maksimum Degerimiz yazd�r�yoruz. 
  echo "\nMinimum Degerimiz : ".$min;   // Minimum Degerimiz yazd�r�yoruz.
}

$sayilarDizisi = array();   // Bo� bir say� dizisi ba�lat�yoruz.
for($i = 0; $i<10; $i++)    // 10 elemanl�k olacak �ekilde for d�ng�m�z� yaz�yoruz.
{
  $sayilarDizisi[$i] = rand(0,100); // Diziye 0-100 aras�nda rastgele 10 eleman atan�yor.
}

echo "Sayilar Dizimiz : \n"; // Sayilar Dizimiz yazd�r�yoruz.
print_r($sayilarDizisi);    // Dizinin ba�lang��taki halini yazd�r�yoruz.

MaxMinBulma($sayilarDizisi);  // Maksimum minimum bulan fonksiyonumuzu �a��r�yoruz.
?>