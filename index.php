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
    <title>Shawano Sports Park</title>
</head>
<body>
    <?php
        include_once("nav.php");
    ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="IomEbWpV"></script>
    <main>
    <div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-3">
                <div class="card text-center mx-auto">
                    <div class="card-header">
                        <h4>Hours</h4>
                    </div>
                    <div class="card-body">
                    <ul id="Hours">
                            <li>Sunday: 10am - 10pm</li>
                            <li>Monday: 10am - 10pm</li>
                            <li>Tuesday: 10am - 10pm</li>
                            <li>Wednesday: 10am - 10pm</li>
                            <li>Thursday: 10am - 10pm</li>
                            <li>Friday: 10am - 10pm</li>
                            <li>Saturday: 10am - 10pm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-center mx-auto">
                    <div class="card-header">
                        <h4>Like Us On Facebook</h4>
                    </div>
                    <div id="fb" class="card-body fb-page" data-href="https://www.facebook.com/shawano.sports.park/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/shawano.sports.park/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/shawano.sports.park/">Shawano Sports Park</a>
                        </blockquote>
                    </div>
                </div>
            </div>  
            <div class="col-lg-3">
                <div class="card text-center mx-auto">
                    <div class="card-header">
                        <h4>Locate Us</h4>
                    </div>
                    <div class="card-body">
                        <ul id="locate">
                            <li>Phone: <a href="tel:7158534373">(715) 524-3849</a></li>
                            <li>Address: 1056 E Green Bay St, Shawano, WI 54166</li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    </main>
</body>
</html>