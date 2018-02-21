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
        
        <h3 class="skillName"> HTML </h3>
        <p class="summary"> <strong>Hypertext Markup Language (HTML) </strong> is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web. Web browsers receive HTML documents from a web server or from local storage and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>
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