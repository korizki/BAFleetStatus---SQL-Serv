<?php 

function getFleet($fleet, $type){
    include "connection.php";
    return $connection->query("SELECT * FROM t_fleet WHERE fleet_unit = '$fleet' AND fleet_hauler_type = '$type' ORDER BY id_fleet DESC");
}
function getflow($fleet){
    include "connection.php";
    return $connection->query("SELECT * FROM t_flow WHERE fl_unit_name = '$fleet' ORDER BY id_flow DESC");
}


?>