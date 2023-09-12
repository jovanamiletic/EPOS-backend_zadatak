<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Sačuvani podaci u JSON fajlu
$json_file = 'forma_podaci.json';
$existing_data = [];

if (file_exists($json_file)) {
    $existing_data = json_decode(file_get_contents($json_file), true);
}

$new_data = [
    "name" => $_POST['fullName'],
    "email" => $_POST['email'],
    "phone" => $_POST['phone']
];

$existing_data[] = $new_data;

file_put_contents($json_file, json_encode($existing_data));
}else {
  echo "Morate popuniti formu i poslati je.";
}
?>