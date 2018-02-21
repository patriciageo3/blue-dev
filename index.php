
<?php

include('includes/header.php');

?>

    <section>
        <h2>Welcome to Blue Developer Directory! </h2>
        <img class="float" src="images/web.jpg" alt="web developer directory">
        <h3>Who Are We?</h3>
        <p>We are a fictional website and service that list top web developers around the world. Search and browse fictional web developers on our website absolutley FREE!</p>

        <h3>What Skills Do Our Developers Have?</h3>
        <p>Our listed fictional web developers skill ranges from Graphic design with Photoshop, Illustrator and Fireworks to markup languages like HTML5, XHTML and XML to programming languages such as Javascript, PHP, Python and ASP</p>
    </section>

    <section>
        <h2>Latest Blue Developers</h2>

            <?php foreach ($latestDev as $developer) { 
                echo "<div class=\"developer\"><h4>$developer[name]</h4><ul><li><strong>Location: </strong>$developer[location]</li><li><strong>Skills: </strong>$developer[skills]</li><li><strong>Availability: </strong>$developer[availab]</li></ul><a href='$developer[profile]'>View Profile </a></div>";
            }
            ?>

    </section>



<?php

include('includes/footer.php');

?>
