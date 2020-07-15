<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions</title>
</head>
<body>
  <?php
    include_once("nav.php");
  ?>
  <main>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card text-center mx-auto">
            <div class="card-header">
              <h4>GoKarts</h4>
            </div>
            <div class="card-body">
              <p>Our GoKart track features 7 single cars and 3 double cars each with its own local sponsor. Races last 5 minuets and are sure to be a blast!</p>
              <h5 class="text-danger">RULES</h5>
              <ul id="rules">
                <li>Must be 54" tall to drive</li>
                <li>No bumpping</li>
                <li>Please follow the attendents instructions</li>
              </ul>
              <img src="images/IMG_2125.JPG" class="img-thumbnail">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mx-auto">
              <div class="card-header">
                <h4>Mini Golf</h4>
              </div>
              <div class="card-body">
                <img src="images/IMG_1338.JPG" class="img-thumbnail">
              </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mx-auto">
            <div class="card-header">
              <h4>Batting Cages</h4>
            </div>
            <div class="card-body">
              <img src="images/IMG_1337.JPG" class="img-thumbnail">
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>