<?php 

function getFleet($fleet){
    include "connection.php";
    return mysqli_query($connection, "SELECT * FROM t_fleet WHERE fleet_unit = '$fleet' ORDER BY id_fleet DESC");
}
function getflow($fleet){
    include "connection.php";
    return mysqli_query($connection, "SELECT * FROM t_flow WHERE fl_unit_name = '$fleet' ORDER BY id_flow DESC");
}

?>