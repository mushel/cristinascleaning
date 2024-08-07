<?php if(isset($_POST["submit"])) {

$to = "mushel@gmail.com";
$subject = "Message From Cristina's Cleaning website";
$email = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["msg"];
$tel = $_POST["tel"];
$address = $_POST["address"];
$zip = $_POST["zip"];

$headers = "From: cristinas.mcurrier.com";
$mailBody = "$name is contacting you about:\n\n$msg\n\n$name's email is $email and their address is $address $zip and telephone number is $tel";

mail($to,$subject,$mailBody,$headers);
$thankYou = ""; 
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
                <div class="input-field col m4 s12">
                    <input name="address" type="text" class="validate">
                    <label>Street address</label>
                </div>
                <div class="input-field col m4 s12">
                                        <select name="zip">
                                            <option value="" disabled selected>Pick Your Zip</option>
                                            <option>70139</option>
                                            <option>70112</option>
                                            <option>70113</option>
                                            <option>70163</option>
                                            <option>70115</option>
                                            <option>70116</option>
                                            <option>70117</option>
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
                <div class="input-field col m4 s12">
                    <input name="tel" type="tel" class="validate">
                    <label>Telephone number</label>
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col m9 s12">
                    <input name="msg" type="text" class="validate">
                    <label for="msg">Message</label>
                    <?=$thankYou?>
                </div>
                <div class="input-field col m3 s12">
                    <button class="btn waves-effect waves-light orange darken-3" type="submit" name="submit" value="submit" id="send">Submit
                    </button>    
                </div>                      
            </div>
        </form>  
    </div>

 <!-- Import jQuery (required for Materialize JavaScript) -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Import Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        // Initialize select dropdown
        $('select').formSelect();

    });
</script>
</body>
</html>