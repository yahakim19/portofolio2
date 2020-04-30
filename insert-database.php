<?php

    include "koneksi.php";


    $sql = "INSERT INTO person(
        id,
        name,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE (
        '1',
        'Hactiv8',
        'Front End Developer',
        'Full Time',
        '23',
        'Jakarta',
        '2',
        'email@email.com'
    )";


        if ($koneksi->query($sql) == TRUE) {
            # code...
            echo "Insert Data Berhasil";
        } else {
            # code...
            echo "Insert Data Gagal";
        }
        



?>