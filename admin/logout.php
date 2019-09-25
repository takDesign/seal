<?php
session_start(); // start/invoke the super session variable

unset($_SESSION["userID"]); // DELETES THE VARIABLE

header("location: index.php?success=true");

?>