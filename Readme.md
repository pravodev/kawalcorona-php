# KawalCorona

Class wrapper untuk mengambil data dari RestApi api.kawalcorona.com

## Cara Install
- Via git
    ```
    git clone https://github.com/pravodev/kawalcorona-php
    ```

- via composer
    ```
    composer require pravodev/kawalcorona
    ```
## Cara Penggunaan

```
<?php

use Pravodev\KawalCorona\KawalCorona;

$corona = new KawalCorona;
$corona->getProvinces();
```

## List method yang tersedia
| Method         | Deskripsi                                                     |
|----------------|---------------------------------------------------------------|
| getProvinces() | Untuk mengambil data kasus di beberapa provinsi di Indonesia. |
| getIndonesia() | Mengambil total kasus se-Indonesia.                           |
| getPositif()   | Mengambil total yang positif di seluruh dunia.                |
| getSembuh()    | Mengambil total yang sembuh di seluruh dunia.                 |
| getMeninggal() | Mengambil total yang meninggal di seluruh dunia.              |
