<?php
    session_start();
    session_unset();
    session_destroy();
    header('location:authentication.php');
?>
<h1?>welcome you are authenticated...</h1>
<a href="log_out">log ..out!</a>