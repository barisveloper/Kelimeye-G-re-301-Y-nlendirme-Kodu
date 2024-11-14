<?php
// Anahtar kelime bazlı 301 yönlendirme

// URL'yi al
$request_uri = $_SERVER['REQUEST_URI'];

// Anahtar kelimeye göre manuel yönlendirme
if (strpos($request_uri, 'kelime') !== false) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: siteadresi.com");
    exit();
} elseif (strpos($request_uri, 'kelime giriş') !== false) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: siteadresi.com");
    exit();
} elseif (strpos($request_uri, 'kelime güncel') !== false) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: siteadresi.com");
    exit();
} elseif (strpos($request_uri, 'kelime güncel giriş') !== false) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: siteadresi.com");
    exit();
} else {
    // Diğer tüm durumlar için varsayılan bir yönlendirme
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: siteadresi.com");
    exit();
}
?>