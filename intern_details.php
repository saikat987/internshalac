<?php
    define("__CONFIG__",true);
    require_once "inc/config.php";
    Page::ForceLogin();
    
    $title = $_POST['title'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];
    $start_date = $_POST['start_date'];
    $stipend = $_POST['stipend'];
    $apply_by = $_POST['apply_by'];
    $user_id=$_SESSION['user_id'];
    $addi = $conn->prepare("INSERT INTO internships(title,employer_fk,company,location,duration,start_date,stipend,apply_by) VALUES(:title, :user_id,:company,:location,:duration,:start_date,:stipend,:apply_by)");
            $addi->bindParam(':title', $title, PDO::PARAM_STR);
            $addi->bindParam(':user_id', $user_id, PDO::PARAM_STR);
            $addi->bindParam(':company', $company, PDO::PARAM_STR);
            $addi->bindParam(':location', $location, PDO::PARAM_STR);
            $addi->bindParam(':duration', $duration, PDO::PARAM_STR);
            $addi->bindParam(':start_date', $start_date, PDO::PARAM_STR);
            $addi->bindParam(':stipend', $stipend, PDO::PARAM_STR);
            $addi->bindParam(':apply_by', $apply_by, PDO::PARAM_STR);
            $addi->execute();
    $response['success'] = true;
    $response['message'] = "Internship Posted successfully";
    echo "succesfully submitted";
    

?>