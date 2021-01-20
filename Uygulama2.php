<?php

$isim = "Mehmet";   // Mehmet isminde bir string tanýmlýyoruz.

function selamlama(&$isim) { // Ýsmin referansýný parametre alan fonksiyonumuzu tanýmlýyoruz.
  $isim = "Kemal";		// Ýsmi artýk global olarak da deðiþtiriyoruz.
  echo "Fonksiyon icinde\n";  // Fonksiyon icinde yazdýrýyoruz.
  echo "Merhaba ".$isim;     //Sonuç olarak yazýlacak ismi Merhaba isim olarak yazdýrýyoruz.
}

selamlama($isim);		// Fonksiyonu global isim deðiþkeniyle çaðýrýyoruz.
echo "\n\nFonksiyon Disinda\n";  //Fonksiyon disinda yazdýrýyoruz.
echo "Merhaba ".$isim;		// Sonuç olarak yazýlacak ismi Merhaba isim olarak yazdýrýyoruz.

?>