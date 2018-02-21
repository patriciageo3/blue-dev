        </div> <!-- content end -->
        </div> <!-- main-page end -->


        </div> <!-- container end -->
        <footer>
            <div>
                <p id="copyright">Blue Developer Directory  &copy; <?php echo date('Y'); ?> </p>
                <p id="slogan">Find A Developer NOW</p>
            </div>
        </footer>
        
        <script src="js/functionality.js">  </script>
        <script src="js/browseDev.js"> </script>

        <script>
                //JS for the "Newsletter" section
                document.getElementById('news').addEventListener('click', setInfo);
                
                function setInfo() {                
                    let userName = document.getElementById('newsName').value;
                    let userEmail = document.getElementById('newsEmail').value;   
                    localStorage.setItem('nameInfo', userName);
                    localStorage.setItem('emailInfo', userEmail);
                }
             
                function displayGreetings() {
                    let name = localStorage.getItem('nameInfo');
                    let email = localStorage.getItem('emailInfo');
                    if (name && email) {
                        let greeting = "Welcome back, dear " + name + " !";
                        let elem = document.createElement('p');
                        elem.innerText = greeting;
                        elem.id = "greeting";
                        document.getElementById('nav').appendChild(elem); 
                        
                        setDispId('confirmSub', "block");
                        setDispId('unsubscribe', "block");
                        setDispId('changeInfo', "block");
                        setDispClass('newsletter', "none", 1);
                        setDispId('emailMessage', "none");
                        
                        let para = document.getElementById('confirmSub');
                        para.innerHTML = "You receive our Newsletter on this e-Mail: " + email + ". Thank you for your interest! \n If you want to change your email or unsubscribe, click below!";
                    }
                };
                
                displayGreetings();
                
                let changeInfo = document.getElementById('changeInfo')
                if (changeInfo) {
                    changeInfo.addEventListener('click', updateInfo);
                }
                
                function updateInfo() {
                    setDispId('confirmSub', "none");
                    setDispId('unsubscribe', "none");
                    setDispId('changeInfo' , "none");
                    setDispClass('newsletter', "block", 1);
                    setDispId('emailMessage', "block"); 
                }
                
                
                document.getElementById('unsubscribe').addEventListener('click', clearStorage);
                
                function clearStorage() {
                    localStorage.clear(); 
                    updateInfo();
                    setDispId('greeting' , "none");
                }
                             
        </script>

        
    </body>

</html>