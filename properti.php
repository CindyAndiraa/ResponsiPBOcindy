<?php

// import data/person.php
require "data/person.php";

// buat object baru dari kelas person
$person1 = new person("Cindy Andira", "Manna");

// manipulasi properti nama person

// menampilkan hasil
echo "Nama = {$person1->nama}" . PHP_EOL;
echo "Alamat = {$person1->alamat}" . PHP_EOL;
echo "Negara = {$person1->negara}" . PHP_EOL;
