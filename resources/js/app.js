require('./bootstrap');
import "tailwindcss/tailwind.css"

$( document ).ready(function() {
         $( ".verbeg_mobile" ).hide();
         $( "#closemenu" ).hide();

});
$( "#showmenu" ).click(function( event ) {
    $( "#closemenu" ).show();
    $( "#showmenu" ).hide();
    $( ".verbeg_mobile" ).show();
});

$( "#closemenu" ).click(function( event ) {
    $( "#showmenu" ).show();
    $( "#closemenu" ).hide();
    $( ".verbeg_mobile" ).hide();
});
