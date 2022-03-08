<?php 

include "connection.php";
if(isset($_POST['submitdata'])){
    $unitname = $_POST['unitname'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    // query tambah data lokasi
    $insertdata = mysqli_query($connection, "INSERT INTO t_location VALUES (NULL, '$unitname','$area','$location',current_timestamp())");
    $update = mysqli_query($connection, "UPDATE t_unit SET area = '$area', location = '$location' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=success');
    } else {
        header('Location: ../pages/admin.php?statusinput=failed');
    }
}
if(isset($_POST['submitdatacoal'])){
    $unitname = $_POST['unitname'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    // query tambah data 
    $insertdata = mysqli_query($connection, "INSERT INTO t_location VALUES (NULL, '$unitname','$area','$location',current_timestamp())");
    $update = mysqli_query($connection, "UPDATE t_unit SET area = '$area', location = '$location' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=successcoal');
    } else {
        header('Location: ../pages/admin.php?statusinput=failedcoal');
    }
}
if(isset($_POST['submitdatafleet'])){
    $unitname = $_POST['unitname'];
    $totalfleet = $_POST['totalhauler'];
    // query tambah data 
    $insertdata = mysqli_query($connection, "INSERT INTO t_fleet VALUES (NULL, '$unitname','$totalfleet',current_timestamp())");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=fleetsuccess');
    } else {
        header('Location: ../pages/admin.php?statusinput=fleetfailed');
    }
}
if(isset($_POST['submitdatafleetcoal'])){
    $unitname = $_POST['unitname'];
    $totalfleet = $_POST['totalhauler'];
    // query tambah data 
    $insertdata = mysqli_query($connection, "INSERT INTO t_fleet VALUES (NULL, '$unitname','$totalfleet',current_timestamp())");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=fleetcoalsuccess');
    } else {
        header('Location: ../pages/admin.php?statusinput=fleetcoalfailed');
    }
}
if(isset($_POST['submitdatabd'])){
    $unitname = $_POST['unitname'];
    $status = $_POST['type'];
    $detail = $_POST['detailstatus'];
    // query tambah data 
    $insertdata = mysqli_query($connection, "INSERT INTO t_historybd VALUES (NULL, '$unitname','$status', '$detail', current_timestamp())");
    $updatedata = mysqli_query($connection, "UPDATE t_unit SET status = '$status' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=bdsuccess');
    } else {
        header('Location: ../pages/admin.php?statusinput=bdfailed');
    }
}
if(isset($_POST['submitdatabdcoal'])){
    $unitname = $_POST['unitname'];
    $status = $_POST['type'];
    $detail = $_POST['detailstatus'];
    // query tambah data 
    $insertdata = mysqli_query($connection, "INSERT INTO t_historybd VALUES (NULL, '$unitname','$status', '$detail', current_timestamp())");
    $updatedata = mysqli_query($connection, "UPDATE t_unit SET status = '$status' WHERE t_unit.unit_name = '$unitname'");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=bdcoalsuccess');
    } else {
        header('Location: ../pages/admin.php?statusinput=bdcoalfailed');
    }
}
if(isset($_POST['submitdataflow'])){
    $unitname = $_POST['unitname'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $flowinfo = $from." To ".$to;
    // query tambah data lokasi
    $insertdata = mysqli_query($connection, "INSERT INTO t_flow VALUES (NULL, '$unitname','$flowinfo', current_timestamp())");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=flowsuccess');
    } else {
        header('Location: ../pages/admin.php?statusinput=flowfailed');
    }
}
if(isset($_POST['submitdataflowcoal'])){
    $unitname = $_POST['unitname'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $flowinfo = $from." To ".$to;
    // query tambah data lokasi
    $insertdata = mysqli_query($connection, "INSERT INTO t_flow VALUES (NULL, '$unitname','$flowinfo', current_timestamp())");
    if($insertdata){
        header('Location: ../pages/admin.php?statusinput=flowsuccesscoal');
    } else {
        header('Location: ../pages/admin.php?statusinput=flowfailedcoal');
    }
}

?>