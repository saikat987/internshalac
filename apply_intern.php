<?php
     
     require_once "header.php";
     $user_id=$_SESSION['user_id'];
     Page::ForceLogin();
     
    // Require the config
     
           $Userdetail = $conn->prepare("SELECT email,phone_no FROM students WHERE  id= :user_id LIMIT 1");
           $Userdetail->bindParam(':user_id', $user_id, PDO::PARAM_INT);
           $Userdetail->execute();
           $Userdetail = $Userdetail->fetch(PDO::FETCH_OBJ);

    
    $why = $_POST['why'];
    $avail = $_POST['avail'];
    $experience = $_POST['experience'];
    $project = $_POST['project'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $email1 = (string) $Userdetail->email;
    $phone_no = (int) $Userdetail->phone_no;
    $icode=$_GET["code"];
           $checkdetail = $conn->prepare("SELECT student_fk,internship_fk FROM apply_interns WHERE  student_fk= :user_id  AND internship_fk=:icode LIMIT 1");
           $checkdetail->bindParam(':user_id', $user_id, PDO::PARAM_INT);
           $checkdetail->bindParam(':icode', $icode, PDO::PARAM_INT);
           $checkdetail->execute();
           if ($checkdetail->rowCount()>0) {
            ?>
            <div class="container"><head>you already have applied for this</head>
            <br>
            <a href="internship.php">click here to apply for other internships</a></div>
            <?php
               
               die();
            }  
    
    
    $intern=$conn->prepare("INSERT INTO apply_interns(student_fk,internship_fk,why,avail,experience,project,city,address,pincode) VALUES (:user_id,:icode,:why,:avail,:experience,:project,:city,:address,:pincode)");
    $intern->bindParam(':user_id', $user_id, PDO::PARAM_STR);
    $intern->bindParam(':icode', $icode, PDO::PARAM_STR);
    $intern->bindParam(':why', $why, PDO::PARAM_STR);
    $intern->bindParam(':experience', $experience, PDO::PARAM_STR);
    $intern->bindParam(':avail', $avail, PDO::PARAM_STR);
    $intern->bindParam(':project', $project, PDO::PARAM_STR);
    $intern->bindParam(':city', $city, PDO::PARAM_STR);
    $intern->bindParam(':address', $address, PDO::PARAM_STR);
    $intern->bindParam(':pincode', $pincode, PDO::PARAM_STR);
    $intern->execute();?>
    <a href="internship.php">seccesfully applied</a>
<?php
echo $conn->lastInsertId();
?>