<?php

$array = ['1234' => ["name" => "Carlos", "surname" => "Salinas", "age" => "20", "dni" => "112222"], '4321' => ["name" => "aaaa", "surname" => "aaaa", "age" => "aaaa", "dni" => "112222"]];
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    if (isset($array[$dni])) {
        unset($array[$dni]);
        echo json_encode(['status' => true]);
        file_put_contents("students.cfg", json_encode($array));
    } else echo json_encode(['status' => false]);
} else echo json_encode(['status' => "No se ha proporcionado ningún dato."]);
