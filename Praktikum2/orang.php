<?php

class orang{
    //property
    public $nama;
    public $tgllahir;
    public $alamat;

    // constructor
    public function _construct()
    {
        $this->nama = "Anonim";
    }

    // method
    public function ucapSalam() {
        echo "<h2> Hallo, perkenalkan nama saya " . $this->nama . "</h2>";
    }

    //destructor
    public function __destruct()
    {
        echo " ini adalah destructor dari " .$this->nama. "<br>";
    }
}