<?php

include "../php/db_conn.php";

if (isset($_POST['button'])){
    $post_id = $_POST["button"];
    $stmt = $pdo->prepare("DELETE FROM post WHERE id = ?");
    $stmt->execute([$post_id]);

    header("Location: admin.php?val=" . $_POST['button']);
    exit();
} else {
    header("Location: admin.php?error=1");
    exit();
}





?>