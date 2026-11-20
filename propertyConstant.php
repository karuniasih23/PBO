<?php

namespace Pbo\Marketplace;

class Produk
{
    //property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    //constant
    public const PAJAK = 0.11;


    //setter
    public function setKode($kode) {
        $this->kode = $kode;
        return $this;
    }

     public function setNama($nama) {
        $this->nama = $nama;
        return $this;
    }

     public function setHarga($harga) {
        if($harga <= 0){
            echo "harga tidak boleh 0";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }

     public function setStok($stok) {
        if($stok <= 0) {
            echo "stok tidak boleh 0";
            exit();
        }
        $this->stok = $stok;
        return $this;
    }

    //getter
    public function getKode(){
        return $this->kode;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function getStok(){
        return $this->stok;
    }

    //constructor
    public function __construct($kode, $nama, $harga, $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    //method
    public static function persenPajak(): float
    {
        return self::PAJAK * 100;
    }

    public function hitungPajak(): float
    {
        return $this->harga * self::PAJAK;
    }

    public function hitungTotal(): float
    {
        return $this->harga + $this->hitungPajak();
    }

    public function tampil(): void
    {
        echo "Produk: " . $this->nama . "<br/>";
        echo "Harga: Rp. " . $this->harga . "<br/>";
        echo "Stok: " . $this->stok . "<br/>";
        echo "Pajak: " . self::persenPajak() . "%<br/>";
        echo "Total harga setelah pajak: Rp. " . $this->hitungTotal() . "<br/>";
    }
}