<?php 

include "connection.php";
if(isset($_POST['submitdata'])){
    $unitname = $_POST['unitname'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    // query tambah data lokasi
    $insertdata = $connection->query("INSERT INTO t_location (loc_unit_name, loc_area, loc_location, updated_at) VALUES ('$unitname','$area','$location',getDate())");
    $update = $connection->query("UPDATE t_unit SET area = '$area', location = '$location' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?content=location&statusinput=success');
    } else {
        header('Location: ../pages/admin.php?content=location&statusinput=failed');
    }
}
if(isset($_POST['submitdatacoal'])){
    $unitname = $_POST['unitname'];
    $area = $_POST['area'];
    $loadertype = $_POST['loadertype'];
    // query tambah data 
    $insertdata = $connection->query("INSERT INTO t_location (loc_unit_name, loc_area, loc_location, updated_at) VALUES ('$unitname','$area','$loadertype',getDate())");
    $update = $connection->query("UPDATE t_unit SET area = '$area', unit_type = '$loadertype' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?content=location&statusinput=successcoal');
    } else {
        header('Location: ../pages/admin.php?content=location&statusinput=failedcoal');
    }
}
if(isset($_POST['submitdatafleet'])){
    $unitname = $_POST['unitname'];
    $totalfleet = $_POST['totalhauler'];
    $haulertype = $_POST['jenishauler'];
    // query tambah data 
    $insertdata = $connection->query("INSERT INTO t_fleet (fleet_unit, fleet_hauler, fleet_updated_at, fleet_hauler_type) VALUES ('$unitname','$totalfleet',getDate(), '$haulertype')");
    if($insertdata){
        header('Location: ../pages/admin.php?content=fleet&statusinput=fleetsuccess');
    } else {
        header('Location: ../pages/admin.php?content=fleet&statusinput=fleetfailed');
    }
}
if(isset($_POST['submitdatafleetcoal'])){
    $unitname = $_POST['unitname'];
    $totalfleet = $_POST['totalhauler'];
    $haulertype = $_POST['jenishauler'];
    // query tambah data 
    $insertdata = $connection->query( "INSERT INTO t_fleet (fleet_unit, fleet_hauler, fleet_updated_at, fleet_hauler_type) VALUES ('$unitname','$totalfleet',getDate(), '$haulertype')");
    if($insertdata){
        header('Location: ../pages/admin.php?content=fleet&statusinput=fleetcoalsuccess');
    } else {
        header('Location: ../pages/admin.php?content=fleet&statusinput=fleetcoalfailed');
    }
}
if(isset($_POST['submitdatabd'])){
    $unitname = $_POST['unitname'];
    $status = $_POST['type'];
    $detail = $_POST['detailstatus'];
    // query tambah data 
    $insertdata = $connection->query("INSERT INTO t_historybd (his_unit_name, his_type, his_detail, his_updated_at) VALUES ('$unitname','$status', '$detail', getDate())");
    $updatedata = $connection->query("UPDATE t_unit SET status = '$status' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?content=status&statusinput=bdsuccess');
    } else {
        header('Location: ../pages/admin.php?content=status&statusinput=bdfailed');
    }
}
if(isset($_POST['submitdatabdcoal'])){
    $unitname = $_POST['unitname'];
    $status = $_POST['type'];
    $detail = $_POST['detailstatus'];
    // query tambah data 
    $insertdata = $connection->query("INSERT INTO t_historybd (his_unit_name, his_type, his_detail, his_updated_at) VALUES ('$unitname','$status', '$detail', getDate())");
    $updatedata = $connection->query("UPDATE t_unit SET status = '$status' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?content=status&statusinput=bdcoalsuccess');
    } else {
        header('Location: ../pages/admin.php?content=status&statusinput=bdcoalfailed');
    }
}
if(isset($_POST['submitdataflow'])){
    $unitname = $_POST['unitname'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $flowinfo = $from." To ".$to;
    // query tambah data lokasi
    $insertdata = $connection->query("INSERT INTO t_flow (fl_unit_name, fl_info, fl_updated_at) VALUES ('$unitname','$flowinfo', getDate())");
    if($insertdata){
        header('Location: ../pages/admin.php?content=flow&statusinput=flowsuccess');
    } else {
        header('Location: ../pages/admin.php?content=flow&statusinput=flowfailed');
    }
}
if(isset($_POST['submitdataflowcoal'])){
    $unitname = $_POST['unitname'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $flowinfo = $from." - ".$to;
    // query tambah data lokasi
    $insertdata = $connection->query("INSERT INTO t_flow (fl_unit_name, fl_info, fl_updated_at) VALUES ('$unitname','$flowinfo', getDate())");
    if($insertdata){
        header('Location: ../pages/admin.php?content=flow&statusinput=flowsuccesscoal');
    } else {
        header('Location: ../pages/admin.php?content=flow&statusinput=flowfailedcoal');
    }
}

?>