<?php

$post = $_POST;
$status = 0; 

// print_r($post);

if($post['first_name']) {
    $status = 1;
    // echo "I am writing {$post['first_name']} {$post['last_name']}";
    //     header("Location: form.php");
// } else {
//     echo "OOOPS";
};

header("Location: form.php?status=$status");
?>