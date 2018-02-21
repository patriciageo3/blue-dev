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
        
        <h3 class="skillName"> Web Design </h3>
        <p class="summary"> <strong>Web design </strong> encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization. Often many individuals will work in teams covering different aspects of the design process, although some designers will cover them all.</p>
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