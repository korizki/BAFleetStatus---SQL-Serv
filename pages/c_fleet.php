<div class="boxcontents">
    <details class="tablecontent" id="summaryfleet" style="display : <?php echo ($_SESSION['username'] == 'Admin Coal') ? 'none' : 'block' ?>">
        <summary >
            <h2><i class="fa fa-cube" style="margin-inline-end: 10px;"></i>Setting Fleet (OB) </h2>
        </summary>
        <div class="maincontentsection">
            <button onclick="showforminputfleet()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Setting Fleet Unit</button>
        </div>
        <div class="tablebox">
            <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Loader</th>
                        <th>Tipe Loader</th>
                        <th>Jumlah Hauler</th>
                        <th>Tipe Hauler</th>
                        <th>Lokasi</th>
                        <th>Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../codes/connection.php"; 
                        $no = 1;
                        $getdata = $connection->query("SELECT TOP(50) * FROM t_fleet INNER JOIN t_unit ON fleet_unit = t_unit.unit_name WHERE t_unit.unit_type IN ('Shovel PC-3000','PC 1250') ORDER BY id_fleet DESC");
                        while($row = $getdata->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['fleet_unit'] ?></td>
                                <td><?php echo $row['unit_type'] ?></td>
                                <td><?php echo $row['fleet_hauler'] ?></td>
                                <td><?php echo $row['fleet_hauler_type'] ?></td>
                                <td><?php echo $row['area'] ?></td>
                                <td><?php echo $row['fleet_updated_at'] ?></td>
                            </tr> 
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </details>
    <details class="tablecontent" style="display : <?php echo ($_SESSION['username'] == 'Admin OB') ? 'none' : 'block' ?>">
        <summary>
            <h2><i class="fa fa-cubes" style="margin-inline-end: 10px;"></i>Setting Fleet (Coal) </h2>
        </summary>
        <div class="maincontentsection">
        <button onclick="showforminputfleetcoal()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Setting Fleet Unit</button>
        </div>
        <div class="tablebox">
            <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Loader</th>
                        <th>Tipe Loader</th>
                        <th>Jumlah Hauler</th>
                        <th>Tipe Hauler</th>
                        <th>Lokasi</th>
                        <th>Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        include "../codes/connection.php"; 
                        $no = 1;
                        $getdata = $connection->query("SELECT TOP(50) * FROM t_fleet INNER JOIN t_unit ON fleet_unit = t_unit.unit_name WHERE t_unit.unit_type IN ('Excavator','Excavator Tanah', 'Excavator Coal') ORDER BY id_fleet DESC");
                        while($row = $getdata->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['fleet_unit'] ?></td>
                                <td><?php echo $row['unit_type'] ?></td>
                                <td><?php echo $row['fleet_hauler'] ?></td>
                                <td><?php echo $row['fleet_hauler_type'] ?></td>
                                <td><?php echo $row['area'] ?></td>
                                <td><?php echo $row['fleet_updated_at'] ?></td>
                            </tr> 
                            <?php
                        }
                    ?>
                </tbody>
            </table>    
        </div>
    </details>
</div>