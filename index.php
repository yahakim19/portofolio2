<!DOCTYPE html>
<?php

require "show-data.php"; 
include "update-data.php";


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="http://localhost/profile/assets/styles/profile.css"> -->
    <link rel="stylesheet" href="assets/styles/profile.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUCT</a></li>
            <li><a href="#">GALLERY</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>


    </nav>

    <section id="box-profile">
        <div class="img-profile">
            <div class="photo" style="background-image: url('assets/images/images.jpg');"></div>

        </div>

        <div class="description">
            <h1 id="pName"><?php echo $name; ?></h1>
            <p id="pRole"><?php echo $role; ?></p>
            <a href="#inputForm" onclick="editForm()" class="button bg-blue">Edit</a>
            <a href="#" class="button border-green">Resume</a>

        </div>

        <div class="information">
            <div class="data">
                <p class="field">Availability</p>
                <p id="pAvail" class="text-grey"><?php echo $availability; ?></p>
            </div>
            <div class="data">
                <p class="field">Age</p>
                <p id="pAge" class="text-grey"><?php echo $age; ?></p>
            </div>
            <div class="data">
                <p class="field">Location</p>
                <p id="pLoc" class="text-grey"><?php echo $location; ?></p>
            </div>
            <div class="data">
                <p class="field">Year Experience</p>
                <p id="pExp" class="text-grey"><?php echo $years_experience; ?></p>
            </div>
            <div class="data">
                <p class="field">Email</p>
                <p id="pEmail" class="text-grey"><?php echo $email; ?></p>
            </div>
        </div>
    </section>

    <section id="input-form">
        <div class="form">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form">
                    <label>Id User</label>
                    <input type="number" id="inpIdUser" name="id_user" value="<?php echo $id; ?>">
                </div>
                <div class="form">
                    <label>Name</label>
                    <input type="text" id="inpName" name="name" placeholder="Insert Your Full Name">
                </div>
                <div class="form">
                    <label>Role</label>
                    <input type="text" id="inpRole" name="role" placeholder="Your Role">
                </div>
                <div class="form">
                    <label>Availability</label>
                    <input type="text" id="inpAvail" name="availability" placeholder="Full Time / Part Time">
                </div>
                <div class="form">
                    <label>Age</label>
                    <input type="number" id="inpAge" min="0" name="age" placeholder="example : 2">
                </div>
                <div class="form">
                    <label>Location</label>
                    <input type="text" id="inpLoc" name="location">
                </div>
                <div class="form">
                    <label>Years Experience</label>
                    <input type="number" id="inpExp" min="0" name="experience">
                </div>
                <div class="form">
                    <label>Email</label>
                    <input type="email" id="inpEmail" name="email">
                </div>
                <div class="form">
                    <!-- <input onclick="submitForm()" type="submit" value="SUBMIT" class="bg-green"> -->
                    <input  type="submit" value="SUBMIT" class="bg-green" name="submit">
                </div>

            </form>
        </div>
    </section>
    <script text="text/javascript" src="assets/javascript/profile.js"></script>
</body>
<script>

</script>

</html>