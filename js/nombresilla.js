var img = document.getElementsByTagName("img");
function showAlt(img) {
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementsByClassName("caption");

  captionText.innerHTML = dots.alt;
}
img.onmouseover = showAlt();