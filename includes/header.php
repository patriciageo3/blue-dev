<?php

include('php_arrays.php');

?>



<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Blue Developer Directory</title>
        <link rel="stylesheet" href="css/style.css?ver=<?php echo filemtime('css/style.css'); ?>"> 


    </head>

    <body>

        <div id="container">
            <header>
                <h1><span class="blue-text"> Blue </span> Developer Directory</h1>
                <h2><span class="blue-text">Find A Developer</span> NOW</h2>
            </header> 

        <nav id="nav">
        <ul>
            <?php
            foreach ($nav as $value) {
                echo "<li><a href='$value[link]' id='$value[id]'>$value[title]</a></li>";
            } 
            ?>
        </ul>
        </nav> 
        
        <div id="main-page">
            <nav id="navleft">

                <h3> Links </h3>

                <ul id="customSkills">
                    <?php
                    foreach ($navleft as $value){
                        echo "<li><a href=\"$value[link]\" class='navSkill' id='$value[id]'> $value[category]</a></li>";
                    }
                    ?>
                </ul>
                
                <h3 class="newsletter"> Newsletter</h3>
                <p id="emailMessage"> Please enter your information below:</p>
                <form class="newsletter"> 
                    <p>
                        <label for="name"> Name: </label>
                        <input id="newsName" type="text" required> 
                    </p>
                    <p>
                        <label for="email"> E-Mail:</label>
                        <input type="email" id="newsEmail" required>
                    </p>
                    
                    <input type="reset" class="reset">
                    <input type="submit" id="news" value="Send">
                </form>
                
                <p id="confirmSub"> Some text</p>
                <input type="submit" value="Change me!" id="changeInfo">
                <input type="submit" id="unsubscribe" value="Unsubscribe">
            </nav> 
    <div id="content">
