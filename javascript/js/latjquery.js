// $( document ).ready(function() {
//     console.log( "ahsiappp!" );
// });

// menulis lebih singkat
$(function() {
    $("#isi").html("<h1>Belajar JQuery</h1>");

    $("button").click(function (e) {
        e.preventDefault();
        alert("Belajar Jquery");
    }) ;

    $("#isi").mouseleave(function (e) {
        alert("percobaan mouse leave");
        console.log("mouse")
    }) ;
});