<?php 

session_start(); 

include "../php/db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    } else{

        $stmt = $pdo->prepare('SELECT * FROM user WHERE username= ?');
        $stmt->execute([$uname]);

        $result = $stmt->fetch();

        if ($stmt->rowCount() === 1) {

            $row = $result;

            if ($row['username'] === $uname && password_verify($pass, $row["password"])) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                header("Location: admin.php");

                exit();

            }else{

                header("Location: index.php");

                exit();

            }

        }else{

            header("Location: index.php");

            exit();

        }

    }

} else{

    header("Location: index.php");

    exit();

}

?>