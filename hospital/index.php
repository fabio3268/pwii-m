<?php
require __DIR__ . "/../source/autoload.php";
use Source\Models\Hospital\Doctor;
use Source\Models\Hospital\Patient;

$doctor = new Doctor();
$patient = new Patient();
var_dump($doctor,$patient);
