<?php

use Pbo\Marketplace\Produk;

require_once('./PropertyConstant.php');

$produk = new Produk('P001', 'Laptop', 10000000, 5);

echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . Produk::persenPajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->hitungTotal();