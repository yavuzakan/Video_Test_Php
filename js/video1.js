var ppbutton = document.getElementById("vidbutton");
var elem = document.getElementById("myvideo");
document.getElementById('myvideo').controls = false


function openFullscreen() {
  

  elem.play();
  ppbutton.innerHTML = "Pause";

  if (elem.requestFullscreen) {

    elem.requestFullscreen();

  } else if (elem.webkitRequestFullscreen) { /* Safari */

    elem.webkitRequestFullscreen();

  } else if (elem.msRequestFullscreen) { /* IE11 */

    elem.msRequestFullscreen();

  }
}
  
