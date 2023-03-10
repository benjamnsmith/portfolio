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
    <link href="./css/styles.css" rel="stylesheet">
    
    <title>benjamnsmith</title>
</head>
<body>
    
    <?php
    
    include "navbar.html";
    
    ?>
  
  <section id="terminal">
    <p class="name">Hi, my name is <span></span></p>
  
    <h3>Aspiring security engineer and curious web developer.</h3>
  </section>
  <div class="line"></div>
  <section id="projects">
    <?php
      include "../php/db_conn.php";
      if (isset($pdo)){
        $stmt = $pdo->prepare('SELECT title, body FROM project ORDER BY created DESC');
        $stmt->execute();
      }
    ?>
      <?php
      if (isset($stmt)){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '
        <article>
          <h4>Latest project</h4>
          <h3>' . $row["title"] . '</h3>
          <div class="latest-description">
            <p>' . $row["body"] . '</p>
          </div>
        </article>
        ';
      }
        

      ?>
      <?php
      if (isset($stmt)){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '
        <article>
          <h3 id="left_float">' . $row["title"] . '</h3>
          <div class="latest-description">
            <p>' . $row["body"] . '</p>
          </div>
        </article>
        ';
      }
        

      ?>
      <?php
      if (isset($stmt)){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '
        <article>
          <h3>' . $row["title"] . '</h3>
          <div class="latest-description">
            <p>' . $row["body"] . '</p>
          </div>
        </article>
        ';
      }
      ?>
    <p class="call_to_action">You can read about more of my projects on the <a href="./projects.php">Projects</a> page.</p>
  </section>
  <!-- <section id="contact">
    <div class="contact-box">
      <h3>Contact Me</h3>
      <p>I'm always interested in hearing from people.<br> You can reach me at my <a href="#">email</a>.</p>
    </div>
  </section> -->
  <?php
    
    include "footer.html";
    
    ?>
  
    
</body>
<script src="./index.js" defer></script>
</html>
