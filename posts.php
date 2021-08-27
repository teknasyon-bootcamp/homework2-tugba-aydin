<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */
include_once "functions.php"; //functions.php'deki fonksiyonları kullanmak için dahil ettik
$randomPostNumber=getRandomPostCount(3,25); // 3-23 arasında random olarak bir sayı üretilecek
$getPosts=getLatestPosts($randomPostNumber); //elde edilen random sayıyı getLatestPosts() fonksiyonuna parametre olarak gönderdik
foreach ($getPosts as $id=> $post){
    $type= $post["type"];   
    echo "id:".$id." title: ".$post["title"]." type: ".$post["type"].'<br>'; // yazılar detaylı gösterilecek
    include "post.php";     // post.php dosyasını dahil ettik
}