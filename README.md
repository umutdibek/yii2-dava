# yii2-dava
Dava Module
### Projenin amacı
Projenin amacı internet programcılığı dersinde öğrendiğimiz bilgileri kullanarak kendimize ait bir modül yazmaktır.
##### Öncelikle vagrant makinemizi çalıştırmak için "vagrant up" komutunu aşağıdaki resimdeki gibi giriyoruz.
![Vagrant up](https://github.com/umutdibek/yii2-dava/blob/main/v1.png)
##### Bir sonraki aşama ssh komutunu aşağıdaki gibi terminale yazıyoruz.
![ssh](https://github.com/umutdibek/yii2-dava/blob/main/v10.png)
##### Bir sonraki aşama cd komutunu aşağıdaki gibi terminale yazıyoruz.
![cd](https://github.com/umutdibek/yii2-dava/blob/main/v11.png)
##### Bu aşamadan sonra terminale "composer require --prefer-dist umutdibek/yii2-dava"dev-main"" komutunu aşağıdaki gibi yazıyoruz.
![composer require --prefer-dist umutdibek/yii2-dava"dev-main"](https://github.com/umutdibek/yii2-dava/blob/main/v20.png)
##### Bir sonraki aşama terminale "php yii migrate/up --migrationPath=@vendor/umutdibek/yii2-dava/src/migrations" komutunu aşağıdaki gibi yazmaktır.
![php yii migrate/up --migrationPath=@vendor/umutdibek/yii2-dava/src/migrations](https://github.com/umutdibek/yii2-dava/blob/main/v15.png)
##### Bundan sonra backend klosörünün içine girip main.php dosyasını açıyoruz.15. ve 16. satırı resimdeki yazılan kodları yazıyoruz.
![Aşamalar](https://github.com/umutdibek/yii2-dava/blob/main/v4.png)
##### Önceki aşamaları gerçekleştirdikten sonra interneti açıp "http://advanced/backend/web/index.php?r=dava/dava/index" resimdeki gibi yazıyoruz.
![web](https://github.com/umutdibek/yii2-dava/blob/main/v5.png)
##### İnterneti açıp sayfaya ulaşıldıktan sonra dava ekranımız gelmektedir.Bu ekranda dava dosyaları tutulması için 'create' tuşuna basılmalıdır.Silinenleri görüntülemek için ise 'silinen' butonuna basılmalıdır.
![resim](https://github.com/umutdibek/yii2-dava/blob/main/v6.png)
##### Create tuşuna basılırsa aşağıdaki resim gibi ekran gelmektedir.Bu ekranda kayıt tutulabilmektedir.
![resim2](https://github.com/umutdibek/yii2-dava/blob/main/v7.png)
##### Silinen davalara bakmak için ana ekrandan seçilmesi gerekmektedir.Seçildiğindeki aşağıdaki resim gibi ekran elde edilir.
![resim3](https://github.com/umutdibek/yii2-dava/blob/main/v8.png)
