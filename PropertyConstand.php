<?php

class produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const pajak = 0.11;

    public function pajak() {
        return self::pajak * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::pajak);
    }
}
    $produk = new produk();
    $produk->kode = 'P0001';
    $produk->nama = 'Laptop';
    $produk->harga = '10000000';
    $produk->stok = 5;

    $pajak = produk::pajak * 100;
    $jumlahPajak = $produk->harga * produk::pajak;

    $total = $produk->harga + $jumlahPajak;

    echo "Produk: ". $produk->nama;
    echo "<br/>";
    echo "Harga: ". $produk->harga;
    echo "<br/>";
    echo "Stok: ". $produk->stok;
    echo "<br/>";
    echo "Pajak: ". $pajak. "%";
    echo "<br/>";
    echo "Total harga setelah pajak: Rp". $total


=======


class produk {

    //property

    public string $kode;

    public string $nama;

    public int $harga;

    public int $stok;


    //constan

    public const PAJAK = 0.11;

}


//object

$produk = new produk();

$produk->kode = 'A001';

$produk->nama = 'Laptop';

$produk->harga = 1000000;

$produk->stok = 5;


//hitung pajak

$pajak = produk::PAJAK * 100; // 1,1jt

$jumlahpajak = $produk->harga * produk::PAJAK;


//total

$total = $produk->harga + $jumlahpajak;


echo "Produk: ". $produk->nama;

echo "<br/>";

echo "Harga: ". $produk->harga;

echo "<br/>";

echo "Stok: ". $produk->stok;

echo "<br/>";

echo "Pajak: ". $pajak. "%";

echo "<br/>";

echo "Total Harga: Rp". $total;
b2b12767924e8374ea7fcd39b5053b4c7701f3ee
?>