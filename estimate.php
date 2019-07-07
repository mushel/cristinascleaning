<?php
if($_POST["message"]) {
        $recipient="mushel@gmail.com";
        $subject="Contact";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        $address=$_POST["address"];
        $zip=$_POST["zip"];
        $date=$_POST["date"];
        $time=$_POST["time"];
        $tel=$_POST["tel"];
    
        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message\n$address\n$zip\nDate: $date\nTime: $time\nTelephone: $tel";
        
        mail(
            $recipient, $subject, $mailBody, "From: $sender <$senderEmail>" 
        );
    
        $thankYou="<p>Thank You!!! the message was sent.</p>";
    
    }
?>

<!DOCTYPE html>
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
    
            <div class="row">
                <div class="col s12">
                    <div class="slider"> 
                        <div class="row">
                            <br><br>
                            <div class="col s5 offset-s1 grey lighten-5">
                                <h5>Schedule an estimate!</h5>
                                <?=$thankYou ?>
                                <form method="post" action="estimate.php" class="estimate">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="full_name" type="text" class="validate" name="sender">
                                        <label for="full_name">Full Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="text" class="validate" name="senderEmail">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="address" type="text" class="validate" name="address">
                                        <label for="address">Street Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="zip">
                                            <option value="" disabled selected>Pick Your Zip</option>
                                            <option>70139</option>
                                            <option>70112</option>
                                            <option>70113</option>
                                            <option>70163</option>
                                            <option>70115</option>
                                            <option>70116</option>
                                            <option>70118</option>
                                            <option>70119</option>
                                            <option>70130</option>
                                            <option>70125</option>
                                            <option>70122</option>
                                            <option>70124</option>
                                            <option>70001</option>
                                            <option>70002</option>
                                            <option>70003</option>
                                            <option>70005</option>
                                            <option>70006</option>
                                            <option>70121</option>
                                            <option>70123</option>
                                            <option>70062</option>
                                            <option>70065</option>
                                        </select>                                      
                                        <label>Zip</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="telephone" type="tel" class="validate">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="text" class="datepicker" name="date">
                                        <label>Date</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input type="text" class="timepicker" name="time">
                                        <label>Time</label>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="input-field col s8">
                                        <label>Message:</label>
                                        <textarea rows="5" cols="20" name="message"></textarea>
                                    </div>
                                            
                                    <div class="input-field col s4">
                                        <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div> 
                                </div>
                                    
                            </form>
                            <br>
                        </div>   
                    </div>
                    <br>
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
            <!--<script src="js/init.js"></script>
                  <script src="js/app.js"></script>-->
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
