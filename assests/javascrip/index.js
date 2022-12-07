// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
let mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    // document.getElementById("navbar").style.padding = "0px 10px";
    // document.getElementById("navbar").style.padding = "0px 10px";
    document.getElementById("navbar").setAttribute("style",
    "padding = 0px; background-color:#fff;border-bottom:1px solid #b2c3d3 "
    );

    mybutton.style.display = "block";
    document.getElementById("logo").style.width = "75%";
    document.getElementById("padding_scroll").style.lineHeight = "0rem"; 
    
  } else {
    // document.getElementById("navbar").style.padding = "20px";
    document.getElementById("navbar").setAttribute("style",
    "padding =20px; background-color:#f9f4f1; "
    );
    document.getElementById("logo").style.width = "100%";
    document.getElementById("padding_scroll").style.lineHeight = "2rem";
    mybutton.style.display = "none";
    
  }
}




// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// accordian start

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


// bottom to up button
function shovend(){
  document.getElementById("fiestimg").style.display="block";
  document.getElementById("secondimg").style.display="none";
  document.getElementById("thirdimg").style.display="none";
}

function shovend1(){
  document.getElementById("fiestimg").style.display="none";
  document.getElementById("secondimg").style.display="block";
  document.getElementById("thirdimg").style.display="none";
}
function shovend2(){
  document.getElementById("fiestimg").style.display="none";
  document.getElementById("secondimg").style.display="none";
  document.getElementById("thirdimg").style.display="block";
}

 