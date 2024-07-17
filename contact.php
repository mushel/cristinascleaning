
<?php
if($_POST["message"]) {
    $recipient="mushel@gmail.com";
    $subject="Contact";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $address=$_POST["address"];
    $zip=$_POST["zip"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message\n$address\n$zip";   
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
    <title>Contact email</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>

<?=$thankYou ?>
<form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>
        <label for="address">Street Address</label>
        <input id="address" type="text" class="validate" name="address">
        <div class="input-field col s6">
            <label>Zip</label>
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
    </div>                                              
                                               
        <input type="submit" name="submit">
    </form>
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
