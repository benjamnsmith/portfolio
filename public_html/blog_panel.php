<section class="content">
    <a href="create.php">New post</a>
    |
    <a href="logout.php">Log out</a>
    <?php

    

    include "../php/blog_fetch.php";

        if ($stmt->rowCount() > 0) {
            // output data of each row
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo 
              "<div class='post'> 
              <p>
              <strong>"
              . $row["title"]
              . "</strong>   --   "
              . parseTimeStamp($row["created"])
              . "</p>
              <a href=#>Edit</a> - 
              <a href='delete.php' method='post' name='button' value='button'>Delete</a>
              <form action='delete.php' method='post' display='inline'><button name='button' value=" . $row["id"] . " display='inline'>Delete</button></form>" ;        
               
            }
          } else {
            echo "<p>0 results</p>";
          }

    ?>

</section>