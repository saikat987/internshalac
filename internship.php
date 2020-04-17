<?php
     require_once "header.php";
     require_once "inc/config.php";

    $result=$conn->prepare("SELECT * FROM internships");
    $result->execute();
    if ($result->rowCount()<=0) {
        die("Error: "  );
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
            <?php
            if(isset($_SESSION["is_logged_in"]) and !isset($_SESSION['type']))
            {
            ?>
            <div class="apply">
                <div class="apply-button">
                <button class="apply-button " type="submit" >apply</button> 
                
                </div>
            </div>
        <?php } ?>
        </div>
</form>
        
        <?php }  ?>
        </div>
        
  


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>