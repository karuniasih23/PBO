
<?php

class produk {

    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Method untuk menghitung persentase pajak
    public function pajak() {
        return self::PAJAK * 100;
    }

    // Method untuk menghitung total harga setelah pajak
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

// Object
$produk = new produk();

$produk->kode = 'A001';
$produk->nama = 'Laptop';
$produk->harga = 1000000;
$produk->stok = 5;

// Menampilkan data produk
echo "Kode Produk: " . $produk->kode;
echo "<br>";
echo "Nama Produk: " . $produk->nama;
echo "<br>";
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.');
echo "<br>";
echo "Stok: " . $produk->stok;
echo "<br>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br>";
echo "Total Harga: Rp" . number_format($produk->total(), 0, ',', '.');

?>
