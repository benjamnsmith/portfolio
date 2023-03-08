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
    <title>benjamnsmith - Blog</title>
</head>

<body>

<?php
    
    include "navbar.html";

    include "../php/db_conn.php";

    $stmt = $pdo->prepare('SELECT title, body, created FROM `post` WHERE id = ?');

    $stmt->execute([$_GET["id"]]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    ?>
    <section id="intro">
        <p class="name"><span>Blog - 
            <?php
                echo $row["title"]
            ?>
        </span></p>
    </section>
    <div class="line"></div>
    <section>


<?php
    echo '
        <div>
        <p class="post_body">' .$row["body"] . '</p>
        </div>
    
    ';

?>

     
  
        
    </section>



</body>

</html>