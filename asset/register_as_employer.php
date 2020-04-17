<?php
  define('__CONFIG__',true);
   require_once "../inc/config.php";
  
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    header('Content-Type: application/json');
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];
    $email = Filter::String( $_POST['email'] );
        $return = [];

        $user_found = User::Find($email);

        if($user_found) {
            // User exists 
            // We can also check to see if they are able to log in.
            
            $return['error'] = "You already have an account";
            $return['is_logged_in'] = false;
            echo json_encode($return, JSON_PRETTY_PRINT);
            exit;
            
            
        } else {
            // User does not exist, add them now. 

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $addUser = $conn->prepare("INSERT INTO employers(email, PASSWORD,phone_no,first_name,last_name) VALUES(LOWER(:email), :password,:phone_no,:first_name,:last_name)");
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->bindParam(':first_name', $first_name, PDO::PARAM_STR);
            $addUser->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            $addUser->bindParam(':phone_no', $phone_no, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $conn->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;
            $return['redirect'] = 'login_as_employer.php';
            $_SESSION['is_logged_in'] = true;
            $_SESSION['type']="employer";
            echo json_encode($return, JSON_PRETTY_PRINT); 

            exit;
   

   }
}else {
        // Die. Kill the script. Redirect the user. Do something regardless.
        exit('Invalid URL');
    }
    
    
?>