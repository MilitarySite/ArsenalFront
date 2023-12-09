<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form name="form" action="" method="post">
        <input type="text" name="uname" id="uname" value="">
    </form>
    

</body>

</html>

<?php 
    session_start(); 
    include "db_conn.php";
    
    if (isset($_POST['uname'])) {
        $unameValue = $_POST['uname'];
        echo "The uname is: " . $unameValue;

    }

?>
