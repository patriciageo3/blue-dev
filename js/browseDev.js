window.onload = function () {
    if (/.*\/developers\.php/.test(location.href)) {
        document.getElementById('searchBtn').addEventListener('click', searchOutput);
        
        function searchOutput() {
            let skills = document.getElementById('skill').value;
            let city = document.getElementById('city').value;

            if (skills && skills !== " ") {
                let validSkills = getValidSkills();
                let inputSkills = skills.toLowerCase().split(/[^a-zA-Z.]+/);
                
                validateMultipleWords(inputSkills);
                
                let validInputSkills = [];

                for (let i = 0; i < inputSkills.length; ++i) {
                    let elem = validSkills.find(e => e === inputSkills[i]);
                    if (elem) validInputSkills.push(elem);
                }

                if (validInputSkills.length > 0) {
                    let listSkills = document.getElementsByClassName('listedSkills');
                    let developers = [];
                    for (let i = 0; i < listSkills.length; ++i) {
                        let developer = listSkills[i].innerText;
                        let keySearch = new RegExp(createKeySearch(validInputSkills), 'i');
                        let match = developer.match(keySearch);    
                        if (match) {
                            developers.push(listSkills[i].parentNode);
                        }      
                    }
                    
                        if (city) {
                            let inputCity = city.toLowerCase().split(/[^a-zA-Z ]+/);
                            let devs = [];
                            for (let i = 0; i < inputCity.length; ++i) {
                                devs = devs.concat(developers.filter(a => a.children[1].innerText.toLowerCase() === inputCity[i].trim()));
                            }
                            developers = devs;
                        } 
                               
                        if (developers.length > 0) {

                            finalOutput(developers);
                            
                            setDispId('searchSection', "none");
                            setDispId('database', "none");
                            setDispClass('searchOutput', "block", 0);
                            let finalsearchedSkills = document.createElement('h3');
                            finalsearchedSkills.innerText = "[ " + validInputSkills.join(", ") + " ]";
                            document.getElementsByClassName('searchOutput')[0].insertBefore(finalsearchedSkills, null);
                            setDispClass('searchOutput', "block", 1);
                            setDispId('backBtn', "block");
                        } else {
                            setDispId('searchSection', "none");
                            setDispId('database', "none");
                            setDispId('zeroSearch', "block");
                            setDispId('backBtn', "block");
                        }
                } else {
                    setDispId('searchSection', "none");
                    setDispId('database', "none");
                    setDispId('noDevs', "block");
                    setDispId('backBtn', "block");
                }
            }
            
            document.getElementById('backBtn').addEventListener('click', function() {
                location.reload();
                
            });
     
        }
    }    
};
   
