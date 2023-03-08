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
    
    <title>benjamnsmith - Add Project</title>
</head> 

<body>
    <?php 

    include "navbar.html";

    ?>
    <section id="intro">
        <p class="name"><span>Add Project</span></p>
    </section>  
    <div class="line"></div>
    <section class="content">
        <form method="post" action="submit_project.php">
            <label for="title">Title</label>
            <input name="title" id="title" required>
            <br>
            <label for="skills">Skills</label>
            <input name="skills" id="skills" required>
            <br>
            <label for="created">Created (Y-M-D)</label>
            <input name="created" id="created" required>
            <br>
            <label for="body">Body</label>
            <textarea name="body" id="body"></textarea>
            <br>
            <input type="submit" value="Save">
        </form>
    </section>

    

    <?php 

    include "footer.html";

    ?>


</body>
</html>