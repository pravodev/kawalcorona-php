<?php

/**
 * Simple PHP Wrapper class to call rest api from api.kawalcorona.com
 * 
 * @author Rifqi Khoeruman Azam <pravodev@gmail.com>
 */

namespace Pravodev\KawalCorona;

class KawalCorona
{
    protected $api_url = "https://api.kawalcorona.com";

    public function __call($name, $arguments)
    {
        $get_type = strtolower(str_replace('get', '', $name));
        $data = $this->getContent($get_type);
        return $data;
    }
    
    public function getContent($type)
    {
        $data = json_decode(file_get_contents($this->buildUrl($type)));

        if($type == 'indonesia'){
            return $data[0];
        }

        return $data;
    }

    public function buildUrl($type)
    {
        $list_urls = [
            'provinces' => '/indonesia/provinsi',
            'indonesia' => '/indonesia',
            'positif' => '/positif',
            'sembuh' => '/sembuh',
            'meninggal' => '/meninggal'
        ];
        
        if(!array_key_exists($type, $list_urls)){
            throw new \Exception('invalid type');
        }

        return $this->api_url . $list_urls[$type];
    }
}