<?php

include('includes/header.php');

?>

    <section>	
        
        <div id="database2">
            <table class="dev-table">
                <thead>
                    <th>Name</th>
                    <th> City</th>
                    <th> Skills</th>
                </thead>
                <tbody>

                    <?php
                        foreach($developTable1 as $developer) {
                            echo "<tr><td> $developer[name]</td><td>$developer[city]</td><td class='listedSkills'>$developer[skills]</td></tr>";
                        }
                        foreach($developTable2 as $developerz) {
                                echo"<tr><td>$developerz[name]</td><td>$developerz[city]</td> <td class='listedSkills'>$developerz[skills]</td></tr>";
                        }
                    ?>

                </tbody>
            </table> 
        </div>
        
        <h3 class="skillName"> AJAX </h3>
        <p class="summary"> <strong>Ajax (also AJAX)</strong> short for "Asynchronous JavaScript And XMLHttpRequest") is a set of Web development techniques using many Web technologies on the client side to create asynchronous Web applications. With Ajax, Web applications can send and retrieve data from a server asynchronously (in the background) without interfering with the display and behavior of the existing page. By decoupling the data interchange layer from the presentation layer, Ajax allows for Web pages, and by extension Web applications, to change content dynamically without the need to reload the entire page. In practice, modern implementations commonly utilize JSON instead of XML due to the advantages of JSON being native to JavaScript.</p>
        <h3 id="clickable"> Click below to find our best developers for this skill: </h3>   
        <button type="button" id="searchTheSkill"> Search </button>
        
        <h3 id="result"> Our best developers with this skill are: </h3>
            <table class="skillOutput">
                <thead>
                    <th>Name</th>
                    <th>City </th>
                    <th>Skills</th>
                </thead>
                <tbody id="tabelOutput2">

                </tbody>
            </table>
    </section> 
    
<script src="js/leftNavFunctionality.js"> </script>
    
<?php

include('includes/footer.php');

?>