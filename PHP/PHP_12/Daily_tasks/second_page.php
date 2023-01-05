<h1>Hello, I am second page</h1>

<?php
    if(isset($_GET['first_page']) && $_GET['first_page'] != 0){
        echo "<h3>I came from first page</h3>";
    };

// print_r($_GET);

?>