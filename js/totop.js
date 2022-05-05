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
  //var elenm =document.getElementByTag("productos2");
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0;
  //elenm.scrollIntoView()

}
function topFunction3() { 
  var elenm =document.getElementById("productos3");
  elenm.scrollIntoView()
}

//TABS//

function openCity(evt, cityName) {

  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


