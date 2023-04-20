
    <video width="100%" controls id="myvideo" width="480" height="320" controls autoplay  onclick="play()" >

<source src="video/Perl.mp4" type="video/mp4">

<source src="movie.ogg" type="video/ogg">


</video>

<input type="text" name="videodk" id="videodk"  value="0">

<script>
  
var elem = document.getElementById("myvideo");
var dk = document.getElementById("videodk");

var ppbutton = document.getElementById("vidbutton");

var videodd = document.getElementById("videodd");


var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
console.log(time);

  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
      var today = new Date();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      console.log(time);

      dk.value = elem.currentTime ;


    }, 6000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};






                        elem.onended = function() 

						                 {
                            
                            elem.src = "video/backslash r.mp4";
                            
                            };

function Next() 
                        {
                           console.log("pause");

                           ppbutton.innerHTML = "Pause";

                     dk.value = elem.currentTime ;
                    
                     elem.src = "video/backslash r.mp4";
                
                            elem.currentTime = dk.value;



                            $.post("videodurum.php", {"dk": dk.value , "videodd" : videodd.value    }, function(result){
                     
                               });

                              



                        }















  </script>



