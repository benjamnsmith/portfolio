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
  
    <!-- <h3>I design and analyze the internet</h3> -->
    <h3>This will say something cute ^^</h3>
    
    <h3 class="prompt">  </h3>
  
  </section>
  <div class="line"></div>
  <section id="projects">
    <article>
      <h4>Latest project</h4>
      <h3>Driving Cost Browser Extension</h3>
      <div class="latest-description">
        <p>
          In the summer of 2022, gas prices were a hot topic. I designed a web extension
          to calculate the cost of a given driving trip so you can see just how much each trip will cost.
          Dynamically alters the page to show trip cost inline with other trip details without pulling focus to the extension.
        </p>
      </div>
  
    </article>
    <article>
      <h3 id="left_float">Syntax disambiguation</h3>
      <p>As my final project for my computational linguistics course, I tackled ambiguous part-of-speech resolution in building syntax trees. We built a syntax tree producer based on the shift-reduce model that builds all valid syntax trees from a given context-free grammar (CFG).
    </article>
    <article>
      <h3>Typo-tolerant password security</h3>
      <p>For my computer security class, we analyzed a typo-tolerant password system (some really great work out of the University of Wisconsin - Madison, you can read about it on the <a href="https://typtop.info/" target="_blank">TypTop</a> website). We drew on work in computational linguistics to try and get the system to authorize us based on likely typos.</p>
    </article>
    <p>You can read about more of my projects on the <a href="./projects.html">Projects</a> page.</p>
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