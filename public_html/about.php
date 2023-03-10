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
    <link href="./css/about.css" rel="stylesheet">
    <title>benjamnsmith - About</title>
</head>

<body>
    <?php
    
    include "navbar.html";
    
    ?>

    <section id="intro">
        <p class="name"><span>About</span></p>
    </section>
    <div class="line"></div>
    <section id="content">
        <div class="col1">
            <p>&emsp;&emsp;&emsp;&emsp;I'm Ben, a computer systems student at the University of Minnesota - Twin Cities. I'm fascinated 
                by the construction of modern systems, from enterprise intranets to the world wide web. Keeping up with the latest 
                technology is essential, and I'm passionate about exploring recent developments in <span>computer security</span> through sources 
                like the <a href="https://www.usenix.org/publications/proceedings" target="_blank">USENIX</a> conference and 
                <a href="https://googleprojectzero.blogspot.com/" target="_blank">Google's Project Zero</a>.</p>

            <p>&emsp;&emsp;&emsp;&emsp;Aside from my studies, I enjoy learning about different cultures and languages. I speak <span>Russian</span> 
                and <span>French</span> and had the chance to teach English to elementary school students during my time studying in Montpellier, France 
                during Fall 2022.
            </p>
            
            <p>
                &emsp;&emsp;&emsp;&emsp;As an undergraduate <span>teaching assistant</span>, I create and run weekly labs for upperclassmen computer science minors 
                and MIS students on topics around <span>computer systems</span> focusing on C, x86_64, and memory management. I also volunteer with the Hennepin County 
                Library, helping patrons with basic computer skills and online tasks to provide access to digital resources.
            </p>
        </div>
        <div class="col2">
            <img src="./img/me-autumn.jpg" />
            <p class="quick_facts">
            I'm interested in any programming language that allows me to hack together what I'm looking to achieve. I mostly use <span>Python</span>,
             but recently have been intrigued by <span>JavaScript</span>. I'm "classially trained," as it were, in <span>C</span>.
                This website is written almost completely in <span>PHP</span>.  
                <br>
                <br>
                <a href="https://app.hackthebox.com/profile/1415198" target="_blank">HTB profile</a> 
                and <a href="#">machine writeups</a>. 
                <br>
                <br>
                In Feb 2023 my team and I won Deloitte's annual 
                <a href="https://www.linkedin.com/posts/benjamnsmith_i-spent-the-past-weekend-in-westlake-tx-activity-7037083343682736128-jVmF" target="_blank">Cyber Threat Competition!</a>    
            </p>
        </div>
        

    </section>
    <?php
    
    include "footer.html";
    
    ?>
</body>

</html>