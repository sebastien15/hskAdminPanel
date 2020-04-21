<?php
require('conn.php');

if (isset($_POST['submit'])) {
	if (empty($_POST['code_key']) || empty($_POST['timeflame'] || $_POST['start_time'])) {
		echo "not working";
	}else{
		$codeKey = $_POST['code_key'];
		$startTime = $_POST['start_time'];
		$timeFlame  = $_POST['timeflame'];
		$endTime    =  date('Y-m-d h:i:sa', strtotime($startTime. ' +'.$timeFlame));

# INSERT INTO `player`(`id`, `code_key`, `start_time`, `end_time`) VALUES ([value-1],[value-2],[value-3],[value-4])
		$sql = "INSERT INTO player ( code_key, start_time, end_time ) VALUES (  :code_key, :start_time, :end_time )";
		$pdo_statement = $pdo_conn->prepare( $sql );
			
		$result = $pdo_statement->execute( array( ':code_key'=>$codeKey, ':start_time'=>$startTime, ':end_time'=>$endTime ) );
		if (!empty($result) ){
		  header('location:index.php');
		}
	}
}

if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$pdo_statement=$pdo_conn->prepare("delete from player where id=".$id);
	$pdo_statement->execute();
	$msg = "player deleted successfully";
	header('location: index.php?msg='.$msg);
} else {
	# code...
}
