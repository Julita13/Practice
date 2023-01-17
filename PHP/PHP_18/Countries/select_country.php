<?php
session_start();
include_once __DIR__ . "/helpers.php";

if(isset($_SESSION['countries'])){
    echo "<h1>$_SESSION[countries]</h1>";
}

// $country = $_SESSION['countries'] ?? "none";
// echo "<h2>Your favourite country is $country</h2>"

?>

<form action="save_country.php" method="POST">
    <select name="countries" id="countries">
        <option value="France">France</option>
        <option value="Spain">Spain</option>
        <option value="Poland">Poland</option>
        <option value="Croatia">Croatia</option>
        <option value="Iceland">Iceland</option>
    </select><br><br>
    <input type="submit"><br><br>
    <a href="remove_country.php?action=remove" id="remove">Remove country</a>
</form>

<script>
    const remove = document.querySelector("#remove");
    remove.addEventListener("click", (e) => {
        const answer = confirm("Ar tikrai norite panaikinti?");
        if(!answer){
            e.preventDefault();
        }
        // answer ? null : e.preventDefault();
    })
    
    
</script>