<?php

// import data/person.php
require "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new manager();
$manager1->nama = "Cindy";
$manager1->sayHello("Novia");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1 = new vicePresident();
$vicePresident1->nama = "Novia";
$vicePresident1->alamat = "Tebing Tinggi";
$vicePresident1->sayHello("Novia");
