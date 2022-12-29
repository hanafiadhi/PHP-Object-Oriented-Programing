<?php
require_once "data/Programer.php";

$company = new Company();

$company->Programer = new Programer("Hanafi");
// var_dump($company);

$company->Programer = new BackendProgramer("Tasya");
// var_dump($company);

$company->Programer = new FrontendProgramer("Gilbud");
// var_dump($company);

sayProgramer(new Programer("hanafi"));
sayProgramer(new BackendProgramer("Tasya"));
sayProgramer(new FrontendProgramer("Gilbud"));
