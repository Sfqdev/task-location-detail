<?php
require 'autoload.php';
 
$obj = new includes\maps();
/**
 * This simple condition can expanded based on new requirement
 */
if ($_POST['search'])
    echo $obj->searchAddress();
else
    echo json_encode(array());

?>