<?php
include "conn.php";

if($_GET['do']=="delete"){
$stmt=$db->prepare("DELETE FROM pelatis WHERE `pelatis`.`id` = ?");
$stmt->execute(array($_GET['userid']));

$link=$_SERVER['HTTP_REFERER'];
echo $link;
header("location: $link");
}