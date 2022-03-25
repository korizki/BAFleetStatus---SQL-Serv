<?php 

function filterUnitAPT($area, $location){
    include "connection.php";
    return $connection->query("SELECT COUNT(unit_name) FROM t_unit WHERE area = '$area' AND location = '$location' AND status IN('Ready','Breakdown','General','Standby') AND unit_type IN ('Grader','Dozer','Compac','PC200','Water Tank')");
};
function filterUnitAPTCom($area, $location){
    include "connection.php";
    return $connection->query("SELECT * FROM t_unit WHERE area = '$area' AND location = '$location' AND status IN('Ready','Breakdown','General','Standby') AND unit_type IN ('Grader','Dozer','Compac','PC200','Water Tank') ORDER BY unit_name ASC");
};

$queryaptjalanpit2 = filterUnitAPT('PIT 2', 'Jalan');
$queryaptjalanpit2det = filterUnitAPTCom('PIT 2', 'Jalan');
$queryaptfrontpit2 = filterUnitAPT('PIT 2', 'Front');
$queryaptfrontpit2det = filterUnitAPTCom('PIT 2', 'Front');
$queryaptdisposalpit2 = filterUnitAPT('PIT 2', 'Disposal');
$queryaptdisposalpit2det = filterUnitAPTCom('PIT 2', 'Disposal');
$queryaptjalanpit3 = filterUnitAPT('PIT 3', 'Jalan');
$queryaptjalanpit3det = filterUnitAPTCom('PIT 3', 'Jalan');
$queryaptfrontpit3 = filterUnitAPT('PIT 3', 'Front');
$queryaptfrontpit3det = filterUnitAPTCom('PIT 3', 'Front');
$queryaptdisposalpit3 = filterUnitAPT('PIT 3', 'Disposal');
$queryaptdisposalpit3det = filterUnitAPTCom('PIT 3', 'Disposal');

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
$readyexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Ready');
$breakdownexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Breakdown');
$standbyexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Standby');
$generalexpit2 = countUnit('PIT 2', 'Excavator Coal', 'General');
$readyexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'Ready');
$breakdownexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'Breakdown');
$standbyexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'Standby');
$generalexpit21 = countUnit('PIT 2', 'Excavator Tanah', 'General');
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

$readyextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Ready');
$breakdownextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Breakdown');
$standbyextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Standby');
$generalextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'General');

$readyexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Ready');
$breakdownexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Breakdown');
$standbyexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Standby');
$generalexpit3 = countUnit('PIT 3', 'Excavator Coal', 'General');

function getStatus($unitname){
    include "connection.php";
    return $connection->query("SELECT status FROM t_unit WHERE unit_name = '$unitname'");
};
function getDetail($unitnamehis){
    include "connection.php";
    return $connection->query("SELECT his_detail FROM t_historybd WHERE his_unit_name = '$unitnamehis' ORDER BY id_his DESC");
};