<?php

session_start();

if(isset($_SESSION['name'])){
  $name = $_SESSION['name'];
  $type = $_SESSION['type'];

  if(strcmp($type,'farmer')==0){
    
    header('Location: indexForFarmer.php');

    }
    else{
      header('Location: indexForExpert.php');
  
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Krishi Sahayak-login page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!--custom css-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/hello.css">
</head>

<body>

    <!--navigation menu-->
    <nav id="mainmenu" class="navbar navbar-expand-md">
        <a href="#" style="color: #FAFEF9" class="navbar-brand"> Q/A</a>
        <div id="google_translate_element"></div>
    </nav>

    <div class="container text-center">
        <h1>Krishi Sahayak</h1>
    </div>
    <hr>
    <!-- tab starts here-->
    <div class="container">
        <!--defining tab headings-->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a style="color:#1e2c24" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
                <a style="color:#1e2c24" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <br>
                <form action="php/login.php" method="POST">

                    <!--optradio, phno, psw-->
                    <label for="phno">Phone Number</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <i style="background-color:#1e2c24" class="fa fa-user icon"></i>
                        </div>
                        <input required type="number" class="form-control" name="phno" id="phno">
                    </div>

                    <!--phno done-->
                    <label for="psw">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <i style="background-color:#1e2c24" class="fa fa-key icon"></i>
                        </div>
                        <input required type="password" class="form-control" name="psw" id="psw">
                    </div>
                                        <!--psw done-->
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="radioF">
                            <input type="radio" class="form-check-input" id="rF" name="optradio" value="1" checked>Farmer
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="radioE">
                            <input type="radio" class="form-check-input" id="rE" name="optradio" value="2">Expert
                        </label>
                    </div>
                    <!--optradio done-->
                    <center>
                        <div class="col-md-3">
                            <button style="background-color:#1e2c24; color:#FAFEF9" type="submit" name="submit_form" class="btn">Login</button>
                        </div>
                    </center>
                </form>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <form action="php/register.php" method="POST">
                    <!--name,regphno,regpsw1,optradio-->
                    <label for="name">Name</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <i style="background-color:#1e2c24" class="fa fa-user icon"></i>
                        </div>
                        <input required type="text" class="form-control" name="name" id="name">
                    </div>

                    <!--name done-->

                    <label for="regphno">Phone Number</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <i style="background-color:#1e2c24" class="fa fa-user icon"></i>
                        </div>
                        <input required type="number" class="form-control" name="regphno" id="regphno">
                    </div>
                    <!--regphno done-->

                    <label for="regpsw1">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <i style="background-color:#1e2c24" class="fa fa-key icon"></i>
                        </div>
                        <input required type="password" class="form-control" name="regpsw1" id="regpsw1">
                    </div>
                    <!--regpsw1 done-->

                    <label for="regpsw2">Re-enter Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <i style="background-color:#1e2c24" class="fa fa-key icon"></i>
                        </div>
                        <input required type="password" class="form-control" name="regpsw2" id="regpsw2">
                    </div>
                    <!--regpsw2 done-->
                    <div class="form-check form-check-inline">
                            <label class="form-check-label" for="radioF">
                                <input type="radio" class="form-check-input" id="radioF" name="optradio" value="1" checked onclick="secretCheck();">Farmer
                            </label>
                        </div>
    
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="radioE">
                                <input type="radio" class="form-check-input" id="radioE" name="optradio" value="2" onclick="secretCheck();">Expert
                            </label>
                        </div>
                        <div style="display: none;" id="secret" class="form-group">
                                <label for="usr">Code : </label>
                                <input type="number" class="form-control" id="usr" name="code" placeholder="Code">
                        </div>
                        <center>
                        <div class="col-md-3">
                            <button type="submit" style="background-color:#1e2c24;color:#FAFEF9" name="submit_form" class="btn">Register</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        //console.log(id2);
        function secretCheck() {
            var radioE = document.getElementById('radioE');
            var radioF = document.getElementById('radioF');
            var dis = document.getElementById('secret');

            if (radioE.checked) {
                dis.style.display = "block";
            }
            else if (radioF.checked) {
                dis.style.display = "none";
            }
        }

    </script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>