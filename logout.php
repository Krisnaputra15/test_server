<?php
session_start();

// Clear all session data
session_unset();

// Destroy the session
session_destroy();

header("Location: index.php");
?>