<?php
    include "koneksi.php";

    $sql = "CREATE TABLE person (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        role VARCHAR(50) NOT NULL,
        availability VARCHAR(50),
        age INT(4),
        location VARCHAR(50),
        years_experience VARCHAR(50),
        email VARCHAR(50)
    )";

        #log error 
        // var_dump($koneksi->query($sql));
        // die;


    if ($koneksi->query($sql) == TRUE) 
    {
        # code...
        echo "Tabel berhasil dibuat";
        
    } else {
    
        echo "Tabel gagal dibuat";
    }




?>