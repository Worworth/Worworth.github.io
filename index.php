<!DOCTYPE html>
<html lang="es">
  <head>
    	<meta charset="utf-8">
		<title> MobelArt</title>
	
		
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />		
	  <meta name="viewport" content="width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		
  </head>
  <body id="bodyini">
    <header>
      <?php include 'menu.php';?>
  </header>
    <main>
      <div class="slideshow-container">

        <div class="mySlides fade">
          
          <img src="img/mobiliarioespecial.png">

        </div>

        <div class="mySlides fade">
        
          <img src="img/mobiliarioespecial2.png" >
        
        </div>

        <div class="mySlides fade">
          
          <img src="img/mobiliarioespecial3.png">
        
        </div>
      </div>
    <?php include "footer.php";?>
    </main>
    
          
    <script>
      var slideIndex = 0;
      showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "block";
          setTimeout(showSlides, 4500); // Change image every 2 seconds
        }
    </script>
  </body>
</html>
