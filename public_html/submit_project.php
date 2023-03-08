<?php

session_start();

include "../php/db_conn.php";


if (isset($_POST['title']) && isset($_POST['body'])) {

    $t = $_POST['title'];
    $b = $_POST['body'];
    $s = $_POST['skills'];
    $d = $_POST['created'];

    $stmt = $pdo->prepare('INSERT INTO project (title, body, skills, created) VALUES (?, ?, ?, ?)');
    $stmt->execute([$t, $b, $s, $d]);

    header("Location: admin.php");

    exit();

}

?>