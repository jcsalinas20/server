<?php

$array = ['1234' => ["name" => "Carlos", "surname" => "Salinas", "age" => "20", "dni" => "112222"]];
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['dni']) && isset($_POST['age'])) {
    $array[$_POST['dni']] = [];
    $array[$_POST['dni']]['name'] = $_POST['name'];
    $array[$_POST['dni']]['surname'] = $_POST['surname'];
    $array[$_POST['dni']]['age'] = $_POST['age'];
    $array[$_POST['dni']]['dni'] = $_POST['dni'];
    echo json_encode(['status' => true]);
}
