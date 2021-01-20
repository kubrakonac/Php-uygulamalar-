<?php
  function faktoriyelAl(&$sayilarDizisi) // Gelen diziyi faktöriyel alýnmýþ hale çeviren 
                                         // fonksiyonumuzu tanýmlýyoruz.
  {                             
    $faktoriyel = 1;    // Faktöriyeli 1 den baþlatýyoruz çarpým varken 0 dan baþlarsa sonuç 0 olur.
    for($i = 0; $i<count($sayilarDizisi); $i++) // Gelen dizi kadar dönen for döngümüzü yazýyoruz.
    {
      for($j = 1; $j<=$sayilarDizisi[$i]; $j++) // 1 den baþlayýp sayý kadar dönen for döngümüzü yazýyoruz.
      {
        $faktoriyel = $faktoriyel * $j; // Faktöriyel hesabý için 1 den sayýnýn kendisine kadar çarpma 
		                                //iþlemi yapýyoruz.
      }
      $sayilarDizisi[$i] = $faktoriyel; // Sayýlar dizisini deðiþtirip faktöriyel deðerlerini atýyoruz. 
      $faktoriyel = 1;                  // Faktöriyel hesabý için yeniden 1 e eþitliyoruz.
    }
  }
     // **Faktoriyelleri Hesaplayan Program** yazdýrýyoruz. 
    // Girmek istediginiz sayilari birer bosluk birakarak giriniz. yazdýrýyoruz.  
  echo "**Faktoriyelleri Hesaplayan Program**  <br> 
          Girmek istediginiz sayilari birer bosluk birakarak giriniz.<br><br>";
   // Hesaplamalar için gerekli HTML formumuzu oluþturuyoruz.
  echo '<form name="form1" method="post">
          Sayi : <input type="text" name="sayilar" style="width: 350px;">
          <input type="submit" name="gonder" value="GONDER">
        </form>
  ';

  if ($_POST) // Post iþlemlerimizi gerçekleþtiriyoruz.
  {
    $sayilar = $_POST['sayilar'];     // Post edilen sayýlarý tutan deðiþkeni tanýmlýyoruz. 
    $sayilarDizi = explode(" ",$sayilar);   // Sayýlarý bir boþlukla ayýrýyoruz.
    $sayilarDizi = array_values(array_filter($sayilarDizi)); // Boþ karakter veya ekstra boþluk geldiyse siliyoruz.

    echo "Girdiginiz Sayilar <br>";    // Girdiginiz Sayilar yazdýrýyoruz.
    foreach ($sayilarDizi as $sayi)   // Girilen sayýlarý yazdýrýyoruz.
      echo $sayi."<br>";              // Girilen sayýlarý yazdýrýyoruz. 

    echo "Yeni Olusan Faktoriyel Alinmis Dizi <br>";  // Yeni Olusan Faktoriyel Alinmis Dizi yazdýrýyoruz. 
    faktoriyelAl($sayilarDizi);   // Faktöriyel alan fonksiyonumuzu çaðýrýyoruz.
    foreach ($sayilarDizi as $sayi)   // Dizinin son halini yazdýrýyoruz. 
      echo $sayi."<br>";     // Dizinin son halini yazdýrýyoruz.
  }
?>