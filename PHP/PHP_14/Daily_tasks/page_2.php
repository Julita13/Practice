<?php 

if(isset($_GET['message'])){
    $message = strtoupper($_GET['message']);
    echo $message;
} else {
    echo "NO MESSAGE";
};

echo "<br><br><a href='page_1.php'>Grįžti</a>";