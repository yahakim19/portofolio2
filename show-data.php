<?php

include "koneksi.php";

$sql = "SELECT * FROM person";

$results = $koneksi->query($sql);

foreach ($results as $result) {
    # code...
    $id = $result['id'];
    $name = $result['name'];
    $role = $result['role'];
    $availability = $result['availability'];
    $age = $result['age'];
    $location = $result['location'];
    $years_experience = $result['years_experience'];
    $email = $result['email'];

    // echo "id: ".$id." nama: ".$name." role: ".$role;
}

?>