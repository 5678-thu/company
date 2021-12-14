<?php
include("connect.php");
$query = "DELETE FROM `company` WHERE `user_id`=104234969715685510075 AND `Amount`=4 AND`Symbol`='APP' AND `Price` LIKE 96.06";
$result = mysqli_query($connection, $query);
