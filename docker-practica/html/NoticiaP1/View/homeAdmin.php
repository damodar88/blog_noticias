<?php include 'Default/head.php'; ?>

<?php
session_start();
?>

<?php //include 'Default/MenuAdmin.php' ?>


<h1><?php echo $_SESSION["usuario"]["nombre"];?></h1>






<?php include 'Default/footer.php' ?>
