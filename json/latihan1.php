<?php

// $mahasiswa = [
//     [
//         "nama" => "wika uspina wati",
//         "nrp" => "173040060",
//         "email" => "wikauspina@gmail.com"
//     ],
//     [
//         "nama" => "Yogipriyono",
//         "nrp" => "173040090",
//         "email" => "yogi@gmail.com"
//     ]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=wpu_laravel', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>