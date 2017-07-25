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

      <!--start of body-->
      <div class="row">

        <div class="col-sm-8 portfoliobody">

          <div class="row">
            <div class="col-sm-4 deed">
                <img class="deedimg" src="assets/images/IMG_0491.JPG">
                <div class="deedlabel">some deed
                </div>
            </div>
            <div class="col-sm-4 deed">  
                <img class="deedimg" src="assets/images/IMG_0491.JPG">
                <div class="deedlabel">some deed
                </div>     
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 deed">
                <img class="deedimg" src="assets/images/IMG_0491.JPG">
                <div class="deedlabel">some deed
                </div>
            </div>
            <div class="col-sm-4 deed">  
                <img class="deedimg" src="assets/images/IMG_0491.JPG">
                <div class="deedlabel">some deed
                </div>     
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 deed">
                <img class="deedimg" src="assets/images/IMG_0491.JPG">
                <div class="deedlabel">some deed
                </div>
            </div>
           
          </div>
        </div>
        <div class="col-sm-4 conwithme"> 
          <?php require './sidebar.php' ?>
        </div>
      </div>


      <div class="row footr">
        <div class="col-sm-12">
          <section class= "prefoot">
          </section>

          <?php require './footer.php'?>
        </div>
      </div>


      

  </div> 


  </body>

</html>