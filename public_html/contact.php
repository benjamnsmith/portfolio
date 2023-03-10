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
    <link href="./css/generic.css" rel="stylesheet">
    <link href="./css/contact.css" rel="stylesheet">
    
    <title>benjamnsmith - Contact</title>
</head>
<body>
    <?php
    
    include "navbar.html";
    
    ?>
    <section id="intro">
        <p class="name"><span>Contact</span></p>
  </section>
  <div class="line"></div>
  <section class="content">
    <div class="info">
        <div class="email">
            <h2>Send me an email!</h2>
        </div>
        <div class="other-contact">
            <ul>
            <li><a href="mailto:smit9524@umn.edu" class="mail-pic">
                <span class="fa-regular fa-envelope" aria-hidden=true></span>
                <span class="fa-regular fa-envelope-open" aria-hidden=true></span>
                <span class="sr-only">Email</span>
            </a></li>
            <li><a href='https://www.linkedin.com/in/benjamnsmith' target="_blank" class="linkedin-pic">
                <span class="fa-brands fa-linkedin-in" aria-hidden=true></span>
                <span class="fa-brands fa-linkedin" aria-hidden=true></span>
                <span class="sr-only">LinkedIn</span></a></li>
            <li><a href='https://github.com/benjamnsmith' target="_blank" class="github-pic">
                <span class="fa-brands fa-github" aria-hidden=true></span>
                <span class="fa-brands fa-square-github" aria-hidden=true></span>
                <span class="sr-only">GitHub</span></a></li>
            </ul>
            
        </div>
    </div>
  </section>
  <?php
    
    include "footer.html";
    
    ?>
</body>
</html>