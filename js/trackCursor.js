var cursorX;
var cursorY;

document.onmousemove = function(e){
    cursorX = e.pageX;
    cursorY = e.pageY;
}

//setInterval("checkCursor()", 100);

function checkCursor(){
    console.log("Cursor at: " + cursorX + ", " + cursorY);
}