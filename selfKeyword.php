<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new Person("Cindy Andira", "Manna");
// panggil function
$person1->sayHello("Manna");
// panggil self keyword
$person1->info() . PHP_EOL;
