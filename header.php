<?php
     define("__CONFIG__",true);
     require_once "inc/config.php";      
?>
<! DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internshala(Virtual) | Register</title>
    <link rel="icon" href="img/favicon.ico?v=3" />
    <meta name="description" content="Internshala is India's no.1 internship and training platform with 40000+ paid internships in Engineering, MBA, media, law, arts, and other streams." />
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body >
    <div class ="header" >
      <div style="background: #f8f8f8;box-shadow: 2px 2px;">
        <nav class="navbar navbar-expand-md" style="background: #f8f8f8;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <img src="img/nav.jpeg" width=25>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/internshala.png" width=220 alt></a>
        <?php if(!isset($_SESSION['is_logged_in']))
            {?>
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="register.php"><button type="button" class="btn btn-primary">Register</button></a>
            </li>
            
        </ul>
        <?php }?>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <?php if (!isset($_SESSION["is_logged_in"]))
                {?>
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Login</a>
            <div class="dropdown-menu">

                <a class="dropdown-item" href="login_as_student.php">Login As Student</a>
                <a class="dropdown-item" href="login_as_employer.php">Login As Employer</a>
                <a class="dropdown-item" href="terms.php">Terms And codition</a>
                <a class="dropdown-item" href="private.php">Privacy Policy</a>
            </div>
            <?php
        }
        else{
            ?><a class="nav-link" href="logout.php">Logout</a>
            <li class="nav-item">
                <a class="nav-link" href="your_internships.php"> Your Internships</a>
            </li>
        <?php
        If (isset($_SESSION['type']))
        {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="internship_details.php"> post new internship</a>
            </li>

           <?php 
        }
         } ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="internship.php">Internships</a>
            </li>
            
            </ul>
        </div>  
        </nav>
        <br>
      </div>
    </div>