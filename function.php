<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new person("Cindy Andira", "Manna");
// panggil function
$person1->sayHello("Cindy Andira");
