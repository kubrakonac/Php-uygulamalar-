<?php

$isim = "Mehmet";   // Mehmet isminde bir string tanımlıyoruz.

function selamlama(&$isim) { // İsmin referansını parametre alan fonksiyonumuzu tanımlıyoruz.
  $isim = "Kemal";		// İsmi artık global olarak da değiştiriyoruz.
  echo "Fonksiyon icinde\n";  // Fonksiyon icinde yazdırıyoruz.
  echo "Merhaba ".$isim;     //Sonuç olarak yazılacak ismi Merhaba isim olarak yazdırıyoruz.
}

selamlama($isim);		// Fonksiyonu global isim değişkeniyle çağırıyoruz.
echo "\n\nFonksiyon Disinda\n";  //Fonksiyon disinda yazdırıyoruz.
echo "Merhaba ".$isim;		// Sonuç olarak yazılacak ismi Merhaba isim olarak yazdırıyoruz.

?>