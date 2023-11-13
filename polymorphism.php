<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Cindy Andira");
var_dump($company);

$company->programmer = new BackendProgrammer("Cindy Andira");
var_dump($company);

$company->programmer = new FrontendProgrammer("Cindy Andira");
var_dump($company);

sayHelloProgrammer(new Programmer("Cindy Andira"));
sayHelloProgrammer(new BackendProgrammer("Cindy Andira"));
sayHelloProgrammer(new FrontendProgrammer("Cindy Andira"));
