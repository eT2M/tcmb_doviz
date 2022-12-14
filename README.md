<h1 align="center">Türkiye Cumhuriyeti Merkez Bankası Günlük Döviz Kuru</h1>

[![GitHub issues](https://img.shields.io/github/issues/eT2M/tcmb_doviz)](https://github.com/eT2M/tcmb_doviz/issues)
[![GitHub forks](https://img.shields.io/github/forks/eT2M/tcmb_doviz)](https://github.com/eT2M/tcmb_doviz/network)
[![GitHub stars](https://img.shields.io/github/stars/eT2M/tcmb_doviz)](https://github.com/eT2M/tcmb_doviz/stargazers)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/eT2m/tcmb_doviz.svg?style=flat-square)](https://packagist.org/packages/eT2M/tcmb_doviz)
[![Total Downloads](https://img.shields.io/packagist/dt/eT2M/tcmb_doviz.svg?style=flat-square)](https://packagist.org/packages/eT2M/tcmb_doviz)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Türkiye Cumhuriyeti Merkez Bankası Günlük Döviz Kuru Php Composer Paketidir.

# Kurulumu :

    composer require et2m/tcmb_doviz

# Kullanımı :

    <?php
        require "tcmb_doviz/vendor/autoload.php";

        use eT2M\tcmb_doviz\TCMB;

        $test = new TCMB;

        // Merkez Bankasından Kurlarını istediğiniz Dövizler
        $kurlar = array("USD", "AUD", "DKK", "EUR", "GBP", "CHF", "SEK", "CAD", "KWD", "NOK", "SAR", "SAR", "JPY");

        //Talep 
        print_r($test->kurcek($kurlar)); /// Kurlar Dizini göndermezseniz size USD sonucu Dönecektir.

        //Sonuc
        /* 
        Array
        (
            [USD] => Array
                (
                    [Ulusal] => USD
                    [Adi] => ABD DOLARI
                    [TCMB_Alis] => 18.1882
                    [TCMB_Satis] => 18.2611
                    [Piyasa_Alis] => 18.2009
                    [Piyasa_Satis] => 18.2337
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [AUD] => Array
                (
                    [Ulusal] => AUD
                    [Adi] => AVUSTRALYA DOLARI
                    [TCMB_Alis] => 12.2971
                    [TCMB_Satis] => 12.5090
                    [Piyasa_Alis] => 12.3539
                    [Piyasa_Satis] => 12.4344
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [DKK] => Array
                (
                    [Ulusal] => DKK
                    [Adi] => DANİMARKA KRONU
                    [TCMB_Alis] => 2.4390
                    [TCMB_Satis] => 2.4584
                    [Piyasa_Alis] => 2.4407
                    [Piyasa_Satis] => 2.4527
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [EUR] => Array
                (
                    [Ulusal] => EUR
                    [Adi] => EURO
                    [TCMB_Alis] => 18.1670
                    [TCMB_Satis] => 18.2398
                    [Piyasa_Alis] => 18.1797
                    [Piyasa_Satis] => 18.2125
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [GBP] => Array
                (
                    [Ulusal] => GBP
                    [Adi] => İNGİLİZ STERLİNİ
                    [TCMB_Alis] => 20.9902
                    [TCMB_Satis] => 21.1461
                    [Piyasa_Alis] => 21.0049
                    [Piyasa_Satis] => 21.1144
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [CHF] => Array
                (
                    [Ulusal] => CHF
                    [Adi] => İSVİÇRE FRANGI
                    [TCMB_Alis] => 18.4836
                    [TCMB_Satis] => 18.6582
                    [Piyasa_Alis] => 18.5114
                    [Piyasa_Satis] => 18.6302
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [SEK] => Array
                (
                    [Ulusal] => SEK
                    [Adi] => İSVEÇ KRONU
                    [TCMB_Alis] => 1.6828
                    [TCMB_Satis] => 1.7053
                    [Piyasa_Alis] => 1.6840
                    [Piyasa_Satis] => 1.7014
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [CAD] => Array
                (
                    [Ulusal] => CAD
                    [Adi] => KANADA DOLARI
                    [TCMB_Alis] => 13.7778
                    [TCMB_Satis] => 13.9441
                    [Piyasa_Alis] => 13.8290
                    [Piyasa_Satis] => 13.8913
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [KWD] => Array
                (
                    [Ulusal] => KWD
                    [Adi] => KUVEYT DİNARI
                    [TCMB_Alis] => 57.7978
                    [TCMB_Satis] => 60.3374
                    [Piyasa_Alis] => 58.6779
                    [Piyasa_Satis] => 59.4457
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [NOK] => Array
                (
                    [Ulusal] => NOK
                    [Adi] => NORVEÇ KRONU
                    [TCMB_Alis] => 1.8103
                    [TCMB_Satis] => 1.8280
                    [Piyasa_Alis] => 1.8116
                    [Piyasa_Satis] => 1.8238
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [SAR] => Array
                (
                    [Ulusal] => SAR
                    [Adi] => SUUDİ ARABİSTAN RİYALİ
                    [TCMB_Alis] => 4.8064
                    [TCMB_Satis] => 4.8878
                    [Piyasa_Alis] => 4.8427
                    [Piyasa_Satis] => 4.8514
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

            [JPY] => Array
                (
                    [Ulusal] => JPY
                    [Adi] => JAPON YENİ
                    [TCMB_Alis] => 12.8914
                    [TCMB_Satis] => 13.0744
                    [Piyasa_Alis] => 12.9392
                    [Piyasa_Satis] => 13.0249
                    [Tarih_Saat] => 2022-09-03 14:56:37
                )

        )

        */

<p align="center">
  <img width="460" height="166" src="https://img.et2m.com/logo_kirmizi.png">
</p>
<p align="center">
    Bu proje, MIT lisansı altında lisanslanmış açık kaynaklı bir yazılımdır .
</p>
