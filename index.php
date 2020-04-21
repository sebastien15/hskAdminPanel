<?php
require_once("conn.php");
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM player ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
<html>
<?php include('player/inc/head.php');?>
<body>
	<?php include('player/inc/aside.php'); ?>
	<?php include('player/inc/rightSide.php'); ?>
	<?php include('player/inc/footer.php'); ?>
</body>
</html>