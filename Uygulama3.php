<?php

class X {    //Bir X sýnýfý tanýmlýyoruz.
  var $sayi = 10;	// X sýnýfýnýn varsayýlan sayý deðerini 10 olarak belirliyoruz.
}

class Y {    //Bir Y sýnýfý tanýmlýyoruz.

  var $sayi = 20;	// Y sýnýfýnýn varsayýlan sayý deðerini 20 olarak belirliyoruz.

  function degerDegistir(&$nesne){ // Gelecek olan nesneyi referansla alýp Y sýnýfý 
				                  // nesnesine dönüþtüren degerDegistir fonksiyonumuzu tanýmlýyoruz.

    $nesne = new Y();	// Y sýnýfý nesnesi oluþturuyoruz.
  }
}

$x = new X();	// X nesnesini baþlatýyoruz.
$y = new Y();   // Y nesnesini baþlatýyoruz.

echo "x sayisi : ".$x->sayi."\n";	// x sayisi yazdýrýyoruz.Yani X in ilk halini yazdýrýyoruz.
$y->degerDegistir($x);		// Y nesnesine döndürecek fonksiyonumuzu çaðýrýyoruz.
echo "Degisim sonrasi \n";	   // Degisim sonrasi yazdýrýyoruz.
echo "x sayisi : ".$x->sayi;	// x sayisi yazdýrýyoruz.Yani X in son halini yazdýrýyoruz.

?>