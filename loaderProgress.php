<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 
 

<div id="progressbar" style="background:#ff0;">prog</div>

<script type="text/javascript">
    
    
    function reqListener () {
  console.log(this.responseText);
};

var oReq = new XMLHttpRequest();

oReq.addEventListener("progress", updateProgress, false);
oReq.addEventListener("load", transferComplete, false);
oReq.addEventListener("error", transferFailed, false);
oReq.addEventListener("abort", transferCanceled, false);
oReq.onload = reqListener;
oReq.open("get", "images.zip", true);
oReq.send();
    
function updateProgress(evt) 
{
   if (evt.lengthComputable) 
   {  //evt.loaded the bytes browser receive
      //evt.total the total bytes seted by the header
      //
     var percentComplete = (evt.loaded / evt.total)*100;  
     //$('#progressbar').progressbar( "option", "value", percentComplete );
     document.getElementById('progressbar').style.width = percentComplete +'%';
   } 
}

function sendreq(evt) 
{  
    var req = new XMLHttpRequest(); 
    $('#progressbar').progressbar();    
    req.onprogress = updateProgress;
    req.open('GET', 'images.zip', true);  
    req.onreadystatechange = function (aEvt) {  
        if (req.readyState == 4) 
        {  

            }  
    };  
    req.send(); 
}



function transferComplete(evt) {
  alert("The transfer is complete.");
}

function transferFailed(evt) {
  alert("An error occurred while transferring the file.");
}

function transferCanceled(evt) {
  alert("The transfer has been canceled by the user.");
}

</script>



 </body>
</html>