
<article class="boxlocation" style="margin-block-start: 100px">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Coal Getting | Primary Mining Equipment - PIT 2</h3>
    <div class="boxeqtype" style="margin: 30px 0; margin-bottom: 60px;">
        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cube" style="margin-inline-end: 12px"></i>Loading Material Tanah</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo $readyexpit21->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo $breakdownexpit21->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo $standbyexpit21->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo $generalexpit21->fetchColumn()?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type = 'Excavator Tanah' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style=" justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo getFleet($rowshovel['unit_name'])->fetchColumn(2) ?> Unit</p>
                            <p style="width: 190px; text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2)?></p>
                        </div>
                    <?php
                }
            ?>
        
        </div>

        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cubes" style="margin-inline-end: 12px"></i>Loading Batubara (Coal)</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo $readyexpit2->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo $breakdownexpit2->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo $standbyexpit2->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo $generalexpit2->fetchColumn()?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style=" justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo getFleet($rowshovel['unit_name'])->fetchColumn(2) ?> Unit</p>
                            <p style="width: 190px; text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2)?></p>
                        </div>
                    <?php
                }
            ?>
        
        </div>
    </div>
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Coal Getting | Primary Mining Equipment - PIT 3</h3>
    <div class="boxeqtype" style="margin-block-start: 30px">
        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cube" style="margin-inline-end: 12px"></i>Loading Material Tanah</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo $readyextanahpit3->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo $breakdownextanahpit3->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo $standbyextanahpit3->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo $generalextanahpit3->fetchColumn()?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Tanah' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style="justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 10px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0);?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0);?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center "><?php echo getFleet($rowshovel['unit_name'])->fetchColumn(2);?> Unit</p>
                            <p style="width: 170px; text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div class="boxShovel coaltitle" style="font-size: 0.9rem">
            <h1><i class="fa fa-cubes" style="margin-inline-end: 12px"></i>Loading Batubara (Coal)</h1>
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo $readyexpit3->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo $breakdownexpit3->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo $standbyexpit3->fetchColumn()?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo $generalexpit3->fetchColumn()?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style="justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 10px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0);?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch (PDO::FETCH_COLUMN, 0);?> | <?php echo getDetail($rowshovel['unit_name'])->fetch (PDO::FETCH_COLUMN, 0)?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo getFleet($rowshovel['unit_name'])->fetchColumn(2);?> Unit</p>
                            <p style="width: 170px; text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</article>