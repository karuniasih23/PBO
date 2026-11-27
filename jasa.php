<?php

namespace Pbo\Marketplace;

require_once('./propertyConstant.php');

use Pbo\Marketplace\Produk;

class jasa  {

    public function payment($tipe){
        return match($tipe){
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "hanya bisa va dan qris"
        };
    }

}
?>