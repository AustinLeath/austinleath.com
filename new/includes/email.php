<?php
$msg = htmlspecialchars($_POST['emailform']);

$sbj = htmlspecialchars($_POST['subjectform']);

mail("austinleath18@gmail.com",$sbj,$msg);
?>
