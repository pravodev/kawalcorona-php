<?php

use PHPUnit\Framework\TestCase;
use Pravodev\KawalCorona\KawalCorona;

class KawalCoronaTest extends TestCase
{
    public static $kawal_corona = null;
    
    public function __construct()
    {
        parent::__construct();
        static::$kawal_corona = new KawalCorona;
    }
    
    public function testGetIndonesiaData()
    {
        $data = self::$kawal_corona->getIndonesia();

        $this->assertObjectHasAttribute('name', $data);
        $this->assertObjectHasAttribute('positif', $data);
        $this->assertObjectHasAttribute('sembuh', $data);
        $this->assertObjectHasAttribute('meninggal', $data);
    }

    public function testGetProvincesData()
    {
        $data = self::$kawal_corona->getProvinces();

        $province = $data[0];

        $this->assertObjectHasAttribute('attributes', $province);

        if($attribute = $province->attributes){
            $this->assertObjectHasAttribute('FID', $attribute);
            $this->assertObjectHasAttribute('Kode_Provi', $attribute);
            $this->assertObjectHasAttribute('Kasus_Posi', $attribute);
            $this->assertObjectHasAttribute('Kasus_Semb', $attribute);
            $this->assertObjectHasAttribute('Kasus_Meni', $attribute);
        }
    }

    public function testGetTotalPositif()
    {
        $data = self::$kawal_corona->getPositif();

        $this->assertObjectHasAttribute('name', $data);
        $this->assertObjectHasAttribute('value', $data);
    }

    public function testGetTotalSembuh()
    {
        $data = self::$kawal_corona->getSembuh();

        $this->assertObjectHasAttribute('name', $data);
        $this->assertObjectHasAttribute('value', $data);
    }

    public function testGetTotalMeninggal()
    {
        $data = self::$kawal_corona->getMeninggal();

        $this->assertObjectHasAttribute('name', $data);
        $this->assertObjectHasAttribute('value', $data);
    }
}