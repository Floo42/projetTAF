document.addEventListener("DOMContentLoaded", function () {
    var spe = document.querySelector('speinfo');
    var value = document.querySelector('them');
    if (value == document.querySelector('info')){
        spe.style.display = 'block';

    }else {
        spe.style.display = 'none'
    }

});