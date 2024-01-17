<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File2</title>
</head>
<body>
    <h1>File2</h1>

    <?php
    // In File2.php, retrieve the submitted ID
    $id = isset($_GET['id']) ? $_GET['id'] : 0; // Default value 0 if no ID was transferred

    
    include "db_conn.php";

    if (!$conn) {
	    echo "Connection failed!";
    }

    // Execute SQL query with the submitted ID 
    $sql = "SELECT * FROM pages WHERE id = $id";
    $result = $conn->query($sql);

    // Verify that the query was successful
    if ($result->num_rows > 0) {
    // Retrieve and and store in variables to use throughout the code
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $maincontent = $row["maincontent"];
            $secondarycontent = $row["secondarycontent"];
    }
    } else {
    echo "No data found.";
    }
   
    // Close connection
    $conn->close();
    ?>

    
     <!-- HTML-Struktur mit den abgerufenen Daten -->
     <h2><?php echo $title; ?></h2>

    <div id="main-content">
        <p>Main Content: <?php echo $maincontent; ?></p>
    </div>

    <div id="secondary-content">
        <p>Secondary Content: <?php echo $secondarycontent; ?></p>
    </div>



</body>
</html>
