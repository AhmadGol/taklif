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
    $dbname = "Univercity";

    $dbc = new mysqli($severname,$username,$password,$dbname);

    //insert data:

    $sql = "INSERT User(FirstName,LastName,FatherName,NationalCode)
    VALUES('Ahmad','Golshirazi','Hosein','1278545698'),
    ('ALi','Noori','Akbar','1278541352')";

     $result = $dbc->query($sql)
    
    ?>
</body>
</html>