
<article class="boxlocation" style="margin-block-start: 100px">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Coal Getting | Primary Mining Equipment - PIT 2</h3>
    <div class="boxeqtype" style="margin: 30px 0; margin-bottom: 60px;">
        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cube" style="margin-inline-end: 12px"></i>Loading Material Tanah</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p>Excavator : <span><?php echo $readyexpit21->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Excavator : <span><?php echo $breakdownexpit21->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                
            </div>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Standby</h3>
                    <p>Excavator : <span><?php echo $standbyexpit21->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>General</h3>
                    <p>Excavator : <span><?php echo $generalexpit21->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="datainfo">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Loader Info</th>
                            <th>Status</th>
                            <th>Setting Fleet</th>
                            <th>Flow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type = 'Excavator Tanah' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                            while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr >
                                        <td><?php echo $no ++."."?></td>
                                        <td>
                                            <h4 id="shovelName" style="padding: 5px 10px; margin-bottom: 5px; display: inline-block; border-bottom: 1px solid var(--line)" ><?php echo $rowshovel['unit_name'] ?></h4>
                                            <p><?php echo getUnitType($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?></p>
                                        </td>
                                        <td>
                                            <span class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?></span>
                                        </td>
                                        <td>
                                            <div class="setUnit">
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2)." Kamaz"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2)." Power Plus"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2)." Hino"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2)." SKT"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2)." Sany"; ?></p>
                                            </div>
                                        </td>
                                        <td><p style="text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p></td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cubes" style="margin-inline-end: 12px"></i>Loading Batubara (Coal)</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p>Excavator : <span><?php echo $readyexpit2->fetchColumn()?> Unit</span></p>
                    <p>Kamaz : <span><?php echo $readykmzpit2->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Excavator : <span><?php echo $breakdownexpit2->fetchColumn()?> Unit</span></p>
                    <p>Kamaz : <span><?php echo $breakdownkmzpit2->fetchColumn() ?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Standby</h3>
                    <p>Excavator : <span><?php echo $standbyexpit2->fetchColumn()?> Unit</span></p>
                    <p>Kamaz : <span><?php echo $standbykmzpit2->fetchColumn() ?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>General</h3>
                    <p>Excavator : <span><?php echo $generalexpit2->fetchColumn()?> Unit</span></p>
                    <p>Kamaz : <span><?php echo $generalkmzpit2->fetchColumn() ?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="datainfo">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Loader Info</th>
                            <th>Status</th>
                            <th>Setting Fleet</th>
                            <th>Flow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                            while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr >
                                        <td><?php echo $no ++."."?></td>
                                        <td>
                                            <h4 id="shovelName" style="padding: 5px 10px; margin-bottom: 5px; display: inline-block; border-bottom: 1px solid var(--line)" ><?php echo $rowshovel['unit_name'] ?></h4>
                                            <p><?php echo getUnitType($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?></p>
                                        </td>
                                        <td>
                                            <span class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?></span>
                                        </td>
                                        <td>
                                            <div class="setUnit">
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2)." Kamaz"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2)." Power Plus"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2)." Hino"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2)." SKT"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2)." Sany"; ?></p>
                                            </div>
                                        </td>
                                        <td><p style="text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p></td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Coal Getting | Primary Mining Equipment - PIT 3</h3>
    <div class="boxeqtype" style="margin-block-start: 30px">
        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cube" style="margin-inline-end: 12px"></i>Loading Material Tanah</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p>Excavator : <span><?php echo $readyextanahpit3->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Excavator : <span><?php echo $breakdownextanahpit3->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Standby</h3>
                    <p>Excavator : <span><?php echo $standbyextanahpit3->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>General</h3>
                    <p>Excavator : <span><?php echo $generalextanahpit3->fetchColumn()?> Unit</span></p>
                    <p>Pow. Plus : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="datainfo">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Loader Info</th>
                            <th>Status</th>
                            <th>Setting Fleet</th>
                            <th>Flow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Tanah' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                            while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr >
                                        <td><?php echo $no ++."."?></td>
                                        <td>
                                            <h4 id="shovelName" style="padding: 5px 10px; margin-bottom: 5px; display: inline-block; border-bottom: 1px solid var(--line)" ><?php echo $rowshovel['unit_name'] ?></h4>
                                            <p><?php echo getUnitType($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?></p>
                                        </td>
                                        <td>
                                            <span class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?></span>
                                        </td>
                                        <td>
                                            <div class="setUnit">
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2)." Kamaz"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2)." Power Plus"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2)." Hino"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2)." SKT"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2)." Sany"; ?></p>
                                            </div>
                                        </td>
                                        <td><p style="text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p></td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cubes" style="margin-inline-end: 12px"></i>Loading Batubara (Coal)</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p>Excavator : <span><?php echo $readyexpit3->fetchColumn()?> Unit</span></p>
                    <p>Sany : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Excavator : <span><?php echo $breakdownexpit3->fetchColumn()?> Unit</span></p>
                    <p>Sany : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Standby</h3>
                    <p>Excavator : <span><?php echo $standbyexpit3->fetchColumn()?> Unit</span></p>
                    <p>Sany : <span><?php ?>0 Unit</span></p>
                </div>
                <div>
                    <h3>General</h3>
                    <p>Excavator : <span><?php echo $generalexpit3->fetchColumn()?> Unit</span></p>
                    <p>Sany : <span><?php ?>0 Unit</span></p>
                </div>
            </div>
            <div class="datainfo">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Loader Info</th>
                            <th>Status</th>
                            <th>Setting Fleet</th>
                            <th>Flow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                            while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr >
                                        <td><?php echo $no ++."."?></td>
                                        <td>
                                            <h4 id="shovelName" style="padding: 5px 10px; margin-bottom: 5px; display: inline-block; border-bottom: 1px solid var(--line)" ><?php echo $rowshovel['unit_name'] ?></h4>
                                            <p><?php echo getUnitType($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?></p>
                                        </td>
                                        <td>
                                            <span class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?></span>
                                        </td>
                                        <td>
                                            <div class="setUnit">
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Kamaz')->fetchColumn(2)." Kamaz"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Power Plus')->fetchColumn(2)." Power Plus"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Hino')->fetchColumn(2)." Hino"; ?> </p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'SKT')->fetchColumn(2)." SKT"; ?></p>
                                                <p style="text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'Sany')->fetchColumn(2)." Sany"; ?></p>
                                            </div>
                                        </td>
                                        <td><p style="text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p></td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</article>