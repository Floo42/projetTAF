document.addEventListener("DOMContentLoaded", function () {

    function specialiteinfo() {
        var mavariable = document.getElementById("them").value;
        var spei = document.getElementById("info").value;
        var speinfo = document.getElementById("info");
        if (mavariable == spei){
            speinfo.style.display = 'block';
        }else{
            console.log(mavariable);
        }
    }
    var speinfo = document.getElementById("info");
    speinfo.addEventListener("click",specialiteinfo);

})