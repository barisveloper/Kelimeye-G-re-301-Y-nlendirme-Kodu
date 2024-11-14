# Kelimeye Göre 301 Yönlendirme - index.php

Bu proje, belirli anahtar kelimelere göre 301 yönlendirmesi yapan basit bir PHP dosyasıdır. Web sitenize gelen trafiği belirli kelimeler içeren URL'lere göre otomatik olarak yönlendirmek için kullanabilirsiniz.

## Nasıl Çalışır?

`index.php` dosyası, URL'deki belirli anahtar kelimeleri kontrol eder ve eğer tanımlı bir kelime eşleşirse, kullanıcıyı belirtilen yeni URL'ye 301 yönlendirme yöntemi ile yönlendirir. Bu özellik, arama motoru optimizasyonu (SEO) için etkili bir çözüm olabilir.

## Özellikler

- Anahtar kelimelere göre dinamik yönlendirme
- SEO dostu 301 kalıcı yönlendirmeler
- Kolay yapılandırılabilir bir PHP dosyası
- Düşük maliyetli, hafif bir çözüm

## Kullanım

1. `index.php` dosyasını projenizin ana dizinine ekleyin.
2. `index.php` dosyasının içinde, yönlendirme yapılacak kelimeleri ve hedef URL'leri belirtin. Örnek:

   ```php
   <?php
   $redirects = [
       'eski-kelime' => 'https://yeni-url.com',
       'ornek-kelime' => 'https://ornek-url.com',
   ];

   foreach ($redirects as $keyword => $url) {
       if (strpos($_SERVER['REQUEST_URI'], $keyword) !== false) {
           header("Location: $url", true, 301);
           exit();
       }
   }
   ?>
