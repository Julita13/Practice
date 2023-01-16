<?php
include_once(__DIR__ . "/dump.php");
include_once(__DIR__ . "/pet_functions.php");
$get = $_GET;
if(isset($get['id'])){
    $item = getPet($get['id']);
}else{
    exit("No Id detected");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
.green{
    margin-left: 500px;
    height: 50px;
    width: 200px;
    background-color: green;
}
.red{
    margin-left: 500px;
    height: 50px;
    width: 200px;
    background-color: red;
}
    </style>
</head>
<?php
$get = $_GET;
if(isset($get['status'])){
    echo nl2br(message(status: $get['status'], body:$get['message']));
}
$json = isset($_GET['old_data']) ? $_GET['old_data'] : "";
$oldData = json_decode($json, true);
function message(string $title = '', string $body = '', int $status = 1): string{
    if($status == 1){
        $title = 'Succses';
        $color = "green";
    }elseif($status == 0){
        $title = 'Fail';
        $color = "red";
    }else{
        $title = 'Info';
        $color = "blue";
    }
    $json = json_decode($body, true);
    if($json){
        $body = implode("\n", $json);
    }


    return "<div class='$color'><h1>$title</h1><p>$body</p></div>";
}
?>
<body>
    <form action="update_content.php" method="POST">
        <input name='id' type='hidden' value="<?php echo $item['id'] ?? '' ?>">
        <label for="">Name</label>
        <input type="text" name='name' value="<?php echo $oldData['name'] ?? $item['name'] ?? '' ?>">
        <label for="">Age</label>
        <input type="number" name='age' value="<?php echo $oldData['age'] ?? $item['age'] ?? '' ?>">
        <label for="">Breed</label>
        <input type="text" name='breed' value="<?php echo $oldData['breed'] ?? $item['breed'] ?? ''?>">
        <label for="">Weight</label>
        <input type="number" name='weight' value="<?php echo $oldData['weight'] ?? $item['weight'] ?? ''?>">
        <label for="">Image</label>
        <input type="text" name='img' value="<?php echo $oldData['img'] ?? $item['img'] ?? ''?>">
        <input type='submit'>
    </form>
</body>
</html>