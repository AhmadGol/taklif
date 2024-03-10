<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      //connect to mysql:
    $severname = "localhost";
    $username = "root";
    $password="9990816052";
    $dbname = "univercity";
    
    $dbc = new mysqli($severname,$username,$password,$dbname);

   


     $sql = "DELETE FROM User WHERE FirstName ='{$_GET['id']}'";
      
 
      $result = $dbc->query($sql);
    ?>
</body>
</html>