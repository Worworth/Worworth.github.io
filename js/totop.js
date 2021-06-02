//Get the button:
mybutton = document.getElementById("myBtn");
mybutton2 = document.getElementById("myBtn2");
mybutton3 = document.getElementById("myBtn3");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    mybutton2.style.display= "block";
    mybutton3.style.display= "block";
  } else {
    mybutton.style.display = "none";
    mybutton2.style.display = "none";
    mybutton3.style.display = "none";
  }
}



// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
function topFunction2() {
  var elenm =document.getElementById("productos2");
  elenm.scrollIntoView()
}
function topFunction3() { 
  var elenm =document.getElementById("productos3");
  elenm.scrollIntoView()
}