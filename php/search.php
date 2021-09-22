<?php 
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    // these response are sending ajax to php and getting from php to ajax
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%' ");  
    if(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }else {
        $output .= "No user found related to your search term";
    }
    echo $output;
?>