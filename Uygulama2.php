<?php

$isim = "Mehmet";   // Mehmet isminde bir string tan�ml�yoruz.

function selamlama(&$isim) { // �smin referans�n� parametre alan fonksiyonumuzu tan�ml�yoruz.
  $isim = "Kemal";		// �smi art�k global olarak da de�i�tiriyoruz.
  echo "Fonksiyon icinde\n";  // Fonksiyon icinde yazd�r�yoruz.
  echo "Merhaba ".$isim;     //Sonu� olarak yaz�lacak ismi Merhaba isim olarak yazd�r�yoruz.
}

selamlama($isim);		// Fonksiyonu global isim de�i�keniyle �a��r�yoruz.
echo "\n\nFonksiyon Disinda\n";  //Fonksiyon disinda yazd�r�yoruz.
echo "Merhaba ".$isim;		// Sonu� olarak yaz�lacak ismi Merhaba isim olarak yazd�r�yoruz.

?>