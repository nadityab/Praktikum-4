<?php

use kucing\kucing as hewanKucing;
use burung\burung as hewanBurung;

include "kucing/hewan.php";
include "burung/hewan.php";

$pus = new hewanKucing;
$pus->setNama("Rake");
$pus->setKelamin("Betina");
echo "Nama Kucing : ".$pus->getNama() . "\n"; 
echo "Jenis Kelamin : ".$pus->getKelamin() . "\n";

echo "Makanannya : ".$pus->makan() . "\n";
echo "Bunyinya : ".$pus->bunyi();
echo "\n~~~~~~~next~~~~~~~\n";

$adip = new hewanBurung;
$adip->setNama("Adip");
$adip->setKelamin("Jantan");
echo "Nama Burng : ".$adip->getNama() . "\n"; 
echo "Jenis Kelamin : ".$adip->getKelamin() . "\n";

echo "Makanannya : ".$adip->makan() . "\n";
echo "Bunyinya : ".$adip->bunyi();
echo "\nTamat";

