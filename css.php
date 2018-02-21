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
        
        <h3 class="skillName"> CSS </h3>
        <p class="summary"> <strong>Cascading Style Sheets (CSS)</strong> is a style sheet language used for describing the presentation of a document written in a markup language. Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces for many mobile applications.</p> 
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