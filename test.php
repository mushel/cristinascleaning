<?php if(isset($_POST["submit"])) {

$to = "mushel@gmail.com";
$subject = "Message From Cristina's Cleaning website";
$email = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["msg"];

$headers = "From: cristinas.mcurrier.com";
$mailBody = "$name is contacting you and their email is $email\n\n$msg";

mail($to,$subject,$mailBody,$headers);
$thankYou = "Your message has been sent.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Cristina's Cleaning Service</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
<form action="#" id="form" method="post">
            
              <div class="row">
                 
                    <div class="input-field col m6 s12">
                        <input name="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>   
                    </div>
              </div>
                <div class="row">
                    <div class="input-field col m9 s12">
                      <textarea name="msg" class="materialize-textarea"></textarea>
                      <label for="msg">Message</label>
                      <?= $thankYou?>
                    </div>
                    <div class="input-field col m3 s12">
                      <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit" value="submit" id="send">Submit
                      </button>    
                    </div> 
                                     
                </div>
          </form>  
</div>

</body>
</html>