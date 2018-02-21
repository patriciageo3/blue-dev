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
        
        <h3 class="skillName"> Web Development </h3>
        <p class="summary"> <strong> Web development </strong> is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications (or just 'web apps') electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, "web development" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. These CMS can be made from scratch, proprietary or open source. In broad terms the CMS acts as middleware between the database and the user through the browser. A principle benefit of a CMS is that it allows non-technical people to make changes to their web site without having technical knowledge.</p>
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