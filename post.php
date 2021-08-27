<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */
include_once "functions.php"; //functions.php'deki fonksiyonları kullanmak için dahil ettik

if(!isset($id)) { // id tanımlanmamışsa değeri 1 verilecek
  $id=1;
}

if(!isset($type)) { // type değeri tanımlanmamışsa değeri urgent verilecek
  $type="urgent";
}

if(!isset($title)) { // title değeri tanımlanmamışsa değeri Başlık verilecek
  $title="Başlık";
}

switch($type){ // type değerinin kontrolünü yaptık
  case "urgent":
    $color="red"; // urgentsa color değeri red olacak
    break;
  case "warning"; 
    $color="yellow"; // warningse color değeri yellow olacak
    break;
  default:
    $color="white"; // bu iki değer değilse color değeri white olacak
    break;
}
                  
echo "<div style ='background-color:". $color." ;'>"; // arka plan posta ait renk değerine göre atanacak
  getPostDetails($id,$post["title"]); // fonksiyon üzerinden ilgili idli post gösterimi sağlanacak
echo "</div>";