<?php

$array = json_decode(file_get_contents("students.cfg"), true);

$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student, true));

echo "[" . implode(",", $studentsArray) . "]";