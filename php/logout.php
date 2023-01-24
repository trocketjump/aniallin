<?php
    setcookie('email', '', time() - 3600 * 24 * 9999, "/");
    setcookie('username', '', time() - 3600 * 24 * 9999, "/");
    header("Location: ../index.php");
