<?php 

function filterUnitAPT($area, $type){
    include "connection.php";
    return $connection->query("SELECT COUNT(unit_name) FROM t_unit WHERE area = '$area' AND status IN('Ready','Breakdown','General','Standby') AND unit_type = '$type'");
};
function filterUnitAPTCom($area, $type){
    include "connection.php";
    return $connection->query("SELECT * FROM t_unit WHERE area = '$area' AND status IN('Ready','Breakdown','General','Standby') AND unit_type = '$type' ORDER BY unit_name ASC");
};
// Filter APT PIT 2
$querydozerpit2 = filterUnitAPTCom('PIT 2', 'Dozer');
$querygraderpit2 = filterUnitAPTCom('PIT 2', 'Grader');
$querycompacpit2 = filterUnitAPTCom('PIT 2', 'Compac');
$querypcpit2 = filterUnitAPTCom('PIT 2', 'PC200');
$querywtpit2 = filterUnitAPTCom('PIT 2', 'Water Tank');
// Filter APT PIT 3
$querydozerpit3 = filterUnitAPTCom('PIT 3', 'Dozer');
$querygraderpit3 = filterUnitAPTCom('PIT 3', 'Grader');
$querycompacpit3 = filterUnitAPTCom('PIT 3', 'Compac');
$querypcpit3 = filterUnitAPTCom('PIT 3', 'PC200');
$querywtpit3 = filterUnitAPTCom('PIT 3', 'Water Tank');

// Menghitung unit berdasarkan kategori tertentu
function CountUnit($area, $unittype, $status){
    include "connection.php";
    return $connection->query("SELECT COUNT(unit_name) FROM t_unit WHERE area = '$area' AND unit_type = '$unittype' AND status = '$status' ");
};
// filter unit berdasarkan kategori tertentu
function ShowUnit($area, $unittype, $status){
    include "connection.php";
    return $connection->query("SELECT unit_name FROM t_unit WHERE area = '$area' AND unit_type = '$unittype' AND status = '$status'");
}
// Menampilkan list unit pada title 
function PrintUnit($data){
    while ($row = $data->fetch(PDO::FETCH_ASSOC)){
        echo $row['unit_name']." | "; }
};
// PIT 2
$readypit2 = countUnit('PIT 2', 'Shovel PC-3000', 'Ready');
$breakdownpit2 = countUnit('PIT 2', 'Shovel PC-3000', 'Breakdown');
$standbypit2 = countUnit('PIT 2', 'Shovel PC-3000', 'Standby');
$generalpit2 = countUnit('PIT 2', 'Shovel PC-3000', 'General');
// Count Ex Coal PIT2
$readyexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Ready');
$breakdownexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Breakdown');
$standbyexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Standby');
$generalexpit2 = countUnit('PIT 2', 'Excavator Coal', 'General');
// Count Exa Tanah PIT 2
$readyexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'Ready');
$breakdownexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'Breakdown');
$standbyexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'Standby');
$generalexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'General');
// Count Kamaz PIT 2
$readykmzpit2 = countUnit('PIT 2', 'DT Kamaz', 'Ready');
$breakdownkmzpit2 = countUnit('PIT 2', 'DT Kamaz', 'Breakdown');
$standbykmzpit2 = countUnit('PIT 2', 'DT Kamaz', 'Standby');
$generalkmzpit2 = countUnit('PIT 2', 'DT Kamaz', 'General');
// PIT 2 show unit
$belazready2 = ShowUnit('PIT 2','Belaz', 'Ready');
$hdready2 = ShowUnit('PIT 2','HD PPA', 'Ready');
$belazbd2 = ShowUnit('PIT 2','Belaz', 'Breakdown');
$hdbd2 = ShowUnit('PIT 2','HD PPA', 'Breakdown');
$belazst2 = ShowUnit('PIT 2','Belaz', 'Standby');
$hdst2 = ShowUnit('PIT 2','HD PPA', 'Standby');
// PIT 3 Show Unit

$belazready3 = ShowUnit('PIT 3','Belaz', 'Ready');
$hdready3 = ShowUnit('PIT 3','HD PPA', 'Ready');
$belazbd3 = ShowUnit('PIT 3','Belaz', 'Breakdown');
$hdbd3 = ShowUnit('PIT 3','HD PPA', 'Breakdown');
$belazst3 = ShowUnit('PIT 3','Belaz', 'Standby');
$hdst3 = ShowUnit('PIT 3','HD PPA', 'Standby');

// PIT 3
$readypit3 = countUnit('PIT 3', 'Shovel PC-3000', 'Ready');
$breakdownpit3 = countUnit('PIT 3', 'Shovel PC-3000', 'Breakdown');
$standbypit3 = countUnit('PIT 3', 'Shovel PC-3000', 'Standby');
$generalpit3 = countUnit('PIT 3', 'Shovel PC-3000', 'General');
// Count Exa Tanah
$readyextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Ready');
$breakdownextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Breakdown');
$standbyextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Standby');
$generalextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'General');
// Count Exa Coal
$readyexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Ready');
$breakdownexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Breakdown');
$standbyexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Standby');
$generalexpit3 = countUnit('PIT 3', 'Excavator Coal', 'General');
// Count Kamaz Coal 

function getStatus($unitname){
    include "connection.php";
    return $connection->query("SELECT status FROM t_unit WHERE unit_name = '$unitname'");
};
function getDetail($unitnamehis){
    include "connection.php";
    return $connection->query("SELECT his_detail FROM t_historybd WHERE his_unit_name = '$unitnamehis' ORDER BY id_his DESC");
};
function getUnitType($unitnames){
    include "connection.php";
    return $connection->query("SELECT unit_type FROM t_unit WHERE unit_name = '$unitnames'");
};