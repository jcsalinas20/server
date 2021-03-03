<?php

$array = ['1234' => ["name" => "Carlos", "surname" => "Salinas", "age" => "20", "dni" => "112222"]];
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    unset($array[$dni]);
    echo json_encode(['status' => true]);
}
