<?php

$array = json_decode(file_get_contents("students.cfg"));
echo "<pre>";
print_r($array);
echo "</pre>";
foreach ($array as $item) {
    // echo $item;
}

$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student, true));

// echo "[" . implode(",", $studentsArray) . "]";