<?php

session_start();

session_destroy();

header("Location: loginSuccess.php");
exit;