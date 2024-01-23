<?php
session_start();


if (!isset($_SESSION['user_name'])) {
    header("Location: loginpage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/logstyle.css">
</head>
<body>

<h1>Benvenuto, <?php echo $_SESSION['name']; ?>!</h1>
<a href="../page/dashboard/index.php?name=<?php echo $_SESSION['name']; ?>"> </a>




<!-- Aggiungi il link per il logout -->
<a href="logout.php?">Logout</a>

</body>
</html>
