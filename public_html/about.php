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
        <img src="./img/me-autumn.jpg" />
        <p class="about">My name is Ben and I study computer systems at the University of Minnesota - Twin Cities.
            I am fascinated by the way our systems are built, from the enterprise intranets to the world wide web as a
            whole.
            Technology is changing at a rapid pace now more than ever, and continuing to design apps etc. requires a
            deep understanding of the underlying systems upon which they're built, and their seurity.
            I really enjoy reading submissions from the annual <a
                href="https://www.usenix.org/publications/proceedings" target="_blank">USENIX</a> conference, as well as the
            content posted by <a href="https://googleprojectzero.blogspot.com/" target="_blank">Google's Project Zero</a>.</p>
        <p class="about"> Outside of tech, I'm interested in languages
            and cultures of the world. I study Russian and French in addition to CS, and spent my Fall 2022 semester in
            Montpellier, France. There, I studied linguisitics and its appilcations, and taught English to elementary school
            students.
        </p>
        <p class="about">
            I'm excited about computer systems and security, and I want everyone else to be too! I am an undergraduate teaching
            assistant for a computer systems class aimed at upperclassmen computer science minors or MIS students. I create weekly labs
            for them with the goal of exploring C, memory management, assembly code, and more. <br>
            I also volunteer with the Hennepin County Library where I help patrons with basic computer skills (typing, web browsing, printing) as well
            as with job applications and other online tasks. 
        </p> 
        <p class="quick_facts">
        I'm interested in any programming language that allows me to hack together what I'm looking to achieve. I mostly use <span>Python</span> 
            (<span class="subtype">Apache Thrift</span>, <span class="subtype">Flask</span>), but recently have been intrigued by <span>JavaScript</span>. 
            This website is written almost completely in <span>PHP</span>. In school, <span>C</span> was my language of choice. 
            <br>
            <br>
            I've recently become geeked about HTB and would love to share my experience there with you. Take a peek at my 
            <a href="https://app.hackthebox.com/profile/1415198" target="_blank">HTB profile</a> or 
            see some of my <a href="#">machine writeups</a>. 
            <br>
            <br>
            In Feb 2023 my team and I won Deloitte's annual Cyber Threat Competition!    
        </p>

    </section>
    <?php
    
    include "footer.html";
    
    ?>
</body>

</html>