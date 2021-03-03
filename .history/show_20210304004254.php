<?php

$array = json_decode(file_get_contents("students.cfg"), true);

if (isset($_GET['dni']))
    echo json_encode($array[$_GET['dni']]);
