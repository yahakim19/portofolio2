<?php
    include "koneksi.php";

if (isset($_POST['submit'])) {

    $id_user = $_POST["id_user"];
    $name = $_POST["name"];
    $role = $_POST["role"];
    $availability = $_POST["availability"];
    $age = $_POST["age"];
    $location = $_POST["location"];
    $experience = $_POST["experience"];
    $email = $_POST["email"];

    $sql = "UPDATE person SET 
    name='$name', 
    role='$role', 
    availability='$availability', 
    age = '$age', 
    location='$location', 
    years_experience = '$experience', 
    email ='$email'
     WHERE 
     id='$id_user' ";

    if ($koneksi->query($sql) == TRUE) {

        # code...
        echo "Update Data Berhasil";


    } else {
    # code...

        echo "Update Data Gagal";
    }

} 

// include "koneksi.php";

// if (isset($_POST['submit'])) {
//     $id_user = $_POST["id_user"];
//     $nama = $_POST["nama"];
//     $role = $_POST["role"];
//     $availability = $_POST["availability"];
//     $age = $_POST["age"];
//     $location = $_POST["location"];
//     $experience = $_POST["years"];
//     $email = $_POST["email"];

//     $sql = "UPDATE person SET nama='$nama', role='$role', availability='$availability', age='$age', location='$location', experience = '$experience', email = '$email' WHERE id = '$id_user'";

//     if ($koneksi->query($sql) == TRUE) {
//         echo "Update Data Berhasil";
//     } else {
//         echo "Update Data Gagal!";
//     }
// }
// 
?>

