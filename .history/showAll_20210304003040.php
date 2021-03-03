<?php

$array = json_decode(file_get_contents("students.cfg"));
foreach ($array as $key => $value) {
    # code...
}

$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student));

echo "[" . implode(",", $studentsArray) . "]";