<?php

$pass = "123123";
//save this hash to database
$passwordhash = password_hash($pass, PASSWORD_DEFAULT);

echo $passwordhash;

$success = password_verify($pass, '$2y$10$wJrENBtazW8b5vY5JSZxBOLUba7bqS7rPVe3hsDS6B1jb/cPIRUJS');
echo "<br>".$success;

?>