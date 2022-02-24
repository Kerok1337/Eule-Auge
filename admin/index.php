<?php
    include_once "$_SERVER[DOCUMENT_ROOT]/Eule-Auge/classes/includes.php"; 
    if (isset($_POST["submit"])) {
        loginauswertung::checkLogin("username", "mario256");
    }
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Style/allgemein.css">
    <link rel="stylesheet" href="Style/home.css">
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>