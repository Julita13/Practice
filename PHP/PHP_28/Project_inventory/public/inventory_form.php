<?php
if(isset($_GET["message"])){
    echo ($_GET["message"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory check</title>
</head>
<body>
    

    <form action="inventory_check.php" method="POST"><br>
        <label for="check">Please write ID number of the product you have selected:</label><br>
        <input type="text" name="check" id="check" value="1:3,2:2,4:2"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>