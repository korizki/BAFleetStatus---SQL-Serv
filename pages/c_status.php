<div class="boxcontents">
    <details class="tablecontent" style="display : <?php echo ($_SESSION['username'] == 'Admin Coal') ? 'none' : 'block' ?>">
        <summary>
            <h2><i class="fa fa-cube" style="margin-inline-end: 10px;"></i>Status Unit (OB) </h2>
        </summary>
        <div class="maincontentsection">
        <button onClick="showforminputbdob()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Status Unit</button>
        </div>
        <div class="tablebox">
            <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Unit</th>
                        <th class="mobilehide">Lokasi</th>
                        <th>Status Unit</th>
                        <th>Keterangan</th>
                        <th>Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../codes/connection.php"; 
                        $no = 1;
                        $getdata = $connection->query("SELECT TOP(50) * FROM t_historybd INNER JOIN t_unit ON his_unit_name = t_unit.unit_name WHERE t_unit.unit_type IN ('Shovel PC-3000','PC 1250','Belaz','HD PPA','Dozer','PC 200','Grader','Water Tank','Compac') ORDER BY id_his DESC");
                        while($row = $getdata->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['his_unit_name'] ?></td>
                                <td class="mobilehide"><?php echo $row['area'] ?></td>
                                <td><?php echo $row['his_type'] ?></td>
                                <td><?php echo $row['his_detail'] ?></td>
                                <td><?php echo $row['his_updated_at'] ?></td>
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
            <h2><i class="fa fa-cubes" style="margin-inline-end: 10px;"></i>Status Unit (Coal) </h2>
        </summary>
        <div class="maincontentsection">
            <button onclick="showforminputbdcoal()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Status Unit</button>
        </div>
        <div class="tablebox">
        <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Unit</th>
                        <th class="mobilehide">Jenis Unit</th>
                        <th class="mobilehide">Lokasi</th>
                        <th>Status Unit</th>
                        <th>Keterangan</th>
                        <th>Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../codes/connection.php"; 
                        $no = 1;
                        $getdata = $connection->query("SELECT TOP(50) * FROM t_historybd INNER JOIN t_unit ON his_unit_name = t_unit.unit_name WHERE t_unit.unit_type IN ('Excavator','Excavator Tanah','Excavator Coal') ORDER BY id_his DESC");
                        while($row = $getdata->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['his_unit_name'] ?></td>
                                <td class="mobilehide"><?php echo $row['unit_type'] ?></td>
                                <td class="mobilehide"><?php echo $row['area'] ?></td>
                                <td><?php echo $row['his_type'] ?></td>
                                <td><?php echo $row['his_detail'] ?></td>
                                <td><?php echo $row['his_updated_at'] ?></td>
                            </tr> 
                            <?php
                        }
                    ?>
                </tbody>
            </table>  
        </div>
    </details>
</div>