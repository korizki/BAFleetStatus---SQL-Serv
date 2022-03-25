<?php 
    include "../codes/queryLocation.php";
    include "../codes/queryFleet.php";
?>
<article class="boxlocation">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Overbudden | Primary Mining Equipment</h3>
    <div class="boxeqtype">
        <div class="boxShovel">
            <h1>PIT 2 Banko Barat</h1>
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p>Shovel : <span> <?php echo $readypit2->fetchColumn()?> Unit<span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 2', 'PC 1250', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p>Belaz : <span><?php echo countUnit('PIT 2', 'Belaz', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo countUnit('PIT 2', 'HD PPA', 'Ready')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Shovel : <span><?php echo $breakdownpit2->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 2', 'PC 1250', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p>Belaz : <span><?php echo countUnit('PIT 2', 'Belaz', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo countUnit('PIT 2', 'HD PPA', 'Breakdown')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p>Shovel : <span><?php echo $standbypit2->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 2', 'PC 1250', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p>Belaz : <span><?php echo countUnit('PIT 2', 'Belaz', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo countUnit('PIT 2', 'HD PPA', 'Standby')->fetchColumn()?> Unit</span></p>
                </div>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type IN ('Shovel PC-3000', 'PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name ASC");
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo $rowshovel['unit_name'] ?></h4>
                            <div class="setUnit">
                                <p style="width: 100px; text-align:center"><?php echo getFleet($rowshovel['unit_name'])->fetchColumn(2)?> Belaz</p>
                                <p style="width: 100px">- HD PPA</p>
                            </div>
                            <p style="width: 240px; text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <!-- <div class="boxeqtype"> -->
        <div class="boxShovel">
            <h1>PIT 3 Banko Barat</h1>
            <div class="shovelsummary" style="justify-content: space-around">
                <div>
                    <h3>Ready</h3>
                    <p>Shovel : <span><?php echo $readypit3->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 3', 'PC 1250', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p>Belaz : <span><?php echo countUnit('PIT 3', 'Belaz', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo countUnit('PIT 3', 'HD PPA', 'Ready')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Shovel : <span><?php echo $breakdownpit3->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 3', 'PC 1250', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p>Belaz : <span><?php echo countUnit('PIT 3', 'Belaz', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo countUnit('PIT 3', 'HD PPA', 'Breakdown')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p>Shovel : <span><?php echo $standbypit3->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 3', 'PC 1250', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p>Belaz : <span><?php echo countUnit('PIT 3', 'Belaz', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo countUnit('PIT 3', 'HD PPA', 'Standby')->fetchColumn()?> Unit</span></p>
                </div>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type IN ('Shovel PC-3000','PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name DESC" );
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel pit3" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0);?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <div class="setUnit">
                                <p style="width: 100px;"><?php echo getFleet($rowshovel['unit_name'])->fetchColumn(2);?> Belaz</p>
                                <p style="width: 100px;"> - HD PPA</p>
                            </div>
                            <p><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
        
    </div>
    <h3 style="margin-top: 80px;" class="judulapt"><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;" ></i>Overbudden | Mining Support Equipment</h3>
    <div class="boxeqtype">
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-truck-loading " style="margin-inline-end: 10px;"></i>Area Front | PIT 2 (<?php echo $queryaptfrontpit2->fetchColumn()?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = $queryaptfrontpit2det->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" ><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-dumpster" style="margin-inline-end: 10px;"></i>Area Disposal | PIT 2 (<?php echo $queryaptdisposalpit2->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = $queryaptdisposalpit2det->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Area Jalan | PIT 2 (<?php echo $queryaptjalanpit2->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $queryaptjalanpit2det->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-truck-loading " style="margin-inline-end: 10px;"></i>Area Front | PIT 3 (<?php echo $queryaptfrontpit3->fetchColumn()?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = $queryaptfrontpit3det->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-dumpster" style="margin-inline-end: 10px;"></i>Area Disposal | PIT 3 (<?php echo $queryaptdisposalpit3->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = $queryaptdisposalpit3det->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Area Jalan | PIT 3 (<?php echo $queryaptjalanpit3->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $queryaptjalanpit3det->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>