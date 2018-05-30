document.addEventListener("DOMContentLoaded", function () {

    function specialiteinfo() {
        var mavariable = document.getElementById("them").value;
        var spei = document.getElementById("info").value;
        var speinfo = document.getElementById("speinfo");
        var spea = document.getElementById("arts").value;
        var speart = document.getElementById("spearts");
        var spem = document.getElementById("market").value;
        var spemarket = document.getElementById("spemarket");
        var speg = document.getElementById("gamed").value;
        var spegamed = document.getElementById("spegamed");
        var disable = document.getElementById("disable");
        if (mavariable == spei){
            speinfo.style.display = "block";
            spemarket.style.display = "none";
            speart.style.display = "none";
            spegamed.style.display = "none";
            disable.style.display = "none";
        }else if(mavariable == spem){
            speinfo.style.display = "none";
            spemarket.style.display = "block";
            speart.style.display = "none";
            spegamed.style.display = "none";
            disable.style.display = "none";
        }else if(mavariable == spea){
            speinfo.style.display = "none";
            spemarket.style.display = "none";
            speart.style.display = "block";
            spegamed.style.display = "none";
            disable.style.display="none";
        }else if (mavariable == speg){
            speinfo.style.display = "none";
            spemarket.style.display = "none";
            speart.style.display = "none";
            spegamed.style.display = "block";
            disable.style.display="none";
        }else {
            speinfo.style.display = "none";
            spemarket.style.display = "none";
            speart.style.display = "none";
            spegamed.style.display = "none";
            disable.style.display="block";
        }
    }
    var maariable = document.getElementById("them");
    maariable.addEventListener("change",specialiteinfo);

})