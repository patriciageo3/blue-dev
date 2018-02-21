<?php

    include('includes/header.php');


    function has_header_injection($string) {
            return preg_match("/[\r\n]/", $string);
    }

    if (isset($_POST["submit"])) {
            $name=$_POST["full_name"];
            $email=$_POST["email"];
            $phone=$_POST["phone_nb"];
            $budget=$_POST["available_budget"];
            $call = $_POST["CallTime"];
            
            if (has_header_injection($name) || has_header_injection($email) || has_header_injection($phone)) {
                exit;
            }
            
            if (!$name || !$email || !$phone || !$budget) {
                echo "<div class=\"main-content\"><p> All fields are required. Please go back and complete all sets. </p>";
                echo "<p>Click <a href=\"contact.php\"> here <a>to go back.</p></div>";
                exit;
            }
            
            $to="myemail@myadress...com";
            $subject="$name messaged you from your website";
            $message = "From: $name\r\n";
            $message .= "E-Mail: $email \r\n";
            $message .="Phone-number: $phone\r\n";
            $message .="To be contacted during $call time.\r\n";
                
                if (isset($_POST["services"])) {
                    $services=implode(",", $_POST["services"]);
                } else {
                    echo "<div class=\"main-content\"><p> All fields are required. Please go back and complete all sets. </p>";
                    echo "<p>Click <a href=\"contact.php\"> here <a>to go back.</p></div>";
                    exit;
                }
            
            $message  .= "Has a budget of $budget and needs following services:  $services.\r\n";
            $message   = wordwrap($message, 75);
            $header    = "MIME-Version: 1.0\r\n";
            $header   .="Content-type: text/plain; charset=ISO-8859-1";
            $header   .= "From" . $name . "e-mail: <".  $email . ">";
            $header   .= "X-Priority: 1\r\n";
            $header   .= "X-MSMail-Priority: High \r\n";
            mail($to, $subject, $header, $message);

?>
	<div class="main-content">
        <h4> Thank you for contacting us!</h4>
        <p> Please allow a 24 hours time for a response! </p>
        <p> <a href="index.php"> &laquo; Go back to Home Page</a><p>
	</div>
	
<?php

	} else {
	?>

    <section>

        <form method="POST" action="">

            <h4> Contact Us </h4>

            <p> Please use this form to contact a member of our website team</p>
            <p>
                <label for="name"> <span id="required">* </span>Full Name: </label>
                <input type="text" name="full_name" id="name" required>
            </p>
            <p>
                <label for="email"> <span id="required">* </span>E-Mail Address: </label>
                <input type="email" name="email" id="email" required>
            </p>
            <p>
                <label for="phone"> <span id="required">* </span>Phone Number: </label>
                <input type="tel" name="phone_nb" id="phone" required>
            </p>
            <p>
                <label for="time-to-call"> Best time to call: </label>
                <input type="radio" name="CallTime" id="time-to-call" value="Morning" checked>Morning
                <input type="radio" name="CallTime" id="time-to-call" value="Afternoon">Afternoon
                <input type="radio" name="CallTime" id="time-to-call" value="Evening">Evening
            </p>
            <p>
                <label for="location"> <span id="required">* </span>Location </label>
                <input list="location" name="current_location" required>
                    <datalist id="location">
                        <option value="New York"> 
                        <option value="Boston"> 
                        <option value="Brasov"> 
                        <option value="Calcutta"> 
                    </datalist>
            </p>

            <fieldset id="yourProject">
                <legend> About Your Project </legend>
                <p>
                    <script>
                        function updateTextInput(val) {
                          document.getElementById('textInput').value = val; 
                        }
                    </script>
                    <label for="budget"> Budget: </label>
                    <span class="value"> 500 &euro;</span><input type="range" name="budget" id="budget" min="500" max="7000" onchange="updateTextInput(this.value)"> <span class="value"> 7000 &euro;</span>
                    <input type="text" id="textInput"> &euro;
                </p>

                <p>
                    <label for="services"> Services Needed: (Check all that apply): </label>
                <table>
                    <tr>
                        <td><input type="checkbox" name="services[]" id="services" value="HTML"> HTML</td>
                        <td><input type="checkbox" name="services[]" id="services" value="PHP"> PHP</td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="services[]" id="services" value="CSS"> CSS</td>
                        <td><input type="checkbox" name="services[]" id="services" value="jQuery"> jQuery</td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="services[]" id="services" value="SEO"> SEO </td>
                        <td><input type="checkbox" name="services[]" id="services" value="Web Design"> Web Design </td>
                    </tr>
                </table>
                </p>
                
                <p>
                    <label for="website"> Current Website:</label>
                    <input type="url" id="website" name="currentWebsite">
                </p>
                
                <p>
                    <label for="start"> Start date:</label>
                    <input type="date" id="start" name="date">
                </p>
                
                <p>
                    <label for="pages"> Number of Pages: </label>
                    <input type="number" id="pages" name="nb_pages" min="5" max="10">
                </p>
                
                <p>
                    <label for="color"> Main color to use: </label>
                    <input type="color" name="colorOfWebsite" id="color">
                </p>
                
            </fieldset>
            
            <p class="note"><span id="required">* </span>Fields are required before submitting! </p>
            <p>
                <input type="reset" class="reset">
                <input type="submit" name="submit" id="submit" value="Submit">
            </p>
            </form>

    </section>


<?php

}

include('includes/footer.php');

?>