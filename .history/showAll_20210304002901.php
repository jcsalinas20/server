<?php

$array = file_get_contents
$studentsArray = [];
foreach ($array as $student)
    array_push($studentsArray, json_encode($student));

echo "[" . implode(",", $studentsArray) . "]";