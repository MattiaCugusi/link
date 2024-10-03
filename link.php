<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link</title>
</head>
<body>
  <?php
   $linkBase = "<a href = 'https://xkcd.com'>https://xkcd.com</a>"; 
   
   $numLink = rand(2,5);

   for ($i = 0; $i < $numLink; $i++) {
    echo "<p><a href = 'https://xkcd.com/" . $i+1 ."'>Pagina " . $i +1 . "</a></p>";
   }

 
  ?>
</body>
</html>