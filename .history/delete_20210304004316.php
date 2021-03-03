<?php

$array = json_decode(file_get_contents("students.cfg"), true);

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    if (isset($array[$dni])) {
        unset($array[$dni]);
        file_put_contents("students.cfg", json_encode($array));
        echo json_encode(['status' => true]);
    } else echo json_encode(['status' => false]);
} else echo json_encode(['status' => "No se ha proporcionado el campo necesario."]);
