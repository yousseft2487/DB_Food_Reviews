<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");
    include("functions.php"); // include data sanitsing...

    // Connect to database...

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno())

    {
        echo "Connection Failed:".mysqli_connect_error();
         exit;
    }

?>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Food Review Database">
    <meta name="keywords" content="Food, eating, meals, drinks, genre, reviews">
    <meta name="author" content="Thomas Youssef">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Thomas's Food Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/book_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
            <h1>Thomas' Food Reviews</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box side">

        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>
    
        <i>Type part of the title if desired</i>

        <hr />

        Title Search<br />
        Vegetarian Search<br />       
        Meal Search<br />    
        Location Search<br />    
        Rating Search 

        </div>    <!-- / side bar -->        
        