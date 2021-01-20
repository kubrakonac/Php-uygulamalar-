<?php

$isim = "Mehmet";  // Mehmet isminde bir string tanýmlýyoruz.

function selamlama($isim) { // Ýsim string parametre alan fonksiyonumuzu tanýmlýyoruz.
  $isim = "Kemal";		// Ýsmi yerel olarak deðiþtiriyoruz.
  echo "Fonksiyon icinde\n"; // Fonksiyon icinde yazdýrýyoruz.
  echo "Merhaba ".$isim;   // Sonuç olarak yazýlacak ismi Merhaba isim olarak yazdýrýyoruz. 
}

selamlama($isim);		// Fonksiyonu global isim deðiþkeniyle çaðýrýyoruz.
echo "\n\nFonksiyon disinda\n";  // Fonksiyon disinda yazdýrýyoruz.
echo "Merhaba ".$isim;		// Sonuç olarak yazýlacak ismi Merhaba isim olarak yazdýrýyoruz.

?>