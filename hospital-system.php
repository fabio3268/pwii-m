<?php

require __DIR__ . "/source/autoload.php";

use Source\Models\Hospital\Doctor;
use Source\Models\Hospital\Patient;

$doctor = new Doctor(
    12,
    "Dráuzio Varela",
    "drauzio@hospital.com.br",
    "2345678",
    "4954959",
    "Cardiologista"
);
$patient = new Patient(
    324,
    "Fábio",
    "fabio@gmail.com",
    "456tygf",
    "12/02/1976",
    "Texto para o prontuário"
);

var_dump($doctor);
var_dump($patient);

