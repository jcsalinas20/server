<?php

$array = ['1234' => ["name" => "Carlos", "surname" => "Salinas", "age" => "20", "dni" => "112222"], '22222' => ["name" => "Carlos", "surname" => "Salinas", "age" => "20", "dni" => "112222"]];

$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student));

echo "[" . implode(",", $studentsArray) . "]";