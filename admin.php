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
    <link href="./css/about.css" rel="stylesheet">
    <title>benjamnsmith - Blog</title>
</head>

<body>
    <?php
    
    include "navbar.html";
    
    ?>
     <section id="intro">
        <p class="name"><span>Admin</span></p>
    </section>
    <div class="line"></div>
    <section class="content">
        <div margin="50%">
            <form action="login.php" method="post">
                <label for="username">Username</label>
                <input placeholder="user" required></input>
                <br>
                <label for="password">Password</label>
                <input placeholder="pass" required></input>
                <br>
                <button>Submit</button>
            </form>
        </div>
        
        
    </section>

<?php
    
    include "footer.html";
    
    ?>

</body>