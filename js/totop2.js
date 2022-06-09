//TO TOP//


mybutton = document.getElementById("myBtn");
mybutton2 = document.getElementById("myBtn2");
mybutton3 = document.getElementById("myBtn3");


/*// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};*/

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
function topFunction2() {

  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
 

}
function topFunction3() { 
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}

//TABS//

function openCity(evt, cityName) {

  var i, tabcontent, tablinks, tabcontent2;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


