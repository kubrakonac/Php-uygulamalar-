<?php

$isim = "Mehmet";  // Mehmet isminde bir string tan�ml�yoruz.

function selamlama($isim) { // �sim string parametre alan fonksiyonumuzu tan�ml�yoruz.
  $isim = "Kemal";		// �smi yerel olarak de�i�tiriyoruz.
  echo "Fonksiyon icinde\n"; // Fonksiyon icinde yazd�r�yoruz.
  echo "Merhaba ".$isim;   // Sonu� olarak yaz�lacak ismi Merhaba isim olarak yazd�r�yoruz. 
}

selamlama($isim);		// Fonksiyonu global isim de�i�keniyle �a��r�yoruz.
echo "\n\nFonksiyon disinda\n";  // Fonksiyon disinda yazd�r�yoruz.
echo "Merhaba ".$isim;		// Sonu� olarak yaz�lacak ismi Merhaba isim olarak yazd�r�yoruz.

?>