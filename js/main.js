$( document ).ready(function() {
    console.log( "Entro al main.js" );
    $('.list-element').click(function(){
        console.log("le dieron")
        $('#change-text').text("le dieron");
    });
});