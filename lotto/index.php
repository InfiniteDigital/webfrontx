<?php
$domain = explode('.',$_SERVER['HTTP_HOST']);
header('Location: https://'.$domain[1].'.'.$domain[2]);
?>