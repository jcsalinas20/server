<?php

$array = file_get_contents("students.c");
$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student));

echo "[" . implode(",", $studentsArray) . "]";