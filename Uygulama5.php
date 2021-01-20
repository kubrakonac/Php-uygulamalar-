<?php
function MaxMinBulma($sayilarDizisi) // Gönderilen dizinin Maks ve Min elemanýný bulan 
                                      // fonksiyonumuzu tanýmlýyoruz.
{                           
  $max = $sayilarDizisi[0]; // Maksimum deðerimizi baþlangýçta dizinin ilk elemaný seçiyoruz.
  $min = $sayilarDizisi[0]; // Minimum deðerimizide baþlangýçta dizinin ilk elemaný seçiyoruz.

  for($j = 0; $j<count($sayilarDizisi); $j++) // Dizinin eleman sayýsý kadar dönen 
                                              // for döngümüzü yazýyoruz.
  {                               
    if($sayilarDizisi[$j] > $max) // Eðer bir eleman maksimum deðerden büyükse
      $max = $sayilarDizisi[$j];  // Yeni maksimum deðeri o eleman olarak atýyoruz.

    if($sayilarDizisi[$j] < $min) // Eðer bir eleman minimum deðerden küçükse
      $min = $sayilarDizisi[$j];  // Yeni minimum deðeri o eleman olarak atýyoruz.
  }

  echo "\nMaksimum Degerimiz : ".$max;  // Maksimum Degerimiz yazdýrýyoruz. 
  echo "\nMinimum Degerimiz : ".$min;   // Minimum Degerimiz yazdýrýyoruz.
}

$sayilarDizisi = array();   // Boþ bir sayý dizisi baþlatýyoruz.
for($i = 0; $i<10; $i++)    // 10 elemanlýk olacak þekilde for döngümüzü yazýyoruz.
{
  $sayilarDizisi[$i] = rand(0,100); // Diziye 0-100 arasýnda rastgele 10 eleman atanýyor.
}

echo "Sayilar Dizimiz : \n"; // Sayilar Dizimiz yazdýrýyoruz.
print_r($sayilarDizisi);    // Dizinin baþlangýçtaki halini yazdýrýyoruz.

MaxMinBulma($sayilarDizisi);  // Maksimum minimum bulan fonksiyonumuzu çaðýrýyoruz.
?>