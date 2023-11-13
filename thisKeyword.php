<?php

// import data/person.php
require "data/person.php";

// buat object dari kelas person
$person1 = new person("Cindy Andira", "Manna");

// tambahkan value nama di object
$person1->nama = "Cindy Andira";

// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("Novia Alqodri");

// buat object dari kelas person
$person2 = new person("Novia Alqodri", "Tebing Tinggi");

// tambahkan value nama di object
$person2->nama = "viaaa";

// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);
