<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new person("Cindy Andira", "Manna");
// manipulasi properti nama, alamat, negara
$person1->nama = "Cindy Andira";
// menampilkan hasil
echo "nama = {$person1->nama}";
