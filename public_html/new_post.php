<?php

session_start();

include "../php/db_conn.php";


if (isset($_POST['title']) && isset($_POST['body'])) {

    $t = $_POST['title'];
    $b = $_POST['body'];
    $id = $_SESSION['id'];

    $stmt = $pdo->prepare('INSERT INTO post (title, body, author_id) VALUES (?, ?, ?)');
    $stmt->execute([$t, $b, $id]);

    header("Location: admin.php");

    exit();

}

?>