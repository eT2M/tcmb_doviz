<?php
namespace eT2M\tcmb_doviz;

class TCMB
{
    function __construct()
    {
    }

    public function kurcek($kurlar= array('USD'))
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.tcmb.gov.tr/kurlar/today.xml",
            CURLOPT_HEADER=> 0,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION=> true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $ilkdeger = json_encode(simplexml_load_string($response));
            $duzeltme = json_decode($ilkdeger,true);
            $birimlerdahil = $duzeltme['Currency'];
            $gidecekDeger=[];
            
            foreach($birimlerdahil as $k) {
                if (in_array($k['@attributes']['Kod'], $kurlar)) {

                    $gidecekDeger[$k['@attributes']['Kod']]=[
                        'Ulusal' => $k['@attributes']['CurrencyCode'],
                        'Adi' => $k['Isim'],
                        'TCMB_Alis' => $k['BanknoteBuying'],
                        'TCMB_Satis' => $k['BanknoteSelling'],
                        'Piyasa_Alis' => $k['ForexBuying'],
                        'Piyasa_Satis' => $k['ForexSelling'],
                        'Tarih_Saat' => date('Y-m-d H:i:s')
                    ];

                }
                
            }
            return $gidecekDeger;


        }

    }

}