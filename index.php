<?php
if($_POST["estimate"]) {
        $recipient="mushel@gmail.com";
        $subject="Estimate Request!";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        $address=$_POST["address"];
        $zip=$_POST["zip"];
        $date=$_POST["date"];
        $time=$_POST["time"];
        $tel=$_POST["telephone"];
    
        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message\n$address\n$zip\nDate: $date\nTime: $time\nTelephone: $tel";
        
        mail(
            $recipient, $subject, $mailBody, "From: $sender <$senderEmail>" 
        );
    
        $thankYou="<p>Thank You!!! Your estimate date and time was sent.</p>";
    
    }
elseif($_POST["contact"]) {
    $recipient="mushel@gmail.com";
    $subject="Hello from the website contact form";
    $name=$_POST["contact_full_name"];
    $email=$_POST["contact_email"];
    $stAddress=$_POST["contact_address"];
    $cZip=$_POST["contact_zip"];
    $cMessage=$_POST["contact_textarea"];
    $cTel=$_POST["contact_telephone"];
    $mailBody="Name: $name\nEmail: $email\n\n$cMessage\n$stAddress\n$cZip\nTelephone: $cTel";
    mail(
        $recipient, $subject, $mailBody, "From: $name <$email>"
    );
    $thankYouContact="<p>Thank You!!! Your message was sent.</p>";
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
                                        <form method="post" action="index.php" class="estimate" id="estimate">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="full_name" type="text" class="validate" name="sender" required="">
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
                                                <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="estimate" form="estimate">Submit
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div> 
                                        </div>
                                            
                                    </form>
                                    <br>
                                </div>   
                            </div>


                </div>
            </div>

        <div class="container">
            <div class="section">
            <div class="row"><br></div>
            <div class="row"><br></div>
            <div class="row"><br></div>
           
              <!--   Icon Section   -->
              <div class="row steps">
                <div class="col s12 m4">
                  <div class="icon-block">
                    <div class="center"><img src="img/magic.png"></div>
                    <h5 class="teal-text">Plan your appointment</h5>
        
                  </div>
                </div>
        
                <div class="col s12 m4">
                  <div class="icon-block">
                    <div class="center"><img src="img/pay.png"></div>
                    <h5 class="teal-text">Easily pay for your services</h5>
                  </div>
                </div>
        
                <div class="col s12 m4">
                  <div class="icon-block">
                    <div class="center"><img src="img/complete.png"></div>
                    <h5 class="teal-text">Enjoy a clean space!</h5>
    
                  </div>
                </div>
              </div>
        
            </div>
            <br>
        </div>
        <div class="container" id="services">
              <div class="section">
                  <div class="row">
                      <h3 class="col s12 center teal-text text-lighten-3">Services</h3>
                  </div>
                  <div class="row">
                      <div class="col s12 m3">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://static1.squarespace.com/static/58c1c226c534a59cc493b5fc/t/5bfd7a121ae6cf259c7e595e/1543338519342/Clean-House-Clean-Mind-%E2%80%93-the-Mind-Boosting-Benefits-of-Organised-Home-.jpg?format=500w">
                                <span class="card-title teal-text text-lighten-3">All Rooms</span>
                                
                                
                            </div>
                        </div>
                      </div>
                      <div class="col s12 m3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="http://blog.toiletpaperworld.com/wp-content/uploads/2011/03/cleanbathroom-300x200.jpg">
                                    <span class="card-title teal-text text-lighten-3">Bathrooms</span>
                                </div>
                            </div>
                      </div>
                      <div class="col s12 m3">
                          <div class="card">
                              <div class="card-image">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHv-DLCuLgPQNd9TWoIRu3unoCTzQVTJFZdLbgAPrgzKNd4gPF" alt="">
                                <span class="card-title teal-text text-lighten-3">Kitchen</span>
                            </div>
                          </div>
                      </div>
                      <div class="col s12 m3">
                          <div class="card">
                              <div class="card-image">
                                  <img src="https://i.imgur.com/9yrmX03.jpg" alt="">
                                  <span class="card-title teal-text text-lighten-3">Extras</span>
                              </div>
                          </div>
                          
                      </div>
                </div>
                <h3 id="about" class="row center teal-text text-lighten-3">About</h3>
                <div class="row">
                    <div class="col s12 m6">
                          <p>It is difficult to manage your job, family and your social life all at the same time. Of course you need some help at home. Take back your valuable free time for the things you love by booking your trusted cleaner with Helpling</p>
                          <p>Having a cleaner in your home is a delicate situation - trust is very important. It is also important to get along with your cleaner on a personal level. The cleaners you can book at Helpling all have individual online profiles with ratings from previous customers. We also do a background check on all of the cleaners.</p>
                    </div>
                    <div class="col s12 m6">
                        <img class="responsive-img" src="https://www.stathakis.com/hs-fs/hubfs/4%20-%20team%20clean.png?width=645&height=340&name=4%20-%20team%20clean.png">
                    </div>
                </div>
            </div>
            <h3 class="row center teal-text text-lighten-3">Testimonials</h3>
            <div class="row">
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <b>Whitney 4.5/5 <br>    
                                    "Fantastic!
                                </b>
                                <p>Very neat and fantastically cleaned. The windows are shining again!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <b>Matilde 5/5<br>    
                                    "Friendly and punctual"
                                </b>
                                <p>Matilde is always friendly and punctual. The quality of her work never disappoints and is well cared for.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <b>Brad 4.5/5 <br>    
                                    "Quick and thorough help!"
                                 </b>
                                <p>Cristina's is a quick and thorough cleaning service. He gets a lot done in a short time and also cleans things that are not right. He speaks English but is also very pleasant to deal with.</p>
                            </div>
                       </div>     
                    </div>
                </div>
            </div>
        
          



    <footer class="page-footer teal">
        <div class="container">
            <div class="section" id="contact">
            <h3 class="row center teal-text text-lighten-3">Contact Us</h3>        
            <form method="post" action="new.php" id="contact">
              <div class="row">
              <?=$thankYouContact ?>
                <div class="col s12 m6">
                    <div class="row">
                      <div class="input-field col s12">
                          <input name="contact_full_name" type="text" class="validate">
                          <label for="contact_full_name">Full Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                          <input name="contact_address" type="text" class="validate">
                          <label for="contact_address">Street Address</label>
                      </div>
                    </div>
                    <div class="row">
                          <div class="input-field col s6">
                              <select name="contact_zip">
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
                              <label >Zip</label>
                          </div>
                          <div class="input-field col s6">
                              
                              <input name="contact_telephone" type="tel" class="validate">
                              <label for="contact_telephone">Telephone</label>
                          </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="row">
                            <div class="input-field col s12">
                                <input name="contact_email" type="email" class="validate">
                                <label for="contact_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="contact_textarea" class="materialize-textarea"></textarea>
                                <label for="contact_textarea">Message</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 file-field input-field">
                                <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="contact" form="contact">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                    
                

              
            </div>
            </form>
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