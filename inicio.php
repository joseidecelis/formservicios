<?php include_once 'header.php'; ?>

<h1>Inicio</h1>
<?php

session_start();

$_SESSION['logged_in_user_id'] = '1';
$_SESSION['logged_in_user_name'] = 'usuario1';

if(isset($_SESSION['logged_in_user_id'])){


echo $_SESSION['logged_in_user_id'];
echo $_SESSION['logged_in_user_name'];
}
?>

<?php include_once 'footer.php'; ?>