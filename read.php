
<!DOCTYPE html>
<html>
  <head>
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link rel="stylesheet" href="master.css">
    <meta charset="utf-8">
    <title>qChan</title>
  </head>
  <body>

<div class="post_box">
<iframe src="post.html" style="border: none;" height="700px;"></iframe>

</div>
<?php
$myfile = fopen("post.txt", "r") or die("No posts");
$message = fread($myfile,filesize("post.txt"));
print $message;

?>


  </body>
</html>
