<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="project_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/d791d40d5f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <section class="about-header">
        <?php include('templates/navbar.php'); ?>

        <div class="about-intro">
            <h1>About Project: New World</h1>
        </div>


    </section>

    <!--About us content-->

    <section class="about-project">
        <div class="row">
            <div class="about-col">
                <h1>This is a database project</h1>
                <p>This project is about the use of database systems and applying an interface to that database.
                    <br>This project is meant for educational purposes and is not designed for anything else but a school project. 
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    <br>Laboriosam placeat voluptatem iusto! 
                    Explicabo saepe est voluptatibus porro dicta. Culpa, voluptates?</p>
            </div>
            <div class="about-col">
                <img src="images/database.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Footer -->

    <?php include('templates/footer.php'); ?>

    <!-- Javascript -->

    <?php include('scripts/nav_sticky.php'); ?>

    <?php include('scripts/toggle_menu.php'); ?>

</body>
</html>