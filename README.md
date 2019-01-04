# İş Başvuru Modülü (portal-isbasvuru)
M. Mücahit Enes YURTSEVER - 170201088

# Modülün aktif edilmesi
Portal dizinindeki composer.json dosyasında ilgili alana aşağıdaki satırları ekleriz:
```
"repositories": [
       ...
       ...
       {
            "type": "vcs",
            "url": "https://github.com/wenes394/portal-isbasvuru.git"
        },
       ...
       ...
   ],
```        
Portal dizininde backend/config/main.php ve frontend/config/main.php içerisine ilgili kısımlara modül eklenir:
```
'modules' => [
...
'isbasvuru' => [
            'class' => 'kouosl\isbasvuru\Module',
        ],
...
],
```
# Modül için migration ayarları
Portal dizininde sırasıyla aşağıdaki komutlar çalıştırılır:
```
vagrant up
vagrant ssh
```
Ssh içerisinde portal dizinine gidilir:
```
cd /var/www/portal
```
Ardından migration ayarlamaları için gerekli komut verilir:
```
php yii migrate --migrationPath=vendor/kouosl/portal-isbasvuru/migrations
```
# Datepicker widget kullanımı
Modülde kullanılan tarih seçicinin aktif olması için portal dizinindeki composer.json'a ilgili kısım eklenir:
```
"require-dev": {
     ...
    "2amigos/yii2-date-picker-widget" : "~1.0"
     ...
 }
```
