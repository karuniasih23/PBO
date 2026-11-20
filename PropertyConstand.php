<?php

class produk {

    // property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // constant
    public const pajak = 0.11;

    public function pajak() {
        return self::pajak * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::pajak);
    }
}

// object pertama
$produk = new produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

// hitung pajak
$pajak = produk::pajak * 100;
$jumlahPajak = $produk->harga * produk::pajak;

// total
$total = $produk->harga + $jumlahPajak;

echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: " . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $pajak . "%";
echo "<br/>";
echo "Total harga setelah pajak: Rp" . $total;
echo "<br/><br/>";

// object kedua (menggunakan nama variabel berbeda agar tidak menimpa $produk sebelumnya)
$produk2 = new produk();
$produk2->kode = 'A001';
$produk2->nama = 'Laptop';
$produk2->harga = 1000000;
$produk2->stok = 5;

// hitung pajak
$pajak2 = produk::pajak * 100;
$jumlahpajak2 = $produk2->harga * produk::pajak;

// total
$total2 = $produk2->harga + $jumlahpajak2;

echo "Produk: " . $produk2->nama;
echo "<br/>";
echo "Harga: " . $produk2->harga;
echo "<br/>";
echo "Stok: " . $produk2->stok;
echo "<br/>";
echo "Pajak: " . $pajak2 . "%";
echo "<br/>";
echo "Total Harga: Rp" . $total2;

?>