<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>smolinski</title>

<script src="js/detectmobilebrowser.js"></script>
<script src="js/detectbrowsersize.js"></script>
<script src="js/jkl-parsexml.js" type="text/javascript"></script>

<script src="js/greensock/TweenMax.min.js"></script>
<script src="js/greensock/easing/EasePack.min.js"></script>
<script src="js/greensock/plugins/CSSPlugin.min.js"></script>

<link rel="stylesheet" href="css/site.css" />

<script>
<!--
    var xml = new JKL.ParseXML( "content.xml" );
    var data = xml.parse();
    //document.write( data["items"]["item"]["us_state"] );
    document.write( data.items.item[1].filename );
// -->
</script>


<script>
	
	console.log("asdasdasd "+ navigator.userAgent);
	
	var isIE11 = !!navigator.userAgent.match(/Trident.*rv 11\./)
	
	console.log("dfdfdfdf "+ isIE11);
	
	
	var isIE11aaa = !!navigator.userAgent.match(/Trident.*rv[ :]*11\./)
	console.log("ghghghghg "+ isIE11aaa);
	
	
	var isIE8 = !!navigator.userAgent.match(/Trident.*rv 8\./)
	
	console.log("dfdfdfdf "+ isIE8);
	
	
	var isIE8aaa = !!navigator.userAgent.match(/Trident.*rv[ :]*8\./)
	console.log("ghghghghg "+ isIE8aaa);
	
	
	
	
    
</script>


<style>

body {
	
	background-color:#000;
	margin:0px;
	padding:0px;
	
}

#main, #myDisplayDiv {
	
	font-family: fantasy;
	color:#fff;
	font-size:2em;
}

a {
	color:#fff;
	text-decoration: none;
}

a:hover {
	color:#ccc;
	text-decoration: none;
}


.holderDiv {
	
	position:relative;
	margin-top:10px;
	margin-left:10px;
	display:inline-block;
	width:125px;
	height:125px;
	opacity:1;
}

.innerHolderDiv {
	
	position:absolute;
	top:10px;
	left:10px;
	background-color:#000;
	opacity:1;
}

.displayImageClass {
	
	padding:20px;
}

</style>


<script language="javascript" type="text/javascript">

	function imageRollOver (obj){
		TweenMax.to(obj.firstChild.firstChild, 2.2, {alpha:0, ease:Power3.easeInOut, overwrite:"all"});
	}
	
	function imageRollOut (obj){
		TweenMax.to(obj.firstChild.firstChild, 2.2, {alpha:1, ease:Power3.easeInOut, overwrite:"all"});
	}
	
	function closeButtonRollOver (obj){
		TweenMax.to(obj, 2.2, {width:'150px', ease:Power3.easeInOut, overwrite:"all"});
	}
	
	function closeButtonRollOut (obj){
		TweenMax.to(obj, 2.2, {backgroundColor:"#ff00ff", ease:Power2.easeInOut, overwrite:"all"});
	}
	
	function openDisplay(obj){
		
		injectImage(obj);
		var tempObj = document.getElementById("myDisplayDiv");
		tempObj.style.display = "block";
		
		TweenMax.to(tempObj, 1.1, {alpha:1, ease:Power3.easeInOut});
		
	}
	
	function closeDisplay(){
		var tempObj = document.getElementById("myDisplayDiv");
		TweenMax.to(tempObj, 1.1, {alpha:0, ease:Power3.easeInOut, onComplete:makeDisplayNone(), overwrite:"all"});
		
	}
	
	function makeDisplayNone(){
		var tempObj = document.getElementById("myDisplayDiv");
		tempObj.style.display = 'none';
		
	}
	
	function getRealImageDimensions (img){
		//alert(img.id + " - "+img.className);
		var realWidth = img.attr("naturalWidth");
		var realHeight = img.attr("naturalHeight");
		
		img.height = realHeight;
		img.width = realWidth;
	}
	
	function injectImage(obj){
		
		var tempObj = document.getElementById('displayContentBlock');
		tempObj.innerHTML = "<img id='displayImage' src='" + obj.firstChild.firstChild.src + "' border='0' class='displayImageClass'>";
		
		
	}
	

</script>


</head>

<body>
 
<div id="main" style="border:red solid 0px;width:100%;height:100%;background:#222;position:absolute;z-index:1;">
   <?php
 
 $images = glob('images/' . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
//print_r($pngimages);

 
 foreach ($images as $image) {
	
      echo "<div class='holderDiv' onmouseover='imageRollOver(this)' onmouseout='imageRollOut(this)' onclick='openDisplay(this)' ><div class='innerHolderDiv' ><img class='ok' src='" . $image . "' width='100px' height='100px' style='margin:10px;cursor:pointer;' /></div></div>\n";
 }
 
 ?> 
</div>

<div id="myDisplayDiv" style="border:red solid 0px;width:100%;height:100%;background:#000;position:absolute;z-index:2;opacity:1;">
   <div style="position: absolute;z-index:1;right:20px;top:20px;cursor:pointer;background:#f00;padding:10px;margin: 20px;width:12px;color:#fff;line-height: .7em;" onmouseover='closeButtonRollOver(this)' onmouseout='closeButtonRollOut(this)' onclick='closeDisplay()'>x</div>
   
   <div id="displayContentBlock" style="position:absolute;left:20px;top:20px; z-index:2;">asdasd</div>
</div>

<script type="text/javascript"> setDivHeight(); </script>

</body>
</html>



























