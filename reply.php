<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Message Sent!</title>
    <link rel="stylesheet" href="master.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  </head>
  <body>

    <?php
      $timestamp = date("ymdhms");      // Crates timestamp
    $fileID = // need to set to Thread id
    $ms_ERR = "Your message was sent.";     // resets error var

    $myfile = fopen($fileID, "a+") or die("something fucked up. sorry m8");
    if (empty($_POST["message"])) {
    $ms_ERR = "Error! Field cannot be left empty.";
  }
   else{
    $txt = $_POST["message"];
    $message_clean = filter_var($txt, FILTER_SANITIZE_STRING);        //cleans message for any script
    $master_txt = "<p class = reply id = $timestamp > Anonymous, id: $timestamp  </br> </br> &nbsp; &nbsp; $message_clean </p>";     //formats the message
    fwrite($myfile,$master_txt);
    }

    ?>

<h3>
  <span class="error"> <?php echo $ms_ERR;?>
  </span>
</h3>

</body>
</html>
