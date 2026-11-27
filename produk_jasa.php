
<?php

require_once('./jasa.php');

use Pbo\Marketplace\jasa;

$produk = new jasa('POO01', 'Laptop', 1000000, 5);



echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->hitungPajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->hitungTotal();

echo "<br>";
echo "Metode Pembayaran: " . $produk->payment('qris');
 ?>