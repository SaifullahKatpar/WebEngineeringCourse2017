<?php
session_start();
$_SESSION['name']='saif';
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
//session_unset(); 

// destroy the session 
session_destroy();
echo $_SESSION['name'];

//echo "All session variables are now removed, and the session is destroyed." 
?>

</body>
</html>