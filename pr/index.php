<!doctype html>
<html lang="en" style="font-size:3vh">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>IML Nails</title>
  </head>
  <body style="background-image:url('../src/bg2.jpeg'); background-size:100%;">
    
    



    <?php
    include "../pr/nav.html";
    ?>
    <div style="position: absolute; height:90%; width:100%; top:8%; overflow: show;">
        <br>
    <?php
            include "../pr/carousel.html"; 
            print("<br>");
            include "../pr/whoIm.html";
            print("<br>");
            include "../pr/trabajos.html";
            print("<br>");
            include "../pr/modalWhatsapp.html";
            print("<br>");
            include "../pr/muestras.html";
            print("<br>");
    ?>

      <!--Plug-in para comentarios de Facebook-->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="row col-sm-12 col-md-10 offset-md-1">
          <div class="fb-comments" data-href="https://iml-nails.000webhostapp.com/pr/index.php" data-width="100%" data-numposts="25"></div>
        </div>
      
    <?php
          print("<br>");
          include "../pr/contacto.html"; 
      ?>

      <!-- Button trigger modal whatsapp-->
      <button type="button" class="btn btn-success rounded-pill visible-xs" style="position:sticky; bottom:0; float:left;" data-toggle="modal" data-target="#modalwpp">
        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" style="width: 20%">Whatsapp 
      </button>
    </div>

    <!-- AJAX para cargar descripción de trabajos -->
    <script>
      function loadDoc(trabajo) {
        documento="../pr/trabajos/"+trabajo+".txt";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            document.getElementById("infoTrabajo").innerHTML = this.responseText;
        };
        xhttp.open("GET", documento, true);
        xhttp.send();
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>


</html>