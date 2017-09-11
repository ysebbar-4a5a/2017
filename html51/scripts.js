var video = document.getElementById("viewer");

    
    function vidplay() {
       var button = document.getElementById("player__button");
       if (video.paused) {
          video.play();
          button.textContent = "||";
       } else {
          video.pause();
          button.textContent = "►";
       }
    }
   
    
    function skip(hoever, richting) {
        if(richting === "+"){
          video.currentTime += hoever;
        }else{
          video.currentTime -= hoever;  
        }
    } 

    function snelheidplays(snelheid){
        video.playbackRate = snelheid; 
    }
    function volplays(snelheid){
        video.volume = snelheid; 
    }
    
document.getElementById("player__button").addEventListener("click", vidplay);
document.getElementById("player-skip").addEventListener("click", function(){
    skip(25,"+");
});
document.getElementById("player-terug").addEventListener("click", function(){
    skip(10,"-");
});
document.getElementById("snelheidplayer").addEventListener("mouseup", function(){
    var snelheidplay = document.getElementById('snelheidplayer').value;
    snelheidplays(snelheidplay);
});
document.getElementById("playervol").addEventListener("mouseup", function(){
    var volumeplay = document.getElementById('playervol').value;
    volplays(volumeplay);
});

