<?php
     require_once "header.php";
     require_once "inc/config.php";
     if(!isset($_SESSION['user_id']))
        {echo "you are not logged_in please log in.";
exit;}
     $user_id=$_SESSION['user_id'];
     if(isset($_SESSION['type']))
     {$result=$conn->prepare("SELECT * FROM internships INNER JOIN employers  ON internships.employer_fk=employers.id WHERE internships.employer_fk=:user_id ");}
 else
    {$result=$conn->prepare("SELECT * FROM internships INNER JOIN apply_interns ON internships.id=apply_interns.internship_fk WHERE apply_interns.student_fk=:user_id");}
    $result->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $result->execute();
    if ($result->rowCount()<=0) {
        echo "you dont have any internships applied or posted";
        die();
    }       
?>
<! DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internshala(Virtual) | Register</title>
    <link rel="icon" href="img/favicon.ico?v=3" />
    <meta name="description" content="Internshala is India's no.1 internship and training platform with 40000+ paid internships in Engineering, MBA, media, law, arts, and other streams." />
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body > 
   
    <div class = "container">
            <?php
               foreach ($result as $row)
                {?>
        <form method="POST" action="apply.php?code=<?php echo $row['id']; ?>">
        <div class="internships">
            <div class="about-company">
                <div class="company-name">
                    <h2><?php echo $row['title']; ?></h2>
                </div>
                <div class="company-website">
                    <h3><?php echo $row['company']; ?></h3>
                </div>
                <div class"location">
                Locations(s):<?php echo $row['location']; ?>
                </div>
            </div>

            <div class="about-internship">
                <div class="start-date">
                <p>Start Date</p>
                <p><?php  echo $row['start_date']; ?></p>
                </div>
                <div class="duration">
                <p>Duration</p>
                <p><?php  echo $row['duration']; ?></p>
                </div>
                <div class="stipend">
                <p>Stipend</p>
                <p>₹<?php echo $row['stipend']; ?>/Month</p>
                </div>
                <div class="posted-on">
                <p>Posted On</p>
                <p><?php  echo $row['posted_on']; ?></p>
                </div>
                <div class="apply-by">
                <p>Apply By</p>
                <p><?php echo $row['apply_by']; ?></p>
                </div>
            </div>
            
        </div>
</form>
        
        <?php }  ?>
        </div>
        



    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>