<?php if (!defined('SYSPATH')) die ('Request not found');

session_unset();
session_destroy();
header("Location:index.php?action=home");
?>