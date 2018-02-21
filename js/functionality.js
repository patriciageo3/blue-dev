function setDispId(elem, display) {
    document.getElementById(elem).style.display = display;
}

function setDispClass(elem, display, index) {
    document.getElementsByClassName(elem)[index].style.display = display;
}

(function changeActiveNav() {
    let id = location.href.replace(/.*\/([\w]+)\.php\??$/, '$1'); 
    if (id) {
        document.getElementById(id).classList.add('active');
    }
})();  

// The function below is made only for exercise and learning purposes, it will not be implemented in a real website because if database is very large, we might get a too big allSkills array and we might freeze the webpage!
//We would have predefined list of skills in a real situation anyway
function getValidSkills() {
    let allSkills = [];
    let devs = document.getElementsByClassName('listedSkills');
    for (let i = 0; i < devs.length; ++i ) {
        let arrSkills = devs[i].innerText.toLowerCase().split(', ');
        allSkills = allSkills.concat(arrSkills);
    }
    let skills = {};
    for (let i = 0; i < allSkills.length; ++i) {
        if (!skills[allSkills[i]]) skills[allSkills[i]] = 1;
    }
    finalSkills = Object.keys(skills);
    return finalSkills;  
}

function validateMultipleWords(elem) {
    for (let i = 0; i < elem.length; ++i) {
        if (elem[i] === "web") {
            elem[i] += " " + elem[++i];
            elem.splice(i, 1);
            if (elem[--i] === "web content") {
                elem[i] += " " + elem[++i];
                elem.splice(i, 1);
            }
        }
    }
}

function createKeySearch(elem) {
    let keySearch = "^";
        for (let i = 0; i < elem.length; ++i) {
            keySearch += "(?=.*" + elem[i] + ")";
        }
    keySearch += ".*$";
    return keySearch;
}

function finalOutput(elem) {
    let parent = document.getElementById('tabelOutput');
    parent.innerHTML = "";
    for (let i = 0; i < elem.length; ++i) {
       parent.appendChild(elem[i]);
    }
}