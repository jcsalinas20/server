<?php

$array = json_decode(file_get_contents("students.cfg"), true);

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['dni']) && isset($_POST['age'])) {
    $array[$_POST['dni']] = [];
    $array[$_POST['dni']]['name'] = $_POST['name'];
    $array[$_POST['dni']]['surname'] = $_POST['surname'];
    $array[$_POST['dni']]['age'] = $_POST['age'];
    $array[$_POST['dni']]['dni'] = $_POST['dni'];
    echo json_encode(['status' => true]);
} else echo json_encode(['status' => "No se han proporcionado los datos necesarios."]);
