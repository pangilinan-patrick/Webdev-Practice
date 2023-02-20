<!DOCTYPE html>
<html lang="en">

  <head>
    <title>FA 2 | Patrick Pangilinan</title>
    <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

<body>
  <header>
    <span>Patrick A. Pangilinan</span>
    <span>C3A - BSCS</span>
    <span>Webdvt</span>
    <span>FA2</span>
  </header>

  <form action = "fileUploadScript.php" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "file" />
         <input type = "submit" value="upload" />
         <br/><br/>
         Email: <input type = "text" name = "email" required />
  </form>
</body>

</html>