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
  <link href="./css/projects.css" rel="stylesheet">
  <title>benjamnsmith - Projects</title>
</head>

<body>
  <?php
    
    include "navbar.html";
    
    ?>

  <section id="intro">
    <p class="name">Here are some<span>Projects</span>I've been working on.</p>

  </section>
  <div class="line"></div>
    <section class="projects">
      <h4>Latest project</h4>
      <?php

        include "../php/db_conn.php";

        function getMonth($m){
          if ($m === "01"){
            return "Jan";
          } else if ($m === "02"){
            return "Feb";
          } else if ($m === "03"){
            return "Mar";
          } else if ($m === "04"){
            return "Apr";
          } else if ($m === "05"){
            return "May";
          } else if ($m === "06"){
            return "Jun";
          } else if ($m === "07"){
            return "Jul";
          } else if ($m === "08"){
            return "Aug";
          } else if ($m === "09"){
            return "Sep";
          } else if ($m === "10"){
            return "Oct";
          } else if ($m === "11"){
            return "Nov";
          } else if ($m === "12"){
            return "Dec";
          } 
    
          return "None";
    
        }
        if (isset($pdo)){
          $stmt = $pdo->prepare('SELECT title, body, created, skills, link FROM project ORDER BY created DESC');
          $stmt->execute();
  
          if ($stmt->rowCount() > 0) {
            // output data of each row
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $skills = explode(",", $row["skills"]);
              echo '
              <article>
              <h3>' . $row["title"] . ' <em>(' . getMonth(substr($row["created"], 5, 2)) . ' ' . substr($row["created"], 0, 4) .')</em></h3>
              <p>' . $row["body"] . '</p>
              <div class="meta">
              <p class="skills"><strong>SKILLS:</strong> ';
              for($x = 0; $x < count($skills); $x++) {
                echo "<span>" . $skills[$x] ."</span>" ;
                if ($x+1 <> count($skills)){
                  echo ', ';
                }
              }
              echo '</p>';
              if ($row["link"] <> ""){
                echo ' <a href="' . $row["link"] .'" class="gh">&lt; GitHub Repo &gt;</a>' ;
              }
                  
              echo '</div></article>';
            }
          } else {
            echo "0 results";
          }
        }
        
      ?>
    </section>
  </div>

</body>

</html>