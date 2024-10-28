<?php
session_start();
session_unset();
session_destroy();

// start session
// clears all sessions
// close the session

header("Location: ../../login.php");
exit();


