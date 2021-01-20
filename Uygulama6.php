<?php
  function faktoriyelAl(&$sayilarDizisi) // Gelen diziyi fakt�riyel al�nm�� hale �eviren 
                                         // fonksiyonumuzu tan�ml�yoruz.
  {                             
    $faktoriyel = 1;    // Fakt�riyeli 1 den ba�lat�yoruz �arp�m varken 0 dan ba�larsa sonu� 0 olur.
    for($i = 0; $i<count($sayilarDizisi); $i++) // Gelen dizi kadar d�nen for d�ng�m�z� yaz�yoruz.
    {
      for($j = 1; $j<=$sayilarDizisi[$i]; $j++) // 1 den ba�lay�p say� kadar d�nen for d�ng�m�z� yaz�yoruz.
      {
        $faktoriyel = $faktoriyel * $j; // Fakt�riyel hesab� i�in 1 den say�n�n kendisine kadar �arpma 
		                                //i�lemi yap�yoruz.
      }
      $sayilarDizisi[$i] = $faktoriyel; // Say�lar dizisini de�i�tirip fakt�riyel de�erlerini at�yoruz. 
      $faktoriyel = 1;                  // Fakt�riyel hesab� i�in yeniden 1 e e�itliyoruz.
    }
  }
     // **Faktoriyelleri Hesaplayan Program** yazd�r�yoruz. 
    // Girmek istediginiz sayilari birer bosluk birakarak giriniz. yazd�r�yoruz.  
  echo "**Faktoriyelleri Hesaplayan Program**  <br> 
          Girmek istediginiz sayilari birer bosluk birakarak giriniz.<br><br>";
   // Hesaplamalar i�in gerekli HTML formumuzu olu�turuyoruz.
  echo '<form name="form1" method="post">
          Sayi : <input type="text" name="sayilar" style="width: 350px;">
          <input type="submit" name="gonder" value="GONDER">
        </form>
  ';

  if ($_POST) // Post i�lemlerimizi ger�ekle�tiriyoruz.
  {
    $sayilar = $_POST['sayilar'];     // Post edilen say�lar� tutan de�i�keni tan�ml�yoruz. 
    $sayilarDizi = explode(" ",$sayilar);   // Say�lar� bir bo�lukla ay�r�yoruz.
    $sayilarDizi = array_values(array_filter($sayilarDizi)); // Bo� karakter veya ekstra bo�luk geldiyse siliyoruz.

    echo "Girdiginiz Sayilar <br>";    // Girdiginiz Sayilar yazd�r�yoruz.
    foreach ($sayilarDizi as $sayi)   // Girilen say�lar� yazd�r�yoruz.
      echo $sayi."<br>";              // Girilen say�lar� yazd�r�yoruz. 

    echo "Yeni Olusan Faktoriyel Alinmis Dizi <br>";  // Yeni Olusan Faktoriyel Alinmis Dizi yazd�r�yoruz. 
    faktoriyelAl($sayilarDizi);   // Fakt�riyel alan fonksiyonumuzu �a��r�yoruz.
    foreach ($sayilarDizi as $sayi)   // Dizinin son halini yazd�r�yoruz. 
      echo $sayi."<br>";     // Dizinin son halini yazd�r�yoruz.
  }
?>