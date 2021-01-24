<?php

unset($_SESSION['username']);
unset($_SESSION['password']);

header("Location: index.php");

include "../bootcamp_app/components/navigation.php";