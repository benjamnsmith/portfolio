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
    
    ?>
     <section id="intro">
        <p class="name"><span>Blog</span></p>
        <p>This is mostly HTB lab writeups</p>
    </section>
    <div class="line"></div>
    <section>
        
    </section>

    <?php

        include "../php/blog_fetch.php";

        if ($stmt->rowCount() > 0) {
            // output data of each row
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo 
              "<div class='post'> 
               <h2>"
               . $row["title"]
               . "</h2><p><em>"
               . parseTimeStamp($row["created"])
               ."</em></p>
               <p>"
               . substr($row["body"], 0, 300)
               . "...</p>
               <a href='post.php?id="
               . $row["id"]
               . "'>Read more</a> 
               </div>"    ;    
            }
          } else {
            echo "0 results";
          }
    ?> 

    <?php
    
        include "footer.html";
    
    ?>

</body>