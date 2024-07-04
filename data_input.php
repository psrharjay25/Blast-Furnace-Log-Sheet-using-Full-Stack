<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Input</title>
</head>
<body>
    <form action="data_input.php" method="post">
        Date: <input type="date" name="date" required><br>
        Shift: <input type="text" name="shift" required><br>
        BF: <input type="text" name="BF" required><br>
        <input type="submit" name="submit" value="Fetch Data">
    </form>
    
    <!-- Place to display the data from the database -->
    <div id="dataDisplay">
        <!-- This section will be populated by PHP after processing the form -->
        <?php
            // Include the PHP script to process the form and fetch the data
            include 'fetch_data.php';
        ?>
    </div>
</body>
</html>
