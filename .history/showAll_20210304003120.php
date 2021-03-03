<?php

$array = json_decode(file_get_contents("students.cfg"));
foreach ($array[0] as $item) {
    echo $item;
}

$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student));

echo "[" . implode(",", $studentsArray) . "]";