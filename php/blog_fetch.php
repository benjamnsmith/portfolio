<?php
    
    include "db_conn.php";
    
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
  
      function parseTimeStamp($ts){
        $date = substr($ts, 0, 10);
        $year = substr($ts, 0, 4);
        $month = substr($ts, 5, 2);
        $day = substr($ts, 8, 2);
  
  
        return getMonth($month) . " " . $day . ", " . $year;
      }

      $stmt = $pdo->prepare('SELECT p.id, title, body, created, username, author_id FROM post p JOIN user u ON p.author_id = u.id ORDER BY created DESC');
      $stmt->execute();
?>