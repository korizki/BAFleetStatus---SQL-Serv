<div class="boxcontents">
    <details id="flow1" class="tablecontent" style="display : <?php echo ($_SESSION['username'] == 'Admin Coal') ? 'none' : 'block' ?>">
        <summary>
            <h2><i class="fa fa-cube" style="margin-inline-end: 10px;"></i>Flow Hauler (OB) </h2>
        </summary>
        <div class="maincontentsection">
            <button onClick="showforminputflow()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Flow Hauler</button>
        </div>
        <div class="tablebox">
            <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Loader</th>
                        <th class="mobilehide">Tipe Loader</th>
                        <th>Area</th>
                        <th>Flow</th>
                        <th>Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../codes/connection.php"; 
                        $no = 1;
                        $getdata = $connection->query("SELECT TOP(50) * FROM t_flow INNER JOIN t_unit ON fl_unit_name = t_unit.unit_name WHERE t_unit.unit_type IN ('Shovel PC-3000','PC 1250') ORDER BY id_flow DESC");
                        while($row = $getdata->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['fl_unit_name'] ?></td>
                                <td class="mobilehide"><?php echo $row['unit_type'] ?></td>
                                <td><?php echo $row['area'] ?></td>
                                <td><?php echo $row['fl_info'] ?></td>
                                <td><?php echo $row['fl_updated_at'] ?></td>
                            </tr> 
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </details>
    <details id="flow2" class="tablecontent" style="display : <?php echo ($_SESSION['username'] == 'Admin OB') ? 'none' : 'block' ?>">
        <summary>
            <h2><i class="fa fa-cubes" style="margin-inline-end: 10px;"></i>Flow Hauler (Coal) </h2>
        </summary>
        <div class="maincontentsection">
            <button onclick="showinputflowcoal()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Flow Hauler</button>
        </div>
        <div class="tablebox">
        <table>
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Loader</th>
                        <th class="mobilehide">Tipe Loader</th>
                        <th>Area</th>
                        <th>Flow</th>
                        <th>Update Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../codes/connection.php"; 
                        $no = 1;
                        $getdata = $connection->query("SELECT TOP(50) * FROM t_flow INNER JOIN t_unit ON fl_unit_name = t_unit.unit_name WHERE t_unit.unit_type IN ('Excavator','Excavator Tanah','Excavator Coal') ORDER BY id_flow DESC");
                        while($row = $getdata->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['fl_unit_name'] ?></td>
                                <td class="mobilehide"><?php echo $row['unit_type'] ?></td>
                                <td><?php echo $row['area'] ?></td>
                                <td><?php echo $row['fl_info'] ?></td>
                                <td><?php echo $row['fl_updated_at'] ?></td>
                            </tr> 
                            <?php
                        }
                    ?>
                </tbody>
            </table>  
        </div>
    </details>
</div>
<script>
    document.getElementById('flow1').open = true;
    document.getElementById('flow2').open = true;
</script>