<?php

    // $mahasiswa = [
       
    //    [
    //     "nama" => "Raza Ahmad Ludhiana",
    //     "npm" => "19402074",
    //     "email" => "ahmadludhiana007@gmail.com"
    //    ],
    //    [
    //     "nama" => "Caca",
    //     "npm" => "201248521",
    //     "email" => "caca@gmail.com"
    //    ]
    // ];

    $dbh = new PDO ('mysql:host=localhost;dbname=db_mahasiswa', 'root', '');
    $db = $dbh->prepare('SELECT * FROM mahasiswa');
    $db-> execute();
    $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($mahasiswa);
    echo $data;

?>