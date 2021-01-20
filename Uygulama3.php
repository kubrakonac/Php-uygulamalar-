<?php

class X {    //Bir X s�n�f� tan�ml�yoruz.
  var $sayi = 10;	// X s�n�f�n�n varsay�lan say� de�erini 10 olarak belirliyoruz.
}

class Y {    //Bir Y s�n�f� tan�ml�yoruz.

  var $sayi = 20;	// Y s�n�f�n�n varsay�lan say� de�erini 20 olarak belirliyoruz.

  function degerDegistir(&$nesne){ // Gelecek olan nesneyi referansla al�p Y s�n�f� 
				                  // nesnesine d�n��t�ren degerDegistir fonksiyonumuzu tan�ml�yoruz.

    $nesne = new Y();	// Y s�n�f� nesnesi olu�turuyoruz.
  }
}

$x = new X();	// X nesnesini ba�lat�yoruz.
$y = new Y();   // Y nesnesini ba�lat�yoruz.

echo "x sayisi : ".$x->sayi."\n";	// x sayisi yazd�r�yoruz.Yani X in ilk halini yazd�r�yoruz.
$y->degerDegistir($x);		// Y nesnesine d�nd�recek fonksiyonumuzu �a��r�yoruz.
echo "Degisim sonrasi \n";	   // Degisim sonrasi yazd�r�yoruz.
echo "x sayisi : ".$x->sayi;	// x sayisi yazd�r�yoruz.Yani X in son halini yazd�r�yoruz.

?>