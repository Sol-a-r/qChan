<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
      $timestamp = date("ymdhms");      // Crates timestamp
      $title = $_POST["title"];
      $fileID = "$title.txt";
      $ms_ERR = "Your message was sent.";     // resets error var

      $myfile = fopen($fileID, "a+") or die("something fucked up. sorry m8");
      if (empty($_POST["message"])) {
      $ms_ERR = "Error! Field cannot be left empty.";
    }
     else{
    $txt = $_POST["message"];
    $message_clean = filter_var($txt, FILTER_SANITIZE_STRING);        //cleans message for any script
    $master_txt = "<p class = op id = $timestamp > Anonymous, id: $timestamp </br> </br> $message_clean </p>";     //formats the message
    fwrite($myfile,$master_txt);
  }
    ?>
  </body>
</html>
