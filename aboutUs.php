<?php

include('includes/header.php');

?>

    <section>	
        <h2>Welcome to Blue Developer Directory! </h2>
        <h3>Who Are We?</h3>
        <p>We are a fictional website and service that list top web developers around the world. Search and browse fictional web developers on our website absolutley FREE!</p>

        <h3>What Skills Do Our Developers Have?</h3>
        <p>Our listed fictional web developers skill ranges from Graphic design with Photoshop, Illustrator and Fireworks to markup languages like HTML5, XHTML and XML to programming languages such as Javascript, PHP, Python and ASP</p>

            <video id="ad" width="420" height="350" controls onclick="playPause()"> 
                <source src="video/ad.mp4" type="video/mp4">
                Please update your browser.
            </video>
            
            <div id="btns">
                <button onclick="playPause()">Play/ Pause </button>
                <button onclick="changeSize(700)"> Big</button>
                <button onclick="changeSize(420)"> Medium</button>
                <button onclick="changeSize(320)"> Small </button>
            
            </div>
            
            <script>
                var myvideo = document.getElementById("ad");
                
                function playPause() {
                        myvideo.paused ? myvideo.play() : myvideo.pause();   
                }
                    
                function changeSize(width) {
                        myvideo.width = width;
                }
                
            </script>   
    </section> 

<?php

include('includes/footer.php');

?>