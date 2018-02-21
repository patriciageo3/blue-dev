(function() {
    document.getElementById("searchTheSkill").addEventListener('click', showContent);
    
    function showContent(e) {
        e.preventDefault(); 
        let parentTable = document.getElementById('tabelOutput2');
        parentTable.innerHTML= "";
        let skill = document.getElementsByClassName('skillName')[0].innerText.toLowerCase();
        let devSkills = document.getElementsByClassName('listedSkills');
        let developers = [];
        for (let elem of devSkills) {
            if (elem.innerHTML.toLowerCase().match(skill)) {
                let info = elem.parentNode;
               developers.push(info.cloneNode(true));
            } 
        }
        developers.forEach(function(elem) {
            parentTable.appendChild(elem);
        });
        setDispClass('skillOutput', "block", 0);
        setDispId('clickable', "none");
        setDispId('searchTheSkill', "none");
        setDispId('result', "block");
    }
})();