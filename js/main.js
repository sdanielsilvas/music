$( document ).ready(function() {
    console.log( "Entro al main.js" );
    $('#div-rock').click(function(){
        $('#audios').empty();
        var songs = ["http://www.smartecsolutions.com/public/file1.mp3", "http://www.smartecsolutions.com/public/file2.mp3"];
        for (var i = 0; i<songs.length ; i++) {
            $('#audios').append( "<h4>Cancion "+(i+1)+"</h4><audio src="+songs[i]+" controls='controls' type='audio/mp3'></audio><br>" );
        };
    });
    $('#div-salsa').click(function(){
        $('#audios').empty();
        var songs = ["http://www.smartecsolutions.com/public/file3.mp3","http://www.smartecsolutions.com/public/file5.mp3"];
        for (var i = 0; i<songs.length ; i++) {
            $('#audios').append( "<h4>Cancion "+(i+1)+"</h4><audio src="+songs[i]+" controls='controls' type='audio/mp3'></audio><br>" );
        };
    });
    $('#div-electronica').click(function(){
        $('#audios').empty();
        var songs = ["http://www.smartecsolutions.com/public/file5.mp3"];
        for (var i = 0; i<songs.length ; i++) {
            $('#audios').append( "<h4>Cancion "+(i+1)+"</h4><audio src="+songs[i]+" controls='controls' type='audio/mp3'></audio><br>" );
        };
    });
});