<?php

include('includes/header.php');

?>

    <section>	
        <fieldset id="searchSection">
            <p>Search for a skill and we will recommend you the best developers out there!</p>
            <form id="centerMe">
                <label for="skill"> Skill: </label>
                <input type="text" id="skill"> 
                <br>
                <label for="city"> City: </label>
                <input type="text" id="city">                
                <br>
                <button type="button" id="searchBtn"> Search</button> 
            </form>
        </fieldset>
        
        <div id="database">
            <h3> Veteran Developers</h3>
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
                    ?>

                </tbody>
            </table>

            <h3> Newer Addition Developers</h3>

                <table class="dev-table">
                    <thead>
                        <th>Name</th>
                        <th>City </th>
                        <th>Skills</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach($developTable2 as $developerz) {
                                echo"<tr><td>$developerz[name]</td><td>$developerz[city]</td> <td class='listedSkills'>$developerz[skills]</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
        </div>
        <p id="noDevs">No developers with that skill were found, sorry... </p>
        
        <h3 class="searchOutput"> Search Results for: </h3>

                <table class="dev-table searchOutput">
                    <thead>
                        <th>Name</th>
                        <th>City </th>
                        <th>Skills</th>
                    </thead>
                    <tbody id="tabelOutput">

                    </tbody>
                </table>
        
        <h3 id="zeroSearch"> No developers matched your criteria. Please try again...</h3>
        <input type="submit" id="backBtn" value="Back to Search"> 
    </section> 
    

    
<?php

include('includes/footer.php');

?>