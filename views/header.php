<a href="index.php?controller=Public&action=main">Home</a>
<?php
if(isset($_SESSION["userId"])){
?>
    <a href="index.php?controller=user&action=main">Admin</a>
    <a href="index.php?action=doLogOut">Logout</a>
<?php

}else{
?>  
    <a href="index.php?controller=Public&action=login">Login</a>
<?php
}
?>
<!--End of Header-->