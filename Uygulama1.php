<?php

$isim = "Mehmet";  // Mehmet isminde bir string tanımlıyoruz.

function selamlama($isim) { // İsim string parametre alan fonksiyonumuzu tanımlıyoruz.
  $isim = "Kemal";		// İsmi yerel olarak değiştiriyoruz.
  echo "Fonksiyon icinde\n"; // Fonksiyon icinde yazdırıyoruz.
  echo "Merhaba ".$isim;   // Sonuç olarak yazılacak ismi Merhaba isim olarak yazdırıyoruz. 
}

selamlama($isim);		// Fonksiyonu global isim değişkeniyle çağırıyoruz.
echo "\n\nFonksiyon disinda\n";  // Fonksiyon disinda yazdırıyoruz.
echo "Merhaba ".$isim;		// Sonuç olarak yazılacak ismi Merhaba isim olarak yazdırıyoruz.

?>