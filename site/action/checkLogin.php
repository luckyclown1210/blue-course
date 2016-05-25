<?php

echo $_POST['username'];
echo $_POST['password'];

$list = db_select_list("SELECT stuUsername,stuPassword FROM tblStudent");
foreach ($list as $value) {
    if ($_POST['username']== $value["stuUsername"] && $_POST['password']==$value["stuPassword"])
    {
        $check = 1;     
    }      
}

if ($check ==1)
{
    session_start();
    $_SESSION["user"] = $_POST['username'];
    $_SESSION["pass"] = $_POST['password'];
    header("Location:index.php?action=home");
}
else
{
    header("Location:index.php?action=login");

}    
    
?>

