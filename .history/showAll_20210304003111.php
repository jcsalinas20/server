<?php

$array = json_decode(file_get_contents("students.cfg"));
for

$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student));

echo "[" . implode(",", $studentsArray) . "]";