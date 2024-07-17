<html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
        <nav class="grey lighten-5" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"></a>
                <ul class="left hide-on-med-and-down">
                    <li><a class="blue-grey-text" href="#services">Services</a></li>
                    <li><a class="blue-grey-text" href="#about">About</a></li>
                    <li><a class="blue-grey-text" href="#contact">Contact</a></li>
                </ul>
            
                  <ul id="nav-mobile" class="sidenav">
                        <li><a class="blue-grey-text" href="#services">Services</a></li>
                        <li><a class="blue-grey-text" href="#about">About</a></li>
                        <li><a class="blue-grey-text" href="#contact">Contact</a></li>
                  </ul>
                  <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right">
                      <li><a class="blue-grey-text" href="tel:504 232-5554">504 232-5554</a></li>
                      <li><a class="blue-grey-text"  href="mailto:info@cristinascleaningnola.com">Email Us</a></li>
                  </ul>
                </div>
              </nav>
<div class="container">
    <div class="row">
        <div class="col s12">
            hey
            <?php
              $fullname=$_POST["#full_name"];
              $street=$_POST["#street"];
              echo "Full Name: ".$full_name;
              echo "<br>";
              echo "street Address: ".$street; ?>
        </div>
    </div>
</div>





    <footer class="page-footer teal">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Company Bio</h5>
                  <p class="grey-text text-lighten-4">It is difficult to manage your job, family and your social life all at the same time. Of course you need some help at home. Take back your valuable free time for the things you love by booking your trusted cleaner with Helpling</p>
        
        
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Settings</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Connect</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              Made with <a class="teal-text text-lighten-3" href="http://materializecss.com">Materialize</a> &amp; by <a class="teal-text text-lighten-3" href="http://mcurrier.com">m. currier designs</a>
              </div>
            </div>
          </footer>
        
        
          <!--  Scripts-->
          <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script src="js/materialize.js"></script>
          <script src="js/init.js"></script>
          <script>
           $(document).ready(function(){
                $('select').formSelect();
            
                $('.datepicker').datepicker();

                $('.timepicker').timepicker();

                //form stuff
                $("#estimateBtn").click(function(){        
                    $("#estimateForm").submit(); // Submit the form
                    $.post("action.php",function(data){
                      alert(data);
                  });
                });

            });
          </script>
</body>
</html>