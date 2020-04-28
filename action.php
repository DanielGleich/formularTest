<html>
  <head>
    <meta charset="uft-8">
    <title>Daten</title>
  </head>
  <body>
  <h1>Test</h1>
    <?PHP
    $givenName = $_POST["givenName"];
    $surName = $_POST["surName"];
    $gender = $_POST["sex"];
    
    $filename = "text.html";
    $temp = fopen($filename, "r");
    if ($temp) {
      $contents = fread($temp, filesize($filename));
      fclose($temp);
    }
    
    print("<p>Antwort aus Formular: $gender,$givenName,$surName</p>");
    echo $contents;
    ?>  
  </body>
</html>
