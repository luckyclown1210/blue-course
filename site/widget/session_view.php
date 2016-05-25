<?php
if (isset($_SESSION["user"]))
{
echo '<p style="text-align:center"><kbd>Welcome! '.$_SESSION["user"].'</kbd></p>';
}
else
{
    
}
?>
    