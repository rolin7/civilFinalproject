$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});


var today = new Date();
var year = today.getFullYear();

var anio = document.querySelector("#anio_actual");

anio.textContent = year;