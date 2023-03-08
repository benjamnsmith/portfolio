<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&family=Oxygen+Mono&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet" />
    <link href="./css/blog.css" rel="stylesheet">
    <title>benjamnsmith - Admin</title>
</head>

<body>
    <?php
    
    include "navbar.html";
    
    ?>

   <section id="intro">
        <p class="name"><span>Admin</span></p>
    </section>  
    <div class="line"></div>

    <?php 
    session_start();

    include "../php/db_conn.php";

    if (isset($_SESSION['username'])){
        include "blog_panel.php";
    } else {
        include "login_form.html";
    }

    ?>
     

<?php
    
    include "footer.html";
    
    ?>

</body>
</html>