
function alertSize() {
    var myWidth = 0, myHeight = 0;
    if( typeof( window.innerWidth ) == 'number' ) {
      //Non-IE
      myWidth = window.innerWidth;
      myHeight = window.innerHeight;
    } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
      //IE 6+ in 'standards compliant mode'
      myWidth = document.documentElement.clientWidth;
      myHeight = document.documentElement.clientHeight;
    } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
      //IE 4 compatible
      myWidth = document.body.clientWidth;
      myHeight = document.body.clientHeight;
    }
    
    window.alert( 'Width = ' + myWidth + 'Height = ' + myHeight );
    
   
}

//alertSize();


function returnHeight() {
    var myHeight = 0;
    if( typeof( window.innerWidth ) == 'number' ) {
      //Non-IE
      myHeight = window.innerHeight;
       
    } else if( document.documentElement && ( document.documentElement.clientHeight ) ) {
      //IE 6+ in 'standards compliant mode'
      myHeight = document.documentElement.clientHeight;
    } else if( document.body && ( document.body.clientHeight ) ) {
      //IE 4 compatible
      myHeight = document.body.clientHeight;
    }
    
    return myHeight;
   
}

var myWindowWidth = window.innerWidth;
var myWindowHeight = window.innerHeight;

function setDivHeight(){
    
    var temp = document.getElementById('main');
    var tempY = (myWindowHeight - 680)/2-10;
    var tempX = (myWindowWidth - 1000)/2-20;
    temp.style.top = tempY + "px";
    temp.style.left = tempX + "px";
    
    var temp = document.getElementById('popupID');
    if(temp != null){
        //var tempY = (myWindowHeight - 680)/2-10;
        var tempX = (myWindowWidth - 760)/2;
        temp.style.left = tempX + "px";
    }
    
    //alert(returnHeight());
}


function on_resize(c,t){onresize=function(){clearTimeout(t);t=setTimeout(c,1)};return c};

on_resize(function() {
    // handle the resize event here
    myWindowWidth = window.innerWidth;
    myWindowHeight = window.innerHeight;
    setDivHeight();
});
