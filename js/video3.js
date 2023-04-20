
var ppbutton = document.getElementById("vidbutton");

myVideo = document.getElementById("myvideo");



function play() { 
   
    if (myVideo.paused) {
        myVideo.play();
        ppbutton.innerHTML = "Pause";
        console.log('pause');
        }

    else  
        {
        myVideo.pause(); 
        ppbutton.innerHTML = "Play";
        console.log('play');
        }
}


myVideo.onplay = function() {
    ppbutton.innerHTML = "Pause";
  };

