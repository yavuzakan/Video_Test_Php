var elem = document.getElementById("myvideo");
var dk = document.getElementById("videodk");

var ppbutton = document.getElementById("vidbutton");

var videodd = document.getElementById("videodd");




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