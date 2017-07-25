<!DOCTYPE html>
<html>

  <head>

    <meta charset="UTF-8">
    <title>Timothy Hayes' Webpage</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="bootstyle.css">

  </head>
<body>

  <div class="container">

      <?php require './header.php' ?>
      
      <div class="row">
        <div class="col-sm-7 aboutmebody">
        
          <p class="subhead hfont">
          About Me</p>

          <hr>

          <img src="assets/images/IMG_0491.JPG" class="profpic" alt="Timothy Hayes">

          <p class="biopara pfont">Timothy Hayes is a student learning full stack web design at UCF Coding Bootcamp. He earned a BA in Natural Science with a concentration in Chemisty from Temple University.
          </p>
          <p class="biopara pfont">He currently resides in Orlando, Fl. He is the proud father of his son Liam. He is highly motivated and enjoys new challenge and problem solving. He maintains an active lifestyle and enjoys cycling, running and swimming.
          </p>
          <p class="biopara pfont">In Coding Bootcamp, he has learned to use html and css. Both are powerful tools used to develop new and exciting websites. The possibilities seem endless.</p>
        </div>

        <div class="col-sm-5 conwithme"> 

          <?php require './sidebar.php' ?>
          
        </div>
        

          
      </div>

      <div class="row footr">
        <div class="col-sm-12">
          <section class= "prefoot">
          </section>

          
        </div>
      </div>

      <?php require './footer.php'?>
      

  </div> 


  </body>

</html> 