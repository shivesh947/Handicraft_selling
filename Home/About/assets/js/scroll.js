window.onscroll= function() {scrollFunction()};


function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
  	
    document.getElementById("photo").style.marginLeft="0px";
  }
  else {
  	document.getElementById("photo").style.marginLeft="-800px";
  }
  if (document.body.scrollTop > 2100  || document.documentElement.scrollTop > 2100) {
    document.getElementById("work").style.marginLeft="0px";
  } 
  else {
    	document.getElementById("work").style.marginLeft="-1100px"; 
  }
}
