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

      <?php require './header.php'?>
      
      <div class="row">

        <div class="col-sm-7">

          <section class="contactbody">
    
              <p class="subhead hfont">
              Contact</p>

              <hr>
    
              <form>

                <p class="formp">Name</p>

                <input type="type" name="name" placeholder="Timothy Hayes">

                <p class="formp">Email</p>

                <input type="text" name="email" placeholder="timhayes3116@gmail.com">

                <p class="formp">Message</p>
    
                <textarea type="text" name="message">
                </textarea>
              </form>

          </section> 
        </div> 
         
        <div class="col-sm-5 conwithme"> 
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